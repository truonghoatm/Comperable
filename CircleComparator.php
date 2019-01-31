<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 28/01/2019
 * Time: 14:44
 */
include "Circle.php";
include "Comperator.php";
class CircleComparator implements Comperator{
    public function compare($circleOne, $circleTwo)
    {
        $circleoneRadius = $circleOne->getRadius();
        $circletwoRadius = $circleTwo->getRadius();
        if($circleoneRadius>$circletwoRadius){
            return 1;
        }else if($circleoneRadius < $circletwoRadius){
            return -1;
        }else{
            return 0;
        }
    }
}