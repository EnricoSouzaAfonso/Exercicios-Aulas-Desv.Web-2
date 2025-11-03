-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/11/2025 às 21:00
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
-- Banco de dados: `ex_aula10`
--
CREATE DATABASE IF NOT EXISTS `ex_aula10` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ex_aula10`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `reclamacao`
--

CREATE TABLE `reclamacao` (
  `id` int(11) NOT NULL,
  `id_reclamante` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `estado` enum('Enviada','Atribuída','Em andamento','Resolvida') NOT NULL DEFAULT 'Enviada',
  `aprovacao` enum('Aprovada','Reprovada') DEFAULT NULL,
  `comentario` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `reclamacao`
--

INSERT INTO `reclamacao` (`id`, `id_reclamante`, `titulo`, `descricao`, `foto`, `estado`, `aprovacao`, `comentario`) VALUES
(1, 2, 'Poste de luz queimado na Rua das Flores', 'O poste em frente ao número 123 está com a lâmpada queimada há mais de uma semana, deixando a rua muito escura e perigosa à noite.', NULL, 'Enviada', NULL, NULL),
(2, 3, 'Lixo acumulado na praça central', 'A coleta de lixo na praça não está sendo feita regularmente e as lixeiras estão transbordando. A foto mostra a situação de hoje.', 'img/exemplo-lixo.jpg', 'Em andamento', NULL, NULL),
(3, 2, 'Buraco perigoso na Avenida Principal', 'Havia um buraco grande perto do cruzamento com a Rua do Comércio. Carros estavam desviando e quase causando acidentes.', 'img/exemplo-buraco.jpg', 'Resolvida', 'Aprovada', 'O serviço foi realizado rapidamente! O asfalto ficou ótimo. Muito obrigado!'),
(4, 3, 'Vazamento de água na calçada da escola', 'Havia um vazamento de água limpa na calçada da Escola Municipal, desperdiçando muita água por dias.', NULL, 'Resolvida', 'Reprovada', 'A equipe veio, mas o vazamento voltou dois dias depois. O problema não foi resolvido de forma definitiva e continua pingando.'),
(5, 5, 'Pamonha', 'não curti não, achei uma cebola no meio da pamonha po, é pamonha acebolada agora? ai não', 'img/6903b8917d6ad-87635370981789d940a43cded9a00328.png', 'Enviada', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `nascimento` date NOT NULL,
  `tipo` enum('cidadao','admin') NOT NULL DEFAULT 'cidadao'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `cpf`, `nascimento`, `tipo`) VALUES
(1, 'Admin Geral', 'admin@prefeitura.gov', 'admin123', '000.000.000-00', '1990-01-01', 'admin'),
(2, 'Carlos Silva', 'carlos.silva@email.com', '$2y$10$n/E52AMk8qgV.dJm5Lz6A.E0O.l2J.a/O2f.gY.b/e.qZ7k.gX8.c', '111.222.333-44', '1985-05-15', 'cidadao'),
(3, 'Ana Pereira', 'ana.pereira@email.com', '$2y$10$iG./c.u.x.jV3a.o.h.e.u.x.y.z.a.b.c.d.e.f.g.h.i.j', '555.666.777-88', '1992-11-30', 'cidadao'),
(5, 'Enrico Souza Afonso', 'enricosafonso@gmail.com', '$2y$10$V1P8Xm5gSDdwEaz7xFv7Me.9Fl/EFaxdjNV/hGdHc7Q77V57qdoGS', '343.343.343-90', '2025-10-01', 'cidadao'),
(6, 'admteste', 'admadmadm@adm.com', '$2y$10$70slPeRkxluWyqZrnnLcl.WDkJpWR2apuBYXIcOlz5uxZv/XfB7Vm', '999999999', '2025-10-13', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `reclamacao`
--
ALTER TABLE `reclamacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_reclamante` (`id_reclamante`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `reclamacao`
--
ALTER TABLE `reclamacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `reclamacao`
--
ALTER TABLE `reclamacao`
  ADD CONSTRAINT `reclamacao_ibfk_1` FOREIGN KEY (`id_reclamante`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
