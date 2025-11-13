<?php
header('Content-Type: application/json');
$x = $_GET['x'] ?? 0;
echo json_encode(['resultado' => sqrt($x)]);
?>