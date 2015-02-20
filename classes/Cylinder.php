<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/19/2015
 * Time: 4:20 PM
 */

/**
 * Class Cylinder
 */
namespace Bootcamp\Demo;

class Cylinder extends Circle
{
    /**
     * @var
     */
    private $height;

    /**
     * Steals radius from circle
     *
     * @param $height
     * @param $radius
     */
    public function __construct($height, $radius)
    {
        $this->height = $height;
        $this->radius = $radius;
    }

    /**
     * Returns the area of the Cylinder
     *
     * @return float
     */
    public function getArea()
    {

        return $area = (2 * M_PI * $this->radius) ^ 2 + $this->height * (2 * M_PI * $this->radius);
    }
}
