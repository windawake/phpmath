<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/2/3 0003
 * Time: 20:37
 */

namespace Number;

/**
 * Class Positive 正数
 * @package Number
 */
class Positive
{
    protected $desc = '正数';

    public function getBool($value)
    {
        return $value > 0;
    }
}