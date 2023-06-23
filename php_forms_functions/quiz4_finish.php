<?php
require_once "function.php";
$score=$_COOKIE["score"];
$correctAnswers = array("London", "Paris", "Madrid");
$array=pullUserAnswers();
$score2=calculateCorrectAnswers($array, $correctAnswers, 5);
$generalScore=$score+$score2;
echo "<h1>Your score is {$generalScore}</h1>";
setcookie("score", "", time() - 60);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finish/Result</title>
</head>
<body>
<form action="quiz.php" method="get">
    <input type="submit" value="Restart">
</form>
</body>
</html>
