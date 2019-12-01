<?php

class Route{
    protected $controller = 'home';
    protected $method = 'index';
    protected $par = [];
    public function __construct(){
      if (isset($_GET['url'])) {
        $url = explode('/',$_GET['url']);
        $ctl = $url[0];
        if (file_exists('app/controllers/'.$ctl.'.php')) {
          $this->controller = $ctl;
        }
      }else{
        $this->controller = 'home';
      }
      require_once('app/controllers/'.$this->controller.'.php');
      $this->controller = new $this->controller;

      if (isset($url[1])) {
        $this->method = $url[1];
        if(!method_exists($this->controller,$this->method)){
          //echo " method exist";
          die ("Halaman tidak ditemukan");
        }
        unset($url[0]);
        unset($url[1]);
        $this->par=$url;
      }else{
        if(!method_exists($this->controller,$this->method)){
        //  echo "index";
          die ("Halaman tidak ditemukan");
        }
      }

    //  if(isset($url[0]) or isset($url[1])){

      //}

      call_user_func_array([$this->controller,$this->method],$this->par);
    }
}

//$d= new Route();
