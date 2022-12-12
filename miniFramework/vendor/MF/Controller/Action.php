<?php

namespace MF\Controller;

abstract class Action{

  protected $view;

  public function __construct()
  {
    $this->view = new \stdClass();
  }

  protected function render($view, $layout=''){
    $this->view->page = $view;
    if(file_exists("../App/Views/index/".$layout.".phtml")){
      require_once "../App/Views/index/".$layout.".phtml";
    }else{
      $this->content();
    }
  }

  protected function content(){
    $classAtual = get_class($this);
    $arrayClass = explode(DIRECTORY_SEPARATOR, $classAtual);
    $class = str_replace('Controller', '', $arrayClass[2]);

    require_once "../App/Views/".$class."/".$this->view->page.".phtml";
  }


}