<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/1/27 0027
 * Time: 14:32
 */
use RealNumber;
class LinearEquation
{
    private $x;
    public function calLadder()
    {
        $equation = "x - 10 = 10";
        $this->solve($equation);
    }

    public function solve($equation)
    {
        $equation = str_replace(' ','',$equation);
        $pattern = "/(.*)?[x]([+-].*)?=(.*)/";
        preg_match($pattern,$equation,$matches);
        $RealNumber = new RealNumber();
        $exp1 = $RealNumber->simplifyVarConstant($matches[1]);
        $exp2 = $RealNumber->simplifyConstant($matches[2]);
        $exp3 = $RealNumber->simplifyConstant($matches[3]);
        $this->x = ($exp3 - $exp2)/$exp1;
    }

    public function evaluation()
    {
        return $this->x;
    }
}