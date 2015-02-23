<?php

/**
 * Singleton example when you wont be able to instantiate same class twice.
 * Singleton = Single object
 * User: Karl
 * Date: 2/23/2015
 * Time: 11:51 AM
 */
class Db
{
    private static $instance = false;
    private $x;

    private function __construct()
    {

    }


    static public function getInstance()
    {
        //var_dump(self::$instance);

        if (self::$instance === false) {
            self::$instance = new self;
            self::$instance->x = rand();
        }

        return self::$instance;
    }
}

//$a = new Db();

var_dump(Db::getInstance());
var_dump(Db::getInstance());