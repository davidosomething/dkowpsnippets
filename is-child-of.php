<?php
// http://wordpress.stackexchange.com/a/4802/1637
// refactored

function dko_is_child_of($pid) {
  global $post;         // load details about this page

  if (!is_object($post)) {
    return false;
  }

  if (!is_page()) {
    return false;
  }

  if (is_page($pid)) {
    return true; // we're at the page or at a sub page
  }

  // now we actually check the ancestors
  $ancestors = get_post_ancestors($post->ID);
  foreach($ancestors as $ancestor) {
    if ($ancestor == $pid) {
      return true;
    }
  }

  return false;  // we're elsewhere
}
