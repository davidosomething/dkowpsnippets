<?php
/**
 * Use this snippet to change the permalink settings from your functions.php
 * file instead of in the admin area. The .htaccess mod_rewrite it is still
 * necessary.
 * http://wp-snippets.com/set-permalink-settings-from-functions-php/
 */
function dko_set_permalink() {
  global $wp_rewrite;
  $wp_rewrite->set_permalink_structure('/%postname%/');
}
add_action('init', 'dko_set_permalink');
