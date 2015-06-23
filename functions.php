<?php

function settings_setup() {
  /**
   * Add default posts and comments RSS feed links to head.
   */

  add_theme_support( 'automatic-feed-links' );

  /**
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */

  add_theme_support( 'title-tag' );

  /**
   * Enable support for Post Thumbnails on posts and pages.
   */

  add_theme_support( 'post-thumbnails' );

  /**
   * This theme uses wp_nav_menu() in one location.
   */

  register_nav_menus( array(
    'primary' => esc_html__( 'Primary Menu', 'settings' ),
  ) );
}
add_action( 'after_setup_theme', 'settings_setup' );

/**
 * Custom template tags for this theme.
 */

require get_template_directory() . '/inc/template-tags.php';