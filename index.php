<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';
require_once ROOT . DS . 'app' . DS . 'config' . DS . 'Router.php';
require_once ROOT . DS . 'vendor' . DS . 'autoload.php';
use app\Config\Router;

	$url='';
   		if(isset($_GET['url'])){
       	$url=$_GET['url'];
		   }
		   
    Router::route($url);
   

?> 