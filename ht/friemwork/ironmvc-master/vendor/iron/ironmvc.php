<?php

/* ironmvc file*/

Class Iron{

  private $pathInfo;
  private $baseUrl;
  private $scriptUrl;

  public function run(){
    global $home;

    $route = trim($this->getPathInfo(), '/');
    if (empty($route)) {
      $route = $home[0];
    }

    if (($pos = strpos($route, '/')) !== false) {
      $class = substr($route, 0, $pos);
      $route = substr($route, $pos + 1);
    } else {
      $class = $route;
      $route = '';
    }

    $classCaller = str_replace(' ', '', str_replace("controller","",$class)) . 'controller';
    require_once ("app/controller/" .$classCaller. ".php");

    $ctrl = new $classCaller;
    echo $ctrl->render($route);
  }

  public function getPathInfo(){
    if ($this->pathInfo === null) {
      $this->scriptUrl = $_SERVER['SCRIPT_NAME'];
      $this->baseUrl = dirname($this->scriptUrl);
      $requestUri = $_SERVER['REQUEST_URI'];
      if (strpos($requestUri, $this->scriptUrl) === 0) {
          $this->pathInfo = substr($requestUri, strlen($this->scriptUrl));
      } elseif (strpos($requestUri, $this->baseUrl) === 0) {
          $this->pathInfo = substr($requestUri, strlen($this->baseUrl));
      } else {
          $this->pathInfo = '';
      }
    }
      return $this->pathInfo;
    }

}
