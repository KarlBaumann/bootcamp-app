<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/19/2015
 * Time: 4:20 PM
 */

/**
 * Class Rectangle
 */
namespace Bootcamp\Demo;

class Rectangle extends Shape
{
    /**
     * @var float $width rectangle width
     */
    private $width;
    /**
     * @var float $height rectangle height
     */
    private $height;

    /**
     * @param $width
     * @param $height
     */
    public function __construct($width, $height)
    {
        $this->height = $height;
        $this->width = $width;
    }

    /** Calculates area of Rectangle
     *
     * @return float
     */
    public function getArea()
    {
        return $area = $this->width * $this->height;
    }
}
