<?php

class Controller{
  public function __construct(){
  //  echo "ini construk controller parent";
  }

  public function view($view,$vars = array()){
    extract($vars);
    require_once('app/views/'.$view.'.php');
  }

  public function model($file,$vars = array()){
    extract($vars);
    require_once('app/models/'.$file.'.php');
    //$model = $
    return new $file;
  }
}
