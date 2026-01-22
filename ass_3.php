<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$radius = 5;
$area = pi() * pow($radius, 2);

echo "Radius: $radius<br>";
echo "Area of the Circle: " . round($area, 2);
?>
</body>
</html>