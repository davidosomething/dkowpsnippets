<?php
if (!function_exists('dko_the_slug')):
  function dko_the_slug() {
    echo dko_get_the_slug();
  }
  function dko_get_the_slug() {
    global $pagename;
    return $pagename;
  }
endif;
