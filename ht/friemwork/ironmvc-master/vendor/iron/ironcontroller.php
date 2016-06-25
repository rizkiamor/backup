<?php

/* ironcontroller file */
Class Ironcontroller{

  public function callmodel($model){
    $modeldir = "app/model/";
    if(file_exists($modeldir.$model.".php")){
      require_once $modeldir.$model.".php";
    }else{
      echo "model $model tidak ditemukan";
    }
  }

  public function render($route){
    global $home;
    $params = [];
       if ($route == '') {
           $route = $home[1];
       } elseif (($pos = strpos($route, '/')) !== false) {
           $params = explode('/', substr($route, $pos + 1));
           $route = substr($route, 0, $pos);
       }
       $method = str_replace(" ","",$route);
       return call_user_func_array([$this,$method], $params);
  }

  function __get($name){
    $this->callmodel($name);
    $this->$name = new $name;
    return $this->$name;
  }
}
