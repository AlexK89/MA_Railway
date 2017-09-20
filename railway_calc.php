<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

    if(isset($_POST["submit"])) {
        $length = $_POST["length"] * 1;
        $posts = $_POST["posts"] * 1;
        $railings = $_POST["railings"] * 1;
        result($length, $posts, $railings);
    }
    function result($length, $posts, $railings) {
           if ($_POST["posts"] < 2 && $_POST["posts"] < 2 && $_POST["length"] === "") {
                echo "Sorry, lack of components";
            } else {
               components_calc($length);
               length($posts, $railings);
            }
    }
    function components_calc($length)
    {
        $posts_amount = 1;
        $railings_amount = 0;

        if ($length == 0) {
            $posts_amount = 0;
        }
        while($length > 0 ) {
            $posts_amount++;
            $railings_amount++;
            $length -= 1.7;
        }
        echo "<p>Posts: " . $posts_amount . "</p>";
        echo "<p>Railings: " . $railings_amount . "</p>";
    }
    function length($posts, $railings)
    {
        $max_length = 0;
        if ($posts > 1 && $railings > 0) {
            $max_length = 0.1;
        }
        while ($posts > 1 && $railings > 0) {
            $max_length += 1.6;
            $posts--;
            $railings--;
        }
        echo "<p>Length: " . $max_length . "</p>";
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