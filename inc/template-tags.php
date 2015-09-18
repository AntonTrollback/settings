<?php

// Use a custom page as the home page without wordpress knowing
function handle_start_page_content () {
  $is_home = false;

  if ( is_home() ) {
    $is_home = true;
    set_post_by_slug( 'start' );
  }

  // Make sure the state available in partials
  set_query_var( 'is_home', $is_home );

  return $is_home;
}

function set_post_by_slug ( $slug ) {
  query_posts(array(
    'name' => $slug,
    'post_type' => 'page'
  ));
}

function asset_url ( $asset ) {
  echo get_template_directory_uri() . '/src/' . $asset;
}

function template ( $name ) {
  get_template_part( './src/templates/' . $name );
}

function partial ( $name ) {
  get_template_part( './src/templates/partials/' . $name );
}

function get_image_url ( $size ) {
  $img_id = get_post_thumbnail_id();
  return $img_id ? wp_get_attachment_image_src( $img_id, $size )[0] : '';
}

function share_img_url () {
  $share_img_url = get_image_url( 'size-banner-hq' );

  if ($share_img_url === '') {
    $share_img_url = get_template_directory_uri() . '/src/images/share.jpg';
  }

  echo $share_img_url;
}

function image_url ( $size = 'regular' ) {
  echo get_image_url( 'size-' . $size );
}

function raw_image_url () {
  echo get_image_url( false );
}

function image ( $size = 'regular', $class_list = '' ) {
  $url = get_image_url( 'size-' . $size );
  $url_hq = get_image_url( 'size-' . $size . '-hq' );

  if ( !$url ) { return; }

  $class_list = $class_list ? 'class="' . $class_list . '"' : '';

  echo '<img ' . $class_list . ' src="' . $url . '" srcset="' . $url_hq . ' 2x" alt="">';
}
