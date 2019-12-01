<?php

class user{
  private $db;
  public function __construct(){
    $this->db = Database::getInstance();
  }

  public function select($data=''){
    //select bla bla bla
    $data = $this->db->mysql_query('select * from movies limit 4');
    return $data;
  }

}
