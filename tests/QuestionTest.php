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

    public function testOptionCount()
    {
        $question = new Quiz\Question('dummy2');
        $this->assertEquals(0, $question->getAnswerCount());

        $o = m::mock('\Bootcamp\Demo\Quiz\Option');
        $o->shouldReceive('isCorrect');

        for ($i = 1; $i < 1000; $i++) {
            $question->addOption($o);
            $this->assertEquals($i, $question->getAnswerCount());
        }

    }
}