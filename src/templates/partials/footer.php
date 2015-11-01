
  <footer class="Footer">
    <div class="Site-container">

      <?php if ( get_field( 'show_contact' ) ): ?>
        <div class="Footer-content">
          <h2 class="Footer-heading"><?php the_field( 'contact_heading' ); ?></h2>
          <div class="Footer-body">
            <?php the_field( 'contact_body' ); ?>
          </div>
        </div>
      <?php endif; ?>

      <p class="Footer-column"><?php bloginfo( 'name' ); echo ' &#8211; '; bloginfo( 'description' ); ?></p>
      <p class="Footer-column"><a class="u-link" href="mailto:info@settings.se">info@settings.se</a></p>
    </div>
  </footer>

  <script src="<?php asset_url( 'src/scripts/settings.js' ); ?>"></script>

  <?php partial( 'svg-sprite' ); ?>

  <?php wp_footer(); ?>
</body>
