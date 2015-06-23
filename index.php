<?php get_header(); ?>

  <main role="main">
    <?php while ( have_posts() ) : the_post(); ?>
      <article>
        <?php the_title( '<h1>', '</h1>' ); ?>
      </article>
    <?php endwhile; ?>
  </main>

<?php get_footer(); ?>
