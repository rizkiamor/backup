<?php
/* application config */
/* set  database connection */
$database = [
  "HOST" => "localhost",
  "USER" => "root",
  "PASS" => "",
  "DB"   => "test"
];

/* set home ctrl
   $home = ["nama controller", "method"]
*/
$home = ["welcomecontroller", "index"];

/* set asset folder */
$asset = "public";

/* root */
$siteUrl = "http://localhost/friemwork/ironmvc-master/";

/* index file */
$indexFile = "index.php";

/* layout root */
$layout_root = "app/view/_layout";
