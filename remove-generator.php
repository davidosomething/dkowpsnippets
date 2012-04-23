<?php
function dko_remove_the_generator() {
  return '';
}
add_filter('the_generator', 'dko_remove_the_generator');
remove_action('wp_head', 'wp_generator');
