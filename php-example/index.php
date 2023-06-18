<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
<?php
    define('MY_AGE', 25);
    echo MY_AGE . '<br>';

    echo M_PI . '<br>';
    echo M_E . '<br>';

    echo abs(-22) . '<br>';
    echo ceil (3.1).'<br>';
    echo floor (3.1).'<br>';
    echo round (3.4).'<br>';
    echo round (3.445963, 3).'<br>';
    echo 'Random: ' . mt_rand(1,20) . '<br>';
    echo 'Min: '. min(1,8,9).'<br>';

    echo "Hello World!";
    echo "<br>Hello\"" . '<br>';
    $a = 5;
    $b = 4;
    $Name="Yuliia";
    $Age=34;
    echo "\nBefore swapping:  ". $a . ',' . $b;
    list($a, $b) = array($b, $a);
    echo "\nAfter swapping:  ". $a . ',' . $b."\n";
    echo "<br>a + b = ".$a + $b;
    echo "<br>Hello! My name is " . $Name;
    echo "<br>Hello! My name is $Name";
    echo '<br>Hello! My name is $Name';
    echo "<br>I am " . $Age . '<br>';
    echo 'Length = '.strlen($Name) .'<br>';
    echo strtoupper($Name) . '<br>';
    echo strtolower(trim("   Dfg")).'<br>';
    echo md5($Name).'<br>';

?>
</body>
</html>
