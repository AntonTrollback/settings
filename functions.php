<?php

function logga ( $data ) {
  print_r( '<style>.Nav { display: none } </style>' .
           '<pre style="font-family: monospace; padding: 40px">' .
             $data .
           '</pre>' );
}

$revision = 1;
$fb_token = file_get_contents(get_template_directory() . '/fb-token.txt');

require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/navigation.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/events.php';
