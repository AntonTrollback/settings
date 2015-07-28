<?php
$link_url = get_field( 'link_url' );
$highlight = get_field( 'highlight' );
$highlight_text = get_field( 'highlight_title' );

$has_aside = $link_url || $highlight;
$is_collapsed = ( is_page() || isset($is_home) ) && $has_aside;
?>

<div class="Section u-cf <?php echo $has_aside ? '' : 'Section--full '; ?>">
  <div class="Section-main">
    <?php if ( $is_collapsed ): ?>
    <div class="Expander">
    <?php endif; ?>

      <div class="Type u-colorPurple">
        <h1 class="u-colorTeal"><?php the_title(); ?></h1>
        <?php the_content(); ?>

        <?php if ( $link_url ): ?>
        <?php partial( 'article-button-inline' ); ?>
        <?php endif; ?>
      </div>

    <?php if ( $is_collapsed ): ?>
      <div class="Expander-action u-colorPurple">
        <button type="button" class="Expander-actionText u-link">Läs mer</button>
      </div>
    </div>
    <?php endif; ?>
  </div>


  <?php
  if ( $link_url ) {
    partial( 'article-button' );
  }

  if ( $highlight ) {
  	$post = $highlight;
  	setup_postdata( $post );
    set_query_var( 'aside_title', $highlight_text );
    partial( 'article-aside' );
    wp_reset_postdata();
  }
  ?>
</div>
