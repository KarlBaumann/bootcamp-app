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

$db = new Db();
$name = $_REQUEST['name'];


//die($_REQUEST['delete']);

if (isset($_REQUEST['delete'])) {
    $db->deleteComment($_REQUEST['id']);
} else {
    setcookie('NameCookie', $name);
    $comment = $_REQUEST['comment'];
//$comment = new Comment($name, $comment);
    $db->addComment($name, $comment);
}


header('location: /');


//$comment->name = 'John';
//$comment2->name = 'Maija';

//var_dump($comment, $comment2, $comment->getName());