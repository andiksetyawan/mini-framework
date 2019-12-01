<?php
//require_once('')
class home extends Controller{
  public function __construct(){
  //  echo " construct di home";
  }

  public function index(){
    $this->view('index');
  }

  public function test($a='',$b=''){
    $modeluser = $this->model('user');//load model

    $data=$modeluser->select($data='  :D');
    print_r($data);

  //cara panngil view + data
  //  return $this->view('index',array('nama'=>$data,'umur'=>$b));
  }

  public function testview(){
    
    echo $this->view('layout/header',array('title'=>'Ini titile'));
    echo $this->view('layout/body',array('content'=>'INI KONTEN'));
    echo $this->view('layout/footer',array());
  }
}
