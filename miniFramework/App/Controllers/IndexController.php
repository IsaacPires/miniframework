<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class indexController extends Action{

  public function index(){

    $this->render('index');

  }

}