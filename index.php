<?php
include_once "../geometry-object/Shape.php";
include_once "Triangle.php";
$triangle = new Triangle("Triangle",6,6,6);
echo $triangle->toString();