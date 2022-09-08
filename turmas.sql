-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Set-2022 às 17:34
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `turmas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ipi3`
--

CREATE TABLE `ipi3` (
  `hora` varchar(5) NOT NULL,
  `seg` int(11) DEFAULT NULL,
  `ter` int(11) DEFAULT NULL,
  `qua` int(11) DEFAULT NULL,
  `qui` int(11) DEFAULT NULL,
  `sex` int(11) DEFAULT NULL,
  `sab` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `materia` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ipi3`
--
ALTER TABLE `ipi3`
  ADD PRIMARY KEY (`hora`),
  ADD KEY `seg` (`seg`),
  ADD KEY `ter` (`ter`),
  ADD KEY `qua` (`qua`),
  ADD KEY `qui` (`qui`),
  ADD KEY `sex` (`sex`),
  ADD KEY `sab` (`sab`);

--
-- Índices para tabela `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `ipi3`
--
ALTER TABLE `ipi3`
  ADD CONSTRAINT `ipi3_ibfk_1` FOREIGN KEY (`seg`) REFERENCES `materias` (`id`),
  ADD CONSTRAINT `ipi3_ibfk_2` FOREIGN KEY (`ter`) REFERENCES `materias` (`id`),
  ADD CONSTRAINT `ipi3_ibfk_3` FOREIGN KEY (`qua`) REFERENCES `materias` (`id`),
  ADD CONSTRAINT `ipi3_ibfk_4` FOREIGN KEY (`qui`) REFERENCES `materias` (`id`),
  ADD CONSTRAINT `ipi3_ibfk_5` FOREIGN KEY (`sex`) REFERENCES `materias` (`id`),
  ADD CONSTRAINT `ipi3_ibfk_6` FOREIGN KEY (`sab`) REFERENCES `materias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
