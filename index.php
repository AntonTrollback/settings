<?php set_post_by_slug( 'start' ); ?>

<?php get_header(); ?>

  <?php get_template_part( 'partials/banner-intro' ); ?>

  <?php while ( have_posts() ) : the_post(); ?>
    <main role="main">
      <div class="Site-container">
        <div class="Site-content Site-content--center">
          <?php get_template_part( 'partials/intro-text' ); ?>
        </div>
      </div>

      <?php get_template_part( 'partials/intro-icons' ); ?>

      <article class="Site-container">
        <div class="Site-content">
          <div class="Type u-colorPurple">
            <h1 class="u-colorTeal"><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </div>
        </div>
      </article>
    </main>
  <?php endwhile; ?>

<?php get_footer(); ?>
