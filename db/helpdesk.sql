-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Tempo de geração: 29/10/2015 às 01:43
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
-- Estrutura para tabela `chamado`
--

CREATE TABLE IF NOT EXISTS `chamado` (
  `id_chamado` int(5) NOT NULL,
  `descricao` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cod_patrimonio` int(10) NOT NULL,
  `local` int(4) NOT NULL,
  `solicitante` int(11) NOT NULL,
  `tecnico` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `local`
--

CREATE TABLE IF NOT EXISTS `local` (
  `id` int(4) NOT NULL,
  `edificio` varchar(10) NOT NULL,
  `sala` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `patrimonio`
--

CREATE TABLE IF NOT EXISTS `patrimonio` (
  `nome` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cod` int(10) NOT NULL,
  `marca` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tipo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `solicitante`
--

CREATE TABLE IF NOT EXISTS `solicitante` (
  `matricula_solicitante` int(11) NOT NULL,
  `username_solicitante` varchar(40) NOT NULL,
  `nome_solicitante` varchar(40) NOT NULL,
  `senha_solicitante` varchar(40) NOT NULL,
  `vinculo` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tecnico`
--

CREATE TABLE IF NOT EXISTS `tecnico` (
  `matricula_tecnico` int(15) NOT NULL,
  `nome_tecnico` varchar(30) NOT NULL,
  `senha_tecnico` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `chamado`
--
ALTER TABLE `chamado`
  ADD PRIMARY KEY (`id_chamado`),
  ADD KEY `fk_chamado_patrimonio` (`cod_patrimonio`),
  ADD KEY `fk_chamado_local` (`local`),
  ADD KEY `fk_chamado_solicitante` (`solicitante`),
  ADD KEY `fk_chamado_tecnico` (`tecnico`);

--
-- Índices de tabela `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `patrimonio`
--
ALTER TABLE `patrimonio`
  ADD PRIMARY KEY (`cod`);

--
-- Índices de tabela `solicitante`
--
ALTER TABLE `solicitante`
  ADD PRIMARY KEY (`matricula_solicitante`),
  ADD UNIQUE KEY `username_solicitante` (`username_solicitante`);

--
-- Índices de tabela `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`matricula_tecnico`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `chamado`
--
ALTER TABLE `chamado`
  MODIFY `id_chamado` int(5) NOT NULL AUTO_INCREMENT;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `chamado`
--
ALTER TABLE `chamado`
  ADD CONSTRAINT `fk_chamado_local` FOREIGN KEY (`local`) REFERENCES `local` (`id`),
  ADD CONSTRAINT `fk_chamado_patrimonio` FOREIGN KEY (`cod_patrimonio`) REFERENCES `patrimonio` (`cod`),
  ADD CONSTRAINT `fk_chamado_solicitante` FOREIGN KEY (`solicitante`) REFERENCES `solicitante` (`matricula_solicitante`),
  ADD CONSTRAINT `fk_chamado_tecnico` FOREIGN KEY (`tecnico`) REFERENCES `tecnico` (`matricula_tecnico`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
