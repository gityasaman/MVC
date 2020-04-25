<?php
namespace app\Config;
use app\views\View;
    class Router{
        public static function route($url){
			$url = strtolower($url);
			
			$url = explode('/',$url);

			$class_name= CTRLS.ucfirst(array_shift($url)).'Controller';
			if(!is_readable($class_name.".php")){
				View::render("404",[]);
				die();
			}
   			if(count($url) >=1 && $url[0] != ''){
				$action_name=array_shift($url);
				$params=$url;
				if($params){
       			$controller=new $class_name($action_name,$params);
				} else{
					$controller=new $class_name($action_name);
				}
			}else{
				$controller=new $class_name();
			}
       	}
    }		
?>