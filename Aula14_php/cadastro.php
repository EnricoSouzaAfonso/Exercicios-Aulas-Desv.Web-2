<?php
$mensagem = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'conexao.php';
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Criptografa a senha para segurança
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    try {
        $stmt = $pdo->prepare("INSERT INTO usuarios (email, senha) VALUES (?, ?)");
        $stmt->execute([$email, $senha_hash]);
        $mensagem = "Usuário cadastrado com sucesso! <a href='login.php'>Faça o login agora</a>.";
    } catch (PDOException $e) {
        $mensagem = "Erro: Este e-mail já está cadastrado.";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Cadastro</title></head>
<body>
    <h2>Cadastro no Sistema de Notas</h2>
    <?php if ($mensagem) echo "<p>$mensagem</p>"; ?>
    <form method="POST">
        E-mail: <input type="email" name="email" required><br><br>
        Senha: <input type="password" name="senha" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>