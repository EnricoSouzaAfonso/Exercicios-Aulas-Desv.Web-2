<?php
ob_start();
session_start();

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
<body>
    <form action="pao_2_.php" method="post">
        <label>Escolha seu pão:</label>
        <label class="form-option" for="italiano"><input type="radio" name="tipo_pao" value="Italiano Branco" id="italiano" required> Italiano Branco</label>
        <label class="form-option" for="australiano"><input type="radio" name="tipo_pao" value="Australiano" id="australiano"> Australiano</label>
        <label class="form-option" for="graos"><input type="radio" name="tipo_pao" value="7 Grãos" id="graos"> 7 Grãos</label>
        <label class="form-option" for="baguete"><input type="radio" name="tipo_pao" value="Baguete" id="baguete"> Baguete</label>
        <input type="submit" value="Próximo">
    </form>
</body>
</html>
<?php ob_end_flush(); ?>