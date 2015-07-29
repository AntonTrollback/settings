<div class="PostList">
  <div class="Site-container">
    <?php foreach ( $post_data as $key=>$post ): setup_postdata( $post ); ?>
      <article class="PostList-item <?php echo $key > 1 ? 'is-hidden' : '' ; ?>">
        <a class="u-blockLink" href="<?php the_permalink(); ?>">
          <figure class="PostList-figure">
            <?php image(); ?>
          </figure>
          <div class="Type Type--plain">
            <p>
              <strong class="u-block"><span class="u-hiddenVisually">Läs om: </span> <?php the_title(); ?></strong>
              <?php the_field( 'excerpt' ); ?>
            </p>
            <p><span class="u-link">Läs mer</span></p>
          </div>
        </a>
      </article>
    <?php wp_reset_postdata(); endforeach; ?>

    <button class="PostList-showMore">Se fler</button>
  </div>
</div>
