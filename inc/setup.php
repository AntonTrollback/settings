<?php

// Redirect 404
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

  add_image_size( 'size-regular', 330, 290 );
  add_image_size( 'size-regular-hq', 660, 580 );
  add_image_size( 'size-large', 800 );
  add_image_size( 'size-large-hq', 1600 );
  add_image_size( 'size-banner', 800, 500, true );
  add_image_size( 'size-banner-hq', 1600, 1000, true );
});

add_action( 'init', function () {
  // Clean up wp head
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
});

// Disable comments

add_action( 'init', function () {
  remove_post_type_support( 'post', 'comments' );
  remove_post_type_support( 'page', 'comments' );
});

add_action( 'admin_menu', function () {
  remove_menu_page( 'edit-comments.php' );
});

add_action( 'wp_before_admin_bar_render', function () {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('comments');
});

add_filter( 'embed_oembed_html', function ( $html ) {
  return '<div class="Type-16by9">' . $html . '</div>';
}, 10, 3 );
