<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['tipo_carne'])) {
        $_SESSION['pedido']['carne'] = $_POST['tipo_carne'];
    }
    header('Location: vegetais_4_.php');
    exit();
}
$pg_atual = 'carne';
include 'menu.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de carne</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <form action="carne_3_.php" method="post">
        <label>Escolha sua carne:</label>
        
        <div class="form-option">
            <input type="radio" name="tipo_carne" value="Bovina" id="bovina" required>
            <label for="bovina">Bovina</label>
        </div>
        <div class="form-option">
            <input type="radio" name="tipo_carne" value="Suína" id="suina">
            <label for="suina">Suína</label>
        </div>
        <div class="form-option">
            <input type="radio" name="tipo_carne" value="Frango" id="frango">
            <label for="frango">Frango</label>
        </div>

        <input type="submit" value="Próximo">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>