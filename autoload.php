<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/2/1 0001
 * Time: 16:40
 */
function my_autoload($className){
    $file = __DIR__."//src//{$className}.php";
    require $file;
}
spl_autoload_register("my_autoload");