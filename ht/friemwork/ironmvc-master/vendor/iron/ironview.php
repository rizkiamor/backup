<?php

/* ironview file */

Class view{

  public static function render($viewfile, $params = []){
    $viewdir = "app/view/";
    if(file_exists($viewdir.$viewfile.".php")){
       ob_start(); 
       ob_implicit_flush(false);
       extract($params, EXTR_OVERWRITE);
       $data =  $viewdir.$viewfile.".php";
       require ($data);
       return ob_get_clean();
    } else {
      echo "file tidak ditemukan";
    }
  }

}
