<?php

/* cek php version */
if(phpversion() <= 5.6) exit ("silahkan perbarui php anda");
/* include loader file */
require_once "vendor/iron/loader.php";

/* define app */
$app = new Iron;

/* run app */
$app->run();
