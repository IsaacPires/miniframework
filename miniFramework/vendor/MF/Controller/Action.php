<?php

namespace MF\Controller;

abstract class Action{

  protected $view;

  public function __construct()
  {
    $this->view = new \stdClass();
  }

  protected function render($view){

    $classAtual = get_class($this);
    $arrayClass = explode(DIRECTORY_SEPARATOR, $classAtual);
    $class = str_replace('Controller', '', $arrayClass[2]);

    require_once "../App/Views/".$class."/".$view.".phtml";
  }


}