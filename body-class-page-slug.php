<?php
// add page slug and parent slug and eldest ancestor slug to body class
function dko_body_class_page_slug($classes) {
  global $post;

  if (is_object($post) && is_page()) {
    $classes[] = 'page-slug-' . $post->post_name;
    if ($post->post_parent) {
      $parent = get_post($post->post_parent);
      $classes[] = 'parent-slug-' . $parent->post_name;
      $eldest_id = end(get_post_ancestors($post->ID));
    }
    else {
      $eldest_id = $post->ID;
    }
    $eldest = get_post($eldest_id);
    $classes[] = 'eldest-slug-' . $eldest->post_name;
  }

  return $classes;
}
add_filter('body_class', 'dko_body_class_page_slug');
