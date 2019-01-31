<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 28/01/2019
 * Time: 13:55
 */
include "Circle.php";
include "Comperator.php";

class ComparableCircle extends Circle implements Comperator
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compare($circleone, $circletwo)
    {
        $circleoneRadius = $this->getRadius();
        $circletwoRadius = $this->getRadius();
        if ($circleoneRadius > $circletwoRadius) {
            return 1;
        } else if ($circleoneRadius < $circletwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}
