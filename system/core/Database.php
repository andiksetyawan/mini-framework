<?php
class Database{
  private static $_instance =null;
  private $mysqli;

  public function __construct(){
    require_once('app/config/database.php');
    $this->mysqli = new mysqli($hostname,$username,$password,$database) or die ('Database Error');
  }

  public static function getInstance(){
    if(!isset(self::$_instance)){
      self::$_instance = new Database();
    }
    return self::$_instance;
  }
  public function mysql_query($query){
    $result=[];
    $queryres = $this->mysqli->query($query);
    while($row = $queryres->fetch_assoc()){
      $result[] = $row;
    }
    return $result;
  }
  
  public function select(){
    //bisa buat metode select
  }
}
