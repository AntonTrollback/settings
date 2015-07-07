<?php partial( 'header' ); ?>

<?php
$home = false;
if ( is_home() ) {
  $home = true;
  set_post_by_slug( 'start' );
}
?>

<?php while ( have_posts() ) : the_post(); ?>
  <main role="main">
    <?php set_query_var( 'home', $home ); partial( 'banner' ); ?>

    <?php if ( $home ): ?>
      <?php partial( 'intro' ); ?>
    <?php endif; ?>

    <?php partial( 'article' ); ?>

    <?php if ( get_field( 'show_events' ) ); ?>
      <?php get_events(); ?>
    <?php endif; ?>
  </main>
<?php endwhile; ?>

<?php partial( 'footer' ); ?>
