<?php

/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 09/01/2017
 * Time: 09:36
 */
class Controller
{
    private $model;

    public function __construct ($model)
    {
        $this -> model = $model;
    }

    public function about()
    {
        $this -> model -> about();
    }

    public function contact()
    {
        $this -> model -> contact ();
    }

    public function notFound()
    {
        $this -> model -> notFound();
    }
}