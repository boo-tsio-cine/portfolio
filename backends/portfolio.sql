-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 07 déc. 2025 à 16:14
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-boost.roster.scan', 'a:2:{s:6:\"roster\";O:21:\"Laravel\\Roster\\Roster\":3:{s:13:\"\0*\0approaches\";O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:11:\"\0*\0packages\";O:32:\"Laravel\\Roster\\PackageCollection\":2:{s:8:\"\0*\0items\";a:10:{i:0;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:4:\"^2.3\";s:10:\"\0*\0package\";E:36:\"Laravel\\Roster\\Enums\\Packages:BREEZE\";s:14:\"\0*\0packageName\";s:14:\"laravel/breeze\";s:10:\"\0*\0version\";s:5:\"2.3.8\";s:6:\"\0*\0dev\";b:0;}i:1;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:5:\"^12.0\";s:10:\"\0*\0package\";E:37:\"Laravel\\Roster\\Enums\\Packages:LARAVEL\";s:14:\"\0*\0packageName\";s:17:\"laravel/framework\";s:10:\"\0*\0version\";s:7:\"12.38.1\";s:6:\"\0*\0dev\";b:0;}i:2;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:6:\"v0.3.7\";s:10:\"\0*\0package\";E:37:\"Laravel\\Roster\\Enums\\Packages:PROMPTS\";s:14:\"\0*\0packageName\";s:15:\"laravel/prompts\";s:10:\"\0*\0version\";s:5:\"0.3.7\";s:6:\"\0*\0dev\";b:0;}i:3;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:6:\"^3.6.4\";s:10:\"\0*\0package\";E:38:\"Laravel\\Roster\\Enums\\Packages:LIVEWIRE\";s:14:\"\0*\0packageName\";s:17:\"livewire/livewire\";s:10:\"\0*\0version\";s:5:\"3.7.1\";s:6:\"\0*\0dev\";b:0;}i:4;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:6:\"^1.7.0\";s:10:\"\0*\0package\";E:34:\"Laravel\\Roster\\Enums\\Packages:VOLT\";s:14:\"\0*\0packageName\";s:13:\"livewire/volt\";s:10:\"\0*\0version\";s:6:\"1.10.1\";s:6:\"\0*\0dev\";b:0;}i:5;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:6:\"v0.3.3\";s:10:\"\0*\0package\";E:33:\"Laravel\\Roster\\Enums\\Packages:MCP\";s:14:\"\0*\0packageName\";s:11:\"laravel/mcp\";s:10:\"\0*\0version\";s:5:\"0.3.3\";s:6:\"\0*\0dev\";b:1;}i:6;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:5:\"^1.24\";s:10:\"\0*\0package\";E:34:\"Laravel\\Roster\\Enums\\Packages:PINT\";s:14:\"\0*\0packageName\";s:12:\"laravel/pint\";s:10:\"\0*\0version\";s:6:\"1.25.1\";s:6:\"\0*\0dev\";b:1;}i:7;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:5:\"^1.41\";s:10:\"\0*\0package\";E:34:\"Laravel\\Roster\\Enums\\Packages:SAIL\";s:14:\"\0*\0packageName\";s:12:\"laravel/sail\";s:10:\"\0*\0version\";s:6:\"1.48.0\";s:6:\"\0*\0dev\";b:1;}i:8;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:7:\"^11.5.3\";s:10:\"\0*\0package\";E:37:\"Laravel\\Roster\\Enums\\Packages:PHPUNIT\";s:14:\"\0*\0packageName\";s:15:\"phpunit/phpunit\";s:10:\"\0*\0version\";s:7:\"11.5.44\";s:6:\"\0*\0dev\";b:1;}i:9;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:10:\"\0*\0package\";E:41:\"Laravel\\Roster\\Enums\\Packages:TAILWINDCSS\";s:14:\"\0*\0packageName\";s:11:\"tailwindcss\";s:10:\"\0*\0version\";s:6:\"4.1.17\";s:6:\"\0*\0dev\";b:1;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:21:\"\0*\0nodePackageManager\";E:43:\"Laravel\\Roster\\Enums\\NodePackageManager:NPM\";}s:9:\"timestamp\";i:1764915888;}', 1765002288);

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `mail`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'test@example.com', '0341234567', 'Bonjour', '2025-11-21 09:03:29', '2025-11-21 09:03:29'),
(2, 'tsiorrandrianomenjanahary@gmail.com', '0347463409', 'aaa', '2025-11-21 09:03:53', '2025-11-21 09:03:53'),
(3, 'tsiorrandrianomenjanahary@gmail.com', '0347463409', 'Bonjour à vous', '2025-11-25 06:20:36', '2025-11-25 06:20:36'),
(4, 'tsiorrandrianomenjanahary@gmail.com', '0347463409', 'mmmm', '2025-11-25 09:14:32', '2025-11-25 09:14:32');

-- --------------------------------------------------------

--
-- Structure de la table `etudes`
--

CREATE TABLE `etudes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `diplome` varchar(255) NOT NULL,
  `annee` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudes`
--

INSERT INTO `etudes` (`id`, `type`, `lieu`, `nom`, `diplome`, `annee`, `created_at`, `updated_at`) VALUES
(5, 'Lycée', 'Mahamasina', 'Saint Joseph', 'Baccalauréat', 2019, '2025-11-17 05:41:29', '2025-11-25 04:16:54'),
(6, 'Collège', 'Antanimena', 'Ecole Sacre Coeur', 'BEPC', 2016, '2025-11-17 05:42:46', '2025-11-25 04:17:01'),
(7, 'primaire', 'Amparibe', 'Saint Michel', 'CEPE', 2011, '2025-11-25 04:18:54', '2025-11-25 04:23:18'),
(8, 'université', 'Mahamasina', 'Esmia', 'Licence', 2024, '2025-11-25 04:23:48', '2025-12-05 04:15:14');

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
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_08_26_100418_add_two_factor_columns_to_users_table', 2),
(5, '2025_11_14_171510_create_projets_table', 2),
(6, '2025_11_14_171550_create_realisations_table', 2),
(7, '2025_11_14_171604_create_etudes_table', 2),
(8, '2025_11_17_072259_create_etudes_table', 3),
(9, '2025_11_17_163557_create_realises_table', 4),
(10, '2025_11_18_064430_create_projets_table', 5),
(11, '2025_11_18_070742_add_photo_to_projets_table', 6),
(12, '2025_11_18_071143_create_projets_table', 7),
(13, '2025_11_21_105207_create_contacts_table', 8),
(14, '2025_11_24_071301_create_tests_table', 9);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `descri` varchar(1000) NOT NULL,
  `langage` varchar(255) DEFAULT NULL,
  `lieu` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `annee` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `name`, `descri`, `langage`, `lieu`, `link`, `photo`, `annee`, `created_at`, `updated_at`) VALUES
(5, 'Site Book News Madagascar', 'Mis en place du site web WordPress du Book \r\nNews Madagascar', 'WordPress, HTML, CSS, PhP', 'Tsimbazaza', NULL, '1764002221.jpg', 2023, '2025-11-24 13:37:01', '2025-11-25 04:31:38'),
(6, 'Gestion des formations', 'Création d\'un site web pour la gestion des formations', 'PhP | HTML | CSS | MySQL', 'Ministère de l’enseignement technique et de formation professionnelle', 'github.com/boo-tsio-cine/metfp.git', '1764061387.png', 2024, '2025-11-25 06:03:07', '2025-12-05 03:49:19'),
(8, 'ITSM', 'Mise en place d\'un outil ITSM, Manage Engine plus précisément. C\'est une site pour la gestion du parc informatique dans une entreprise. Mon rôle était de faire l\'étude de cette outil : l\'utilité, la fonctionnement, la mise en place pour qu\'il doit être utilisé par les responsable informatique de l\'entreprise.', 'mm', 'Assurance ARO, Antsahavola', NULL, '1764072829.jpg', 2022, '2025-11-25 09:13:49', '2025-12-05 03:19:32');

-- --------------------------------------------------------

--
-- Structure de la table `realises`
--

CREATE TABLE `realises` (
  `id` int(11) NOT NULL,
  `nom` varchar(1000) NOT NULL,
  `descri` varchar(1000) NOT NULL,
  `annee` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `realises`
--

INSERT INTO `realises` (`id`, `nom`, `descri`, `annee`, `created_at`, `updated_at`) VALUES
(2, 'HOPES Formation', 'perfectionnement sur la connaissance et étude approfondie sur le développement web.', '2024', '2025-11-25 04:33:14', '2025-11-25'),
(4, 'CFLC (Centre de Formation en Langue  Chinoise)', 'Formation pour apprendre le Mandarin.', '2025', '2025-12-05 07:09:50', '2025-12-05'),
(5, 'Antilin\'i Madagasikara', 'aa', '2006-2019', '2025-12-05 04:12:04', '2025-12-05');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9SCg7lhDmKLdYzJHtRcs5FkSdBbMH9zxLrr2C0zx', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMzhEQlo0V21WREE2SmZjMGo0cVlHeExJclA4bGo2Z2w2Wm1sSnJkNiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9saXN0cHJvamV0IjtzOjU6InJvdXRlIjtOO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1764920908),
('eDS9PGOVO9MXVjY5fwQP2vmnFRVlnhOy83ACcB4P', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQUVFREdHNVptSzBWek5QeHRRY3AyYTZ2cWJxMzV4Y2plN05JV01nTiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1765002309);

-- --------------------------------------------------------

--
-- Structure de la table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tests`
--

INSERT INTO `tests` (`id`, `name`, `mail`, `created_at`, `updated_at`) VALUES
(1, '0341234567', 'test@example.com', NULL, '2025-11-24 05:15:15');

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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tsiory RANDRIANOMENJANAHARY', 'tsiorrandrianomenjanahary@gmail.com', NULL, '$2y$12$lNACJYhAYQSjKkFFP2tkA.qB54fA11iI6xSi0XVZn980N53/GzFqK', NULL, NULL, NULL, NULL, '2025-12-05 03:31:02', '2025-12-05 04:43:13');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudes`
--
ALTER TABLE `etudes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `realises`
--
ALTER TABLE `realises`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `etudes`
--
ALTER TABLE `etudes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `realises`
--
ALTER TABLE `realises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
