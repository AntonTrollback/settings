<?php

add_action( 'after_setup_theme', function () {
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );

  // Let wordpress manage the document title
  add_theme_support( 'title-tag' );

  register_nav_menus( array(
    'primary' => esc_html__( 'Primary Menu', 'settings' ),
  ));
});

add_action( 'init', function () {
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
});

add_action( 'after_setup_theme', function () {
  add_image_size( 'size-regular', 330, 270 );
  add_image_size( 'size-regular-hq', 660, 540 );
  add_image_size( 'size-banner', 600 );
  add_image_size( 'size-banner-hq', 1200 );
});

/*
add_filter('template_include', function ( $template_path ) {
  if ( get_post_type() == 'example' ) {
    $template_path = 'path';
  }
  return $template_path;
}, 1);
*/
