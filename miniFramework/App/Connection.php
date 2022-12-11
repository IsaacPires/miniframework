<?php
namespace App;

use PDOException;

class Connection{

  public static function getDb(){
    try{
      $conn = new \PDO('mysql:host=127.0.0.1;dbname=mvc;charset=utf8', 'root', '');
      $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

      return $conn;

    }catch(\PDOException $e){
      echo 'ERROR: ' . $e->getMessage();

    }
  }
}