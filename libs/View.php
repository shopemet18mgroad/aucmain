<?php


class View {

    function __construct()
    {
        
    }

    public function render($name)
    {
        require 'views/' . $name . '.php';
    }
	public function render_web($name)
    {
        require 'web/' . $name . '.php';
    }
}