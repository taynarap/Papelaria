-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Maio-2023 às 16:35
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
-- Banco de dados: `papelaria_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos`
--

CREATE TABLE `acessos` (
  `id` int(11) NOT NULL,
  `data` varchar(100) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `acessos`
--

INSERT INTO `acessos` (`id`, `data`, `id_usuario`) VALUES
(1, '15:50:05 - 28/04/2023', 1),
(2, '15:52:00 - 28/04/2023', 1),
(3, '16:15:59 - 28/04/2023', 1),
(4, '17:42:54 - 29/04/2023', 1),
(5, '17:43:15 - 29/04/2023', 1),
(6, '17:47:45 - 29/04/2023', 1),
(7, '17:49:34 - 29/04/2023', 1),
(8, '18:11:52 - 29/04/2023', 1),
(9, '20:05:07 - 29/04/2023', 1),
(10, '21:04:05 - 29/04/2023', 1),
(11, '10:08:43 - 30/04/2023', 1),
(12, '15:36:06 - 30/04/2023', 1),
(13, '15:36:54 - 30/04/2023', 1),
(14, '15:46:08 - 30/04/2023', 1),
(15, '15:50:40 - 30/04/2023', 1),
(16, '15:52:32 - 30/04/2023', 1),
(17, '16:00:43 - 30/04/2023', 1),
(18, '16:03:07 - 30/04/2023', 1),
(19, '16:03:38 - 30/04/2023', 1),
(20, '16:22:12 - 30/04/2023', 1),
(21, '16:22:21 - 30/04/2023', 1),
(22, '16:27:06 - 30/04/2023', 1),
(23, '16:27:23 - 30/04/2023', 1),
(24, '16:39:13 - 30/04/2023', 1),
(25, '16:45:53 - 30/04/2023', 1),
(26, '16:46:26 - 30/04/2023', 1),
(27, '18:19:36 - 30/04/2023', 1),
(28, '18:20:28 - 30/04/2023', 1),
(29, '18:25:07 - 30/04/2023', 1),
(30, '18:39:24 - 30/04/2023', 1),
(31, '18:45:45 - 30/04/2023', 1),
(32, '18:45:52 - 30/04/2023', 1),
(33, '18:46:18 - 30/04/2023', 1),
(34, '18:47:41 - 30/04/2023', 1),
(35, '18:48:06 - 30/04/2023', 1),
(36, '20:50:58 - 30/04/2023', 1),
(37, '20:51:26 - 30/04/2023', 1),
(38, '20:58:09 - 30/04/2023', 1),
(39, '20:58:36 - 30/04/2023', 1),
(40, '20:59:02 - 30/04/2023', 1),
(41, '20:59:17 - 30/04/2023', 1),
(42, '20:59:55 - 30/04/2023', 1),
(43, '21:00:34 - 30/04/2023', 1),
(44, '21:03:15 - 30/04/2023', 1),
(45, '10:37:33 - 02/05/2023', 1),
(46, '10:38:38 - 02/05/2023', 1),
(47, '10:39:15 - 02/05/2023', 1),
(48, '10:51:57 - 02/05/2023', 1),
(49, '10:52:29 - 02/05/2023', 1),
(50, '10:54:40 - 02/05/2023', 1),
(51, '10:55:10 - 02/05/2023', 1),
(52, '10:55:29 - 02/05/2023', 1),
(53, '15:30:11 - 02/05/2023', 1),
(54, '15:41:14 - 02/05/2023', 1),
(55, '15:43:47 - 02/05/2023', 1),
(56, '15:55:01 - 02/05/2023', 1),
(57, '17:42:24 - 02/05/2023', 1),
(58, '11:41:11 - 03/05/2023', 1),
(59, '14:01:24 - 03/05/2023', 1),
(60, '14:01:37 - 03/05/2023', 1),
(61, '15:13:29 - 03/05/2023', 1),
(62, '15:17:10 - 03/05/2023', 1),
(63, '15:20:54 - 03/05/2023', 1),
(64, '15:21:50 - 03/05/2023', 1),
(65, '15:24:42 - 03/05/2023', 1),
(66, '15:25:12 - 03/05/2023', 1),
(67, '15:25:57 - 03/05/2023', 1),
(68, '15:27:01 - 03/05/2023', 1),
(69, '15:29:59 - 03/05/2023', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `preco` float NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `quantidade`) VALUES
(1, 'Kit de frasco de plasticina de 8 cores + 10 formas + rolo Alpino', 10.99, 2),
(2, 'Caneca One Piece 250ml', 15.99, 12),
(3, 'Caneca Luffy ', 16.59, 5),
(4, 'Caneca Zoro', 16.59, 10),
(5, 'Caneta Preta', 1.19, 22),
(6, 'Caneta Azul', 1.29, 35),
(7, 'Papel A4 (30 folhas)', 4.99, 22),
(8, 'Caderno A4', 4.35, 18),
(9, 'Caneta Verde', 1.29, 25),
(10, 'Lápis de Carvão STAEDTLER Noris (12 Un)', 5.27, 10),
(11, 'Lapiseira ROTRING Plástico', 4.32, 21),
(12, 'Minas Faber 0.5mm ', 3.68, 10),
(13, 'Kit de Desenho com Lápis e Pastéis Conté à Paris Multicolor', 45.28, 3),
(14, 'Destruidora de papel', 105.99, 6),
(15, 'Afia Lápis Duplo Cosmo Giotto', 1.35, 35),
(16, 'Esquadro 23 cm Frost azul', 1.55, 27),
(17, 'Estojo Retangular Médio', 9.79, 19),
(18, 'Estojo Ovalado Sunset - Rosa', 9.75, 18),
(19, 'Calculadora de bolso', 9.99, 42),
(20, 'Caderno de Argolas', 6.95, 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`) VALUES
(1, 'taynara', '$2y$10$pHWcdSBifYeBcRx6jS0kbuhLrdvsBHs.pvGn5eaqBKpcjusz5pIRe'),
(2, 'teste', '1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acessos`
--
ALTER TABLE `acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
