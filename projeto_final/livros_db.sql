-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/11/2021 às 19:08
-- Versão do servidor: 10.4.19-MariaDB
-- Versão do PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `livros_db`
--
CREATE DATABASE IF NOT EXISTS `livros_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `livros_db`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros_tb`
--

CREATE TABLE `livros_tb` (
  `id_livro` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `editora` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `livros_tb`
--

INSERT INTO `livros_tb` (`id_livro`, `titulo`, `autor`, `editora`) VALUES
(4, 'MEU LIVRO', 'Eu mesmo', 'Minha Editora'),
(7, 'meu livrooo', 'sdfsdfsd', 'fsd');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios_tb`
--

CREATE TABLE `usuarios_tb` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuarios_tb`
--

INSERT INTO `usuarios_tb` (`id_usuario`, `usuario`, `senha`) VALUES
(1, 'admin', 'admin@sistema');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `livros_tb`
--
ALTER TABLE `livros_tb`
  ADD PRIMARY KEY (`id_livro`);

--
-- Índices de tabela `usuarios_tb`
--
ALTER TABLE `usuarios_tb`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livros_tb`
--
ALTER TABLE `livros_tb`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuarios_tb`
--
ALTER TABLE `usuarios_tb`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
