<?php

// define content width

if ( ! isset( $content_width ) ) {
	$content_width = 1024;
}

// textdomain

function register_textdomain() {
  load_theme_textdomain('sass-wordpress-theming-kit', get_template_directory()."/languages");
}



add_action('after_setup_theme','register_textdomain');

// add theme support

add_theme_support('featured-image');
add_theme_support('custom-header');
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );

// menus

function register_menus() {
  register_nav_menus(
    [
        'primary' => __('Primary Menu', 'sass-wordpress-theming-kit'),
        'secondary' => __('Secondary Menu', 'sass-wordpress-theming-kit'),
    ]
  );
}

add_action('init','register_menus');

function register_widget_areas() {
  register_sidebar([
    'name' => __('Menu widgets','sass-wordpress-theming-kit'),
    'id' => 'menu-sidebar',
  ]);
  register_sidebar([
    'name' => __('Header sidebar','sass-wordpress-theming-kit'),
    'id' => 'header-sidebar',
  ]);
  register_sidebar([
    'name' => __('Left sidebar','sass-wordpress-theming-kit'),
    'id' => 'left-sidebar',
  ]);
  register_sidebar([
    'name' => __('Right sidebar','sass-wordpress-theming-kit'),
    'id' => 'right-sidebar',
  ]);
  register_sidebar([
    'name' => __('Footer sidebar','sass-wordpress-theming-kit'),
    'id' => 'footer-sidebar',
  ]);
}

add_action('widgets_init', 'register_widget_areas');


// add footer text option

function register_footer_text_option ($wp_customize) {
    $wp_customize->add_setting('footer_text', [
        'default' => '',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_section('footer_text_section', [
        'title' => __('Footer text','sass-wordpress-theming-kit'),
        'priority' => 100,
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_text',[
        'title' => __('Footer text','sass-wordpress-theming-kit'),
        'type'  => 'textarea',
        'section' => 'footer_text_section',
        'setting' => 'footer_text',
    ]));
}

add_action('customize_register', 'register_footer_text_option');

// add social buttons for footer

function register_footer_socials($wp_customize) {
    $wp_customize->add_setting('social_link_1', [
        'default' => '',
        'transport' => 'refresh',
    ]);
    $wp_customize->add_setting('social_icon_1', [
        'default' => '',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_setting('social_link_2', [
        'default' => '',
        'transport' => 'refresh',
    ]);
    $wp_customize->add_setting('social_icon_2', [
        'default' => '',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_setting('social_link_3', [
        'default' => '',
        'transport' => 'refresh',
    ]);
    $wp_customize->add_setting('social_icon_3', [
        'default' => '',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_section('footer_socials_section', [
        'title' => __('Footer social buttons','sass-wordpress-theming-kit'),
        'priority' => 110,
    ]);

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'social_link_1',[
        'title' => __('Social link 1','sass-wordpress-theming-kit'),
        'type'  => 'url',
        'section' => 'footer_socials_section',
        'setting' => 'social_link_1',
    ]));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'social_icon_1',[
        'title' => __('Social icon 1','sass-wordpress-theming-kit'),
        'section' => 'footer_socials_section',
        'setting' => 'social_icon_1',
    ]));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'social_link_2',[
        'title' => __('Social link 2','sass-wordpress-theming-kit'),
        'type'  => 'url',
        'section' => 'footer_socials_section',
        'setting' => 'social_link_2',
    ]));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'social_icon_2',[
        'title' => __('Social icon 2','sass-wordpress-theming-kit'),
        'section' => 'footer_socials_section',
        'setting' => 'social_icon_2',
    ]));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'social_link_3',[
        'title' => __('Social link 3','sass-wordpress-theming-kit'),
        'type'  => 'url',
        'section' => 'footer_socials_section',
        'setting' => 'social_link_3',
    ]));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'social_icon_3',[
        'title' => __('Social icon 3','sass-wordpress-theming-kit'),
        'section' => 'footer_socials_section',
        'setting' => 'social_icon_3',
    ]));
}

add_action('customize_register', 'register_footer_socials');
?>
