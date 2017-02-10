<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/1/27 0027
 * Time: 13:11
 */
include __DIR__."/autoload.php";

use Triangle\Isosceles;
use Triangle\Equilateral;
use Triangle\RightAngle;

$triangle = new Triangle();
$isosceles = new Isosceles();
$equilateral = new Equilateral();
$rightAngle = new RightAngle();

$triangle->a = 10;
$isosceles->render($triangle);
$rightAngle->render($triangle);

//$equilateral->render($triangle);

var_dump($triangle);
