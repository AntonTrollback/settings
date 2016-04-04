<?php

function get_events() {
  $num = 1;
  $events = array();

  while ($num <= 4) {
    $date = get_field('event_' . $num . '_date');
    $event = array(
      'day'   => get_day($date),
      'month' => get_month($date),
      'title' => get_field('event_' . $num . '_title'),
      'desc'  => get_field('event_' . $num . '_desc'),
      'url'   => get_field('event_' . $num . '_url')
    );

    if ($event['day'] && $event['month'] && $event['title'] && $event['desc']) {
      array_push($events, $event);
    }
    $num++;
  }

  return $events;
}

function get_day($date) {
  return date('j', strtotime($date ));
}

function get_month($date) {
  return strtolower( date('M', strtotime($date)));
}

function calendar() {
  set_query_var('events', get_events());
  partial('calendar');
}
