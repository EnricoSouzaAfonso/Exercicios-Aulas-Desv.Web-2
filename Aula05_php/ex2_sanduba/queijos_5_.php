<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['pedido']['queijos'] = $_POST['queijos'] ?? [];
    header('Location: molhos_6_.php');
    exit();
}
$pg_atual = 'queijos';
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queijos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <form action="queijos_5_.php" method="post">
        <label>Escolha seu queijo (opcional)</label>
        
        <div class="form-option">
            <input type="checkbox" name="queijos[]" value="Cheddar" id="cheddar">
            <label for="cheddar">Cheddar</label>
        </div>
        <div class="form-option">
            <input type="checkbox" name="queijos[]" value="Prato" id="prato">
            <label for="prato">Prato</label>
        </div>
        <div class="form-option">
            <input type="checkbox" name="queijos[]" value="Muçarela" id="mucarela">
            <label for="mucarela">Muçarela</label>
        </div>
        <div class="form-option">
            <input type="checkbox" name="queijos[]" value="Parmesão" id="parmesao">
            <label for="parmesao">Parmesão</label>
        </div>

        <input type="submit" value="Próximo">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>