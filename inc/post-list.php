<?php

function get_post_list( $large_layout ) {
  $categories = get_field( 'post_category' );
  $args = array(
  	'posts_per_page' => 99999,
  	'orderby' => 'menu_order',
    'category' => implode(', ', $categories),
  	'post_status' => 'publish'
  );

  if ( $large_layout ) {
    $result = get_large_mixed_posts( $args );
  } else {
    $result = get_small_divided_posts( $args, $categories );
  }

  return $result;
}

function get_large_mixed_posts( $args ) {
  return get_posts( $args );
}

function get_small_divided_posts( $args, $categories ) {
  $result = array();
  $result['categories'] = array();

  foreach ( $categories as $cat ) {
    $args['category'] = $cat;

    array_push( $result['categories'], array(
      'id' => $cat,
      'items' => get_posts( $args )
    ));
  }

  return $result;
}

function post_list() {
  $large_layout = get_field( 'post_list_large' );
  $post_data = get_post_list( $large_layout );

  set_query_var( 'post_data', $post_data );

  if ( $large_layout ) {
    partial( 'post-list-large' );
  } else {
    partial( 'post-list' );
  }
}
