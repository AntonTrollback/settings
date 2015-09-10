<?php

function get_post_list() {
  $categories = get_field( 'post_list_category' );
  $args = array(
    'posts_per_page' => 99999,
    'orderby' => 'menu_order',
    'post_status' => 'publish'
  );

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
  set_query_var( 'post_data', get_post_list() );
  partial( 'post-list' );
}
