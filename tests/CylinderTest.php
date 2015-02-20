<?php

/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/20/2015
 * Time: 10:59 AM
 */

use Bootcamp\Demo\Cylinder;


class CylinderTest extends PHPUnit_Framework_TestCase
{
    public function testCylinder()
    {
        $cyl = new Cylinder(3, 1);
        $this->assertEquals(18, $cyl->getArea());
    }

}