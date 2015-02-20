<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/20/2015
 * Time: 3:28 PM
 */

require_once __DIR__ . '/vendor/autoload.php';

use Bootcamp\Demo\Quiz\Option;
use Bootcamp\Demo\Quiz\Question;
use Bootcamp\Demo\Quiz\Quiz;


$options1 = [];
$options1[] = new Option(443);
$options1[] = new Option(80, true);
$options1[] = new Option(22);
$options1[] = new Option(3306);

$questions[1] = new Question('What is http port?');

foreach ($options1 as $option) {
    $questions[1]->addOption($option);
}

$options2 = [];
$options2[] = new Option('atbilde 1');
$options2[] = new Option('pareiza atbilde', true);
$options2[] = new Option('atbilde 3', true);
$options2[] = new Option('atbilde 4');

$questions[2] = new Question('Tas ir jautaajums?');

foreach ($options2 as $option) {
    $questions[2]->addOption($option);
}


$quiz = new Quiz('PHP Quiz');

foreach ($questions as $question) {
    $quiz->addQuestion($question);
}

//var_dump($questions[1]->multiAnswer());


//echo '<pre>';
//var_export($quiz);