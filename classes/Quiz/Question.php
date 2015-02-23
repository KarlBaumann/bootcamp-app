<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/20/2015
 * Time: 2:55 PM
 */

namespace Bootcamp\Demo\Quiz;

/**
 * Class Question
 * @package Bootcamp\Demo\Quiz
 */
class Question
{
    /**
     * Holds all the questions
     *
     * @var array
     */
    protected $options = [];
    /**
     * @var integer
     */
    protected $id;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var integer
     */
    protected $type;

    protected $optionCount = 0;

    protected $isCorrectCount;

    public function __construct($name = '')
    {
        $this->title = $name;
    }

    public function addOption(Option $option)
    {
        $this->options[] = $option;
        $this->optionCount++;
        if ($option->isCorrect() === true) {
            $this->isCorrectCount++;
        }
    }

    public function multiAnswer()
    {
        if ($this->isCorrectCount > 1) {
            return true;
        }

        return false;

    }

    public function getAnswerCount()
    {
        return $this->optionCount;
    }
}
