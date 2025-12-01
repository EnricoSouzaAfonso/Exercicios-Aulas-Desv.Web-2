-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/12/2025 às 17:52
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_notas`
--
CREATE DATABASE IF NOT EXISTS `sistema_notas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sistema_notas`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `semestre` varchar(20) NOT NULL,
  `codigo_disciplina` varchar(20) NOT NULL,
  `nome_disciplina` varchar(150) NOT NULL,
  `nota` int(11) NOT NULL,
  `situacao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id`, `usuario_id`, `semestre`, `codigo_disciplina`, `nome_disciplina`, `nota`, `situacao`) VALUES
(1, 1, '2024/1', 'SUP.13078 (BRTALGP)', 'ALGORITMO E PROGRAMAÇÃO', 5, 'Reprovado'),
(2, 1, '2024/1', 'SUP.13079 (BRTINGT)', 'INGLÊS TÉCNICO', 8, 'Aprovado'),
(3, 1, '2024/1', 'SUP.13081 (BRTIADM)', 'INTRODUÇÃO À ADMINISTRAÇÃO', 10, 'Aprovado'),
(4, 1, '2024/1', 'SUP.13083 (BRTICOM)', 'INTRODUÇÃO À COMPUTAÇÃO', 9, 'Aprovado'),
(5, 1, '2024/1', 'SUP.13085 (BRTLINP)', 'LINGUAGEM DE PROGRAMAÇÃO', 6, 'Aprovado'),
(6, 1, '2024/1', 'SUP.13183 (BRTMATE)', 'MATEMÁTICA', 10, 'Aprovado'),
(7, 1, '2024/2', 'SUP.13155 (BRTARQC)', 'ARQUITETURA DE COMPUTADORES', 9, 'Aprovado'),
(8, 1, '2024/2', 'SUP.13156 (BRTBAND)', 'BANCO DE DADOS', 10, 'Aprovado'),
(9, 1, '2024/2', 'SUP.13157 (BRTESTD)', 'ESTRUTURAS DE DADOS', 8, 'Aprovado'),
(10, 1, '2024/2', 'SUP.13158 (BRTESTA)', 'ESTATÍSTICA', 9, 'Aprovado'),
(11, 1, '2024/2', 'SUP.13159 (BRTGPRO)', 'GESTÃO DE PROJETOS', 10, 'Aprovado'),
(12, 1, '2024/2', 'SUP.13160 (BRTSISO)', 'SISTEMAS OPERACIONAIS', 7, 'Aprovado'),
(13, 1, '2025/1', 'SUP.13161 (BRTBAN2)', 'BANCO DE DADOS 2', 10, 'Aprovado'),
(14, 1, '2025/1', 'SUP.13162 (BRTDWEB)', 'DESENVOLVIMENTO WEB', 9, 'Aprovado'),
(15, 1, '2025/1', 'SUP.13163 (BRTENGS)', 'ENGENHARIA DE SOFTWARE', 10, 'Aprovado'),
(16, 1, '2025/1', 'SUP.13164 (BRTEST2)', 'ESTRUTURAS DE DADOS 2', 6, 'Reprovado'),
(17, 1, '2025/1', 'SUP.13165 (BRTREDC)', 'REDES DE COMPUTADORES', 9, 'Aprovado'),
(18, 1, '2025/2', 'SUP.13166 (BRTASIS)', 'ANÁLISE DE SISTEMAS', 0, 'Cursando'),
(19, 1, '2025/2', 'SUP.13167 (BRTDWE2)', 'DESENVOLVIMENTO WEB 2', 0, 'Cursando'),
(20, 1, '2025/2', 'SUP.13168 (BRTEMPR)', 'EMPREENDEDORISMO', 0, 'Cursando'),
(21, 1, '2025/2', 'SUP.13169 (BRTINHC)', 'INTERAÇÃO HUMANO-COMPUTADOR', 0, 'Cursando'),
(22, 1, '2025/2', 'SUP.13170 (BRTPROO)', 'PROGRAMAÇÃO ORIENTADA A OBJETOS', 0, 'Cursando'),
(23, 1, '2025/2', 'SUP.13171 (BRTRED2)', 'REDE DE COMPUTADORES 2', 0, 'Cursando');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(1, 'teste@gmail.com', '$2y$10$Ioq1t65c8oLgj7q/hwxy4euKxZT.DDDCkVk6dzJj64Fmqa6uPktI.');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD CONSTRAINT `disciplinas_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
