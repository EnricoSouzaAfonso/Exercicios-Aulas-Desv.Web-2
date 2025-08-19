<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['pedido']['vegetais'] = $_POST['vegetais'] ?? [];
    header('Location: queijos_5_.php');
    exit();
}
$pg_atual = 'vegetais';
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <form action="vegetais_4_.php" method="post">
        <label>Escolha seus vegetais (opcional)</label>
        
        <div class="form-option">
            <input type="checkbox" name="vegetais[]" value="Alface" id="alface">
            <label for="alface">Alface</label>
        </div>
        <div class="form-option">
            <input type="checkbox" name="vegetais[]" value="Rúcula" id="rucula">
            <label for="rucula">Rúcula</label>
        </div>
        <div class="form-option">
            <input type="checkbox" name="vegetais[]" value="Tomate" id="tomate">
            <label for="tomate">Tomate</label>
        </div>
        <div class="form-option">
            <input type="checkbox" name="vegetais[]" value="Couve frita" id="couve">
            <label for="couve">Couve (frita)</label>
        </div>
        <div class="form-option">
            <input type="checkbox" name="vegetais[]" value="Repolho" id="repolho">
            <label for="repolho">Repolho</label>
        </div>
        <div class="form-option">
            <input type="checkbox" name="vegetais[]" value="Pepino" id="pepino">
            <label for="pepino">Pepino</label>
        </div>
        
        <input type="submit" value="Próximo">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>