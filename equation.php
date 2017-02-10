<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/1/27 0027
 * Time: 13:11
 */
include __DIR__."/autoload.php";

/*$equation = new LinearEquation();
$string = "10 - 2x = 20";
//$string = "2x - 10 = 20";
$equation->solve($string);*/

$equation = new BinaryEquation();
$equation->solve("x+y=3","x-y=1");
echo $equation->evaluation();