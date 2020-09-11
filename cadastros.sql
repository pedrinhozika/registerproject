-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 10-Set-2020 às 22:23
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formularios`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastros`
--

DROP TABLE IF EXISTS `cadastros`;
CREATE TABLE IF NOT EXISTS `cadastros` (
  `cd_cadastro` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NOT NULL,
  `email` varchar(200) DEFAULT NOT NULL,
  `CPF` char(20) DEFAULT NOT NULL,
  `RG` char(20) DEFAULT NOT NULL,
  `criada` datetime DEFAULT NOT NULL,
  PRIMARY KEY (`cd_cadastro`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

