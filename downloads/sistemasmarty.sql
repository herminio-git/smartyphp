-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Set-2019 às 01:24
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistemasmarty`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionarios`
--

CREATE TABLE `tb_funcionarios` (
  `db_id_funcionario` int(11) NOT NULL,
  `db_nome_completo` varchar(255) NOT NULL,
  `db_cpf` varchar(255) NOT NULL,
  `db_endereco` varchar(255) NOT NULL,
  `db_telefone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_funcionarios`
--

INSERT INTO `tb_funcionarios` (`db_id_funcionario`, `db_nome_completo`, `db_cpf`, `db_endereco`, `db_telefone`) VALUES
(1, 'Herminio', '888.888.888-88', 'Rua Juarez Ferreira, 22', '(22) 2222-2222'),
(2, 'Renata', '999.999.999-99', 'Maria JosÃ© Braga, 11', '(11) 1111-1111'),
(3, 'Samara ', '777.777.777-77', 'Rua Juarez Ferreira, 77', '(77) 7777-7777');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `db_id_usuario` int(11) NOT NULL,
  `db_nome_completo` varchar(255) NOT NULL,
  `db_usuario` varchar(255) NOT NULL,
  `db_senha` varchar(255) NOT NULL,
  `db_confirmar_senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`db_id_usuario`, `db_nome_completo`, `db_usuario`, `db_senha`, `db_confirmar_senha`) VALUES
(1, 'Hugo', 'hugofreitas', '123', ''),
(2, 'Herminio', 'herminio', '123', '123'),
(3, 'Renata', 'renata', '123', '123'),
(4, 'Samara ', 'samara', '456', '456'),
(6, 'Patricia ', 'patricia', '123', '123'),
(8, 'Maria ', 'maria', '123', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_funcionarios`
--
ALTER TABLE `tb_funcionarios`
  ADD PRIMARY KEY (`db_id_funcionario`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`db_id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_funcionarios`
--
ALTER TABLE `tb_funcionarios`
  MODIFY `db_id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `db_id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
