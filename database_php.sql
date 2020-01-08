-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 08-Jan-2020 às 23:58
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `database_php`
--
CREATE DATABASE IF NOT EXISTS `database_php` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `database_php`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `nome_aluno` varchar(255) DEFAULT NULL,
  `data_nascimento` varchar(13) DEFAULT NULL,
  `ID_ALUNO` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_ALUNO`),
  KEY `ID_ALUNO` (`ID_ALUNO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`nome_aluno`, `data_nascimento`, `ID_ALUNO`) VALUES
('Edward Nichel', '14-02-1996', 11),
('Bruna Portes', '26-12-1995', 12),
('JoÃ£o Pedro Oliveira Arend ', '19-06-1995', 13),
('Carlos Alberto Novias', '18-08-1985', 14),
('Ana Goulart', '01-11-2000', 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_curso`
--

CREATE TABLE IF NOT EXISTS `aluno_curso` (
  `ID_ALUNO_CURSO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ALUNO` int(11) NOT NULL,
  `ID_CURSO` int(11) NOT NULL,
  PRIMARY KEY (`ID_ALUNO_CURSO`),
  KEY `ID_ALUNO` (`ID_ALUNO`),
  KEY `ID_CURSO` (`ID_CURSO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `aluno_curso`
--

INSERT INTO `aluno_curso` (`ID_ALUNO_CURSO`, `ID_ALUNO`, `ID_CURSO`) VALUES
(4, 11, 1),
(5, 12, 2),
(6, 13, 6),
(7, 14, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `nome_curso` varchar(255) NOT NULL,
  `carga_horaria` int(20) NOT NULL,
  `ID_CURSO` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_CURSO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`nome_curso`, `carga_horaria`, `ID_CURSO`) VALUES
('PHP', 10, 1),
('Python', 18, 2),
('Perl', 12, 3),
('HTML', 10, 4),
('JAVA', 12, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(255) NOT NULL,
  `SENHA` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `USUARIO` (`USUARIO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `USUARIO`, `SENHA`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno_curso`
--
ALTER TABLE `aluno_curso`
  ADD CONSTRAINT `aluno_curso_ibfk_1` FOREIGN KEY (`ID_ALUNO`) REFERENCES `aluno` (`ID_ALUNO`),
  ADD CONSTRAINT `aluno_curso_ibfk_2` FOREIGN KEY (`ID_CURSO`) REFERENCES `curso` (`ID_CURSO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
