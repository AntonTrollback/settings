<?php

function get_large_post_list() {
  $category = get_field( 'large_post_list_category' );
  $args = array(
    'posts_per_page' => 99999,
    'orderby' => 'menu_order',
    'category' => $category,
    'post_status' => 'publish'
  );

  $result = array();
  $result['categories'] = array();

  array_push( $result['categories'], array(
    'id' => $category,
    'items' => get_posts( $args )
  ));

  return $result;
}

function large_post_list() {
  set_query_var( 'post_data', get_large_post_list() );
  partial( 'large-post-list' );
}
