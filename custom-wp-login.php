<?php
// http://wordpress.stackexchange.com/questions/1567/best-collection-of-code-for-your-functions-php-file

/**
 * Replaces the login header logo URL
 *
 * @param $url
 */
function dko_login_headerurl($url) {
  $url = home_url('/');
  return $url;
}
add_filter('login_headerurl', 'dko_login_headerurl');

/**
 * Replaces the login header logo title
 *
 * @param $title
 */
function dko_login_headertitle($title) {
  $title = get_bloginfo('name');
  return $title;
}
add_filter('login_headertitle', 'dko_login_headertitle');

/**
 * Replaces the login header logo
 */
function dko_login_style() {
  echo '<style>.login h1 a { background-image: url( ' . get_template_directory_uri() . '/images/logo.png ) !important; }</style>';
}
//add_action('login_head', 'dko_login_style');
