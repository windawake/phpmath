<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/2/3 0003
 * Time: 19:31
 */
class Number{
    private $value = 0;
    //交集
    private $intersect = array();
    //并集
    private $merge = array();

    public function __construct($num)
    {
        $this->value = $num;
    }

    public function shrink($object){
        $this->intersect[] = $object;
    }

    public function expand($object){
        $this->merge[] = $object;
    }

    public function getResult(){
        $inBool = true;
        $meBool = false;
        $intersect = array();
        $merge = array();
        foreach($this->intersect as $obj){
            $intersect[] = $obj->getBool($this->value);
        }
        foreach($this->merge as $obj){
            $merge[] = $obj->getBool($this->value);
        }
        if(in_array(false,$intersect)) $inBool = false;
        if(in_array(true,$merge)) $meBool = true;

        return ($inBool||$meBool);

    }
}