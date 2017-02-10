<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/1/27 0027
 * Time: 14:32
 */

class Triangle
{
    //三条边
    public $a = 0;
    public $b = 0;
    public $c = 0;

    public $angle1;
    public $angle2;
    public $angle3;



    public function getPerimeter()
    {
        return $this->a + $this->b + $this->c;
    }

    /**
     * 检查边长
     */
    public function checkEdges()
    {
        $array = [$this->a,$this->b,$this->c];
        $min = min($array);
        $max = max($array);

        $key=array_search($min ,$array);
        array_splice($array,$key,1);
        $key=array_search($max ,$array);
        array_splice($array,$key,1);

        $middle = current($array);

        if($min == 0){
            exit("请给每一条三角边赋值！");
        }
        if($max >= ($min + $middle)){
            exit("两边之和必须大于第三边！");
        }
    }

    public function checkAngles()
    {
        $angles = $this->angle1 + $this->angle2 + $this->angle3;
        if($angles != '180'){
            exit("三个角加起来必须是180度");
        }
    }
}