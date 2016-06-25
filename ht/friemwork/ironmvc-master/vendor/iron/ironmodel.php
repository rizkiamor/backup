<?php

/* ironmodel file */
Class Ironmodel{

  public function db(){
    global $database;
    $connect = new PDO( "mysql:host=".$database['HOST'].";"."dbname=".$database['DB'], $database['USER'], $database['PASS']);
    return $connect;
  }

}
