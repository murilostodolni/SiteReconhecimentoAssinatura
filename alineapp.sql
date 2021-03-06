-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Abr-2020 às 04:43
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
  `mesmo_punho` int(11) NOT NULL,
  `result` int(11) NOT NULL,
  `tempo_voto` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `computelistofuser`
--

CREATE TABLE `computelistofuser` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `result_image` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Estrutura da tabela `name_images`
--

CREATE TABLE `name_images` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quant_votes` int(2) NOT NULL,
  `result` int(2) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qtd_votes` int(11) NOT NULL,
  `qtd_acertos` int(11) NOT NULL,
  `qtd_erros` int(11) NOT NULL,
  `uf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idade` int(11) NOT NULL,
  `atuacao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `escolaridade` int(11) NOT NULL,
  `disciplina` int(11) NOT NULL,
  `abordagem` int(11) NOT NULL,
  `formacao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area` int(11) NOT NULL,
  `tempo` int(11) NOT NULL,
  `setor` int(11) NOT NULL,
  `experiencia` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
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
-- Índices para tabela `name_images`
--
ALTER TABLE `name_images`
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
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `checkbox`
--
ALTER TABLE `checkbox`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `computelistofuser`
--
ALTER TABLE `computelistofuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `name_images`
--
ALTER TABLE `name_images`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
