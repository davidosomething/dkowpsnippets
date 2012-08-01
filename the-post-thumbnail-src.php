<?php
/**
 * dko_the_post_thumbnail_src
 * get the URL to a post's thumbnail image (size optional)
 *
 * @access public
 * @param integer       $post_id
 * @param string|array  $size
 * @return bool|string false on fail, URL to post thumbnail on success
 */
if (!function_exists('dko_the_post_thumbnail_src')):
function dko_the_post_thumbnail_src() {
  if (func_num_args() > 0) {
    $post_id = func_get_arg(0);
  }

  // which post's thumbnail do we want?
  if (!isset($post_id) || !is_integer($post_id)) {
    global $post;
    if (!property_exists($post, 'ID')) {
      return false;
    }
    $post_id = $post->ID;
  }

  if (!has_post_thumbnail($post_id)) {
    return false;
  }

  $size = 'thumbnail';
  if (func_num_args() > 1) {
    $size = func_get_arg(1);
  }

  $thumbnail_id     = get_post_thumbnail_id($post_id);
  $attachment_data  = wp_get_attachment_image_src($thumbnail_id, $size);
  $image_src        = $attachment_data[0];

  return $image_src;
}
endif;
