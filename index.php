<?php get_header(); ?>

<?php set_post_by_slug( 'start' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <main role="main">
    <?php get_template_part( 'partials/banner-intro' ); ?>
    <?php get_template_part( 'partials/intro-text' ); ?>
    <?php get_template_part( 'partials/intro-icons' ); ?>
    <?php get_template_part( 'partials/article' ); ?>
  </main>
<?php endwhile; ?>

<?php get_footer(); ?>
