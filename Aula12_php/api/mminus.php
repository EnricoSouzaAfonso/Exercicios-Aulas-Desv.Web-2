<?php
header('Content-Type: application/json');
include 'conexao.php';
$valor_subtrair = $_GET['valor'] ?? 0;

$pdo->beginTransaction();
$stmt = $pdo->prepare("SELECT valor FROM memoria WHERE id = 1 FOR UPDATE");
$stmt->execute();
$valor_atual = $stmt->fetchColumn();
$novo_valor = $valor_atual - $valor_subtrair;
$update_stmt = $pdo->prepare("UPDATE memoria SET valor = ? WHERE id = 1");
$update_stmt->execute([$novo_valor]);
$pdo->commit();

echo json_encode(['novo_valor' => $novo_valor]);
?>