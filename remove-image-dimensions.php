<?php
// Helps for responsive sites
// http://wordpress.stackexchange.com/questions/5568/filter-to-remove-image-dimension-attributes
function dko_remove_thumbnail_dimensions($html) {
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}
add_filter('post_thumbnail_html', 'dko_remove_thumbnail_dimensions', 10);
add_filter('image_send_to_editor', 'dko_remove_thumbnail_dimensions', 10);
