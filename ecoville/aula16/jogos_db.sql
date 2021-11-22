-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/11/2021 às 02:30
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
-- Banco de dados: `jogos_db`
--
CREATE DATABASE IF NOT EXISTS `jogos_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `jogos_db`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogos_tb`
--

CREATE TABLE `jogos_tb` (
  `id_jogo` int(11) NOT NULL,
  `titulo` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `jogos_tb`
--

INSERT INTO `jogos_tb` (`id_jogo`, `titulo`, `genero`, `ano`) VALUES
(9, 'Godovar', 'Ação / Aventura', 2018),
(10, 'Mass Deffect - Legendary Edition', 'RPG', 2021),
(11, 'Legend of Zelda: Bafo do Selvagem', 'RPG', 2017),
(12, 'The Simios', 'Simulador', 2001);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `jogos_tb`
--
ALTER TABLE `jogos_tb`
  ADD PRIMARY KEY (`id_jogo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jogos_tb`
--
ALTER TABLE `jogos_tb`
  MODIFY `id_jogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
