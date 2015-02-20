<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/19/2015
 * Time: 5:11 PM
 */


require_once __DIR__ . '/vendor/autoload.php';
use Bootcamp\Demo\Rectangle;

class SilexRectangle
{
    public $width;
    public $height;

    function __construct($w, $h)
    {
        $this->height = $h;
        $this->width = $w;
    }

    public function ahhh()
    {
        $app = new Silex\Application();

        $app->get('/rectangle:{width}:{height}', function ($width, $height) use ($app) {
        $return = new Rectangle($this->width, $this->height);
        $return = $return->getArea();
        return $app->run();
    });


    }
}
