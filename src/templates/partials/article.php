<?php
$link_url = get_field( 'link_url' );
$highlight = get_field( 'highlight' );
$highlight_text = get_field( 'highlight_title' );

$has_aside = $link_url || $highlight;
$is_collapsed = ( is_page() || isset($is_home) ) && $has_aside;

// Define text color theme
global $theme_key;
if ( is_page() ) { $theme_key = 0; }
$title_theme = array( 'u-colorTeal', 'u-colorPinkDark', 'u-colorGreen', 'u-colorOrange' );
$body_theme = array( 'u-colorPurple', '', 'u-colorPurpleAlt', 'u-colorBlue' );
?>

<div class="Section u-cf <?php echo $has_aside ? '' : 'Section--full '; ?>">
  <div class="Section-main">
    <?php if ( $is_collapsed ): ?>
    <div class="Expander">
    <?php endif; ?>

      <div class="Type <?php echo $body_theme[$theme_key]; ?>">
        <h1 class="<?php echo $title_theme[$theme_key]; ?>"><?php the_title(); ?></h1>
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
