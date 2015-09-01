<?php

function get_events() {
  $fb_token = trim( file_get_contents( get_template_directory() . '/fb-token.txt' ) );
  $page_id = get_field( 'page_id' );
  $fields =  'id,name,description,start_time,end_time';
  $query = 'https://graph.facebook.com/' . get_field( 'page_id' ) . '/events?access_token=' . $fb_token . '&fields=' . $fields;

  $data = json_decode( file_get_contents($query), true );
  $next_events = get_next_events( $data, $fields );

  $events = array_merge( $data['data'], $next_events );
  $events = array_reverse( $events );
  $events = array_slice( $events, 0, 4 );
  $events = array_filter( $events, 'remove_ignored' );
  $events = array_map( 'update_fields', $events );

  return array_map( 'update_fields', $events );
}

function get_next_events( $data, $fields ) {
  if ( count($data) !== 1 && array_key_exists( 'next', $data['paging'] ) ) {
    $next = file_get_contents( $data['paging']['next'] . '&fields=' . $fields );
    return json_decode( $next, true )['data'];
  }
  return array();
}

function remove_ignored( $event ) {
  $target_str = get_field( 'ignore_events' );
  $targets = array_map('trim', explode( ',', $target_str ) );

  return !in_array( $event['id'], $targets );
}

function update_fields( $event ) {
  $event['desc'] = wp_trim_words( $event['description'], $num_words = 25, $more = null );
  $event['day'] = date( 'j', strtotime( $event['start_time'] ) );
  $event['month'] = strtolower( date('M', strtotime( $event['start_time'] ) ) );
  return $event;
}

function calendar() {
  set_query_var( 'events', get_events() );
  partial( 'calendar' );
}
