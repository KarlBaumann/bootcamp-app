<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/23/2015
 * Time: 12:36 PM
 */

namespace Bootcamp\Demo\Storage;

class Controller
{

    public $data;
    public $s;

    public function __construct(StorageInterface $store)
    {
        $this->s = $store;
    }

    public function doSomething()
    {
        $this->data = $_REQUEST;

        return $this->s->store('tmp', $this->data);
    }

}

