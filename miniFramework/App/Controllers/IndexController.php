<?php

namespace App\Controllers;

use MF\Controller\Action;

class indexController extends Action{

  public function index(){

    $this->view->dados = ['arroz', 'frango', 'agua'];
    $this->render('index');

  }

  public function sobreNos(){
    $this->view->dados = ['pizza', 'hamburguer', 'suco'];
    $this->render('sobreNos');
  }

}