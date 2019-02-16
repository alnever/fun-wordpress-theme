<?php

// textdomain

function register_textdomain() {
  load_theme_textdomain('theme_textdomain', get_template_directory()."/languages");
}

add_action('after_setup_theme','register_textdomain');

// add theme support

add_theme_support('featured-image');
add_theme_support('custom-header');

// menus

function register_menus() {
  register_nav_menus(
    ['primary' => __('Primary Menu', 'theme_textdomain')]
  );
}

add_action('init','register_menus');

function register_widget_areas() {
  register_sidebar([
    'name' => __('Menu widgets','theme_textdomain'),
    'id' => 'menu-sidebar',
  ]);
  register_sidebar([
    'name' => __('Header sidebar','theme_textdomain'),
    'id' => 'header-sidebar',
  ]);
  register_sidebar([
    'name' => __('Left sidebar','theme_textdomain'),
    'id' => 'left-sidebar',
  ]);
  register_sidebar([
    'name' => __('Right sidebar','theme_textdomain'),
    'id' => 'right-sidebar',
  ]);
  register_sidebar([
    'name' => __('Footer sidebar','theme_textdomain'),
    'id' => 'footer-sidebar',
  ]);
}

add_action('widgets_init', 'register_widget_areas');

 ?>
