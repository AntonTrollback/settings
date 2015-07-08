<?php partial( 'header' ); ?>

<?php
$home = false;
$has_img = has_post_thumbnail();

if ( is_home() ) {
  $home = true;
  set_post_by_slug( 'start' );
}
set_query_var( 'home', $home );

?>

<?php while ( have_posts() ) : the_post(); ?>
  <main role="main">

    <?php if ( $has_img ): ?>
      <?php partial( 'banner' ); ?>
    <?php endif; ?>

    <?php if ( $home ): ?>
      <?php partial( 'intro' ); ?>
    <?php endif; ?>

    <article class="Site-container <?php echo $has_img ? '' : 'Site-container--withRoomForNav' ?>">
      <?php partial( 'article' ); ?>

      <?php if ( get_field( 'show_calendar' ) ): ?>
        <?php show_calendar(); ?>
      <?php endif; ?>
    </article>
  </main>
<?php endwhile; ?>

<?php partial( 'footer' ); ?>
