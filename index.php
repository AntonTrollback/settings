<?php get_header(); ?>

  <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

  <main role="main" data-0="background-color:rgb(0,0,255); transform: rotate(0deg)" data-200="background-color:rgb(255,0,0); transform: rotate(360deg)">
    <?php while ( have_posts() ) : the_post(); ?>
      <article>
        <?php the_title( '<h1>', '</h1>' ); ?>
      </article>
    <?php endwhile; ?>
  </main>

<?php get_footer(); ?>
