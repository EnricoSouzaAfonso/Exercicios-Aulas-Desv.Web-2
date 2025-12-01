<?php
session_start();
$mensagem = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'conexao.php';
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifica se a senha digitada corresponde à senha criptografada no banco
    if ($usuario && password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario_id'] = $usuario['id'];
        header("Location: painel.php");
        exit;
    } else {
        $mensagem = "E-mail ou senha inválidos.";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h2>Login</h2>
    <?php if ($mensagem) echo "<p style='color:red;'>$mensagem</p>"; ?>
    <form method="POST">
        E-mail: <input type="email" name="email" required><br><br>
        Senha: <input type="password" name="senha" required><br><br>
        <button type="submit">Entrar</button>
    </form>
    <p>Não tem conta? <a href="cadastro.php">Cadastre-se</a></p>
</body>
</html>