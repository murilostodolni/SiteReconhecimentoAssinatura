-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Abr-2020 às 18:58
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
(108, 34, '02853_gt.jpg', 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, '2020-04-19 17:52:23', '2020-04-19 17:52:23'),
(109, 34, '02854_gt.jpg', 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, '2020-04-19 18:13:15', '2020-04-19 18:13:15'),
(110, 34, '02857_gt.jpg', 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, '2020-04-19 18:15:44', '2020-04-19 18:15:44'),
(111, 34, '02853_gt.jpg', 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2020-04-19 18:23:08', '2020-04-19 18:23:08'),
(112, 36, '02853_gt.jpg', 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2020-04-19 19:43:41', '2020-04-19 19:43:41'),
(113, 36, '02852_gt.jpg', 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, '2020-04-19 19:44:09', '2020-04-19 19:44:09'),
(114, 36, '02857_gt.jpg', 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-19 19:45:34', '2020-04-19 19:45:34'),
(115, 36, '02855_gt.jpg', 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-19 19:46:11', '2020-04-19 19:46:11'),
(116, 36, '02854_gt.jpg', 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-19 19:46:43', '2020-04-19 19:46:43'),
(117, 36, '02856_gt.jpg', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-19 19:48:04', '2020-04-19 19:48:04'),
(118, 37, '02856_gt.jpg', 1, 0, 0, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-19 19:50:33', '2020-04-19 19:50:33'),
(119, 37, '02856_gt.jpg', 1, 0, 0, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-19 19:55:48', '2020-04-19 19:55:48'),
(120, 38, '02852_gt.jpg', 1, 0, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-19 19:56:54', '2020-04-19 19:56:54'),
(121, 38, '02854_gt.jpg', 1, 0, 0, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-19 19:57:01', '2020-04-19 19:57:01'),
(122, 38, '02856_gt.jpg', 1, 0, 0, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-19 19:57:25', '2020-04-19 19:57:25'),
(123, 38, '02857_gt.jpg', 1, 0, 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-19 19:57:30', '2020-04-19 19:57:30'),
(124, 38, '02855_gt.jpg', 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-19 19:57:37', '2020-04-19 19:57:37'),
(125, 38, '02853_gt.jpg', 0, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-04-19 19:57:44', '2020-04-19 19:57:44');

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
(181, 31, '02852_gt.jpg\r\n', 0, '2020-04-19 16:34:37', '2020-04-19 16:34:37'),
(182, 31, '02853_gt.jpg\r\n', 0, '2020-04-19 16:34:37', '2020-04-19 16:34:37'),
(183, 31, '02854_gt.jpg\r\n', 0, '2020-04-19 16:34:37', '2020-04-19 16:34:37'),
(184, 31, '02855_gt.jpg\r\n', 0, '2020-04-19 16:34:37', '2020-04-19 16:34:37'),
(185, 31, '02856_gt.jpg\r\n', 0, '2020-04-19 16:34:37', '2020-04-19 16:34:37'),
(186, 31, '02857_gt.jpg', 0, '2020-04-19 16:34:37', '2020-04-19 16:34:37'),
(187, 32, '02852_gt.jpg\r\n', 0, '2020-04-19 17:13:24', '2020-04-19 17:13:24'),
(188, 32, '02853_gt.jpg\r\n', 0, '2020-04-19 17:13:24', '2020-04-19 17:13:24'),
(189, 32, '02854_gt.jpg\r\n', 0, '2020-04-19 17:13:24', '2020-04-19 17:13:24'),
(190, 32, '02855_gt.jpg\r\n', 0, '2020-04-19 17:13:24', '2020-04-19 17:13:24'),
(191, 32, '02856_gt.jpg\r\n', 0, '2020-04-19 17:13:24', '2020-04-19 17:13:24'),
(192, 32, '02857_gt.jpg', 0, '2020-04-19 17:13:24', '2020-04-19 17:13:24'),
(193, 33, '02852_gt.jpg', 0, '2020-04-19 17:36:11', '2020-04-19 17:36:11'),
(194, 33, '02853_gt.jpg', 0, '2020-04-19 17:36:11', '2020-04-19 17:36:11'),
(195, 33, '02854_gt.jpg', 0, '2020-04-19 17:36:11', '2020-04-19 17:36:11'),
(196, 33, '02855_gt.jpg', 0, '2020-04-19 17:36:11', '2020-04-19 17:36:11'),
(197, 33, '02856_gt.jpg', 0, '2020-04-19 17:36:11', '2020-04-19 17:36:11'),
(198, 33, '02857_gt.jpg', 0, '2020-04-19 17:36:11', '2020-04-19 17:36:11'),
(199, 34, '02852_gt.jpg', 1, '2020-04-19 17:37:47', '2020-04-19 17:37:47'),
(202, 34, '02855_gt.jpg', 1, '2020-04-19 17:37:47', '2020-04-19 17:37:47'),
(203, 34, '02856_gt.jpg', 0, '2020-04-19 17:37:47', '2020-04-19 17:37:47'),
(205, 35, '02852_gt.jpg', 1, '2020-04-19 18:25:44', '2020-04-19 18:25:44'),
(206, 35, '02853_gt.jpg', 0, '2020-04-19 18:25:44', '2020-04-19 18:25:44'),
(207, 35, '02854_gt.jpg', 0, '2020-04-19 18:25:44', '2020-04-19 18:25:44'),
(208, 35, '02855_gt.jpg', 1, '2020-04-19 18:25:44', '2020-04-19 18:25:44'),
(209, 35, '02856_gt.jpg', 0, '2020-04-19 18:25:44', '2020-04-19 18:25:44'),
(210, 35, '02857_gt.jpg', 1, '2020-04-19 18:25:44', '2020-04-19 18:25:44'),
(217, 37, '02852_gt.jpg', 1, '2020-04-19 19:50:29', '2020-04-19 19:50:29'),
(218, 37, '02853_gt.jpg', 0, '2020-04-19 19:50:29', '2020-04-19 19:50:29'),
(219, 37, '02854_gt.jpg', 0, '2020-04-19 19:50:29', '2020-04-19 19:50:29'),
(220, 37, '02855_gt.jpg', 1, '2020-04-19 19:50:29', '2020-04-19 19:50:29'),
(222, 37, '02857_gt.jpg', 1, '2020-04-19 19:50:29', '2020-04-19 19:50:29');

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
(31, '1', '2020-04-19 16:29:58', '2020-04-19 16:29:58'),
(32, '2', '2020-04-19 17:13:05', '2020-04-19 17:13:05'),
(33, '3', '2020-04-19 17:36:10', '2020-04-19 17:36:10'),
(34, '4', '2020-04-19 17:37:46', '2020-04-19 17:37:46'),
(35, '5', '2020-04-19 18:25:42', '2020-04-19 18:25:42'),
(36, '1', '2020-04-19 18:37:35', '2020-04-19 18:37:35'),
(37, '2', '2020-04-19 19:50:27', '2020-04-19 19:50:27'),
(38, '3', '2020-04-19 19:56:47', '2020-04-19 19:56:47');

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
  `reloaded_flag` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `associated_file`, `finished`, `qtd_votes`, `reloaded_flag`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Murilo Campanhol Stodolni', 'mcs2@ecomp.poli.br', '$2y$10$03VbZEoeiIUnvyE2fomR4eArJXNlhyQ4y9W9Rz/KDA7JkQXeWAkTW', 'assets/files/1.txt', 0, 6, 1, 'mITQV3HBvbkMfUKghgxA6vLvhPiqiK4i1K0QgF1EyxofrwvsHapuV019AHn9', '2019-10-31 23:45:36', '2019-11-05 03:25:34'),
(2, 'teste', 'm@gmail.com', '$2y$10$wDxShHVq2mrbQFSz2lJm6ecExIqdzebREQeTKAgUOjwDBd79SI2S2', 'assets/files/2.txt', 0, 6, 1, 'GlldjHzJkXFceTTugjtkH358PVh8bLp4h6Tk5oTBOQOcUqs4S6YrTUoXHZob', '2019-10-31 23:56:52', '2020-04-19 01:00:42'),
(3, 'teste1', 'fadfsd@gmail.com', '$2y$10$68GjqXv.slMhDj0jvv6rW.msWke7paqGylr4LFpWCHFnTw4y3kwgq', 'assets/files/3.txt', 0, 0, 0, NULL, '2019-11-01 00:10:03', '2019-11-01 00:10:03'),
(4, 'teste', 'teste@hotmail.com', '$2y$10$aiAQr5gKrs3Zz2Cmz6wTteeJqmlyHiHEicnRNyKR1U976ID18ZLYS', 'assets/files/4.txt', 0, 6, 1, 'lZ4RC7jNdO1LsL0HU26OD29yyl3wQM7pKG89uMshQkE7V9rCpZIcFAktin9J', '2019-11-05 02:51:51', '2019-11-06 04:49:32'),
(5, 'oi', 'oi@oi.com', '$2y$10$IBqLZ5oOhsZts/sc9seCAuX7ES4t8CUu/wXcoQKMmTd8XLQqS0/9q', 'assets/files/5.txt', 0, 10, 1, 'DWpRgbr1nv59QkZQJWSHNWHUdfRIdkJWKEUZrtc25KUeQsPFU8JjJJuHoeJP', '2019-11-06 04:49:55', '2019-11-07 20:45:11'),
(6, 'teste3', 'teste@teste.com', '$2y$10$EWPbPUF3vthml5gDxKqLw.sbYLHANBvFN9.jj3pk50DVEHNhIdMS6', 'assets/files/1.txt', 0, 6, 1, 'juqe4nJoCNX255qKRyCYxEfex5x6S5FiJvOhUtAPZlxh53sQplGPhcMKBkyV', '2019-11-07 20:45:30', '2019-11-07 20:49:27'),
(7, 'murilo1', 'murilo@g.com', '$2y$10$37V8RZ73QPNhkDeQRuKSO.MHO2.nGu2hlSx2aqqbR.Mt.LNWC/h9m', 'assets/files/2.txt', 0, 1, 1, '4ANNd4KStcfbgd2DU26t2lsNFr7YbsP9az1PFQKoGQ6qql2QgvnuQRhkHNZz', '2019-11-07 20:49:46', '2019-11-07 21:23:19'),
(8, 'murilo', 'murilo@mail.com', '$2y$10$L.4G9.KBZeHcptg0vpQwZO6B.GvHyCKBXAK1PDttuj1F4Lc2ctZUm', 'assets/files/3.txt', 0, 0, 1, NULL, '2019-11-07 21:26:53', '2019-11-07 21:26:59'),
(9, 'oi', 'oi@g.com', '$2y$10$V8dem7e9/ZmlVsFQyCjXmu66AMoWjgz6C8BXuiUcTZQ3KaglU1VtW', 'assets/files/4.txt', 0, 0, 1, 'Gc2CmWNrsy389K24B0iQLVrTXm19BI3Ki4KDATUGRphmuGTRsEprzMjGmfrB', '2019-11-13 22:06:04', '2019-11-13 23:06:36'),
(10, 'teste', 'teste@g.com', '$2y$10$O6/2LSE90p89IxVXUrEXbeDRKq2G6ot0B6UZkJYaqFmRYKW.BD/3G', 'assets/files/5.txt', 0, 6, 1, 'dW9sqDJ9yrnY8GFOup1JIc2GBwmqGvnPfYgXGIvC9ouu1T2tkGHeiU9XJl1O', '2019-11-13 23:07:02', '2019-11-13 23:14:15'),
(11, 'teste12', 'teste12@g.com', '$2y$10$LgHUhDo2sQYbivL965f5oOBZrfYuQQds5/zdc0ixYfX9hlJXVkMrS', 'assets/files/1.txt', 0, 6, 1, 'bWjvXVMJoC2Wmn5NoKLZZp3lWBX3kUhhahZ43DPdGX948G6jza2eT8CRaEAP', '2019-11-13 23:14:38', '2019-11-13 23:15:12'),
(12, 'teste13', 'teste13@g.com', '$2y$10$nW9xPWSchj6OlQOxbArCpuvadgIn5Ae2O/xDrCANGzzMRB17Et2Hq', 'assets/files/2.txt', 0, 0, 1, NULL, '2019-11-13 23:15:35', '2019-11-13 23:15:37'),
(13, 'teste14', 'teste14@g.com', '$2y$10$VbyOAncUHiwCmeLGADa3zeZmSuQtRkjQxW1CWSlxhN4Nb26TaGymq', 'assets/files/3.txt', 0, 6, 1, 'I26RfW2UmAqCmSSytFUhSUEKjjCWQrYsEh3FWsg436jaHDD8nGzLVldU6t6p', '2019-11-14 04:09:59', '2019-11-14 05:05:02'),
(14, 'teste15', 'teste15@g.com', '$2y$10$679xXbbIHYYqRyvOx.EFB.0ORzuaMA.JoC.ETESqGnZHkFrsflcoa', 'assets/files/4.txt', 0, 6, 1, 'Sup1rUGQ5KFJkln7xWipHYtPcGFOrqxbZGqytMcAkRiNIZyuNXYMsGbR4D5Y', '2019-11-14 05:19:10', '2019-11-14 05:52:11'),
(15, 'teste16', 'teste16@g.com', '$2y$10$rqbJj91XTKSHTp0JZd7E3enSSRmE5pJA99HATaSymXjawR0v7tYpq', 'assets/files/5.txt', 0, 4, 1, NULL, '2019-11-14 05:52:27', '2019-11-14 06:05:45'),
(16, 'teste17', 'teste17@g.com', '$2y$10$c2Ejjb5eSFDfr/OfIe1PCOHRijoRctohdoSESgFA7jd6.0wB/b2rO', 'assets/files/1.txt', 0, 0, 1, NULL, '2019-11-14 15:52:16', '2019-11-14 15:52:19'),
(17, 'teste18', 'teste18@g.com', '$2y$10$vcyFDe9PN3zqUBFZ8rJLfuvRyIIer3WWSw8tAZPeEIpg4cBPcAdhq', 'assets/files/2.txt', 0, 2, 1, 'PPNQya0uH9urG0myFISDsg4uLmHGMSphi2FLOJvmwnXSkbtEV89c4GPepjnZ', '2019-11-21 20:18:55', '2019-11-21 21:18:52'),
(18, 'Murilo', 'mcs@ecomp.poli.br', '$2y$10$DxVtEJ96D8DlnadiS5xRKeSsx6h.CsA.X4G5lke8o8U1YdcODN/be', 'assets/files/3.txt', 0, 6, 1, NULL, '2019-12-11 04:37:22', '2019-12-11 04:39:34'),
(19, 'Teste20', 'teste20@g.com', '$2y$10$5ecUd0Y0jqBWaX8SLqifDeLVNwRAzoatkrNmpcTevgaj3OK/5jBc2', 'assets/files/4.txt', 0, 1, 1, 'KZwKLNJGOmxTXHntqHhZMtZhEZ6WONyG7HyCUihrULtFjnIR6lrLrLFlspwa', '2020-01-30 04:34:56', '2020-01-30 04:44:17'),
(20, 'teste21@g.com', 'teste21@g.com', '$2y$10$wK6jiHEAE3J25/9M3pf7D.QCvQggSK7TrLEY8eW6WWhzY3P7ccQoq', 'assets/files/5.txt', 0, 6, 1, NULL, '2020-01-30 04:44:46', '2020-01-30 04:56:45'),
(21, 'Murilo', 'teste22@g.com', '$2y$10$udYcKMEZgbwcoe2mXDKN.eAIcGUb1sUqbQJQfvLvG3Mc4836PcVG.', 'assets/files/1.txt', 0, 1, 1, NULL, '2020-01-30 15:13:58', '2020-01-30 15:15:35'),
(22, 'teste27', 'teste27@g.com', '$2y$10$rhw3DUz93HxxDYX8ofsi/uKPHxDOZtnKOtYTR8Eg16Zg.aMpwIdsC', 'assets/files/2.txt', 0, 5, 1, 'dalecldE8kshyWO3DAIFYyhN7yb75ETmt9f5sQDAdc08ZLZ3HtmSHecwNz3Z', '2020-02-13 01:06:52', '2020-02-13 01:38:52'),
(23, 'teste29', 'teste29@g.com', '$2y$10$b0vFNcZrowXTz8FPs4rzqOq671J4.ivT93GpLCF7uli8D3dzDt19u', 'assets/files/3.txt', 0, 6, 1, 'hbAPckIVdSJtavgUQBPDlzO3D0A3nZ5nMzDG6euA7Wvd5JYRxOIktJrxqbIb', '2020-02-13 01:39:13', '2020-02-13 01:42:08'),
(24, 'teste30', 'teste30@gmail.com', '$2y$10$AaScGg650IpN1XOLox1AIelMJ.Bhts08Yfqrv1iZxwiYMfXu4jBom', 'assets/files/4.txt', 0, 0, 1, 'EpmPmetN0trK1iszZqx71Px7ugJFZcy8e36ptnr2m4WZE6zW5xBT4oVXG6Jz', '2020-02-13 01:42:31', '2020-02-20 23:23:22'),
(25, 'teste', 'teste31@g.com', '$2y$10$wETTcJbpiYtoGwNRsvOoyuJmn34siQwS5qdp6AqwfLnlSpxzSm2ae', 'assets/files/5.txt', 0, 0, 1, NULL, '2020-02-20 23:24:38', '2020-02-20 23:24:49'),
(26, 'teste', 'teste50@g.com', '$2y$10$1FRhJ9Wa./GFLm1bpwYRbOecC1ZEKa829SybiOgltBtQy3e2ih3qK', 'assets/files/1.txt', 0, 6, 1, 'X91KtHPCygJrOnOc5T5UUFWjSTWlGtzXMvvg5lsaDBi2nWofreXoy2M0M10O', '2020-04-01 20:46:29', '2020-04-01 20:52:53'),
(27, 'teste', 'test51@g.com', '$2y$10$xO8LKC2taf5B5lHjAsA4HOqTH16eda6LusFnZP9VgznSmeZFkTioa', 'assets/files/2.txt', 0, 6, 1, 'DGrl8PpahHfJtpVSpPGzE8xN86nvNfmVxiEknXceTtUmn7txKe88jmfzKQsN', '2020-04-01 20:53:06', '2020-04-01 20:57:31'),
(28, 'teste', 'teste52@g.com', '$2y$10$LNDeQOlA/37WQnVQPEpOVuLIN9VnQYFsStZy92qwlvFbJs8uWHFZu', 'assets/files/3.txt', 0, 6, 1, 'rBghpJBmR4ynSS8lIOEysYuQnSDMmjDTegPbUzVqh8ARB9y8EerCEELnId0f', '2020-04-01 20:57:53', '2020-04-01 21:26:23'),
(29, 'teste', 'teste53@g.com', '$2y$10$nyUwHN5QfG8n/QhjzgvI7OjCOCBFmpaUHn8RgOL6rqqcvldCclkVW', 'assets/files/4.txt', 0, 6, 1, 'l8OBy7KpagFRaDXUjCVhD2Sj1gsDdmj9sXQFYS7TdMMSKvfALU7YeBKjyc3i', '2020-04-01 21:26:39', '2020-04-01 21:37:03'),
(30, 'teste', 'teste54@g.com', '$2y$10$Udx8dye5Iz1Qem3mUl64gex.XLwbCdFLoTjMsvG.A5lH3OGfOr1B6', 'assets/files/5.txt', 0, 0, 1, NULL, '2020-04-01 21:37:16', '2020-04-01 21:37:19'),
(31, 'teste1', 'teste1@g.com', '$2y$10$dSByWgw8Lqg0mNh5VxOba.1LGa13zZ6qQrn24VGc49SZ5zYbClyI.', 'assets/files/1.txt', 0, 0, 1, 'mpyq0Mvu0IPpNTgWls3zQ8u0YvOguFxaHK2EHVzgk5Emy8NoTZKt4jy5pu4n', '2020-04-19 16:29:58', '2020-04-19 16:34:47'),
(32, 'teste103', 'teste103@g.com', '$2y$10$useVnuieMHl6rR4DwKsj8uBqjLWXaEU4qyQG03VVDk3Ccm84jz3hq', 'assets/files/2.txt', 0, 0, 1, 'e2lsM9jTHNJQAa46TnB2MWGeAV5ECUHiaQG7OW2uYGLzSnkX4mxLCIXXyd8W', '2020-04-19 17:13:05', '2020-04-19 17:35:53'),
(33, 'teste104', 'teste104@g.com', '$2y$10$YNGMJgarIfgtXCiswAxtV.Ly0vFnxkXZhAry1qFLA/IVOB4QzA6s6', 'assets/files/3.txt', 0, 0, 1, 'HiXZZmOlHmCa4vR3cGuuAIXsrV8FJLBN4t15eGtFpEn0ipnzvkC9mFxFHCFV', '2020-04-19 17:36:10', '2020-04-19 17:37:30'),
(34, 'teste105', 'teste105@g.com', '$2y$10$sdK4FEmzgY.lSnX5yFUAZeFFpCjWNdWB7Oo78BdzWqdj417nwavgi', 'assets/files/4.txt', 0, 3, 1, 'huJi5ojomTmWD4TJV8U1oP79fHNKgrVAbpMFNna6Lo2Ca1x4cSj7O9hGeDeh', '2020-04-19 17:37:46', '2020-04-19 18:25:21'),
(35, 'teste106', 'teste106@g.com', '$2y$10$M1JtZO1PF6bujzD7JcyqkOAn690uoDrTBES/AJzy3mBY/CG7l5knm', 'assets/files/5.txt', 0, 0, 1, 'jNU4lfGnCZPu18qQUzwsiDxy9lt32aBKuf7Knve4jsBTkmdmZ0t2mlTvGPam', '2020-04-19 18:25:42', '2020-04-19 18:37:15'),
(36, 'teste107', 'teste107@g.com', '$2y$10$eJM0khu.D9.1slJIY.3TB.7GcGbaGiPfsM3ACgXL0y/JSzOn3aUyK', 'assets/files/1.txt', 0, 6, 1, 'olQB07egIQPowL1H6NMQ0xi5NXtpfMQJjvlINrxfaGazVEKbaGBWjL8F7wu0', '2020-04-19 18:37:35', '2020-04-19 19:50:11'),
(37, 'teste108', 'teste108@g.com', '$2y$10$DV1x7RzaOdSFOIiJ1Ef3Keum5T5xNDaPtkgKTA79Hdc2E6aKFQG0K', 'assets/files/2.txt', 0, 1, 1, 'MIwORzaILgaDZn8jIvvu2VMsGVptNoFtvcK49hiODUOxuSzCdfL1dUnFTotL', '2020-04-19 19:50:27', '2020-04-19 19:56:33'),
(38, 'teste109', 'teste109@g.com', '$2y$10$INClVQJK6w9lmhoJrJBwc.zGfzsFNDnnzio51p0CEPXD8XMfOywo6', 'assets/files/3.txt', 0, 6, 1, 'RiDggvND2kSZ1wxjDkQYxu8jjkCGZAzV031K0wNvoXaxkxVAWxLYUv6u617p', '2020-04-19 19:56:47', '2020-04-19 19:58:04');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT de tabela `computelistofuser`
--
ALTER TABLE `computelistofuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT de tabela `lastfilefromuser`
--
ALTER TABLE `lastfilefromuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
