<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/1/27 0027
 * Time: 14:32
 */
namespace Triangle;
class Equilateral
{
    public function render(\Triangle $triangle)
    {
        if($triangle->a){
            $triangle->b = $triangle->a;
            $triangle->c = $triangle->a;
        }
        if($triangle->b){
            $triangle->a = $triangle->b;
            $triangle->c = $triangle->b;
        }
        if($triangle->c){
            $triangle->a = $triangle->c;
            $triangle->b = $triangle->c;
        }
        $triangle->checkEdges();
        return true;
    }
}