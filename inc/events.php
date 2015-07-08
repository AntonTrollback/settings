<?php

function get_events() {
  global $fb_token;

  $fields =  'id,name,description,start_time,end_time';
  $query = 'https://graph.facebook.com/celezteriddarholmen/events?access_token=' . $fb_token . '&fields=' . $fields;

  $data = file_get_contents($query);

  if ( empty($data) ) {
    return array();
  }

  $data = json_decode($data, true);
  $events = $data['data']; // array of events

  // add next events to array
  if ( array_key_exists( 'next', $data['paging'] ) ) {
    $next = file_get_contents( $data['paging']['next'] . '&fields=' . $fields );
    $next = json_decode( $next, true );
    $events = array_reverse( array_merge( $events, $next['data'] ) );
  }

  $events = array_slice($events, 0, 4);

  return array_map( 'fix_event', $events );
}

function show_calendar() {
  set_query_var( 'events', get_events() );
  partial( 'calendar' );
}

function fix_event($event) {
  $event['desc'] = wp_trim_words( $event['description'], $num_words = 25, $more = null );
  $event['day'] = strtolower( date('M', strtotime( $event['start_time'] ) ) );
  $event['month'] = date( 'j', strtotime( $event['start_time'] ) );
  return $event;
}
