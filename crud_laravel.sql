-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Dez-2017 às 04:09
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
(4, '2017_12_05_233755_create_produtos_table', 2);

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
(1, 'Dr. Garrett Jacobi PhD', '64760367187', '2011-12-24', '2017-12-06 05:08:29', '2017-12-06 05:08:29'),
(2, 'Dr. Durward Maggio', '25884263104', '2012-03-31', '2017-12-06 05:08:29', '2017-12-06 05:08:29'),
(3, 'Sim Kihn DVM', '33909245153', '1976-10-20', '2017-12-06 05:08:29', '2017-12-06 05:08:29'),
(4, 'Prof. Robyn Bahringer', '61996467115', '2006-08-29', '2017-12-06 05:08:29', '2017-12-06 05:08:29'),
(5, 'Aylin Lehner', '72056568187', '1976-08-09', '2017-12-06 05:08:29', '2017-12-06 05:08:29'),
(6, 'Vincenza Hagenes', '69826838187', '1977-12-03', '2017-12-06 05:08:29', '2017-12-06 05:08:29'),
(7, 'Miss Shanelle Hessel', '14970767149', '2016-11-27', '2017-12-06 05:08:29', '2017-12-06 05:08:29'),
(8, 'Presley Ryan', '22104836115', '1975-04-10', '2017-12-06 05:08:29', '2017-12-06 05:08:29'),
(9, 'Sallie Barrows', '04156528391', '1991-12-23', '2017-12-06 05:08:29', '2017-12-06 05:08:29'),
(10, 'Ruthie Ortiz Sr.', '87555948168', '2003-08-30', '2017-12-06 05:08:29', '2017-12-06 05:08:29');

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
(1, '212,218,114', 'açucar', 72, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(2, '90,130,48', 'maçã', 98.51, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(3, '228,152,243', 'café', 28.3, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(4, '182,37,70', 'carne moida', 87.15, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(5, '212,150,254', 'protetor solar', 28.71, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(6, '96,133,16', 'açucar', 48.99, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(7, '244,230,97', 'mel', 5.3, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(8, '211,185,8', 'café', 69.25, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(9, '231,186,134', 'coca cola', 84.45, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(10, '111,98,237', 'linguiça', 33.26, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(11, '16,44,217', 'café', 45.9, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(12, '8,31,55', 'coca cola', 9.64, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(13, '187,181,255', 'bacon', 1.97, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(14, '71,83,53', 'leite em pó', 71.15, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(15, '193,254,142', 'café', 57.39, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(16, '255,81,68', 'coca cola', 48.67, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(17, '201,69,217', 'chocolate', 79.87, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(18, '89,24,34', 'chocolate', 72.68, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(19, '134,177,204', 'bacon', 23.8, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(20, '70,220,112', 'chocolate', 98.09, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(21, '50,33,108', 'mantega', 51.74, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(22, '122,33,38', 'maçã', 99.45, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(23, '63,58,145', 'açucar', 80.6, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(24, '169,80,134', 'bacon', 76.28, '2017-12-06 05:08:45', '2017-12-06 05:08:45'),
(25, '240,91,77', 'leite condençado', 54.32, '2017-12-06 05:08:45', '2017-12-06 05:08:45');

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
