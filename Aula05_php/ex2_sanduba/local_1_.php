<?php
ob_start();
session_start();

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
<body>
    <form action="local_1_.php" method="post">
        <label>Gostaria de Levar seu pedido ou comer no local?</label>
        <label class="form-option" for="levar"><input type="radio" name="leva_loca" value="Levar" id="levar" required> Levar meu pedido</label>
        <label class="form-option" for="local"><input type="radio" name="leva_loca" value="Comer no Local" id="local"> Comer no Local</label>
        <input type="submit" value="Próximo">
    </form>
</body>
</html>
<?php ob_end_flush(); ?>