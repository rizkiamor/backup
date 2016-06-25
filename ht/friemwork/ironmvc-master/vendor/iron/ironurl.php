<?php

/* url file */
function url($get = "/"){
  global $siteUrl, $indexFile;
  $prefix = empty($indexFile) ? "" : "/". $indexFile;
  $ref = ($get !== "/") ? "/". $get : "";
  return $siteUrl.$prefix.$ref;
}