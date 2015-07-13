<?php

function get_asset_url ( $asset, $include_rev = true ) {
  global $revision;
  $rev = $include_rev ? '?v=' . $revision : '';
  return get_template_directory_uri() . '/src/' . $asset . $rev;
}

function asset_url ( $asset ) {
  echo get_asset_url( $asset );
}

function symbol ( $class, $id ) {
  $url = get_asset_url( 'images/sprite.svg', false );
  echo '<svg class="' . $class . '"><use xlink:href="' . $url . '#' . $id . '"></svg>';
}

function set_post_by_slug ( $slug ) {
  query_posts(array(
    'name' => $slug,
    'post_type' => 'page'
  ));
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

function image_url ( $size = 'regular' ) {
  echo get_image_url( 'size-' . $size );
}

function raw_image_url ( $size = 'regular' ) {
  echo get_image_url( false );
}

function image ( $size = 'regular', $class_list = '' ) {
  $url = get_image_url( 'size-' . $size );
  $url_hq = get_image_url( 'size-' . $size . '-hq' );

  if ( !$url ) { return; }

  $class_list = $class_list ? 'class="' . $class_list . '"' : '';

  echo '<img ' . $class_list . ' src="' . $url . '" srcset="' . $url_hq . ' 2x">';
}
