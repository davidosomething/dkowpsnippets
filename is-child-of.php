<?php
// http://wordpress.stackexchange.com/a/4802/1637
// refactored

function dko_is_child_of($pid) {
  global $post;         // load details about this page
  static $top_levels = null;

  if (!is_object($post)) {
    return false;
  }

  if (!is_page()) {
    return false;
  }

  if (is_page($pid)) {
    return true;
  }

  if (!$top_levels) {
    $top_levels = array();
    $top_levels_query = get_pages(array(
      'parent'        => 0,
      'hierarchical'  => 0
    ));
    foreach ($top_levels_query as $page) {
      $top_levels[$page->post_name] = $page->ID;
    }
  }

  // now we actually check the ancestors
  $ancestors = get_post_ancestors($post->ID);
  $intersection = array_intersect($top_levels, $ancestors);
  if (count($intersection)) {
    $intersection_keys = array_keys($intersection);
    $found_ancestor = $intersection_keys[0];
    return ($found_ancestor == $pid);
  }

  return false;  // we're elsewhere
}
