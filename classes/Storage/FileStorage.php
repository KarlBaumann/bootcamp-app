<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/23/2015
 * Time: 12:31 PM
 */

namespace Bootcamp\Demo\Storage;

class FileStorage implements StorageInterface
{

    protected $db = [];

    public function store($place, $data)
    {
        $this->db['data'] = $data;
        $this->db['place'] = $place;

//var_dump($data);

        return $data['aaa'] . ' stored in ' . $place;
    }

    public function get($place)
    {

    }
}