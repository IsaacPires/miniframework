<?php

namespace App\Controllers;

use stdClass;

class indexController{

  private $view;

  public function __construct()
  {
    $this->view = new \stdClass();
  }

  public function index(){

    $this->view->dados = ['arroz', 'frango', 'agua'];
    $this->render('index');

  }

  public function sobreNos(){
    $this->view->dados = ['pizza', 'hamburguer', 'suco'];
    $this->render('sobreNos');
  }

  protected function render($view){

    $classAtual = get_class($this);
    $arrayClass = explode(DIRECTORY_SEPARATOR, $classAtual);
    $class = str_replace('Controller', '', $arrayClass[2]);

    require_once "../App/Views/".$class."/".$view.".phtml";
  }
}