<?php
/**
 * dko_title_to_slug
 *
 * Given some string, return slug-formatted version
 *
 * @param string $title
 * @access public
 * @return string slug formatted title
 */
function dko_title_to_slug($title) {
  $page_slug = str_replace(" ", "-", strtolower($title));
  $page_slug = ereg_replace("[^A-Za-z0-9-]", "", $page_slug);
  return $page_slug;
}
