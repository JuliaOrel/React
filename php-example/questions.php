<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz</title>
</head>
<body>
<?php
    echo "Choose correct capital of Great Britain:" . '<br>';
    echo "<input type='radio' id='answer1' name='answer' value='answer1'>" .  "<label for='answer1'>London</label>" . '<br>';
    echo "<input type='radio' id='answer2' name='answer' value='answer2'>" .  "<label for='answer2'>Paris</label>" . '<br>';
    echo "<input type='radio' id='answer3' name='answer' value='answer3'>" .  "<label for='answer3'>Madrid</label>" . '<br>';
    echo "<input type='radio' id='answer4' name='answer' value='answer4'>" .  "<label for='answer4'>Lima</label>" . '<br>';
    echo '<hr>';
    echo "Choose colors of Ukrainian flag:" . '<br>';
    echo "<input type='checkbox' id='answer1' value='answer1'>" .  "<label for='answer1'>Yellow</label>" . '<br>';
    echo "<input type='checkbox' id='answer2' value='answer2'>" .  "<label for='answer2'>Blue</label>" . '<br>';
    echo "<input type='checkbox' id='answer3' value='answer3'>" .  "<label for='answer3'>Green</label>" . '<br>';
    echo "<input type='checkbox' id='answer4' value='answer4'>" .  "<label for='answer4'>Red</label>" . '<br>';
    echo '<hr>';
    echo "Describe your strengths and weaknesses" . '<br>';
    echo "<input type='text'>"

?>

</body>
</html>

