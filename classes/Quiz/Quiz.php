<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/20/2015
 * Time: 2:54 PM
 */

namespace Bootcamp\Demo\Quiz;

/**
 * Class Quiz
 * @package Bootcamp\Demo\Quiz
 */
class Quiz
{
    /**
     * Contains all the questions
     *
     * @var array $questions
     */
    protected $questions = [];
    /**
     * Holds question name
     *
     * @var string $name
     */
    protected $name;
    /**
     * @var integer $id
     */
    protected $id;

    public function __construct($name)
    {
        $this->name = $name;
    }


    public function addQuestion(Question $question)
    {
        $this->questions[] = $question;
    }
}
