<?php
/**
 * dko_title_to_slug
 * Given some string, return slug-formatted version
 * http://stackoverflow.com/a/14550926/230473
 *
 * @param string $string
 * @return string slug formatted title
 */
function dko_title_to_slug($string) {
  $string = strtolower($string);
  $string = preg_replace("/\W+/", "-", $string); // \W = any "non-word" character
  $string = trim($string, "-");
  return $string;
}
