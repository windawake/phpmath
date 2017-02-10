<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/2/3 0003
 * Time: 20:37
 */

namespace Number;

/**
 * Class Negative 分数
 * @package Number
 */
class Fraction extends Base
{
    protected $desc = '分数';

    public function getBool($value)
    {
        return is_float($value);
    }
}