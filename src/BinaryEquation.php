<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2017/1/27 0027
 * Time: 14:32
 */

class BinaryEquation
{
    private $x;
    private $y;

    public function solve($equation1,$equation2)
    {
        $equation1 = str_replace(' ','',$equation1);
        $equation2 = str_replace(' ','',$equation2);

        $pattern = "/(.*)?[x][+]?([-]?.*)?[y]=(.*)/";
        preg_match($pattern,$equation1,$matches);
        $exp_x1 = $matches[1] ? eval('return '.$matches[1].';') : 1;
        $exp_y1 = $matches[2] ? eval('return '.$matches[2].';') : 1;
        $exp_v1 = $matches[3] ? eval('return '.$matches[3].';') : 0;

        preg_match($pattern,$equation2,$matches);
        $exp_x2 = $matches[1] ? eval('return '.$matches[1].';') : 1;
        if($matches[2] == '-') $matches[2] = -1;
        $exp_y2 = $matches[2] ? eval('return '.$matches[2].';') : 1;
        $exp_v2 = $matches[3] ? eval('return '.$matches[3].';') : 0;

        $this->x = ($exp_v2 * $exp_y1 - $exp_v1 * $exp_y2)/($exp_x2 * $exp_y1 - $exp_x1 * $exp_y2);
        $this->y = ($exp_v1 - $this->x*$exp_x1)/$exp_y1;
    }

    public function evaluation()
    {
        return "x:$this->x<br/>y:$this->y";
    }
}