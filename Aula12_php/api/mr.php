<?php
header('Content-Type: application/json');
include 'conexao.php';
$stmt = $pdo->query("SELECT valor FROM memoria WHERE id = 1");
$memoria = $stmt->fetch(PDO::FETCH_ASSOC);
echo json_encode($memoria); // Retorna {'valor': '123.45'}
?>