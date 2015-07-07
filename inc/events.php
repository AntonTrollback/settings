<?php

function get_events() {
  global $fb_token;

  $fields =  'id,name,description,start_time,end_time,location,timezone';
  $query = 'https://graph.facebook.com/celezteriddarholmen/events?fields=' . $fields . '&access_token=' . $fb_token;
  $events = array();

  $raw_events = file_get_contents($query);
  $raw_events = json_decode($raw_events, true);

  foreach ( $raw_events['data'] as $raw_event ) {
    array_push($events, $raw_event);
  }

  return $events;
}

function show_events() {
  $events = get_events();

  foreach ( $events as $event ) {
    echo '<div class="Type">';

    echo '<h2>' . $event['name'] . '</h2>';
    echo $event['description'];

    echo '<ul>';
    echo '<li>' . $event['start_time'] . '</li>';
    echo '<li>' . $event['end_time'] . '</li>';
    echo '<li>' . $event['timezone'] . '</li>';
    echo '<li>' . $event['location'] . '</li>';
    echo '</ul>';
  }
}
