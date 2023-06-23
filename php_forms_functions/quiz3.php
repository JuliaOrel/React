<?php

$score = $_COOKIE["score"];

$correctAnswers = [["London", "Paris"], ["Paris", "Madrid"], ["London", "Madrid"]];
$array1=$_POST["list"]; $array2=$_POST["list2"]; $array3=$_POST["list3"];
$array=array($array1, $array2, $array3);

$countDif=0;
for($i=0; $i<count($correctAnswers); $i++){
    for($j=0; $j<count($correctAnswers[$i]); $j++){
    if(!isset($array[$i][$j]) || $correctAnswers[$i][$j]!=$array[$i][$j] ){
        $countDif++;
    }

    }
}
$score2=9-($countDif*1.5);

$score+=$score2;
echo $score2;
setcookie("score", $score, time()+ 60);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz3</title>
</head>
<body>
<form action="quiz4_finish.php" method="post">
    <label>1.</label><br>
    <input type="text" name="answer1"><br>
    <label>2.</label><br>
    <input type="text" name="answer2"><br>
    <label>3.</label><br>
    <input type="text" name="answer3"><br>
    <input type="submit" value="Finish">
</form>
</body>
</html>

