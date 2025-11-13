<?php
header('Content-Type: application/json');
include 'conexao.php';
$stmt = $pdo->query("UPDATE memoria SET valor = 0 WHERE id = 1");
echo json_encode(['status' => 'Memória limpa']);
?>