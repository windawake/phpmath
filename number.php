<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/1/27 0027
 * Time: 13:11
 */
include __DIR__ . "/autoload.php";
use Number\Integer;
use Number\Natural;
use Number\PosInteger;
use Number\Positive;
use Number\Zero;

$number = new Number(0.5);
echo $number->getValue();exit;

$positive = new Positive();
$integer = new Integer();
$posInteger = new PosInteger();
$natural = new Natural();
$zero = new Zero();

//$number->shrink($positive);
//$number->shrink($integer);
//$number->shrink($posInteger);
//$number->expand($zero);
$number->shrink($natural);

var_dump($number->getResult());exit;
