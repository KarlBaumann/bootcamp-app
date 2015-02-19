<?php

/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/19/2015
 * Time: 10:16 AM
 */
class Comment
{
    private $name;
    private $comment;

    public function __construct($name, $comment)
    {
        $this->name = $name;
        $this->comment = $comment;
    }

    public function getName()
    {
        return $this->name;
    }
}