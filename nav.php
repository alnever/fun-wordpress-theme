<nav class="navbar">
  <div class="brand">
    <a href="<?php bloginfo('url'); ?>"> <?php bloginfo('name'); ?> </a>
  </div>
  <div class="toggle">&#8801;</div>
  <div class="collapsed">
    <div class="nav">
      <?php wp_nav_menu(['theme_location' => 'primary', 'depth' => 2]); ?>
    </div>
    <div class="menu-sidebar">
      <?php dynamic_sidebar('menu-sidebar'); ?>
    </div>
  </div>
</nav>
