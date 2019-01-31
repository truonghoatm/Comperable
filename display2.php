<?php
include "CircleComparator.php";
$circleone = new Circle("circleone",8);
$circletwo = new Circle("circletwo",7);
$circlecomparator = new CircleComparator();
 echo $circlecomparator->compare($circleone,$circletwo);