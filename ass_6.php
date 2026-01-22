<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$p = 1000; // Principal
$r = 5;    // Rate of interest
$t = 2;    // Time in years

$si = ($p * $r * $t) / 100;

echo "Principal: $p, Rate: $r%, Time: $t years<br>";
echo "Simple Interest: $si";
?>
</body>
</html>