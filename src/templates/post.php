<?php partial( 'header' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <main role="main">
    <article class="Site-container Site-container--withRoomForNav">
      <figure class="Article Article--full">
        <a href="<?php raw_image_url(); ?>">
          <?php image( 'large', 'Article-photo', true); ?>
        </a>
      </figure>

      <?php partial( 'article' ); ?>

    </article>
  </main>
<?php endwhile; ?>

<?php partial( 'footer' ); ?>
