<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/2/3 0003
 * Time: 20:37
 */

namespace Number;

/**
 * @package Number
 */
class Integer
{
    protected $desc = '整数';

    public function getBool($value)
    {
        return is_int($value);
    }
}