<nav class="navbar">
    <div class="brand-toggle">
        <div class="brand">
          <a href="<?php bloginfo('url'); ?>"> <?php bloginfo('name'); ?> </a>
        </div>
        <div class="toggle">&#8801;</div>
    </div>
  <div class="collapsed">
    <div class="nav">
      <?php wp_nav_menu(['theme_location' => 'primary', 'depth' => 3]); ?>
    </div>
    <div class="horizontal-sisebar menu-sidebar">
      <?php dynamic_sidebar('menu-sidebar'); ?>
    </div>
  </div>
</nav>
