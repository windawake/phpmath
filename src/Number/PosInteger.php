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
class PosInteger
{
    protected $desc = '正整数';

    public function getBool($value)
    {
        $bool1 = (new Positive())->getBool($value);
        $bool2 = (new Integer())->getBool($value);

        return $bool1 && $bool2;
    }
}