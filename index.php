<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 09/01/2017
 * Time: 10:02
 */

require ('classes/autoLoad.class.php');
spl_autoload_register('autoLoad::classesAutoLoader');

$model = new model ();
$controller = new controller ($model);
$view = new view($model, $controller);
echo $view -> output();