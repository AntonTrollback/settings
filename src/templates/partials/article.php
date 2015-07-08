<?php
$page_link = get_field( 'page_link' );
$highlight = get_field( 'highlight' );
$highlight_text = get_field( 'highlight_title' );

$has_aside = $page_link || $highlight;
$is_collapsed = is_page() || isset($home);

$class_list = $has_aside ? '' : 'Article--full ';
$class_list = $is_collapsed ? $class_list . 'is-collapsed' : $class_list;
?>

<div class="Article u-cf <?php echo $class_list; ?>">

  <div class="Article-main">
    <div class="Type u-colorPurple">
      <h1 class="u-colorTeal"><?php the_title(); ?></h1>
      <?php the_content(); ?>

      <?php if ( $page_link ) { ?>
        <?php partial( 'article-button-inline' ); ?>
      <?php } ?>
    </div>

    <?php if ( $is_collapsed ): ?>
      <div class="Article-ending">
        <button type="button" class="u-link Article-showMore">Läs mer</button>
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
