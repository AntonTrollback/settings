<?php

function get_asset_url ( $asset ) {
  global $revision;
  return get_template_directory_uri() . '/src/' . $asset;
}

function get_asset ( $asset ) {
  echo get_asset_url( $asset );
}

function get_symbol ( $class, $id ) {
  $url = get_asset_url( 'images/sprite.svg' );
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

function the_image_url ( $size ) {
  echo get_image_url( $size );
}

function the_image () {
  $url = get_image_url( 'size-regular' );
  $url_hq = get_image_url( 'size-regular-hq' );

  if ( !$url ) { return; }

  echo '<img src="' . $url . '" srcset="' . $url_hq . ' 2x">';
}
