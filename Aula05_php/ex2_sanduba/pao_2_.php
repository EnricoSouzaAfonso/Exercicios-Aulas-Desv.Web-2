<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['tipo_pao'])) {
        $_SESSION['pedido']['pao'] = $_POST['tipo_pao'];
    }
    header('Location: carne_3_.php');
    exit();
}
$pg_atual = 'pao';
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de pao</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <form action="pao_2_.php" method="post">
        <label>Escolha seu pão:</label>

        <div class="form-option">
            <input type="radio" name="tipo_pao" value="Italiano Branco" id="italiano" required>
            <label for="italiano">Italiano Branco</label>
        </div>
        <div class="form-option">
            <input type="radio" name="tipo_pao" value="Australiano" id="australiano">
            <label for="australiano">Australiano</label>
        </div>
        <div class="form-option">
            <input type="radio" name="tipo_pao" value="7 Grãos" id="graos">
            <label for="graos">7 Grãos</label>
        </div>
        <div class="form-option">
            <input type="radio" name="tipo_pao" value="Baguete" id="baguete">
            <label for="baguete">Baguete</label>
        </div>

        <input type="submit" value="Próximo">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>