<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
<?php

$x = $_GET['var_x'];
$y = $_GET['var_y'];
// > - <
if($x > $y) {
  echo "$x é maior que $y <br>";
}

if($x < $y) {
  echo "$y é maior que $x<br>";
}
//>= - <=
if($x >= $y) {
  echo "$x é maior ou igual que $y<br>";
}

if($x <= $y) {
  echo "$x é menor ou igual que $y<br>";
}
//==
if($x == $y) {
  echo "$x é igual a $y<br>";
}

if($y == $x) {
  echo "$y é igual a $x<br>";
}
//!=
if($x != $y) {
  echo "$x é diferente de $y<br>";
}

if($y != $x) {
  echo "$y é diferente de $x<br>";
}
//<>
if($x <> $y) {
  echo "$x é diferente de $y<br>";
}

if($y <> $x) {
  echo "$y é diferente de $x<br>";
}

//===
if($x === $y) {
  echo "$x é idêntico(mesmo tipo) do que $y<br>";
}

if($y === $x) {
  echo "$y é idêntico(mesmo tipo) do que $x<br>";
}

//!==
if($x === $y) {
  echo "$x é não idêntico(mesmo tipo) de $y<br>";
}

if($y === $x) {
  echo "$y é não idêntico(mesmo tipo) de $x<br>";
}

//<=>
if($x <=> $y) {
  echo "$x pode ser maior, menor ou igual a $y<br>";
}

if($y <=> $x) {
  echo "$y pode ser maior, menor ou igual a $x<br>";
}
    ?>
</body>
</html>