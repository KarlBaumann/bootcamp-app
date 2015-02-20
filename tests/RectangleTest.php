<?php

/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/20/2015
 * Time: 10:27 AM
 */
class RectangleTest extends PHPUnit_Framework_TestCase
{
    public function testRectangle()
    {
        $rectangle = new \Bootcamp\Demo\Rectangle(5, 2);
        $this->assertEquals(10, $rectangle->getArea());
    }
}