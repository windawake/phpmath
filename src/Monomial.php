<?php
/**
 * 单项式的类
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/2/2 0002
 * Time: 20:05
 */

use Lib\Normalize;

class Monomial
{
    private $constant;  //常数
    private $base;      //未知数

    public function __construct($constant, $base)
    {
        $this->constant = strval($constant);
        $this->base = $base;
    }

    /**
     * 获取未知数
     * @return mixed
     */
    public function getBase(){
        return $this->base;
    }

    /**
     * 获取常数
     * @return string
     */
    public function getConstant(){
        return $this->constant;
    }

    /**
     * 获取书写的格式
     * @return string
     */
    public function getValue()
    {
        $normalize = new Normalize();
        return $normalize->monomial($this->constant,$this->base);
    }
}