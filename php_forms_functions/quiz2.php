<?php
session_start();
require_once 'function.php';

$correctAnswers = array("London", "Paris", "Madrid");
$array=[];
$j=0;
foreach($_POST as $value){
    $array[$j]=$value;
    $j++;
}

calculateCorrectAnswers($array, $correctAnswers);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz2</title>
</head>
<body>
<form action="quiz3.php" method="post">
    <label>1.</label><br>
    <input type="checkbox" name=list[] id="answer1" value="London"><label for="answer1">London</label><br>
    <input type="checkbox" name=list[] id="answer1" value="Paris"><label for="answer1">Paris</label><br>
    <input type="checkbox" name=list[] id="answer1" value="Madrid"><label for="answer1">Madrid</label><br>
    <label>2.</label><br>
    <input type="checkbox" name=list2[] id="answer2" value="London"><label for="answer2">London</label><br>
    <input type="checkbox" name=list2[] id="answer2" value="Paris"><label for="answer2">Paris</label><br>
    <input type="checkbox" name=list2[] id="answer2" value="Madrid"><label for="answer2">Madrid</label><br>
    <label>3.</label><br>
    <input type="checkbox" name=list3[] id="answer3" value="London"><label for="answer3">London</label><br>
    <input type="checkbox" name=list3[] id="answer3" value="Paris"><label for="answer3">Paris</label><br>
    <input type="checkbox" name=list3[] id="answer3" value="Madrid"><label for="answer3">Madrid</label><br>
    <input type="submit" value="Next">
</form>
</body>
</html>

