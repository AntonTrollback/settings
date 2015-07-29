<?php partial( 'header' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <main role="main">
    <article class="Site-container Site-container--withRoomForNav">
      <figure class="Section Section--full">
        <a class="u-inlineBlock" href="<?php raw_image_url(); ?>">
          <?php image( 'large', 'Section-photo', true); ?>
        </a>
      </figure>

      <?php partial( 'article' ); ?>

    </article>
  </main>
<?php endwhile; ?>

<?php partial( 'footer' ); ?>
