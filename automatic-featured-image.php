<?php
/**
 * This snippet automatically sets the featured image by fetching the first
 * image of the post.
 * However, if you choose a featured image, that will be displayed instead.
 *
 * http://wp-snippets.com/automatically-set-the-featured-image/
 */
function dko_autoset_featured() {
  global $post;

  if (!is_object($post) || !property_exists($post, 'ID')) {
    return;
  }

  if (!has_post_thumbnail($post->ID)) {
    $attached_image = get_children("post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1");
    if ($attached_image) {
      foreach ($attached_image as $attachment_id => $attachment) {
        set_post_thumbnail($post->ID, $attachment_id);
      }
    }
  }
}
add_action('the_post',            'dko_autoset_featured');
add_action('save_post',           'dko_autoset_featured');
add_action('draft_to_publish',    'dko_autoset_featured');
add_action('new_to_publish',      'dko_autoset_featured');
add_action('pending_to_publish',  'dko_autoset_featured');
add_action('future_to_publish',   'dko_autoset_featured');
