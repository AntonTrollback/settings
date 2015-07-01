<?php

$revision = 1;

function setup_theme () {
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );

  // Let WordPress manage the document title
  add_theme_support( 'title-tag' );

  register_nav_menus( array(
    'primary' => esc_html__( 'Primary Menu', 'settings' ),
  ) );
}

function cleanup_head () {
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
}

add_action( 'after_setup_theme', 'setup_theme' );
add_action('init', 'fi_head_cleanup');

// Third-party libs
require get_template_directory() . '/inc/bem-menu.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';
