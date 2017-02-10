<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/2/3 0003
 * Time: 20:37
 */

namespace Number;

/**
 * Class Zero 零
 * @package Number
 */
class Zero
{
    protected $desc = '零';

    public function getBool($value)
    {
        return $value == 0;
    }
}