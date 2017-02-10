<?php
/**
 * 多项式的类
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/2/2 0002
 * Time: 20:06
 */

use Lib\Normalize;
use Monomial;

class Multinomial
{
    //一个大的数组，可以说是单项式的集合
    private $arrNomial=array();

    public function bcAdd(Monomial $nomial)
    {
        array_push($this->arrNomial,$nomial);
    }

    /**
     * 多项式合并同类项
     * @return string
     */
    public function evaluation()
    {
        $arrNomial = array();
        //遍历
        foreach($this->arrNomial as $nomial){
            /**
             * @var $nomial Monomial;
             */
            //组合
            $arrNomial[$nomial->getBase()][] = $nomial->getConstant();
        }
        $arrExpress = array();
        //拼接成表达式
        foreach($arrNomial as $base=>$arrConstant){
            $sumConstant = array_sum($arrConstant);
            if($sumConstant){
                $normalize = new Normalize();
                $arrExpress[] = $normalize->monomial($sumConstant,$base);
            }
        }
        $express = implode('+',$arrExpress);

        if(!$express) $express = 0;
        //返回结果
        return $express;
    }
}