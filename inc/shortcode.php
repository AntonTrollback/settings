<?php

/**
 * Display an event
 * [event title="Our event" text="A bit of information" date="YYYY-MM-DD" url="http://example.com/example"]
 */

function event_shortcode($atts) {
	if (!isset($atts['title']) || !isset($atts['date'])) {
		return;
	}

  $event = array(
    'day'     => get_day($atts['date']),
    'month'   => get_month($atts['date']),
    'year'    => get_year($atts['date']),
    'title'   => isset($atts['title']) ? $atts['title'] : null,
    'desc'    => isset($atts['text']) ? $atts['text'] : null,
    'url'     => isset($atts['url']) ? $atts['url'] : null
  );

	$link = '<a class="Type-ignore Event Event--linked" href="' . $event['url'] . '">';
	$open = $event['url'] ? $link : '<div class="Event">';
	$close = $event['url'] ? '</a>' : '</div>';

	return
		'<div class="Type-event u-cf">'
			. $open .
				'<div class="Event-figure">
					<div class="Event-date">
						<span>' . $event['month'] . '</span>
						<span>' . $event['year'] . '</span>
					</div>
					<div class="Event-day">
						<span>' . $event['day'] . '</span>
					</div>
				</div>
				<div class="Event-body">
					<div class="Type Type--plain">
						<span class="Event-title">' . $event['title'] . '<br></span>
						<span class="u-colorGreen u-sm-show">' . $event['desc'] . '</span>
					</div>
				</div>'
			. $close .
		'</div>';
}

add_shortcode('event', 'event_shortcode');
