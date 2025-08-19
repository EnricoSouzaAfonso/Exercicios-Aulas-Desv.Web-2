<?php 
$pg_atual = 'resumo';
include 'menu.php';


if (!isset($_SESSION['pedido']) || empty($_SESSION['pedido'])) {
    header('Location: local_1_.php?erro=pedido_vazio');
    exit();
}

$pedido = $_SESSION['pedido'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<body>
    <div class="card" style="max-width: 600px; margin: 40px auto; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-radius: 12px;">
        <div class="card-header bg-custom-purple text-white text-center">
            <h2 class="mb-0">Resumo do seu Pedido</h2>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <strong>Local:</strong> <?php echo htmlspecialchars($pedido['local'] ?? 'Não escolhido'); ?>
            </li>
            <li class="list-group-item">
                <strong>Pão:</strong> <?php echo htmlspecialchars($pedido['pao'] ?? 'Não escolhido'); ?>
            </li>
            <li class="list-group-item">
                <strong>Carne:</strong> <?php echo htmlspecialchars($pedido['carne'] ?? 'Não escolhida'); ?>
            </li>
            <li class="list-group-item">
                <strong>Vegetais:</strong> 
                <?php 
                if (!empty($pedido['vegetais'])) {
                    echo htmlspecialchars(implode(', ', $pedido['vegetais']));
                } else {
                    echo "Nenhum";
                }
                ?>
            </li>
            <li class="list-group-item">
                <strong>Queijos:</strong> 
                <?php 
                if (!empty($pedido['queijos'])) {
                    echo htmlspecialchars(implode(', ', $pedido['queijos']));
                } else {
                    echo "Nenhum";
                }
                ?>
            </li>
            <li class="list-group-item">
                <strong>Molhos:</strong> 
                <?php 
                if (!empty($pedido['molhos'])) {
                    echo htmlspecialchars(implode(', ', $pedido['molhos']));
                } else {
                    echo "Nenhum";
                }
                ?>
            </li>
        </ul>
        <div class="card-body text-center">
            <a href="finalizar.php" class="btn btn-success">Confirmar Pedido</a>
            <a href="finalizar.php?acao=cancelar" class="btn btn-danger">Refazer Pedido</a>
        </div>
    </div>
</body>
</html>