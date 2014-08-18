-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Ago-2014 às 15:40
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pn`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_olheiros`
--

CREATE TABLE IF NOT EXISTS `tb_olheiros` (
  `id_olheiro` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` varchar(50) NOT NULL,
  `telefone` int(10) NOT NULL,
  `celular` int(11) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `numero` int(4) NOT NULL,
  `entidade` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` int(8) NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT '0',
  `bairro` varchar(100) NOT NULL,
  `cep` varchar(20) NOT NULL,
  PRIMARY KEY (`id_olheiro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `tb_olheiros`
--

INSERT INTO `tb_olheiros` (`id_olheiro`, `nome`, `cpf`, `rg`, `telefone`, `celular`, `endereco`, `cidade`, `estado`, `numero`, `entidade`, `email`, `senha`, `tipo`, `bairro`, `cep`) VALUES
(4, 'Joao Paulo', 0, 'asddddddd', 1111, 993127003, 'mario david', 'franca', 'SP', 33, 'America de Natal', 'vinicius@gmail.com', 123456, 0, 'asdddddd', 'asdddddd'),
(5, '', 0, '', 0, 0, '', 'franca', 'SP', 0, '', '', 0, 0, '', ''),
(6, '', 0, '', 0, 0, '', 'franca', 'SP', 0, '', '', 0, 0, '', ''),
(7, 'renan', 2147483647, '', 9999999, 99999999, 'rua 04', 'sebastio paraiso', 'sp', 5, 'atletico minero', 'renan@renan', 2424, 0, '', ''),
(8, 'renan', 2147483647, '', 9999999, 99999999, 'rua 04', 'santos', 'sp', 5, 'atletico minero', 'viniciusedanielacampos@yahoo.com.br', 2424, 0, '', ''),
(9, '', 0, '', 0, 0, '', 'santos', 'sp', 0, '', '', 0, 0, '', ''),
(10, '', 0, '', 0, 0, '', 'sao paulo', 'SP', 0, '', '', 0, 0, '', ''),
(11, '', 0, '', 0, 0, '', 'cidade', 'rs', 0, '', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_peneiras`
--

CREATE TABLE IF NOT EXISTS `tb_peneiras` (
  `id_peneira` int(11) NOT NULL AUTO_INCREMENT,
  `identificacao` varchar(20) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `data` varchar(10) NOT NULL,
  `hora_inicial` time NOT NULL,
  `n_jogadores` int(3) NOT NULL,
  `duracao` time NOT NULL,
  `id_olheiro` int(11) NOT NULL,
  PRIMARY KEY (`id_peneira`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `tb_peneiras`
--

INSERT INTO `tb_peneiras` (`id_peneira`, `identificacao`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `data`, `hora_inicial`, `n_jogadores`, `duracao`, `id_olheiro`) VALUES
(1, 'peneira do santos 1', '1', '2', '38578-473', 'santos', 'sp', '--', '12:00:00', 100, '02:00:00', 0),
(2, 'peneira do santos 2', '2', '2', '38578-473', 'santos', 'sp', '--', '12:00:00', 100, '02:00:00', 0),
(4, 'peneira do santos 3', '3', '3', '38578-473', 'santos', 'sp', '--', '12:00:00', 100, '02:00:00', 0),
(5, 'peneira do santos 4', '4', '4', '38578-473', 'santos', 'sp', '--', '12:00:00', 100, '02:00:00', 0),
(6, 'peneira do santos 5', '5', '4', '38578-473', 'santos', 'sp', '--', '12:00:00', 100, '02:00:00', 0),
(8, 'peneira do santos 7', '', '', '38578-473', 'santos', 'sp', '--', '12:00:00', 100, '02:00:00', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `cpf` varchar(30) NOT NULL,
  `rg` int(8) NOT NULL,
  `escolaridade` varchar(60) NOT NULL,
  `telefone` int(10) NOT NULL,
  `celular` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` int(8) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `numero` int(4) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `nome_pai` varchar(60) NOT NULL,
  `nome_mae` varchar(60) NOT NULL,
  `naturalidade` varchar(20) NOT NULL,
  `altura` float NOT NULL,
  `peso` int(2) NOT NULL,
  `posicao` varchar(10) NOT NULL,
  `pe_preferido` varchar(10) NOT NULL,
  `caracteristicas` text NOT NULL,
  `historico` text NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nome`, `cpf`, `rg`, `escolaridade`, `telefone`, `celular`, `email`, `senha`, `endereco`, `bairro`, `numero`, `cep`, `cidade`, `estado`, `nome_pai`, `nome_mae`, `naturalidade`, `altura`, `peso`, `posicao`, `pe_preferido`, `caracteristicas`, `historico`, `tipo`) VALUES
(6, 'tiago', '', 2147483647, 'suerior', 1111, 99999, 'tiago@tiago.com', 123, 'rua 02', 'sadasdasd', 12, '111111', 'francaa', 'sp', 'joao', 'maria', 'francano', 1.9, 70, 'atacante', 'esquerdo', 'veloz', 'palmeiras', 1),
(7, '', '', 0, '', 0, 0, '', 0, '', '', 0, '', 'franca', 'SP', '', '', '', 0, 0, '', '', '', '', 1),
(8, 'renan', '', 0, '', 9999999, 99999999, 'renan@renan', 2424, '1', '3', 5, '', 'sebastio paraiso', 'sp', '', '', '', 0, 0, '', '', '', '', 1),
(11, 'dfgdfgfgdfg', '', 0, 'dfgdfg', 0, 0, 'tiago@tiago.com', 123, '3', '2', 0, 'dasdasd', 'asdas', 'da', 'asdasd', 'asd', 'sadas', 2, 3, '12', 'dasd', 'asdad', 'asdasd', 1),
(14, 'dfgdfgfgdfg', 'dfgdfg', 0, 'dfgdfg', 0, 0, 'tiago@tiago.com', 123, '1', '5', 0, 'dasdasd', 'asdas', 'da', 'asdasd', 'asd', 'sadas', 2, 3, '12', 'dasd', 'asdad', 'asdasd', 1),
(15, 'dsfsdf', 'dsfsdfsdfsdf', 0, 'fsdfsdfsdf', 0, 0, 'tiago22@tiago.com', 123, '4234', '34234234', 42342, '434234', '23423', '42', '23424', '234234', '3434', 34, 34, '34', 'sdfsd', 'dfsdf', 'sdfsdf', 1),
(16, '', '', 0, '', 0, 0, 'tiago@tiago.com', 123, '', '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', 1),
(17, '', '', 0, '', 0, 0, 'tiago@tiago.com', 123, '', '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', 1),
(18, '', '', 0, '', 0, 0, 'tiago@tiago.com', 123, '', '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', 1),
(19, '', '', 0, '', 0, 0, 'tiago@tiago.com', 123, '', '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', 1),
(20, '', '', 0, '', 0, 0, 'tiago@tiago.com', 123, '', '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', 1),
(21, '', '', 0, '', 0, 0, 'tiago@tiago.com', 123, '', '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', 1),
(22, '', '', 0, '', 0, 0, 'tiago@tiago.com', 123, '', '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', 1),
(23, '', '', 0, '', 0, 0, 'tiago@tiago.com', 123, '', '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', 1),
(24, '', '', 0, '', 0, 0, 'tiago@tiago.com', 123, '', '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', 1),
(25, '', '', 0, '', 0, 0, 'tiago@tiago.com', 123, '', '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', 1),
(26, '', '', 0, '', 0, 0, 'tiago@tiago.com', 123, '', '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', 1),
(27, '', '', 0, '', 0, 0, 'tiago@tiago.com', 123, '', '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', 1),
(28, '', '', 0, '', 0, 0, 'tiago@tiago.com', 123, '', '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', 1),
(29, '', '', 0, '', 0, 0, 'tiago@tiago.com', 123, '', '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', 1),
(30, '', '', 0, '', 0, 0, 'tiago@tiago.com', 123, '', '', 0, '', '', '', '', '', '', 0, 0, '', '', '', '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
