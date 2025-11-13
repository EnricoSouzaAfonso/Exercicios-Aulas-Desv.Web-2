<?php
header('Content-Type: application/json');
$x = $_GET['x'] ?? 0;
$y = $_GET['y'] ?? 1; // Padrão 1 para evitar divisão por zero

if ($y == 0) {
    echo json_encode(['erro' => 'Divisão por zero']);
} else {
    echo json_encode(['resultado' => $x / $y]);
}
?>