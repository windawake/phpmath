<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/2/3 0003
 * Time: 20:37
 */

namespace Number;

/**
 * 自然数
 * @package Number
 */
class Natural
{
    protected $desc = '自然数';

    public function getBool($value)
    {
        $bool1 = (new PosInteger())->getBool($value);
        $bool2 = (new Zero())->getBool($value);

        return $bool1 || $bool2;
    }
}