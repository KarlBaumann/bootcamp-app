<!DOCTYPE html>
<html lang="en">
<head>
    <!--    phptherightway.com
    --> <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
    <h1>My First Bootstrap Page</h1>
    <button type="button" class="btn btn-default">Default</button>
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <a href="submit.php" class="btn btn-info" role="button">Link Button</a>
    <hr>
    <div class="form-group">
        <form method="post" action="submit.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?= $_COOKIE["NameCookie"] ?>"><br>
            <label for="comment">Comment:</label>
            <textarea class="form-control" rows="5" id="comment" name="comment">blaablaablaa</textarea>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    <div class="container">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Comment</th>
            </tr>
            <?php

            $dsn = 'mysql:dbname=bootcamp;host=localhost';
            $user = 'bootcamp';
            $password = '';

            try {
                $dbh = new PDO($dsn, $user, $password);
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }

            $sth = $dbh->prepare("SELECT * FROM comments");
            $sth->execute();

            $result = $sth->fetchAll();

            foreach ($result as $comment) {
                echo '<tr>';
                echo '<td>' . $comment['name'] . '</td>';
                echo '<td>' . $comment['comment'] . '</td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>
</div>