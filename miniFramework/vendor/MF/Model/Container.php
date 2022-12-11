<?php

namespace MF\Model;
use App\Connection;

Class Container{

  public static function getModel($model){

    $conn = Connection::getDb();

    $class = "App\\Models\\".ucFirst($model);
    
    return new $class($conn);

  }


}