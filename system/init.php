<?php
//echo "init";
spl_autoload_register(function($class){
   require_once 'core/'.$class.'.php';
});
