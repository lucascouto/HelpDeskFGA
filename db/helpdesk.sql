-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2015 at 08:48 AM
-- Server version: 5.6.26
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
-- Table structure for table `chamado`
--

CREATE TABLE IF NOT EXISTS `chamado` (
  `descricao` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cod_patrimonio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `local`
--

CREATE TABLE IF NOT EXISTS `local` (
  `edificio` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sala` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patrimonio`
--

CREATE TABLE IF NOT EXISTS `patrimonio` (
  `nome` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cod` int(10) NOT NULL,
  `marca` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tipo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `solicitante`
--

CREATE TABLE IF NOT EXISTS `solicitante` (
  `username_solicitante` varchar(40) NOT NULL,
  `nome_solicitante` varchar(40) NOT NULL,
  `senha_solicitante` varchar(40) NOT NULL,
  `vinculo` int(11) DEFAULT '1',
  `matricula_solicitante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solicitante`
--

INSERT INTO `solicitante` (`username_solicitante`, `nome_solicitante`, `senha_solicitante`, `vinculo`, `matricula_solicitante`) VALUES
('lucascouto', 'Lucas Couto', '123456', 1, 100112048),
('mileneserrano', 'Milene', '12345', 1, 11102048),
('tamarabarbosa', 'Tamara', '54321', 1, 11102048);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chamado`
--
ALTER TABLE `chamado`
  ADD KEY `cod_patrimonio` (`cod_patrimonio`);

--
-- Indexes for table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`edificio`,`sala`);

--
-- Indexes for table `patrimonio`
--
ALTER TABLE `patrimonio`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `solicitante`
--
ALTER TABLE `solicitante`
  ADD PRIMARY KEY (`username_solicitante`),
  ADD UNIQUE KEY `username_solicitante` (`username_solicitante`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chamado`
--
ALTER TABLE `chamado`
  ADD CONSTRAINT `fk_chamado_patrimonio` FOREIGN KEY (`cod_patrimonio`) REFERENCES `patrimonio` (`cod`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
