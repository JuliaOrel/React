<?php
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
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label>1.</label><br>
    <input type="text" name="answer1"><br>
    <label>2.</label><br>
    <input type="text" name="answer2"><br>
    <label>3.</label><br>
    <input type="text" name="answer3"><br>
    <input type="submit" value="Next">
</form>
</body>
</html>

