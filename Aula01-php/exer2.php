<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 2 pt2</title>
</head>
<body>
<?php
$pi = pi();
$raio = $_GET['raio'];
$area =  $pi * $raio * $raio;

echo "Área Da Pizza: <br> $area <br> <br> Número PI: $pi";

?>
</body>
</html>