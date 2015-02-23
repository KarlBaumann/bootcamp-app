<?php

/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/20/2015
 * Time: 10:51 AM
 */

namespace Bootcamp\Demo\Tests;

use Bootcamp\Demo\Shapes;
use PHPUnit_Framework_TestCase;

class CircleTest extends PHPUnit_Framework_TestCase
{
    public function testCircle()
    {
        $circle = new Shapes\Circle(1);
        $this->assertEquals(M_PI, $circle->getArea());
    }
}
