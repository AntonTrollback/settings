<?php
$aside = get_field( 'highlight' );
$aside_title =  get_field( 'highlight_title' )
?>

<article class="Site-container">
  <div class="Type u-colorPurple <?php echo $aside ? 'Site-primary' : ''; ?>">
    <h1 class="u-colorTeal"><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </div>

  <?php
  if ( $aside ) {
  	$post = $aside;
  	setup_postdata( $post );
    set_query_var( 'aside_title', $aside_title );
    partial( 'article-aside' );
    wp_reset_postdata();
  }
  ?>
</article>
