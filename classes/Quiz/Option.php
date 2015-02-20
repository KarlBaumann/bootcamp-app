<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/20/2015
 * Time: 2:55 PM
 */

namespace Bootcamp\Demo\Quiz;

/**
 * Class Answer
 * @package Bootcamp\Demo\Quiz
 */
class Option
{
    /**
     * @var integer
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var boolean
     */
    protected $isCorrect;


    public function __construct($name, $isCorrect = false)
    {
        $this->name = $name;
        $this->isCorrect = $isCorrect;
    }

    public function isCorrect()
    {
        return $this->isCorrect;
    }
}
