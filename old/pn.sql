-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 21-Jul-2014 às 21:29
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `pn`
--
CREATE DATABASE IF NOT EXISTS `pn` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pn`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_olheiros`
--

CREATE TABLE IF NOT EXISTS `tb_olheiros` (
  `id_olheiro` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `cpf` int(11) NOT NULL,
  `telefone` int(10) NOT NULL,
  `celular` int(11) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `numero` int(4) NOT NULL,
  `entidade` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` int(8) NOT NULL,
  PRIMARY KEY (`id_olheiro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `tb_olheiros`
--

INSERT INTO `tb_olheiros` (`id_olheiro`, `nome`, `cpf`, `telefone`, `celular`, `endereco`, `cidade`, `estado`, `numero`, `entidade`, `email`, `senha`) VALUES
(4, 'Joao Paulo', 0, 1111, 993127003, 'mario david', 'franca', 'SP', 33, 'America de Natal', 'vinicius@gmail.com', 123456),
(5, '', 0, 0, 0, '', 'franca', 'SP', 0, '', '', 0),
(6, '', 0, 0, 0, '', 'franca', 'SP', 0, '', '', 0),
(7, 'renan', 2147483647, 9999999, 99999999, 'rua 04', 'sebastio paraiso', 'sp', 5, 'atletico minero', 'renan@renan', 2424),
(8, 'renan', 2147483647, 9999999, 99999999, 'rua 04', 'santos', 'sp', 5, 'atletico minero', 'viniciusedanielacampos@yahoo.com.br', 2424),
(9, '', 0, 0, 0, '', 'santos', 'sp', 0, '', '', 0),
(10, '', 0, 0, 0, '', 'sao paulo', 'SP', 0, '', '', 0),
(11, '', 0, 0, 0, '', 'cidade', 'rs', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_peneiras`
--

CREATE TABLE IF NOT EXISTS `tb_peneiras` (
  `id_peneira` int(11) NOT NULL AUTO_INCREMENT,
  `identificacao` varchar(20) NOT NULL,
  `local` varchar(30) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `data` varchar(10) NOT NULL,
  `hora_inicial` time NOT NULL,
  `n_jogadores` int(3) NOT NULL,
  `duracao` time NOT NULL,
  `n_atacante` int(2) NOT NULL,
  `n_meio` int(2) NOT NULL,
  `n_lateral_e` int(2) NOT NULL,
  `n_lateral_d` int(2) NOT NULL,
  `n_zagueiro` int(2) NOT NULL,
  `n_goleiro` int(2) NOT NULL,
  PRIMARY KEY (`id_peneira`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `tb_peneiras`
--

INSERT INTO `tb_peneiras` (`id_peneira`, `identificacao`, `local`, `cep`, `cidade`, `estado`, `data`, `hora_inicial`, `n_jogadores`, `duracao`, `n_atacante`, `n_meio`, `n_lateral_e`, `n_lateral_d`, `n_zagueiro`, `n_goleiro`) VALUES
(1, 'peneira do santos', 'vila beumiro', '38578-473', 'santos', 'sp', '--', '12:00:00', 100, '02:00:00', 16, 26, 16, 16, 16, 10),
(2, '', '', '', 'sebastio paraiso', 'sp', '--', '00:00:00', 0, '00:00:00', 0, 0, 0, 0, 0, 0),
(4, 'peneira do santos', 'vila beumiro', '38578-473', 'santos', 'sp', '--', '12:00:00', 0, '02:00:00', 16, 26, 0, 16, 16, 10),
(5, 'peneira do verdão', 'palestra italia', '144070987', 'sao paulo', 'SP', '--', '12:00:00', 200, '02:00:00', 16, 26, 0, 16, 16, 10),
(6, 'peneira do inter', 'beira rio', '1440898', 'cidade', 'rs', '--', '12:00:00', 0, '02:00:00', 16, 26, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` int(8) NOT NULL,
  `escolaridade` varchar(60) NOT NULL,
  `telefone` int(10) NOT NULL,
  `celular` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` int(8) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `numero` int(4) NOT NULL,
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
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nome`, `cpf`, `rg`, `escolaridade`, `telefone`, `celular`, `email`, `senha`, `endereco`, `numero`, `cidade`, `estado`, `nome_pai`, `nome_mae`, `naturalidade`, `altura`, `peso`, `posicao`, `pe_preferido`, `caracteristicas`, `historico`) VALUES
(6, 'tiago', 888888, 2147483647, 'suerior', 1111, 99999, 'tiago@tiago.com', 123, 'rua 02', 33, 'franca', 'sp', 'joao', 'maria', 'francano', 1.9, 70, 'atacante', 'esquerdo', 'veloz', 'palmeiras'),
(7, '', 0, 0, '', 0, 0, '', 0, '', 0, 'franca', 'SP', '', '', '', 0, 0, '', '', '', ''),
(8, 'renan', 2147483647, 0, '', 9999999, 99999999, 'renan@renan', 2424, 'rua 04', 5, 'sebastio paraiso', 'sp', '', '', '', 0, 0, '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
