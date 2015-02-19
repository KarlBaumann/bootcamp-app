<?php

/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 2/19/2015
 * Time: 10:19 AM
 */
class Db
{

    private $dsn = 'mysql:dbname=bootcamp;host=localhost';
    private $user = 'bootcamp';
    private $password = '';
    private $dbh;

    function __construct()
    {
        try {
            $this->dbh = new PDO($this->dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            return 'Connection failed: ' . $e->getMessage();
        }
    }

    function addComment($name, $comment)
    {
        $sth = $this->dbh->prepare("INSERT INTO `comments` (`name`, `comment`) VALUES (:name, :comment);");
        $sth->bindParam(':name', $name);
        $sth->bindParam(':comment', $comment);

        try {
            $sth->execute();
        } catch (PDOException $e) {
            die('ERROR: ' . $e->getMessage());
        }
    }

    function deleteComment($id)
    {
        $sth = $this->dbh->prepare("DELETE FROM `comments` WHERE id=:id;");
        $sth->bindParam(':id', $id);

        try {
            $sth->execute();
        } catch (PDOException $e) {
            die ('ERROR: ' . $e->getMessage());
        }
    }
}