<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/19/2015
 * Time: 4:20 PM
 */


namespace Bootcamp\Demo;

/**
 * Class Circle
 */
class Circle extends Shape
{
    /**
     * @var
     */
    protected $radius;

    /**
     * @param $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * Calculates and returns area of the circle
     *
     * @return int
     */
    public function getArea()
    {
        return $area = M_PI * $this->radius ** 2;
    }
}
