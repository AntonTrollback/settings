<?php
$page_link = get_field( 'page_link' );
$highlight = get_field( 'highlight' );
$highlight_text = get_field( 'highlight_title' );
$has_aside = $page_link || $highlight;
?>

<div class="Site-container">
  <article class="Article u-cf <?php $has_aside ? '' : 'Article--full' ?>">

    <div class="Article-main">
      <div class="Type u-colorPurple">
        <h1 class="u-colorTeal"><?php the_title(); ?></h1>
        <?php the_content(); ?>

        <?php if ( $page_link ) { ?>
          <?php partial( 'article-button-inline' ); ?>
        <?php } ?>
      </div>

      <div class="Article-ending">
        <button type="button" class="u-link Article-showMore">Läs mer</button>
      </div>
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
  </article>
</div>
