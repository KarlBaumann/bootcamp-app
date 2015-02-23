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

        $file = 'FileStorage.json';

        $content = file_get_contents($file);
        $content .= json_encode($data);
        file_put_contents($file, $content);

    }

    public function get($place)
    {

    }
}