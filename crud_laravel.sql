-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Dez-2017 às 07:49
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_laravel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_pedidos`
--

CREATE TABLE `item_pedidos` (
  `id` int(10) UNSIGNED NOT NULL,
  `pedido_id` int(10) UNSIGNED NOT NULL,
  `produto_id` int(10) UNSIGNED NOT NULL,
  `quantidade` double NOT NULL,
  `preco` double NOT NULL,
  `desconto` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `item_pedidos`
--

INSERT INTO `item_pedidos` (`id`, `pedido_id`, `produto_id`, `quantidade`, `preco`, `desconto`, `total`, `created_at`, `updated_at`) VALUES
(3, 13, 18, 2, 2, 1222, 4, '2017-12-08 07:54:45', '2017-12-08 07:54:45'),
(4, 14, 4, 12, 56.3, 13.268206039076391, 675.5999999999999, '2017-12-08 08:47:00', '2017-12-08 08:47:00'),
(5, 14, 13, 54, 2, 710, 108, '2017-12-08 08:48:10', '2017-12-08 08:48:10'),
(6, 15, 15, 18, 7, 664.8571428571429, 126, '2017-12-08 08:48:40', '2017-12-08 08:48:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_04_221725_create_pessoas_table', 1),
(4, '2017_12_05_233755_create_produtos_table', 1),
(5, '2017_12_06_034335_create_pedidos_table', 1),
(6, '2017_12_06_034336_create_item_pedidos_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(10) UNSIGNED NOT NULL,
  `pessoa_id` int(10) UNSIGNED NOT NULL,
  `numero` int(11) NOT NULL,
  `emissao` date NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `pessoa_id`, `numero`, `emissao`, `total`, `created_at`, `updated_at`) VALUES
(13, 1, 1, '2017-11-05', 4, '2017-12-08 07:54:45', '2017-12-08 07:54:45'),
(14, 1, 2, '2017-11-05', 783.5999999999999, '2017-12-08 08:47:00', '2017-12-08 08:48:10'),
(15, 9, 3, '2017-11-05', 126, '2017-12-08 08:48:40', '2017-12-08 08:48:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `cpf`, `data_nascimento`, `created_at`, `updated_at`) VALUES
(1, 'Eli Parisian Jr.', '47180021172', '2005-05-26', '2017-12-07 02:03:45', '2017-12-07 02:03:45'),
(2, 'Presley Luettgen', '52434540104', '1978-04-05', '2017-12-07 02:03:45', '2017-12-07 02:03:45'),
(3, 'Dr. Foster Veum', '76951863172', '1995-04-13', '2017-12-07 02:03:45', '2017-12-07 02:03:45'),
(4, 'Caitlyn Bosco', '58451790178', '1981-01-20', '2017-12-07 02:03:45', '2017-12-07 02:03:45'),
(5, 'Blaise Sauer III', '26251701153', '1974-05-24', '2017-12-07 02:03:45', '2017-12-07 02:03:45'),
(6, 'Brenda Upton Sr.', '26251701153', '1973-05-10', '2017-12-07 02:03:45', '2017-12-07 02:03:45'),
(7, 'Rodger Schultz III', '18433570110', '1999-02-15', '2017-12-07 02:03:45', '2017-12-07 02:03:45'),
(8, 'Lucy Howell', '18872930782', '1982-04-23', '2017-12-07 02:03:45', '2017-12-07 02:03:45'),
(9, 'Troy Johnston Jr.', '15319687168', '2012-01-06', '2017-12-07 02:03:45', '2017-12-07 02:03:45'),
(10, 'Amos Hauck', '31357458134', '2013-05-24', '2017-12-07 02:03:45', '2017-12-07 02:03:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `codigo`, `nome`, `preco`, `created_at`, `updated_at`) VALUES
(1, '80,89,237', 'papel toalha', 53.16, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(2, '200,153,5', 'sal', 66.51, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(3, '67,161,160', 'leite condençado', 71.61, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(4, '189,65,42', 'leite', 63.77, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(5, '180,142,131', 'protetor solar', 59.49, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(6, '100,66,208', 'protetor solar', 39.44, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(7, '133,190,164', 'mantega', 45.53, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(8, '253,101,169', 'óleo', 3.73, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(9, '173,246,101', 'pasta de dente', 38.89, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(10, '78,30,172', 'coca cola', 97.06, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(11, '159,46,59', 'mel', 86.36, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(12, '15,51,22', 'chocolate', 11.3, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(13, '128,125,196', 'pão frances', 16.2, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(14, '63,111,20', 'adoçante', 53.9, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(15, '22,160,238', 'leite em pó', 53.54, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(16, '14,2,227', 'maçã', 57.04, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(17, '200,35,221', 'queijo', 7.98, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(18, '57,146,33', 'leite', 26.44, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(19, '176,177,209', 'papel toalha', 21.66, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(20, '57,24,244', 'leite em pó', 93.69, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(21, '158,110,16', 'nescal', 38.48, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(22, '71,213,117', 'mantega', 86.44, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(23, '55,9,3', 'mantega', 18.98, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(24, '45,2,61', 'carne moida', 72, '2017-12-07 02:04:12', '2017-12-07 02:04:12'),
(25, '200,86,21', 'nescal', 20.42, '2017-12-07 02:04:12', '2017-12-07 02:04:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_pedidos`
--
ALTER TABLE `item_pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_pedidos_pedido_id_foreign` (`pedido_id`),
  ADD KEY `item_pedidos_produto_id_foreign` (`produto_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedidos_pessoa_id_foreign` (`pessoa_id`);

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_pedidos`
--
ALTER TABLE `item_pedidos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `item_pedidos`
--
ALTER TABLE `item_pedidos`
  ADD CONSTRAINT `item_pedidos_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`),
  ADD CONSTRAINT `item_pedidos_produto_id_foreign` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`);

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_pessoa_id_foreign` FOREIGN KEY (`pessoa_id`) REFERENCES `pessoas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
