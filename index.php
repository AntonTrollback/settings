<?php get_header(); ?>

  <?php get_template_part( 'partials/banner-intro' ); ?>

  <main class="Site-container" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
      <article>
        <?php the_title( '<h1>', '</h1>' ); ?>
      </article>
    <?php endwhile; ?>
  </main>

<?php get_footer(); ?>
