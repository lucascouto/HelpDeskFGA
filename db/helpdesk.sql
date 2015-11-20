-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Nov-2015 às 14:38
-- Versão do servidor: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `username_admin` varchar(20) NOT NULL,
  `senha_admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`username_admin`, `senha_admin`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamado`
--

CREATE TABLE IF NOT EXISTS `chamado` (
  `id_chamado` int(5) NOT NULL,
  `descricao` text CHARACTER SET utf8 COLLATE utf8_bin,
  `cod_patrimonio` int(10) DEFAULT NULL,
  `local` int(4) DEFAULT NULL,
  `solicitante` int(11) DEFAULT NULL,
  `tecnico` int(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `chamado`
--

INSERT INTO `chamado` (`id_chamado`, `descricao`, `cod_patrimonio`, `local`, `solicitante`, `tecnico`) VALUES
(79, 'dsasdfhg', 123456789, NULL, 110112088, NULL),
(80, 'fegrdthyjuyiu', NULL, NULL, 110112088, NULL),
(81, 'sem buscar', NULL, NULL, 110112088, NULL),
(82, 'sdafgh', NULL, NULL, 110112088, NULL),
(83, 'awesrdtgfy rewred', 123456789, NULL, 110112088, NULL),
(84, 'AGORA VAI', 123456789, NULL, 110112088, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `local`
--

CREATE TABLE IF NOT EXISTS `local` (
  `id` int(4) NOT NULL,
  `edificio` varchar(10) NOT NULL,
  `sala` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `patrimonio`
--

CREATE TABLE IF NOT EXISTS `patrimonio` (
  `cod` int(10) NOT NULL,
  `descricao` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `marca` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `patrimonio`
--

INSERT INTO `patrimonio` (`cod`, `descricao`, `marca`) VALUES
(123456789, 'Mouse USB', 'microsoft');

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitante`
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
-- Extraindo dados da tabela `solicitante`
--

INSERT INTO `solicitante` (`matricula_solicitante`, `username_solicitante`, `nome_solicitante`, `senha_solicitante`, `vinculo`, `email_solicitante`) VALUES
(10101010, 'coutocelia', 'celia cristina de oliveira do couto', '1234', 1, 'celia@gmail.com'),
(100112048, 'coutolucas', 'Lucas Couto', '123456', 0, ''),
(100203040, 'coutocelio', 'CÃ©lio Heleno do Couto', '1234', 0, 'coutocelio@gmail.com'),
(110112088, 'naara_rosa', 'Naara Rosa Monteiro', '1234567', 1, 'naara@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnico`
--

CREATE TABLE IF NOT EXISTS `tecnico` (
  `matricula_tecnico` int(15) NOT NULL,
  `nome_tecnico` varchar(30) NOT NULL,
  `senha_tecnico` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`username_admin`);

--
-- Indexes for table `chamado`
--
ALTER TABLE `chamado`
  ADD PRIMARY KEY (`id_chamado`),
  ADD KEY `fk_chamado_patrimonio` (`cod_patrimonio`),
  ADD KEY `fk_chamado_local` (`local`),
  ADD KEY `fk_chamado_solicitante` (`solicitante`),
  ADD KEY `fk_chamado_tecnico` (`tecnico`);

--
-- Indexes for table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patrimonio`
--
ALTER TABLE `patrimonio`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `solicitante`
--
ALTER TABLE `solicitante`
  ADD PRIMARY KEY (`matricula_solicitante`),
  ADD UNIQUE KEY `username_solicitante` (`username_solicitante`);

--
-- Indexes for table `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`matricula_tecnico`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chamado`
--
ALTER TABLE `chamado`
  MODIFY `id_chamado` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `chamado`
--
ALTER TABLE `chamado`
  ADD CONSTRAINT `fk_chamado_local` FOREIGN KEY (`local`) REFERENCES `local` (`id`),
  ADD CONSTRAINT `fk_chamado_patrimonio` FOREIGN KEY (`cod_patrimonio`) REFERENCES `patrimonio` (`cod`),
  ADD CONSTRAINT `fk_chamado_solicitante` FOREIGN KEY (`solicitante`) REFERENCES `solicitante` (`matricula_solicitante`),
  ADD CONSTRAINT `fk_chamado_tecnico` FOREIGN KEY (`tecnico`) REFERENCES `tecnico` (`matricula_tecnico`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
