<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/23/2015
 * Time: 12:50 PM
 */

require_once __DIR__ . '/vendor/autoload.php';

use Bootcamp\Demo\Storage;

$s = new Storage\FileStorage();

$c = new Storage\Controller($s);

var_dump($c->doSomething('some data'));