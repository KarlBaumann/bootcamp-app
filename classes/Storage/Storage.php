<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/23/2015
 * Time: 12:27 PM
 */


namespace Bootcamp\Demo\Storage;

interface Storage
{
    public function store($place, $data);

    public function get($place);
}