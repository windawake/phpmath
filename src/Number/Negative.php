<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/2/3 0003
 * Time: 20:37
 */

namespace Number;

/**
 * Class Negative 负数
 * @package Number
 */
class Negative
{
    protected $desc = '负数';

    public function getBool($value)
    {
        return $value < 0;
    }
}