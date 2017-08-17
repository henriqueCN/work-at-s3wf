-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Ago-2017 às 17:28
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `henrique-s3wf`
--
CREATE DATABASE IF NOT EXISTS `henrique-s3wf` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `henrique-s3wf`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `s3_login`
--

CREATE TABLE `s3_login` (
  `logi_id` int(11) NOT NULL,
  `logi_nome` varchar(200) NOT NULL,
  `logi_email` varchar(200) NOT NULL,
  `logi_senha` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `s3_login`
--

INSERT INTO `s3_login` (`logi_id`, `logi_nome`, `logi_email`, `logi_senha`) VALUES
(2, 'Henrique', 'henrique@henrique.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Jefferson', 'jeff@jeff.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'teste', 'teste@teste.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `s3_tarefa`
--

CREATE TABLE `s3_tarefa` (
  `id` int(11) NOT NULL,
  `data_inicial` date NOT NULL,
  `hora_inicial` time NOT NULL,
  `data_final` date NOT NULL,
  `hora_final` time NOT NULL,
  `tamanho_csv` double NOT NULL,
  `nome_tarefa` varchar(200) NOT NULL,
  `download` varchar(200) NOT NULL,
  `acao` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `s3_tarefa`
--

INSERT INTO `s3_tarefa` (`id`, `data_inicial`, `hora_inicial`, `data_final`, `hora_final`, `tamanho_csv`, `nome_tarefa`, `download`, `acao`) VALUES
(1, '2017-08-08', '08:05:00', '2017-08-17', '05:07:00', 22, 'fazer teste', 'download', 'baixar'),
(2, '2017-08-08', '02:02:00', '2017-08-01', '01:03:00', 23, 'teste nome', 'azul', 'azul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `s3_login`
--
ALTER TABLE `s3_login`
  ADD PRIMARY KEY (`logi_id`);

--
-- Indexes for table `s3_tarefa`
--
ALTER TABLE `s3_tarefa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `s3_login`
--
ALTER TABLE `s3_login`
  MODIFY `logi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `s3_tarefa`
--
ALTER TABLE `s3_tarefa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
