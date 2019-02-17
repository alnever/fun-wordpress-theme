<header class="header" style="background-image:url( <?php header_image(); ?> )">
  <h1 class="header-title">
    <?php bloginfo('name'); ?>
  </h1>
  <h2 class="header-text">
    <?php bloginfo('description'); ?>
  </h2>
</header>
<!-- header sidebar -->
<div class="horizontal-sidebar header-sidebar">
  <?php dynamic_sidebar('header-sidebar'); ?>
</div>
