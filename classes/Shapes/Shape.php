<?php
/**
 * Class Shape
 */
namespace Bootcamp\Demo\Shapes;

abstract class Shape ///////abstraction cannot be instantiated
{
    /**
     * @var
     */
    public $area;

    /**
     * @return mixed area of the shape
     */
    abstract public function getArea(); ///apstract function forces child classes to implement it
}
