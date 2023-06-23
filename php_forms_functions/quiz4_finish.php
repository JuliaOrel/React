<?php
require_once "function.php";
$score=$_COOKIE["score"];
$correctAnswers = array("London", "Paris", "Madrid");
$array=pullUserAnswers();
$score2=calculateCorrectAnswers($array, $correctAnswers, 5);
$generalScore=$score+$score2;
echo "<h1>Your score is {$generalScore}</h1>";

?>
