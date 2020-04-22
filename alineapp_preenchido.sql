-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Abr-2020 às 05:50
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `alineapp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `checkbox`
--

CREATE TABLE `checkbox` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image_real` int(11) NOT NULL,
  `image_fake` int(11) NOT NULL,
  `result` int(2) NOT NULL,
  `andamentoGrafico` int(11) NOT NULL,
  `conexoes` int(11) NOT NULL,
  `ataques` int(11) NOT NULL,
  `remates` int(11) NOT NULL,
  `posicionamento` int(11) NOT NULL,
  `alinhamento` int(11) NOT NULL,
  `valoresAngulares` int(11) NOT NULL,
  `valoresCurvilineos` int(11) NOT NULL,
  `alografos` int(11) NOT NULL,
  `metodosConstrucao` int(11) NOT NULL,
  `diacriticosPontuacao` int(11) NOT NULL,
  `inclinacao` int(11) NOT NULL,
  `dinamismoEvolucao` int(11) NOT NULL,
  `pressao` int(11) NOT NULL,
  `ritmoGrafico` int(11) NOT NULL,
  `comportamentoPauta` int(11) NOT NULL,
  `comportamentoBase` int(11) NOT NULL,
  `grauHabilidade` int(11) NOT NULL,
  `tendenciaPunho` int(11) NOT NULL,
  `momentoGrafico` int(11) NOT NULL,
  `variabilidade` int(11) NOT NULL,
  `velocidade` int(11) NOT NULL,
  `espacamentos` int(11) NOT NULL,
  `linhasVerbais` int(11) NOT NULL,
  `calibre` int(11) NOT NULL,
  `morfologia` int(11) NOT NULL,
  `natureza` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `checkbox`
--

INSERT INTO `checkbox` (`id`, `user_id`, `image_name`, `image_real`, `image_fake`, `result`, `andamentoGrafico`, `conexoes`, `ataques`, `remates`, `posicionamento`, `alinhamento`, `valoresAngulares`, `valoresCurvilineos`, `alografos`, `metodosConstrucao`, `diacriticosPontuacao`, `inclinacao`, `dinamismoEvolucao`, `pressao`, `ritmoGrafico`, `comportamentoPauta`, `comportamentoBase`, `grauHabilidade`, `tendenciaPunho`, `momentoGrafico`, `variabilidade`, `velocidade`, `espacamentos`, `linhasVerbais`, `calibre`, `morfologia`, `natureza`, `created_at`, `updated_at`) VALUES
(126, 0, '', 0, 0, 0, 1, 1, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-20 16:36:05', '2020-04-20 16:36:05'),
(127, 0, '', 0, 0, 0, 1, 1, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-20 16:41:00', '2020-04-20 16:41:00'),
(128, 39, '02856_gt.jpg', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-20 17:08:42', '2020-04-20 17:08:42'),
(129, 40, '02852_gt.jpg', 1, 0, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-20 20:26:21', '2020-04-20 20:26:21'),
(130, 40, '02855_gt.jpg', 1, 0, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-20 20:26:30', '2020-04-20 20:26:30'),
(131, 40, '02857_gt.jpg', 1, 0, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-20 20:26:35', '2020-04-20 20:26:35'),
(132, 40, '02854_gt.jpg', 1, 0, 0, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-20 20:26:40', '2020-04-20 20:26:40'),
(133, 40, '02856_gt.jpg', 1, 0, 0, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-20 20:26:47', '2020-04-20 20:26:47'),
(134, 40, '02853_gt.jpg', 1, 0, 0, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-20 20:26:53', '2020-04-20 20:26:53'),
(135, 41, '02855_gt.jpg', 1, 0, 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-21 19:32:27', '2020-04-21 19:32:27'),
(136, 41, '02857_gt.jpg', 1, 0, 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-21 19:33:30', '2020-04-21 19:33:30'),
(137, 41, '02856_gt.jpg', 1, 0, 0, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-21 19:34:55', '2020-04-21 19:34:55'),
(138, 42, '02855_gt.jpg', 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, '2020-04-21 19:40:05', '2020-04-21 19:40:05'),
(139, 42, '02855_gt.jpg', 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, '2020-04-21 20:01:36', '2020-04-21 20:01:36'),
(140, 42, '02852_gt.jpg', 1, 0, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-21 20:12:39', '2020-04-21 20:12:39'),
(141, 42, '02852_gt.jpg', 1, 0, 0, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-21 20:13:50', '2020-04-21 20:13:50'),
(142, 43, '02856_gt.jpg', 1, 0, 0, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-21 20:14:26', '2020-04-21 20:14:26'),
(143, 44, '02854_gt.jpg', 1, 0, 0, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-21 20:18:05', '2020-04-21 20:18:05'),
(144, 44, '02857_gt.jpg', 1, 0, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-21 20:18:30', '2020-04-21 20:18:30'),
(145, 44, '02857_gt.jpg', 1, 0, 0, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-21 20:19:12', '2020-04-21 20:19:12'),
(146, 45, '02852_gt.jpg', 1, 0, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-21 20:19:43', '2020-04-21 20:19:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `computelistofuser`
--

CREATE TABLE `computelistofuser` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_result` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `computelistofuser`
--

INSERT INTO `computelistofuser` (`id`, `user_id`, `last_file`, `last_result`, `created_at`, `updated_at`) VALUES
(229, 39, '02852_gt.jpg', 1, '2020-04-20 16:35:56', '2020-04-20 16:35:56'),
(230, 39, '02853_gt.jpg', 0, '2020-04-20 16:35:56', '2020-04-20 16:35:56'),
(232, 39, '02855_gt.jpg', 1, '2020-04-20 16:35:56', '2020-04-20 16:35:56'),
(241, 41, '02852_gt.jpg', 1, '2020-04-21 19:32:22', '2020-04-21 19:32:22'),
(242, 41, '02853_gt.jpg', 0, '2020-04-21 19:32:22', '2020-04-21 19:32:22'),
(243, 41, '02854_gt.jpg', 0, '2020-04-21 19:32:22', '2020-04-21 19:32:22'),
(248, 42, '02853_gt.jpg', 0, '2020-04-21 19:40:00', '2020-04-21 19:40:00'),
(249, 42, '02854_gt.jpg', 0, '2020-04-21 19:40:00', '2020-04-21 19:40:00'),
(251, 42, '02856_gt.jpg', 0, '2020-04-21 19:40:00', '2020-04-21 19:40:00'),
(252, 42, '02857_gt.jpg', 1, '2020-04-21 19:40:00', '2020-04-21 19:40:00'),
(253, 43, '02852_gt.jpg', 1, '2020-04-21 20:14:22', '2020-04-21 20:14:22'),
(254, 43, '02853_gt.jpg', 0, '2020-04-21 20:14:22', '2020-04-21 20:14:22'),
(255, 43, '02854_gt.jpg', 0, '2020-04-21 20:14:22', '2020-04-21 20:14:22'),
(256, 43, '02855_gt.jpg', 1, '2020-04-21 20:14:22', '2020-04-21 20:14:22'),
(258, 43, '02857_gt.jpg', 1, '2020-04-21 20:14:22', '2020-04-21 20:14:22'),
(259, 44, '02852_gt.jpg', 1, '2020-04-21 20:18:00', '2020-04-21 20:18:00'),
(260, 44, '02853_gt.jpg', 0, '2020-04-21 20:18:00', '2020-04-21 20:18:00'),
(262, 44, '02855_gt.jpg', 1, '2020-04-21 20:18:00', '2020-04-21 20:18:00'),
(263, 44, '02856_gt.jpg', 0, '2020-04-21 20:18:00', '2020-04-21 20:18:00'),
(266, 45, '02853_gt.jpg', 0, '2020-04-21 20:19:38', '2020-04-21 20:19:38'),
(267, 45, '02854_gt.jpg', 0, '2020-04-21 20:19:38', '2020-04-21 20:19:38'),
(268, 45, '02855_gt.jpg', 1, '2020-04-21 20:19:38', '2020-04-21 20:19:38'),
(269, 45, '02856_gt.jpg', 0, '2020-04-21 20:19:38', '2020-04-21 20:19:38'),
(270, 45, '02857_gt.jpg', 1, '2020-04-21 20:19:38', '2020-04-21 20:19:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lastfilefromuser`
--

CREATE TABLE `lastfilefromuser` (
  `id` int(10) UNSIGNED NOT NULL,
  `last_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `lastfilefromuser`
--

INSERT INTO `lastfilefromuser` (`id`, `last_file`, `created_at`, `updated_at`) VALUES
(39, '1', '2020-04-20 16:23:56', '2020-04-20 16:23:56'),
(40, '2', '2020-04-20 20:26:15', '2020-04-20 20:26:15'),
(41, '3', '2020-04-21 19:32:20', '2020-04-21 19:32:20'),
(42, '4', '2020-04-21 19:39:58', '2020-04-21 19:39:58'),
(43, '5', '2020-04-21 20:14:19', '2020-04-21 20:14:19'),
(44, '1', '2020-04-21 20:17:59', '2020-04-21 20:17:59'),
(45, '2', '2020-04-21 20:19:37', '2020-04-21 20:19:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste`
--

CREATE TABLE `teste` (
  `user_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `andamentoGrafico` int(11) NOT NULL,
  `conexoes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `associated_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `finished` tinyint(1) NOT NULL,
  `qtd_votes` int(11) NOT NULL,
  `qtd_acertos` int(11) NOT NULL,
  `qtd_erros` int(11) NOT NULL,
  `reloaded_flag` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `associated_file`, `finished`, `qtd_votes`, `qtd_acertos`, `qtd_erros`, `reloaded_flag`, `remember_token`, `created_at`, `updated_at`) VALUES
(39, 'teste115', 'teste115@g.com', '$2y$10$/XF/5iogDR15Ll8HuhAFsOrSukvVTTFIOVV2cnyTJSLfmyz0ola8O', 'assets/files/1.txt', 0, 3, 0, 0, 1, NULL, '2020-04-20 16:23:56', '2020-04-20 17:08:42'),
(40, 'teste116', 'teste116@g.com', '$2y$10$lCYtFXLQrvhNiCdG6Q22dOGFTB7cHHGCkVebBMI7qLmq0LZTXNm7m', 'assets/files/2.txt', 0, 6, 3, 3, 1, NULL, '2020-04-20 20:26:15', '2020-04-20 20:26:53'),
(41, 'teste122', 'teste122@g.com', '$2y$10$44i/gH16CIwC7c3GrSyyQe1j7xkboFJPKH6MuEKnrFsx856xCS8ei', 'assets/files/3.txt', 0, 3, 2, 1, 1, 'v1ZU9wXqiMzEhhP3vFnKPgUXqqksNcF6J1Dy8qgzd5KIrz4W4Hu7101e3rz3', '2020-04-21 19:32:20', '2020-04-21 19:39:31'),
(42, 'teste123', 'teste123@g.com', '$2y$10$O85M12FUIk4XYqOPRqudI.R2C7o7fM08T7sV8f.KqPmsCq27zhBM2', 'assets/files/4.txt', 0, 2, 2, 2, 1, 'AygJ4ZGl4m4tX4iGz45HsdKl92EHJEca5jLc9g1ycltCRInhGqVo1jDKDb37', '2020-04-21 19:39:58', '2020-04-21 20:14:02'),
(43, 'teste124', 'teste124@g.com', '$2y$10$Jv8VNG.EwCJmV2aepQfc6.PVVUBdwFkIqeoPkFO3ObwLZYC13j82q', 'assets/files/5.txt', 0, 1, 0, 1, 1, 'M50dM1emaf55Rx6BuNAVPVurCLDLhl7AxdEUI4HszgunupswVu5JRqzAyor1', '2020-04-21 20:14:19', '2020-04-21 20:17:41'),
(44, 'teste125', 'teste125@g.com', '$2y$10$26cp36.mQd.DejtT5AbfU.8CXmNN6yQtKfMUMOvuwhxjc2Kb6.unC', 'assets/files/1.txt', 0, 2, 1, 2, 1, 'O2cwapriyeYmCRumOd1RwtnBKa9sUSN27zgVQBr4XP1NmU4xeCXChkcVzUJB', '2020-04-21 20:17:59', '2020-04-21 20:19:20'),
(45, 'teste126', 'teste126@g.com', '$2y$10$DNkc7Hhs9GsVBzuIHRecruyoggcW9vPjtGiJhdxnw2hAiHYHOTCSW', 'assets/files/2.txt', 0, 1, 1, 0, 1, NULL, '2020-04-21 20:19:37', '2020-04-21 20:19:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `votes`
--

CREATE TABLE `votes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vote` tinyint(1) NOT NULL,
  `result` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `checkbox`
--
ALTER TABLE `checkbox`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `computelistofuser`
--
ALTER TABLE `computelistofuser`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `lastfilefromuser`
--
ALTER TABLE `lastfilefromuser`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices para tabela `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `checkbox`
--
ALTER TABLE `checkbox`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT de tabela `computelistofuser`
--
ALTER TABLE `computelistofuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT de tabela `lastfilefromuser`
--
ALTER TABLE `lastfilefromuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
