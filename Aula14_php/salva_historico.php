<?php
include 'auth.php';
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['historico'])) {
    $texto_historico = trim($_POST['historico']);
    $linhas = explode("\n", $texto_historico);

    $pdo->beginTransaction();
    try {
        // Limpa o histórico antigo do usuário antes de inserir o novo
        $stmt_delete = $pdo->prepare("DELETE FROM disciplinas WHERE usuario_id = ?");
        $stmt_delete->execute([$usuario_id_logado]);

        $stmt_insert = $pdo->prepare(
            "INSERT INTO disciplinas (usuario_id, semestre, codigo_disciplina, nome_disciplina, nota, situacao) VALUES (?, ?, ?, ?, ?, ?)"
        );

        foreach ($linhas as $linha) {
            $linha = trim($linha);

            // Pula a linha se ela estiver vazia ou for um cabeçalho
            if (empty($linha) || strpos($linha, 'Componentes Curriculares') !== false || strpos($linha, 'Ano Letivo') !== false) {
                continue;
            }

            // Pula a linha se não começar com um ano (ex: 2024/1)
            // Isso ignora as linhas de planejamento futuro que começam com '-'
            if (!preg_match('/^\d{4}\/\d/', $linha)) {
                continue;
            }

            $partes = explode("\t", $linha); // Divide a linha pelas TABS

            // Verifica se a linha tem o número esperado de colunas
            if (count($partes) >= 9) {
                // Extrai os dados das colunas corretas
                $semestre = trim($partes[0]);          // Coluna 0: Ano Letivo
                $codigo = trim($partes[3]);           // Coluna 3: Código
                $nome = trim($partes[4]);             // Coluna 4: Descrição
                $nota_texto = trim($partes[6]);       // Coluna 6: Nota
                $situacao = trim($partes[8]);         // Coluna 8: Situação

                // Converte a nota para um número. Troca vírgula por ponto. Se for '-', vira 0.
                $nota_texto = str_replace(',', '.', $nota_texto);
                $nota = is_numeric($nota_texto) ? round((float)$nota_texto) : 0;
                
                // Salva no banco de dados
                $stmt_insert->execute([$usuario_id_logado, $semestre, $codigo, $nome, $nota, $situacao]);
            }
        }

        $pdo->commit();
        header("Location: painel.php?status=sucesso");
        exit;

    } catch (Exception $e) {
        $pdo->rollBack();
        die("Erro ao processar o histórico: " . $e->getMessage());
    }
} else {
    header("Location: painel.php");
    exit;
}
?>