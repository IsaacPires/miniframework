<?php

namespace MF\Init;

abstract class Bootstrap{

  private $routes;

  abstract protected function initRoutes();


  public function __construct()
  {
    $this->initRoutes();
    $this->run($this->getUrl());
  }

  protected function getUrl(){
    //a function parse_url retorna um array
    //detalhando os componentes do url
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  }

  protected function run($url){

    foreach ($this->getRoutes() as $key => $route){
      if($url == $route['route']){
        $class = "App\\Controllers\\".ucfirst($route['controller']);

        $controller = new $class;

        $action = $route['action'];
        $controller->$action();
      }
    }
  
  }

  public function getRoutes()
  {
    return $this->routes;
  }

  /**
   * Set the value of routes
   *
   * @return  self
   */ 
  public function setRoutes($routes)
  {
    $this->routes = $routes;

    return $this;
  }


}