<?php
function dko_remove_manifest() {
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'dko_remove_manifest');
