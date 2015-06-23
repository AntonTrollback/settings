<?php get_header(); ?>

<main role="main">
  <?php while ( have_posts() ) : the_post(); ?>
    <article>
      <header>
        <?php the_title( '<h1>', '</h1>' ); ?>
        <?php settings_posted_on(); ?>
      </header>

      <div>
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
