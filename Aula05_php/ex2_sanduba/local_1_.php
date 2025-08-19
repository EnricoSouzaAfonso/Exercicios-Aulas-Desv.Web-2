<?php 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['leva_loca'])) {
        $_SESSION['pedido']['local'] = $_POST['leva_loca'];
    }
    header('Location: pao_2_.php');
    exit();
}
$pg_atual = 'local';
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <form action="local_1_.php" method="post">
    <label>Gostaria de Levar seu pedido ou comer no local?</label>
    
    <div class="form-option">
        <input type="radio" name="leva_loca" value="Levar" id="levar" required>
        <label for="levar">Levar meu pedido</label>
    </div>

    <div class="form-option">
        <input type="radio" name="leva_loca" value="local" id="local">
        <label for="local">Comer no Local</label>
    </div>

    <input type="submit" value="Próximo">
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>