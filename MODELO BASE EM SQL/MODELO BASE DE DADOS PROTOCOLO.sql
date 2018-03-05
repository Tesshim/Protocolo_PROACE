-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Jan 23, 2017 as 12:27 
-- Versão do Servidor: 5.1.41
-- Versão do PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `protocoloproace`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `protocolo`
--

CREATE TABLE IF NOT EXISTS `protocolo` (
  `Nome` varchar(0) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Telefone` int(11) DEFAULT NULL,
  `Documento` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Id_protocolo` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id_protocolo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `protocolo2`
--

CREATE TABLE IF NOT EXISTS `protocolo2` (
  `Nome` varchar(256) CHARACTER SET latin1 NOT NULL,
  `Operador` varchar(256) CHARACTER SET latin1 NOT NULL,
  `Documento` varchar(256) CHARACTER SET latin1 NOT NULL,
  `Data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Id_protocolo` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id_protocolo`),
  UNIQUE KEY `Data` (`Data`),
  UNIQUE KEY `Data_2` (`Data`),
  UNIQUE KEY `Data_3` (`Data`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11413 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
ALTER TABLE protocolo AUTO_INCREMENT = 1; ALTER TABLE protocolo2 AUTO_INCREMENT = 1;
