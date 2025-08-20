<?php ob_start(); ?>
<?php
 include 'menu.php';

// VERIFICA SE A AÇÃO É 'CANCELAR' (veio do botão "Refazer Pedido")
if (isset($_GET['acao']) && $_GET['acao'] == 'cancelar') {
    
    // 1. Limpa todas as variáveis da sessão.
    session_unset();

    // 2. Destrói a sessão completamente.
    session_destroy();

    // 3. Redireciona o usuário de volta para a primeira página.
    header('Location: local_1_.php');
    exit(); // Encerra o script para garantir o redirecionamento.
}

// SE NÃO FOR 'CANCELAR', SIGNIFICA QUE É UMA CONFIRMAÇÃO DE PEDIDO.
// A lógica é a mesma: o pedido foi concluído, então a sessão deve ser limpa.
session_unset();
session_destroy();

// Agora, em vez de redirecionar, mostramos uma mensagem de sucesso.
?>
<!DOCTYPE html>
<html lang="pt-br">
<body>
    <div class="card text-center" style="max-width: 600px; margin: 40px auto; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-radius: 12px;">
        <div class="card-header bg-custom-purple text-white">
            <h2 class="mb-0">Tudo Certo!</h2>
        </div>
        <div class="card-body p-5">
            <h1 class="card-title text-success">Pedido Confirmado!</h1>
            <p class="card-text fs-5 mt-3">Seu sanduíche já está sendo preparado. Obrigado pela preferência!</p>
            <a href="local_1_.php" class="btn btn-primary mt-4" style="background-image: linear-gradient(90deg, #480ca8, #7b2cbf); border: none;">Fazer um Novo Pedido</a>
        </div>
    </div>
</body>
</html>
<?php ob_end_flush(); ?>