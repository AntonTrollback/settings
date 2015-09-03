<?php

function show ( $data ) {
  echo '<pre style="box-sizing: border-box; height: 50vh; resize: vertical;
        outline: 2px solid; background: #fff; font: 13px/1.3 monospace">';
  print_r( $data );
  echo '</pre>';
}

require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/navigation.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/calendar.php';
require get_template_directory() . '/inc/post-list.php';
require get_template_directory() . '/inc/large-post-list.php';
