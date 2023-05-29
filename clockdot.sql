-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Maio-2023 às 23:47
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `clockdot`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos`
--

CREATE TABLE `pontos` (
  `id` int(11) NOT NULL,
  `data_entrada` date NOT NULL,
  `entrada` time DEFAULT NULL,
  `saida_intervalo` time DEFAULT NULL,
  `retorno_intervalo` time DEFAULT NULL,
  `saida` time DEFAULT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pontos`
--

INSERT INTO `pontos` (`id`, `data_entrada`, `entrada`, `saida_intervalo`, `retorno_intervalo`, `saida`, `usuario_id`) VALUES
(20, '2023-05-28', '15:51:44', '15:52:33', '15:52:36', '15:52:40', 8),
(21, '2023-05-28', '15:52:57', '15:52:59', '15:53:01', '15:53:02', 8),
(22, '2023-05-28', '21:48:12', '21:48:17', '21:48:23', '21:48:30', 8),
(23, '2023-05-29', '17:43:44', '17:44:36', '17:45:03', '17:45:19', 8),
(24, '2023-05-29', '17:45:21', '17:45:26', '17:45:27', '17:45:32', 8),
(27, '2023-05-29', '18:00:02', NULL, NULL, NULL, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `cnpj` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `cnpj`) VALUES
(8, 'teste', 'teste@gmail.com', 'teste', '1234567898'),
(9, 'José Gabriel', 'jg@gmail.com', '123', '123456'),
(15, 'vitoria', 'vit@gmail.com', 'asdasd', '12321312'),
(16, 'renan', 'renan@gmail.com', '123', '12345');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pontos`
--
ALTER TABLE `pontos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pontos`
--
ALTER TABLE `pontos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pontos`
--
ALTER TABLE `pontos`
  ADD CONSTRAINT `pontos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
