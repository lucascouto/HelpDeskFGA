-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Tempo de geração: 19/11/2015 às 19:58
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
  `descricao` text CHARACTER SET utf8 COLLATE utf8_bin,
  `cod_patrimonio` int(10) DEFAULT NULL,
  `local` int(4) DEFAULT NULL,
  `solicitante` int(11) DEFAULT NULL,
  `tecnico` int(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `chamado`
--

INSERT INTO `chamado` (`id_chamado`, `descricao`, `cod_patrimonio`, `local`, `solicitante`, `tecnico`) VALUES
(38, '', NULL, NULL, 110112088, NULL),
(39, 'Meu teclado estÃ¡ intermitente!', NULL, NULL, 100203040, NULL),
(40, 'meu monitor teste', NULL, NULL, 10101010, NULL),
(41, 'meu monitor teste', NULL, NULL, 10101010, NULL),
(42, 'meu monitor teste', NULL, NULL, 10101010, NULL),
(43, 'meu monitor teste', NULL, NULL, 10101010, NULL),
(44, 'meu monitor teste', NULL, NULL, 10101010, NULL),
(45, 'meu monitor teste', NULL, NULL, 10101010, NULL),
(46, 'meu monitor teste', NULL, NULL, 10101010, NULL),
(47, 'meu monitor teste', NULL, NULL, 10101010, NULL),
(48, 'meu monitor teste', NULL, NULL, 10101010, NULL),
(49, 'meu monitor teste', NULL, NULL, 10101010, NULL),
(50, '', NULL, NULL, 10101010, NULL),
(51, '', NULL, NULL, 10101010, NULL),
(52, '', NULL, NULL, 10101010, NULL),
(53, '', NULL, NULL, 10101010, NULL),
(54, '', NULL, NULL, 10101010, NULL),
(55, '', NULL, NULL, 10101010, NULL),
(56, '', NULL, NULL, 10101010, NULL),
(57, '', NULL, NULL, 10101010, NULL),
(58, '', NULL, NULL, 10101010, NULL),
(59, '', NULL, NULL, 10101010, NULL),
(60, '', NULL, NULL, 10101010, NULL),
(61, '', NULL, NULL, 10101010, NULL),
(62, '', NULL, NULL, 10101010, NULL),
(63, '', NULL, NULL, 10101010, NULL),
(64, '', NULL, NULL, 10101010, NULL),
(65, '', NULL, NULL, 10101010, NULL),
(66, '', NULL, NULL, 10101010, NULL),
(67, '', NULL, NULL, 10101010, NULL),
(68, '', NULL, NULL, 10101010, NULL),
(69, '', NULL, NULL, 10101010, NULL),
(70, '', NULL, NULL, 10101010, NULL),
(71, '', NULL, NULL, 10101010, NULL),
(72, '', NULL, NULL, 10101010, NULL),
(73, 'meu monitor teste', NULL, NULL, 10101010, NULL);

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
  `cod` int(10) NOT NULL,
  `descricao` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `marca` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `patrimonio`
--

INSERT INTO `patrimonio` (`cod`, `descricao`, `marca`) VALUES
(123456789, 'Mouse USB', 'microsoft');

-- --------------------------------------------------------

--
-- Estrutura para tabela `solicitante`
--

CREATE TABLE IF NOT EXISTS `solicitante` (
  `matricula_solicitante` int(11) NOT NULL,
  `username_solicitante` varchar(40) NOT NULL,
  `nome_solicitante` varchar(40) NOT NULL,
  `senha_solicitante` varchar(40) NOT NULL,
  `vinculo` int(11) DEFAULT '1',
  `email_solicitante` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `solicitante`
--

INSERT INTO `solicitante` (`matricula_solicitante`, `username_solicitante`, `nome_solicitante`, `senha_solicitante`, `vinculo`, `email_solicitante`) VALUES
(10101010, 'coutocelia', 'celia cristina de oliveira do couto', '1234', 1, 'celia@gmail.com'),
(100112048, 'coutolucas', 'Lucas Couto', '123456', 0, ''),
(100203040, 'coutocelio', 'CÃ©lio Heleno do Couto', '1234', 0, 'coutocelio@gmail.com'),
(110112088, 'naara_rosa', 'Naara Rosa Monteiro', '1234567', 1, 'naara@gmail.com');

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
  MODIFY `id_chamado` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
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
