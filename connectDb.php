<?php
class connectDb {

  private $dbHost = "localhost";
  private $dbUser = "root";
  private $dbPass = "";
  private $dbname = "cma";

  protected function dbConnection() {
    try {
     $conn= new PDO("mysql:host=$this->dbHost; dbname=$this->dbname" ,$this->dbUser ,$this->dbPass);      
     return $conn;
    }
    catch (Exception $exc) { 
        echo $exc->getMessage();
    }
  }

  protected function getData($db){
    try {
    $sql=$this->dbConnection()->prepare($db);
    return $sql; 
    }
    catch (Exception $exc) {
        echo $exc->getMessage();
    }
  }
}
