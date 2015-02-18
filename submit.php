<?php

$dsn = 'mysql:dbname=bootcamp;host=localhost';
$user = 'bootcamp';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$name = $_REQUEST['name'];
$comment = $_REQUEST['comment'];

setcookie('NameCookie', $name);

$sth = $dbh->prepare("INSERT INTO `comments` (`name`, `comment`) VALUES (:name, :comment);");
$sth->bindParam(':name', $name);
$sth->bindParam(':comment', $comment);

try {
    $sth->execute();
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}


header('location: /');