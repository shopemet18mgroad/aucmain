<?php

class Controller {

    function __construct()
    {
        $this->view = new View();
    }
	
	function hi()
	{
		echo "I AM IN HI CONTROL";
	}
}
?>