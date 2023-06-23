<?php
require_once "function.php";
$correctAnswers = array("London", "Paris", "Madrid");

$array=pullUserAnswers();

    $score=calculateCorrectAnswers($array, $correctAnswers, 1);
    setcookie("score", $score, time()+ 60);
    echo  $score;



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
<form id="quizForm" action="quiz3.php" method="post" onsubmit="return validateForm()">
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
    <input type="submit" value="Next" >
</form>
<script>

        function validateForm() {
        var group1 = document.getElementsByName('list[]');
        var group2 = document.getElementsByName('list2[]');
        var group3 = document.getElementsByName('list3[]');

        var isGroup1Checked = false;
        var isGroup2Checked = false;
        var isGroup3Checked = false;

        // Проверяем первую группу
        for (var i = 0; i < group1.length; i++) {
        if (group1[i].checked) {
        isGroup1Checked = true;
        break;
    }
    }

        // Проверяем вторую группу
        for (var i = 0; i < group2.length; i++) {
        if (group2[i].checked) {
        isGroup2Checked = true;
        break;
    }
    }

        // Проверяем третью группу
        for (var i = 0; i < group3.length; i++) {
        if (group3[i].checked) {
        isGroup3Checked = true;
        break;
    }
    }

        // Если хотя бы один чекбокс не отмечен в любой из групп
        if (!isGroup1Checked || !isGroup2Checked || !isGroup3Checked) {
            var messageElement = document.createElement('p');
            messageElement.textContent = 'Please answer all questions.';
            document.body.appendChild(messageElement);
            setTimeout(function() {
                document.body.removeChild(messageElement);
            }, 2000);
        return false; // Отменяем отправку формы

    }
    }

</script>

</body>
</html>

