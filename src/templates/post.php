<?php partial('header'); $is_home = false; ?>

<?php while (have_posts()): the_post(); ?>
  <main role="main">
    <article class="Site-container Site-container--withRoomForNav">
      <?php if (has_post_thumbnail()): ?>
        <figure class="Section Section--full">
          <a class="u-inlineBlock" href="<?php raw_image_url(); ?>">
            <?php image('large', 'Section-photo', true); ?>
          </a>
        </figure>
      <?php endif; ?>

      <?php partial('article'); ?>

    </article>
  </main>
<?php endwhile; ?>

<?php partial('footer'); ?>
