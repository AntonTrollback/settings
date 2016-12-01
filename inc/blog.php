<?php

function get_blog_posts() {
  $args = array(
    'posts_per_page' => 99999,
    'category_name' => 'blog',
    'post_status' => 'publish'
  );

  return get_posts($args);
}

function blog() {
  set_query_var('blog_posts', get_blog_posts());
  partial('blog');
}
