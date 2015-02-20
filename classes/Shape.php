<?php
/**
 * Class Shape
 */
namespace Bootcamp\Demo;

abstract class Shape   ///////abstraction cannot be instantiated
{
    /**
     * @var
     */
    public $area;

    /**
     * @return mixed area of the shape
     */
    public abstract function getArea(); ///apstract function forces child classes to implement it

}