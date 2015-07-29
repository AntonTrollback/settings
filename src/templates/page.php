<?php partial( 'header' ); $is_home = handle_start_page_content(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <main role="main">

    <?php // Page intro ----------------------------------------------------- ?>

    <?php if ( has_post_thumbnail() ): ?>
      <?php partial( 'banner' ); ?>
    <?php endif; ?>

    <?php if ( get_field( 'intro_text' ) ): ?>
      <?php partial( 'intro-text' ); ?>
    <?php endif; ?>

    <?php if ( get_field( 'show_intro_icons' ) && $is_home ): ?>
      <?php partial( 'intro-icons' ); ?>
    <?php endif; ?>

    <?php // Primary page content ------------------------------------------- ?>

    <article class="Site-container <?php echo has_post_thumbnail() ? '' : 'Site-container--withRoomForNav' ?>">
      <?php partial( 'article' ); ?>
    </article>

          <?php /* Swoosh */ if ( $is_home ) { partial( 'swoosh-1' ); } ?>

    <?php // Page specific components --------------------------------------- ?>

    <?php if ( get_field( 'show_intro_icons' ) && !$is_home ): ?>
      <?php partial( 'intro-icons' ); ?>
    <?php endif; ?>

    <?php if ( get_field( 'show_calendar' ) || get_field( 'show_newsletter_form' ) ): ?>

            <?php /* Swoosh */ if ( get_field( 'show_calendar' ) ) { partial( 'swoosh-4' ); } ?>

      <div class="Site-container">
        <div class="Section Section--altLayout u-cf">
          <?php if ( get_field( 'show_calendar' ) ): ?>
            <div class="Section-main">
              <?php calendar(); ?>
            </div>
          <?php endif; ?>

          <?php if ( get_field( 'show_newsletter_form' ) ): ?>
            <div class="<?php echo get_field( 'show_calendar' ) ? 'Section-aside' : 'Section-footer'; ?>">
              <?php partial( 'newsletter-form' ); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>

          <?php /* Swoosh */ if ( ( get_field( 'show_post_list' ) || get_field( 'show_large_post_list' ) ) && !get_field( 'show_intro_icons' ) ) { echo partial( 'swoosh-2' ); } ?>

    <?php if ( get_field( 'show_post_list' ) ): ?>
      <?php post_list(); ?>
    <?php endif; ?>

    <?php if ( get_field( 'show_large_post_list' ) ): ?>
      <?php large_post_list(); ?>
    <?php endif; ?>

    <?php /* Swoosh */ if ( !get_field( 'show_post_list' ) && !get_field( 'show_large_post_list' ) && !get_field( 'show_calendar' ) && !get_field( 'show_newsletter_form' ) && !get_field( 'highlight' ) && !get_field( 'link_url' ) ) { partial( 'swoosh-3' ); } ?>

  </main>
<?php endwhile; ?>

<?php partial( 'footer' ); ?>
