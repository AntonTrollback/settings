<?php

/**
 * Get url to dist asset
 */

function settings_get_asset_url( $file_name ) {
  global $revision;
  echo get_template_directory_uri() . '/dist/' . $file_name . '?revision=' . $revision;
}

function settings_set_post_by_slug( $slug ) {
  query_posts(array(
    'name' => $slug,
    'post_type' => 'page'
  ));
}
