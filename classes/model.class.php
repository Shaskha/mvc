<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 09/01/2017
 * Time: 09:35
 */



class Model
{
    public $string;

    public function __construct()
    {
        $this -> string = "
        <p><a href='index.php?action=about'>About</a></p>
        <p><a href='index.php?action=contact'>Contact</a></p>";
    }

    public function about()
    {
        $this -> string = "<p>I hate Mondays !</p> <p><a href='index.php'>Accueil</a></p>";
    }

    public function contact()
    {
        $this -> string = "<p>Email<input type='text'/></p><p><a href='index.php'>Accueil</a></p>";
    }

    public function notFound()
    {
        $this -> string = "Page not found you dumb !";
    }
}