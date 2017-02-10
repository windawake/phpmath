<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/1/27 0027
 * Time: 14:32
 */
namespace Triangle;
class RightAngle
{
    public function render(\Triangle $triangle)
    {
        if($triangle->b && $triangle->c){
            $val = $triangle->b * $triangle->b + $triangle->c * $triangle->c;
            $triangle->a = sqrt($val);
        }

        if($triangle->b && $triangle->a){
            $val = $triangle->a * $triangle->a - $triangle->b * $triangle->b;
            $triangle->c = sqrt($val);
        }
        if($triangle->c && $triangle->a){
            $val = $triangle->a * $triangle->a - $triangle->c * $triangle->c;
            $triangle->b = sqrt($val);
        }
        if($triangle->a && ($triangle->b == $triangle->c)){
            $val = ($triangle->a * $triangle->a)/2;
            $triangle->b = sqrt($val);
            $triangle->c = sqrt($val);
        }
        //$triangle->checkEdges();
        return true;
    }
}