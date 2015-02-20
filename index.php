<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/19/2015
 * Time: 5:11 PM
 */


require_once __DIR__ . '/vendor/autoload.php';

class SilexRectangle
{
    public $width;
    public $height;

    public function ahhh()
    {
        $app = new Silex\Application();

        $app->get('/rectangle:{width}:{height}', function (SilexRectangle->$width, $height) use ($app) {
        $return = new \Bootcamp\Demo\Rectangle($width, $height);
        $return = $return->getArea();
        return $return;
    });

        return $app->run();
    }
}

class LessThanTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $ahh = new SilexRectangle();
        $ahh->ahhh();
        $this->assertLessThan(0, $width);
    }
}