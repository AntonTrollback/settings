<?php partial( 'header' ); ?>

<main role="main">
  <?php while ( have_posts() ) : the_post(); ?>
    <article>
      <header>
        <?php the_title( '<h1>', '</h1>' ); ?>
      </header>

      <div>
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; ?>
</main>

<?php partial( 'footer' ); ?>
