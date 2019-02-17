<div class="content">
    <!-- left sidebar -->
    <div class="sidebar left-sidebar">
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
    <div class="row">
      <?php if (have_posts()): ?>
          <?php while(have_posts()): the_post(); ?>
            <article class="post-index">
              <?php if (has_post_thumbnail()):  ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
              <?php endif; ?>
              <h3 class="post-header">
                <?php the_title(); ?>
              </h3>
              <p class="post-excerpt">
                <?php the_excerpt(); ?>
              </p>
            </article>
          <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <!-- posts -->

    <!-- right sidebar -->
    <div class="sidebar right-sidebar">
        <?php dynamic_sidebar('right-sidebar'); ?>
    </div>
</div>
