<?php
include "CircleComparator.php";


$circleOne = new Circle("CircleOne", 6);
$circleTwo = new Circle("circleTwo", 8);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo));