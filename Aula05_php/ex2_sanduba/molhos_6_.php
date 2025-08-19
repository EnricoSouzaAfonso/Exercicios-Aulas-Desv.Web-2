<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['pedido']['molhos'] = $_POST['molhos'] ?? [];
    header('Location: resumo.php');
    exit();
}
$pg_atual = 'molhos';
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Molhos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <form action="molhos_6_.php" method="post">
        <label>Escolha seus molhos (opcional)</label>
        
        <div class="form-option">
            <input type="checkbox" name="molhos[]" value="Mostarda e Mel" id="mostarda">
            <label for="mostarda">Mostarda e Mel</label>
        </div>
        <div class="form-option">
            <input type="checkbox" name="molhos[]" value="Maionese" id="maionese">
            <label for="maionese">Maionese</label>
        </div>
        <div class="form-option">
            <input type="checkbox" name="molhos[]" value="Ketchup" id="ketchup">
            <label for="ketchup">Ketchup</label>
        </div>

        <input type="submit" value="Ver Resumo do Pedido">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>