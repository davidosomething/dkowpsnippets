<?php
/**
 * Change "from" info for emails
 * http://wp-snippets.com/change-default-from-address/
 */
function dko_mail_from($old) {
  return get_bloginfo('admin_email');
}
add_filter('wp_mail_from',      'dko_mail_from');

function dko_mail_from_name($old) {
  return get_bloginfo('name');
}
add_filter('wp_mail_from_name', 'dko_mail_from_name');
