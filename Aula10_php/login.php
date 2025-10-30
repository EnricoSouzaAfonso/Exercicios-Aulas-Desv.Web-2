<?php
// login.php (VERSÃO SEGURA COM CRIPTOGRAFIA)
session_start();
include 'conexao.php';

$mensagem = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha_digitada = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $usuario = $stmt->fetch();

    // Verifica se o usuário existe E se a senha digitada bate com a senha criptografada no banco
    if ($usuario && password_verify($senha_digitada, $usuario['senha'])) {
        
        $_SESSION['user_id'] = $usuario['id'];
        $_SESSION['user_nome'] = $usuario['nome'];
        $_SESSION['user_tipo'] = $usuario['tipo'];

        if ($usuario['tipo'] == 'admin') {
            header("Location: painel_admin.php");
            exit;
        } else {
            header("Location: minhas_reclamacoes.php");
            exit;
        }

    } else {
        $mensagem = "E-mail ou senha inválidos.";
    }
}
?>
<!-- O HTML do seu arquivo de login já está perfeito e não precisa de mudanças -->
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (!empty($mensagem)): ?>
        <p style="color:red;"><?php echo $mensagem; ?></p>
    <?php endif; ?>
    <form action="login.php" method="POST">
        Email: <input type="email" name="email" required><br><br>
        Senha: <input type="password" name="senha" required><br><br>
        <button type="submit">Entrar</button>
    </form>
    <p>Não tem conta? <a href="cadastro.php">Cadastre-se</a></p>
</body>
</html>