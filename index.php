<?php

include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$shapes[0] = new Circle("Circle " ,3);
$shapes[1] = new Cylinder("Cylinder" , 3,4);
$shapes[2] = new Square('Suare' , 4,4,4);
$shapes[3] = new Rectangle('Retangle',3,4);

$shape = new Shape("Khoi tao");

foreach ($shapes as $shape){
    echo $shape->show() . " : " . $shape->calculateArea().'<br>';
    if ($shape instanceof Colorable){
        echo $shape->show() . ": ".$shape->howToColor()."<br>";
    }
}