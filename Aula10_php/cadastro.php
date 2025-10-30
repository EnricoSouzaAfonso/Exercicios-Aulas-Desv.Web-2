<?php
// cadastro.php (VERSÃO SEGURA COM CRIPTOGRAFIA)
include 'conexao.php'; 

$mensagem = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha']; 
    $cpf = $_POST['cpf'];
    $nascimento = $_POST['nascimento'];

    // CRIPTOGRAFA A SENHA ANTES DE SALVAR
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $tipo = 'cidadao';

    try {
        $sql = "INSERT INTO usuarios (nome, email, senha, cpf, nascimento, tipo) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);

        // Executa o SQL, passando a senha criptografada
        $stmt->execute([$nome, $email, $senha_hash, $cpf, $nascimento, $tipo]);

        $mensagem = "Usuário cadastrado com sucesso! Você pode fazer o <a href='login.php'>login agora</a>.";

    } catch (PDOException $e) {
        if ($e->errorInfo[1] == 1062) {
            $mensagem = "Erro: E-mail ou CPF já cadastrado.";
        } else {
            $mensagem = "Erro ao cadastrar: " . $e->getMessage();
        }
    }
}
?>
<!-- O HTML do seu arquivo de cadastro já está perfeito e não precisa de mudanças -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Cadastro de Cidadão</h2>
    
    <?php if (!empty($mensagem)): ?>
        <p><?php echo $mensagem; ?></p>
    <?php endif; ?>

    <form action="cadastro.php" method="POST">
        Nome: <input type="text" name="nome" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Senha: <input type="password" name="senha" required><br><br>
        CPF: <input type="text" name="cpf" required><br><br>
        Data de Nascimento: <input type="date" name="nascimento" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>