<div class="Site-container Site-container--narrow">
  <div class="Blog">
    <div class="Blog-heading">
      <div class="Type Type--plain u-colorPinkDark">
        <h2>Nyheter</h2>
      </div>
    </div>

    <?php foreach ( $blog_posts as $key=>$post ): setup_postdata( $post ); ?>
      <article class="Blog-item">
        <?php if (get_the_content() !== ''): ?>
        <a class="u-blockLink" href="<?php the_permalink(); ?>">
        <?php endif; ?>
          <div class="Type Type--plain Blog-itemTitle">
            <h3 class="Type-h3 u-colorBlue"><span class="u-hiddenVisually">Läs om: </span> <?php the_title(); ?></h3>
          </div>
          <div class="Type Type--plain u-colorGreen">
            <p>
              <strong><?php echo get_the_date(); ?> &middot; </strong>
              <?php the_field( 'excerpt' ); ?>
              <?php if (get_the_content() !== ''): ?>
                <span class="u-link u-textNoWrap">Läs mer</span>
              <?php endif; ?>
            </p>
          </div>
        <?php echo get_the_content() !== '' ? '</a>' : ''; ?>
      </article>
    <?php wp_reset_postdata(); endforeach; ?>
  </div>
</div>
