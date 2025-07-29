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
$Cap = $_GET['Capital'];
$Tax = $_GET['Taxa'];
$Tempo = $_GET['Tempo'];
$TaxJuros = $Cap * ($Tax / 100) * $Tempo;


echo "Sua taxa de Juros é: $TaxJuros";

?>
</body>
</html>