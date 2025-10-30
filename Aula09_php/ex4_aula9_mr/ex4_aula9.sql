-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/10/2025 às 20:23
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
-- Banco de dados: `ex4_aula9`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagens_ex4`
--

CREATE TABLE `imagens_ex4` (
  `id` int(11) NOT NULL,
  `caminho` varchar(255) NOT NULL,
  `curtidas` int(11) NOT NULL,
  `data_envio` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `imagens_ex4`
--

INSERT INTO `imagens_ex4` (`id`, `caminho`, `curtidas`, `data_envio`) VALUES
(1, 'fotos/6903aed279226-1761849042.jpg', 7, '2025-10-30 18:30:42'),
(2, 'fotos/6903aed87e0aa-1761849048.jpg', 7, '2025-10-30 18:30:48'),
(3, 'fotos/6903aedd14667-1761849053.jpg', 7, '2025-10-30 18:30:53'),
(4, 'fotos/6903aee3067fe-1761849059.jpg', 7, '2025-10-30 18:30:59');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `imagens_ex4`
--
ALTER TABLE `imagens_ex4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imagens_ex4`
--
ALTER TABLE `imagens_ex4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
