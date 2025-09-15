-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 15 sep. 2025 à 11:55
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fidepa`
--

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_09_10_145847_create_tickets_table', 1),
(6, '2025_09_15_000205_add_column_to_tickets_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `code_unique` varchar(255) NOT NULL,
  `qr_path` varchar(255) DEFAULT NULL,
  `status` enum('valide','utilisé') NOT NULL DEFAULT 'valide',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jour1` tinyint(1) NOT NULL DEFAULT 0,
  `jour2` tinyint(1) NOT NULL DEFAULT 0,
  `jour3` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tickets`
--

INSERT INTO `tickets` (`id`, `nom`, `prenom`, `tel`, `email`, `pays`, `code_unique`, `qr_path`, `status`, `created_at`, `updated_at`, `jour1`, `jour2`, `jour3`) VALUES
(1, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C1AC453D228', NULL, 'valide', '2025-09-10 16:50:13', '2025-09-15 09:42:46', 1, 0, 0),
(2, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C1ACBB4F65E', NULL, 'valide', '2025-09-10 16:52:11', '2025-09-10 16:52:11', 0, 0, 0),
(3, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C1AD38EA135', NULL, 'valide', '2025-09-10 16:54:16', '2025-09-10 16:54:16', 0, 0, 0),
(4, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C1AD44D064E', NULL, 'valide', '2025-09-10 16:54:28', '2025-09-10 16:54:28', 0, 0, 0),
(5, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C1AEDD05A86', NULL, 'valide', '2025-09-10 17:01:17', '2025-09-10 17:01:17', 0, 0, 0),
(6, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C1AF03A350C', NULL, 'valide', '2025-09-10 17:01:55', '2025-09-10 17:01:55', 0, 0, 0),
(7, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C1AF79D8A30', NULL, 'valide', '2025-09-10 17:03:53', '2025-09-10 17:03:53', 0, 0, 0),
(8, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C1B00EC0E82', NULL, 'valide', '2025-09-10 17:06:22', '2025-09-10 17:06:22', 0, 0, 0),
(9, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C1B0BCC604B', 'qrcodes/FDP68C1B0BCC604B.svg', 'valide', '2025-09-10 17:09:16', '2025-09-10 17:09:16', 0, 0, 0),
(10, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C29576BED1A', 'qrcodes/FDP68C29576BED1A.svg', 'valide', '2025-09-11 09:25:11', '2025-09-11 09:25:11', 0, 0, 0),
(11, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C2957D23EE2', 'qrcodes/FDP68C2957D23EE2.svg', 'valide', '2025-09-11 09:25:17', '2025-09-11 09:25:17', 0, 0, 0),
(12, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C2957D96D86', 'qrcodes/FDP68C2957D96D86.svg', 'valide', '2025-09-11 09:25:17', '2025-09-11 09:25:17', 0, 0, 0),
(13, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C2957E1644B', 'qrcodes/FDP68C2957E1644B.svg', 'valide', '2025-09-11 09:25:18', '2025-09-11 09:25:18', 0, 0, 0),
(14, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C295965DCE5', 'qrcodes/FDP68C295965DCE5.svg', 'valide', '2025-09-11 09:25:42', '2025-09-11 09:25:42', 0, 0, 0),
(15, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C295EC4F2FA', 'qrcodes/FDP68C295EC4F2FA.svg', 'valide', '2025-09-11 09:27:08', '2025-09-11 09:27:08', 0, 0, 0),
(16, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C29959431BD', 'qrcodes/FDP68C29959431BD.svg', 'valide', '2025-09-11 09:41:45', '2025-09-11 09:41:45', 0, 0, 0),
(17, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C2999804FB9', 'qrcodes/FDP68C2999804FB9.svg', 'valide', '2025-09-11 09:42:48', '2025-09-11 09:42:48', 0, 0, 0),
(18, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C29AA0C6038', 'qrcodes/FDP68C29AA0C6038.svg', 'valide', '2025-09-11 09:47:12', '2025-09-11 09:47:12', 0, 0, 0),
(19, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C29C01E4D5C', 'qrcodes/FDP68C29C01E4D5C.svg', 'valide', '2025-09-11 09:53:05', '2025-09-11 09:53:05', 0, 0, 0),
(20, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C29C24DC37C', 'qrcodes/FDP68C29C24DC37C.svg', 'valide', '2025-09-11 09:53:40', '2025-09-11 09:53:40', 0, 0, 0),
(21, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C29C37D146C', 'qrcodes/FDP68C29C37D146C.svg', 'valide', '2025-09-11 09:53:59', '2025-09-11 09:53:59', 0, 0, 0),
(22, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C29C5D60C1E', 'qrcodes/FDP68C29C5D60C1E.svg', 'valide', '2025-09-11 09:54:37', '2025-09-11 09:54:37', 0, 0, 0),
(23, 'Drame', 'Aissatou', '+221774874628', 'aissatoud@endaecopop.org', NULL, 'FDP68C29E3A040F1', 'qrcodes/FDP68C29E3A040F1.svg', 'valide', '2025-09-11 10:02:34', '2025-09-11 10:02:34', 0, 0, 0),
(24, 'GUEYE', 'Khadim', '+221 774565845', 'khadimr.gueye@endaecopop.org', NULL, 'FDP68C29E5F26DA4', 'qrcodes/FDP68C29E5F26DA4.svg', 'valide', '2025-09-11 10:03:11', '2025-09-11 10:03:11', 0, 0, 0),
(25, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C2E2802620C', 'qrcodes/FDP68C2E2802620C.svg', 'valide', '2025-09-11 14:53:52', '2025-09-11 14:53:52', 0, 0, 0),
(26, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C2E368C1399', 'qrcodes/FDP68C2E368C1399.svg', 'valide', '2025-09-11 14:57:44', '2025-09-11 14:57:44', 0, 0, 0),
(27, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C443AC6A156', 'qrcodes/FDP68C443AC6A156.svg', 'valide', '2025-09-12 16:00:45', '2025-09-12 16:00:45', 0, 0, 0),
(28, 'Ndiaye', 'Ibra', '774874628', 'ibra789ndiaye@gmail.com', NULL, 'FDP68C6F3444818F', 'qrcodes/FDP68C6F3444818F.svg', 'valide', '2025-09-14 16:54:30', '2025-09-14 16:54:30', 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ibra Ndiaye', 'ibra789ndiaye@gmail.com', NULL, '$2y$10$IRpE4LuaYEvgDVMhTL2MAOYU2776l4RZZJzJPTvlAT2xkGspH72Bq', NULL, '2025-09-15 00:17:22', '2025-09-15 00:17:22');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tickets_code_unique_unique` (`code_unique`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
