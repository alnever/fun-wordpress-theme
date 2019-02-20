<!-- footer sidebar -->
<div class="swtk-horizontal-sidebar swtk-footer-sidebar">
  <?php dynamic_sidebar('footer-sidebar'); ?>
</div>

<!-- footer -->
<footer class="fswtk-ooter">
  <div class="swtk-footer-content">
      <div class="swtk-footer_text">
        <?php echo (get_theme_mod('footer_text')); ?>
      </div>
      <div class="swtk-footer_links">
          <a href="<?php echo (get_theme_mod('social_link_1')) ?>">
              <img src="<?php echo (get_theme_mod('social_icon_1')) ?>" />
          </a>
          <a href="<?php echo (get_theme_mod('social_link_2')) ?>">
              <img src="<?php echo (get_theme_mod('social_icon_2')) ?>" />
          </a>
          <a href="<?php echo (get_theme_mod('social_link_3')) ?>">
              <img src="<?php echo (get_theme_mod('social_icon_3')) ?>" />
          </a>
      </div>
  </div>
  <div class="swtk-footer-creditial">
      SASS Wordpress Theming Kit, &copy; Alex Neverov, 2019. All rights reserved
  </div>
</footer>

</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
