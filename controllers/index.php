<?php

class Index  extends Controller {
    function __construct()
    {
        parent::__construct();
       $this->view->render_web('index');
    }
	function dashboard($arg = false){
		echo 'I am in dashboard';
		if($arg){
			echo "</br>".$arg."Is Subjected";
		}
	}
}
?>