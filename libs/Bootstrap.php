<?php

class Bootstrap {

    function __construct()
    {
		if(!isset($_GET['url'])){
			$url = "index";
		}else{
			$url = $_GET['url'];
		}
        
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        // print_r($url);
		if($url[0] == "web" && $url[2] != null){
			$file = $url[0]."/".$url[1]."/".$url[2];
			require $file;
		}else if($url[0] == "web" && $url[2] == null){
			$file = $url[0]."/".$url[1];
			require $file;
		}else{
			$file = 'controllers/'. $url[0] . '.php';
			if (file_exists($file)){
				require $file;
			} else {
				require 'controllers/MyErrorClass.php';
				$controller = new MyErrorClass();
				return false;
			}
			$controller = new $url[0];
			if (isset($url[2])) {
				$controller->{$url[1]}($url[2]); // $controller->function()
			} else {
				if (isset($url[1])) {
					$controller->{$url[1]}(); // $controller->function()
				}
			}

		}
        
    }
}