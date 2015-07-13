<?php

function get_post_list() {
  $cat = get_field( 'post_category' );
  $args = array(
  	'posts_per_page' => 99999,
  	'category' => $cat,
  	'orderby' => 'menu_order',
  	'post_status' => 'publish'
  );

  return get_posts( $args );
}

function post_list() {
  set_query_var( 'post_list_items', get_post_list() );
  partial( 'post-list' );
}
