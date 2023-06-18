<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page</title>
</head>




</head>

<body>
<?php
// Получение значений переменных
$tag = "h1";
$background_color = "blue";
$color = "red";
$width = "200px";
$height = "100px";



echo "  background-color: {$background_color};";
echo "  color: {$color};";
echo "  width: {$width};";
echo "  height: {$height};";


echo "<div style=\"background-color:  $background_color; color: $color; width: $width; height: $height\">Hello</div>";

    ?>
</body>

</html>



