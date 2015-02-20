<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/20/2015
 * Time: 5:16 PM
 */

namespace Bootcamp\Demo\Tests;

use Bootcamp\Demo\Quiz;
use PHPUnit_Framework_TestCase;
use Mockery as m;


class QuestionTest extends PHPUnit_Framework_TestCase
{
    public function testMultiAnswer()
    {


        $question = new Quiz\Question('dummy');
        $this->assertFalse($question->multiAnswer());

        $o = m::mock('\Bootcamp\Demo\Quiz\Option');
        $o->shouldReceive('isCorrect')
            ->andReturn(true);

        $question->addOption($o);
        $this->assertFalse($question->multiAnswer());

        $question->addOption($o);
        $this->assertTrue($question->multiAnswer());
    }
}