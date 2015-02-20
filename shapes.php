<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/19/2015
 * Time: 4:29 PM
 */


spl_autoload_register('myAutoLoader');

function myAutoLoader($class_name)
{
    include 'classes/' . $class_name . '.php';
}

/*require 'classes/Shape.php';
require 'classes/Circle.php';
require 'classes/Cylinder.php';
require 'classes/Rectangle.php';*/


$rect = new Rectangle(1, 2);
$circle = new Circle(5);
//$cyl = new Cylinder(33,1);

var_dump($rect->getArea(), $circle->getArea());