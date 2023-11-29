-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/11/2023 às 02:38
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cart_item`
--

INSERT INTO `cart_item` (`id`, `name`, `price`) VALUES
(1, 'Hambúrguer temático', '50');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cart_item1`
--

CREATE TABLE `cart_item1` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cart_item1`
--

INSERT INTO `cart_item1` (`id`, `name`, `price`, `image`) VALUES
(1, 'Hambúrguer', '50', 'pokemon2.jpg'),
(2, 'Batata Frita', '40', 'batata.png'),
(3, 'Hambúrguer com batata', '80', 'hamburguer-com-batata.jpg'),
(4, 'Bebidas a partir de', '10', 'bebidas.jpg'),
(5, 'Foto com o Pikachu', '10', 'fantasia.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cart_item1`
--
ALTER TABLE `cart_item1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cart_item1`
--
ALTER TABLE `cart_item1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
