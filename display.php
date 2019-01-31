<?php
include "ComparableCircle.php";

$circles[0]= new ComparableCircle("circleOne",8);
$circles[1]= new ComparableCircle("circleTwo",5);
$circles[2]= new ComparableCircle("circleThree",6);
foreach ($circles as $circle){
    echo ("name:". $circle->getName().", radius: ". $circle->getRadius()."<br/>");
}
sort($circles);
foreach ($circles as $circle){
    echo ("name:". $circle->getName().", radius: ". $circle->getRadius()."<br/>");
}

