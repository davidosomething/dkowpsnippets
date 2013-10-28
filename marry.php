<?php
/**
 * marry.php snippet
 * WP filter to replace last space in a paragraph with a non-breaking space.
 * Helps alleviate widows.
 */
function dko_marry($text) {
  $last_space = strrpos($text, ' ');
  if ($last_space === FALSE) {
    return $text;
  }
  return substr_replace($text, '&nbsp;', $last_space, 1);
}
