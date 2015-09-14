-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 15/09/2015 às 00:50
-- Versão do servidor: 5.6.25
-- Versão do PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `helpdesk`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `solicitante`
--

CREATE TABLE IF NOT EXISTS `solicitante` (
  `username_solicitante` varchar(40) NOT NULL,
  `nome_solicitante` varchar(40) NOT NULL,
  `senha_solicitante` varchar(40) NOT NULL,
  `vinculo` int(11) DEFAULT '1',
  `matricula_solicitante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `solicitante`
--

INSERT INTO `solicitante` (`username_solicitante`, `nome_solicitante`, `senha_solicitante`, `vinculo`, `matricula_solicitante`) VALUES
('', '', '', 1, 0),
('lucascouto', 'Lucas Couto', '123456', 1, 100112048),
('mileneserrano', 'Milene', '12345', 1, 11102048),
('tamarabarbosa', 'Tamara', '54321', 1, 11102048);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `solicitante`
--
ALTER TABLE `solicitante`
  ADD PRIMARY KEY (`username_solicitante`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
