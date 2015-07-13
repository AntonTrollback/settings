<?php

function logga ( $data ) {
  echo '<pre style="box-sizing: border-box; height: 50vh; resize: vertical;
        outline: 2px solid; background: #fff; font: 13px/1.3 monospace">';
  print_r( $data );
  echo '</pre>';
}

$revision = 1;
$fb_token = file_get_contents(get_template_directory() . '/fb-token.txt');

require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/navigation.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/events.php';
require get_template_directory() . '/inc/post-list.php';
