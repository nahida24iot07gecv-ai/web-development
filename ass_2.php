<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$a = 10;
$b = 20;

echo "Before swapping: a = $a, b = $b<br>";

$temp = $a;
$a = $b;
$b = $temp;

echo "After swapping: a = $a, b = $b";
?>
</body>
</html>