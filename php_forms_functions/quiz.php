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
<form id="quizForm" action="quiz2.php" method="post">
    <label>1.</label><br>
    <input type="radio" name="answer1" value="London"><label for="answer1">London</label><br>
    <input type="radio" name="answer1" value="Paris"><label for="answer1">Paris</label><br>
    <input type="radio" name="answer1" value="Madrid"><label for="answer1">Madrid</label><br>
    <label>2.</label><br>
    <input type="radio" name="answer2" value="London"><label for="answer2">London</label><br>
    <input type="radio" name="answer2" value="Paris"><label for="answer2">Paris</label><br>
    <input type="radio" name="answer2" value="Madrid"><label for="answer2">Madrid</label><br>
    <label>3.</label><br>
    <input type="radio" name="answer3" value="London"><label for="answer3">London</label><br>
    <input type="radio" name="answer3" value="Paris"><label for="answer3">Paris</label><br>
    <input type="radio" name="answer3" value="Madrid"><label for="answer3">Madrid</label><br>
    <input type="submit" value="Next">
</form>
<script>
    document.getElementById('quizForm').addEventListener('submit', function(event) {
        var checkedInputs = document.querySelectorAll('input[type="radio"]:checked');
        console.log(checkedInputs);
        if (checkedInputs.length<3) {
            event.preventDefault(); // Предотвращаем отправку формы

            var messageElement = document.createElement('p');
            messageElement.textContent = 'Please answer all questions.';
            document.body.appendChild(messageElement);
            setTimeout(function() {
                document.body.removeChild(messageElement);
            }, 2000);
        }
    })
</script>
</body>
</html>
