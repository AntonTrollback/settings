<?php

function get_asset_url( $file_name ) {
  global $revision;
  echo get_template_directory_uri() . '/dist/' . $file_name . '?revision=' . $revision;
}

function set_post_by_slug( $slug ) {
  query_posts(array(
    'name' => $slug,
    'post_type' => 'page'
  ));
}

function get_image_url( $size ) {
  $img_id = get_post_thumbnail_id();
  return $img_id ? wp_get_attachment_image_src( $img_id, $size )[0] : '';
}

function the_image_url( $size ) {
  echo get_image_url( $size );
}

function the_image() {
  $url = get_image_url( 'size-regular' );
  $url_hq = get_image_url( 'size-regular-hq' );

  if ( !$url ) { return; }

  echo '<img src="' . $url . '" srcset="' . $url_hq . ' 2x">';
}
