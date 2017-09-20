<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

    if(isset($_POST["submit"])) {
        $length = $_POST["length"];
        $posts = $_POST["posts"];
        $railings = $_POST["railings"];
        result($length, $posts, $railings);
    }
    function result($length, $posts, $railing) {
           if ($_POST["posts"] < 2 && $_POST["length"] === "") {
                echo "Sorry, lack of components";
            } else {
               length($length);
            }
    }
    function length($length)
    {

        $railings_amount = 0;
        $length *= 1;
        if ($length > 0) {

        }
        while($length > 0 ) {
            $posts_amount++;
            $railings_amount++;
            $length -= 1.7;
        }
        echo "<p>Posts: " . $posts_amount . "</p>";
        echo "<p>Railings: " . $railings_amount . "</p>";

    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="railway_calc.php" method="post">
    <h4>What length do you need?</h4>
    <p><input type="number" placeholder="Length" name="length" step=".1"></p>
    <p><input type="submit" name="submit"></p>
    <p>Available Railings</p>
    <p>===============================</p>
    <p>OR</p>
    <p>===============================</p>
    <h4>Provide available amount of components</h4>
    <p><input type="number" placeholder="Amount of railings" name="railings""></p>
    <p>Available Posts</p>
    <p><input type="number" placeholder="Amount of posts" name="posts""></p>
    <p><input type="submit" name="submit"></p>
</form>
</body>
</html>