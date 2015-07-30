<?php foreach ( $post_data as $key=>$data ): foreach ( $data as $key=>$cat ): ?>
  <?php $odd = $key % 2 != 0; ?>

  <div class="PostList PostList--small <?php echo $odd ? 'PostList--dark' : ''; ?>">
    <div class="Site-container">

      <div class="PostList-title">
        <div class="Type Type--plain">
          <h2><?php echo get_cat_name( $cat['id'] ); ?></h2>
        </div>
      </div>

      <?php foreach ( $cat['items'] as $key=>$post ): setup_postdata( $post ); ?>
        <article class="PostList-item">
          <?php if (get_the_content() !== ''): ?>
          <a class="u-blockLink" href="<?php the_permalink(); ?>">
          <?php endif; ?>
            <div class="Type Type--plain">
              <p>
                <strong class="u-block"><span class="u-hiddenVisually">Läs om: </span> <?php the_title(); ?></strong>
                <?php the_field( 'excerpt' ); ?>
                <?php if (get_the_content() !== ''): ?>
                  <span class="u-link u-textNoWrap <?php echo $odd ? 'u-linkOnDark' : ''; ?>">Läs mer</span>
                <?php endif; ?>
              </p>
            </div>
          <?php echo get_the_content() !== '' ? '</a>' : ''; ?>
        </article>
      <?php wp_reset_postdata(); endforeach; ?>
    </div>
  </div>
<?php endforeach; endforeach; ?>
