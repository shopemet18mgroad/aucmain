<?php

class MyErrorClass extends Controller {

    function __construct()
    {
        parent::__construct();
        echo "This is an error!";
        $this->view->msg = "This page does not exist";
        $this->view->render('error/index');
    }
}
?>