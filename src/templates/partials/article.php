<?php
$page_link = get_field( 'page_link' );
$highlight = get_field( 'highlight' );
$highlight_text = get_field( 'highlight_title' );

$has_aside = $page_link || $highlight;
$is_collapsed = is_page() || isset($home);
?>

<div class="Section u-cf <?php echo $has_aside ? '' : 'Section--full '; ?>">


    <div class="Section-main">
      <?php if ( $is_collapsed ): ?>
      <div class="Expander">
      <?php endif; ?>

        <div class="Type u-colorPurple">
          <h1 class="u-colorTeal"><?php the_title(); ?></h1>
          <?php the_content(); ?>

          <?php if ( $page_link ): ?>
          <?php partial( 'article-button-inline' ); ?>
          <?php endif; ?>
        </div>
        
      <?php if ( $is_collapsed ): ?>
        <div class="Expander-action">
          <button type="button" class="Expander-actionText u-link">Läs mer</button>
        </div>
      </div>
      <?php endif; ?>
    </div>


  <?php
  if ( $page_link ) {
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
