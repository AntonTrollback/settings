
  <footer class="Footer">
    <div class="Site-container">
      <p class="Footer-column"><?php bloginfo( 'name' ); echo ' &#8211; '; bloginfo( 'description' ); ?></p>
      <p class="Footer-column"><a class="u-link" href="mailto:info@settings.se">info@settings.se</a></p>
    </div>
  </footer>

  <script src="<?php asset_url( 'scripts/settings.js' ); ?>"></script>

  <?php partial( 'svg-sprite' ); ?>

  <?php wp_footer(); ?>
</body>
