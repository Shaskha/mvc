<?php

/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 09/01/2017
 * Time: 09:36
 */
class View
{
    private $model;
    private $controller;

    public function __construct ($model, $controller)
    {
        $this -> model = $model;
        $this -> controller = $controller;
    }

    public function output ()
    {
        return "<p>".$this -> model -> string."</p>";
    }

}