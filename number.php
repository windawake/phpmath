<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/1/27 0027
 * Time: 13:11
 */
include __DIR__."/autoload.php";
use Number\Positive;
use Number\Negative;
use Number\Integer;
use Number\Fraction;
use Number\Zero;
use Number\PosInteger;
use Number\Natural;

$number = new Number(0.5);
//echo $number->getValue();

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

