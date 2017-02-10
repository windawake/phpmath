<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/2/1 0001
 * Time: 21:15
 */

namespace Lib;


class Normalize
{
    public function monomial($constant,$base)
    {
        if($constant == 0){
            return 0;
        }elseif($constant ==1){
            return $base;
        }else{
            return $constant.$base;
        }
    }
}