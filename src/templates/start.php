<?php partial( 'header' ); ?>

<?php set_post_by_slug( 'start' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <main role="main">
    <?php partial( 'banner-intro' ); ?>
    <?php partial( 'intro-text' ); ?>
    <?php partial( 'intro-icons' ); ?>
    <?php partial( 'article' ); ?>
  </main>
<?php endwhile; ?>

<?php partial( 'footer' ); ?>
