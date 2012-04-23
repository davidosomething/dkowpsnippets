<?php
/**
 * Hide the gallery settings panel in the media upload thickbox
 * http://wp-snippets.com/remove-gallery-settings/
 */
if (!function_exists('dko_hide_gallery_settings_div')) {
  function dko_hide_gallery_settings_div() {
    print '<style type="text/css">#gallery-settings *{display:none;}</style>';
  }
}
add_action('admin_head_media_upload_gallery_form', 'dko_hide_gallery_settings_div');
