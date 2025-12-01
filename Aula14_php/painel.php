<?php
include 'auth.php';
include 'conexao.php';

$stmt = $pdo->prepare("SELECT * FROM disciplinas WHERE usuario_id = ? ORDER BY semestre, nome_disciplina");
$stmt->execute([$usuario_id_logado]);
$disciplinas = $stmt->fetchAll(PDO::FETCH_ASSOC);

$historico_agrupado = [];
foreach ($disciplinas as $d) {
    $historico_agrupado[$d['semestre']][] = $d;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Painel do Aluno</title>
    <style>
        body { font-family: sans-serif; }
        .semestre { border: 1px solid #ccc; padding: 10px; margin-bottom: 20px; border-radius: 5px; }
        .aprovado { color: green; font-weight: bold; }
        .reprovado, .cursando { color: red; font-weight: bold; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <a href="sair.php" style="float:right;">Sair</a>
    <h1>Meu Progresso Acadêmico</h1>

    <h3>Cole seu histórico do SUAP aqui:</h3>
    <form action="salva_historico.php" method="POST">
        <textarea name="historico" rows="15" cols="100" placeholder="Copie a tabela de 'Componentes Curriculares' do seu histórico no SUAP e cole aqui."></textarea>
        <br><br>
        <button type="submit">Analisar e Salvar Histórico</button>
    </form>
    
    <hr>
    
    <h2>Situação por Semestre</h2>
    <?php if (empty($historico_agrupado)): ?>
        <p>Nenhum histórico encontrado. Cole seu histórico acima para começar.</p>
    <?php else: ?>
        <?php foreach ($historico_agrupado as $semestre => $disciplinas_semestre): ?>
            <div class="semestre">
                <h3><?php echo htmlspecialchars($semestre); ?></h3>
                <table>
                    <thead>
                        <tr><th>Código</th><th>Disciplina</th><th>Nota Final</th><th>Situação</th></tr>
                    </thead>
                    <tbody>
                        <?php 
                        $semestre_concluido = true;
                        foreach ($disciplinas_semestre as $d): 
                            if ($d['situacao'] !== 'Aprovado') {
                                $semestre_concluido = false;
                            }
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($d['codigo_disciplina']); ?></td>
                            <td><?php echo htmlspecialchars($d['nome_disciplina']); ?></td>
                            <td><?php echo $d['nota']; ?></td>
                            <td class="<?php echo strtolower($d['situacao']); ?>"><?php echo htmlspecialchars($d['situacao']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <p>
                    <strong>Status do Semestre:</strong> 
                    <?php if ($semestre_concluido): ?>
                        <span class="aprovado">Concluído com sucesso!</span>
                    <?php else: ?>
                        <span class="reprovado">Com pendências ou em andamento.</span>
                    <?php endif; ?>
                </p>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

</body>
</html>