<?php
/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/19/2015
 * Time: 10:24 AM
 */

function __autoload($class_name)
{
    include 'classes/' . $class_name . '.php';
}

require_once __DIR__ . '/vendor/autoload.php';

$db = new Db();
$name = $_REQUEST['name'];

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('log.log', Logger::WARNING));

//die($_REQUEST['delete']);

if (isset($_REQUEST['delete'])) {
    $db->deleteComment($_REQUEST['id']);
    $log->addDebug('comment deleted');
} else {
    setcookie('NameCookie', $name);
    $comment = $_REQUEST['comment'];
//$comment = new Comment($name, $comment);
    $db->addComment($name, $comment);
    $log->addInfo('comment added');
}


header('location: /');


//$comment->name = 'John';
//$comment2->name = 'Maija';

//var_dump($comment, $comment2, $comment->getName());