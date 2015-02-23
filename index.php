<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/19/2015
 * Time: 5:11 PM
 */

require_once __DIR__ . '/vendor/autoload.php';

use \Bootcamp\Demo\Shapes;

$app = new Silex\Application();

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello ' . $app->escape($name);
});

$app->get('/rectangle/{width}:{height}', function ($width, $height) use ($app) {
    $r = new Shapes\Rectangle($width, $height);

    return $r->getArea();
});

$app->run();