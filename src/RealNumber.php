<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/1/27 0027
 * Time: 14:32
 */
class RealNumber
{
    public function simplifyConstant($exp){
        $result = $exp ? eval('return '.$exp.';') : 0;
        return $result;
    }

    public function simplifyVarConstant($exp){
        if($exp == '-') $exp = -1;
        $result = $exp ? eval('return '.$exp.';') : 1;
        return $result;
    }

    public function getOpposite($value)
    {
        $result = eval("return ~{$value}+1;");
        return $result;
    }
}