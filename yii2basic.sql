-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Ago 11, 2017 alle 15:51
-- Versione del server: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yii2basic`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `test1`
--

CREATE TABLE IF NOT EXISTS `test1` (
  `campoa` int(11) NOT NULL COMMENT 'label_a',
  `campob` varchar(255) NOT NULL COMMENT 'label_b',
  `campod` varchar(255) NOT NULL COMMENT 'label_c',
  `campoe` date NOT NULL COMMENT 'label_d',
  PRIMARY KEY (`campoa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='prova crud yii';

--
-- Dump dei dati per la tabella `test1`
--

INSERT INTO `test1` (`campoa`, `campob`, `campod`, `campoe`) VALUES
(1, 'bbbb', 'ccc', '2016-12-31'),
(2, 'bbb2', 'cccc22', '0000-00-00'),
(3, 'aaa', 'ddd', '0000-00-00'),
(10, 'AAAAA', 'VCCCC', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
