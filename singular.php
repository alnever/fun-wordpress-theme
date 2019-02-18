<?php get_header(); ?>


  <div class="container">
    <?php get_template_part('nav'); ?>
    <div class="main">
        <!-- header -->
        <header class="header" style="background-image:url( <?php header_image(); ?> )">
            <div class="header-title">
                <?php bloginfo('name'); ?>
            </div>
            <div class="header-text">
                <?php bloginfo('description'); ?>
            </div>
        </header>

        <!-- header sidebar -->
        <div class="horizontal-sidebar header-sidebar">
          <?php dynamic_sidebar('header-sidebar'); ?>
        </div>

        <!-- content -->
        <div class="content">
            <!-- left sidebar -->
            <div class="vertical-sidebar left-sidebar">
                <?php wp_nav_menu([
                        'theme_location' => 'secondary',
                        'depth' => 3,
                        'container_class' => 'vertical-menu',
                    ]);
                ?>
                <?php dynamic_sidebar('left-sidebar'); ?>
            </div>
            <!-- sticky post -->

            <!-- posts -->
            <div class="posts">
                <?php if (have_posts()): ?>
                    <div class="row">

                          <?php while(have_posts()): the_post(); ?>
                            <article class="post-single">
                                <div class="post-image">
                                    <?php if (has_post_thumbnail()):  ?>
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="post-text">
                                    <!-- post header -->
                                    <div class="post-title">
                                        <?php the_title(); ?>
                                    </div>
                                    <!-- post before main text -->
                                    <div class="post-before">
                                        <div class="post-author">
                                            <?php the_author(); ?>
                                        </div>
                                        <div class="post-date">
                                            <?php the_date(); ?>
                                        </div>
                                    </div>
                                    <div class="post-content">
                                        <?php the_content(); ?>
                                    </div>
                                    <div class="post-categories">
                                        <?php the_category(); ?>
                                    </div>
                                    <div class="post-tags">
                                        <?php the_tags(); ?>
                                    </div>
                                    <div class="post-link">

                                    </div>
                                </div>
                            </article>
                          <?php endwhile; ?>
                    </div>
                    <div class="pagination">
                        <?php the_posts_pagination([
                                'screen_reader_text' => ''
                            ]);
                        ?>
                    </div>
                <?php endif; ?>
            </div>
            <!-- posts -->

            <!-- right sidebar -->
            <div class="vertical-sidebar right-sidebar">
                <?php dynamic_sidebar('right-sidebar'); ?>
            </div>
        </div>

        <!-- footer sidebar -->
        <div class="horizontal-sidebar footer-sidebar">
          <?php dynamic_sidebar('footer-sidebar'); ?>
        </div>

        <!-- footer -->
        <footer class="footer">
          <div class="footer-content">
              <div class="footer_text">
                <?php _e(get_theme_mod('footer_text')); ?>
              </div>
              <div class="footer_links">

              </div>
          </div>
          <div class="footer-creditial">
              SASS Wordpress Theming Kit, &copy; Alex Neverov, 2019. All rights reserved
          </div>
        </footer>

    </div>
  </div>

  <?php get_footer(); ?>
