<?php

add_action( 'template_redirect', function () {
  global $post;

  if ( is_404() ) {
    wp_redirect( get_home_url() );
    exit();
  }
});

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
  add_image_size( 'size-regular', 330, 290 );
  add_image_size( 'size-regular-hq', 660, 580 );
  add_image_size( 'size-large', 800 );
  add_image_size( 'size-large-hq', 1600 );
  add_image_size( 'size-banner', 800, 500, true );
  add_image_size( 'size-banner-hq', 1600, 1000, true );
});
