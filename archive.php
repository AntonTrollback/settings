<?php get_header(); ?>

<main role="main">
  <header class="page-header">
    <?php the_archive_title( '<h1>', '</h1>' ); ?>
    <?php the_archive_description( '<h2>', '</h2>' ); ?>
  </header>

  <?php while ( have_posts() ) : the_post(); ?>
    <article>
      <?php the_title( '<h1>', '</h1>' ); ?>
    </article>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
