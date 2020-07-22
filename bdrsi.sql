-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 18 déc. 2019 à 13:20
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdrsi`
--

-- --------------------------------------------------------

--
-- Structure de la table `category_equpements`
--

CREATE TABLE `category_equpements` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `equipements`
--

CREATE TABLE `equipements` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fabriquant` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emplacement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_serie` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequence_maitenance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `equipements`
--

INSERT INTO `equipements` (`id`, `nom`, `fabriquant`, `emplacement`, `numero_model`, `numero_serie`, `frequence_maitenance`, `created_at`, `updated_at`) VALUES
(1, 'Alternateur MX-20', 'MASC Corp', 'Tarmac Nsimalen', 'MODELRE7E50', 'AA510ZE5', 'annuelle', '2019-12-07 09:49:52', '2019-12-07 09:49:52'),
(2, 'Transformateur', 'EOLA Energy', 'Salle machine A1', 'MODELF50021', '12A4ER9Z', 'mensuelle', '2019-12-07 09:58:55', '2019-12-07 09:58:55'),
(3, 'Générateur continu', 'Siemens', 'Unité conservation ZF', 'MODELR80041', '5GH5TT00', 'quotidienne', '2019-12-07 10:00:12', '2019-12-07 10:00:12'),
(4, 'RACK erveur', 'Bosh', 'Salle serveur', 'MODELM1403', '45FFR500K', 'semestrielle', '2019-12-07 10:01:03', '2019-12-07 10:01:03'),
(5, 'Test 2', 'Test 2', 'Test 2', '888888', '558555', 'quotidienne', '2019-12-08 13:50:57', '2019-12-08 13:50:57');

-- --------------------------------------------------------

--
-- Structure de la table `fiche_rapports`
--

CREATE TABLE `fiche_rapports` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `maintenances`
--

CREATE TABLE `maintenances` (
  `id` int(10) UNSIGNED NOT NULL,
  `tache_id` int(10) UNSIGNED DEFAULT NULL,
  `equipement_id` int(10) UNSIGNED DEFAULT NULL,
  `technicien_id` int(10) UNSIGNED DEFAULT NULL,
  `date_debut` int(11) DEFAULT NULL,
  `date_fin` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_27_090018_create_profiles_table', 1),
(4, '2019_11_27_103249_create_fiche_rapports_table', 1),
(5, '2019_11_27_103300_create_taches_table', 1),
(6, '2019_11_27_103313_create_equipements_table', 1),
(7, '2019_11_27_103327_create_notifications_table', 1),
(8, '2019_11_27_103347_create_template_notifications_table', 1),
(9, '2019_12_03_153922_person_migration', 1),
(10, '2019_12_07_085516_create_maintenances_table', 1),
(11, '2019_12_07_090302_create_category_equpements_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `objet` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expeditor_id` int(11) NOT NULL,
  `destinator_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personnes`
--

CREATE TABLE `personnes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `profiles`
--

INSERT INTO `profiles` (`id`, `nom`, `prenom`, `email`, `telephone`, `adresse`, `role`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Stephane', 'Cyrille', 'stephcyril.sc@gmail.com', '6934585480', 'PK 17', 'Chef service', 1, '2019-12-07 09:13:15', '2019-12-07 11:38:22'),
(2, 'Zaytoven', 'Karim', 'zaytoven@gmail.com', '699887744', 'Makepe', 'Technicien', 2, '2019-12-07 11:29:21', '2019-12-07 11:37:09'),
(3, 'Cratos', 'God', 'cratos@gmail.com', '699554477', 'Bonanjo', 'Technicien', 3, '2019-12-07 11:47:24', '2019-12-07 11:47:24'),
(4, 'Noah', 'Aymeric', 'noahaymeric@gmail.com', '695280828', 'PK 17', 'Technicien', 4, '2019-12-08 13:40:26', '2019-12-08 13:40:26'),
(5, 'Rolland', 'Roger', 'ouioui@gmail.com', '622220242', 'pointe noire', 'Technicien', 5, '2019-12-10 07:22:40', '2019-12-10 07:22:40'),
(6, 'monsieur', '17', '17@gmail.com', '123456789', '17', 'Technicien', 6, '2019-12-17 17:42:29', '2019-12-17 17:42:29'),
(7, 'ronaldo', 'JEAN', 'ronaldonelsonfoh@yahoo.fr', '5654564654', 'M-020105', 'Chef service', 7, '2019-12-17 18:42:56', '2019-12-18 07:20:06'),
(8, 'Nelson', 'JOSEPH', 'nlsonthebeat@yahoo.com', '5654564654', 'M-968500/njack@yahoo.com', 'Technicien', 8, '2019-12-18 07:19:37', '2019-12-18 07:19:37'),
(9, 'Test', 'gfdgfdg', 'ft123@gmail.com', '5654564654', 'gfdgfd@gfgf.fgfg', 'Technicien', 10, '2019-12-18 08:59:30', '2019-12-18 08:59:30'),
(10, 'Test123', 'JEAN123', 'ft456@gmail.com', '5654564654123', 'gfdgfd@gfgf.fgfg123', 'Technicien', 11, '2019-12-18 09:01:09', '2019-12-18 09:01:09'),
(11, 'Test 2', 'Test 2', 'ftTest2@gmail.com', '5654564654', 'Test 2', 'Technicien', 12, '2019-12-18 10:14:34', '2019-12-18 10:14:34');

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

CREATE TABLE `taches` (
  `id` int(10) UNSIGNED NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `responsable_id` int(11) NOT NULL,
  `equipement_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `taches`
--

INSERT INTO `taches` (`id`, `libelle`, `description`, `date_debut`, `date_fin`, `responsable_id`, `equipement_id`, `created_at`, `updated_at`) VALUES
(1, 'Maintenir appareil de veille', 'La maintenace d\'une serie d\'appareils', '2019-12-12 00:00:00', '2019-12-14 00:00:00', 2, 1, '2019-12-07 11:59:03', '2019-12-07 11:59:03'),
(2, 'Maintenace electronique', 'Les appareils electroniques en veille', '2019-12-16 00:00:00', '2019-12-18 00:00:00', 2, 2, '2019-12-07 11:59:53', '2019-12-07 11:59:53'),
(3, 'Maintenance salle serveur', 'Ménage général et néttoyage des RACKS serveur', '2019-12-20 00:00:00', '2019-12-22 00:00:00', 2, 4, '2019-12-07 12:00:43', '2019-12-07 12:00:43'),
(4, 'Teqt 3', 'Teqt 3', '2019-12-20 00:00:00', '2019-12-22 00:00:00', 11, 5, '2019-12-18 10:25:56', '2019-12-18 10:25:56');

-- --------------------------------------------------------

--
-- Structure de la table `template_notifications`
--

CREATE TABLE `template_notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_tete` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pied` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Stephcyrille', 'stephcyril.sc@gmail.com', '$2y$10$PlfiyrhkqtwFe0/W.KzCrulJHYpsJvAJ3SO.A9sLfJODKf35Xd0GW', 'oRkOk86Vz2h9ah5bUqiCzzlPYP8mIGCVRyA7n2JVokIW8cTz9DANXiP37Uwn', '2019-12-07 09:13:15', '2019-12-07 09:13:15'),
(2, 'Zaytoven', 'zaytoven@gmail.com', '$2y$10$IFtqFGhuKM8RZZaszsmlce0JMagaqBaMLSnFkoo/Y1NLXNRP.5C12', 'fcYDhdNNODTZVpcNFIjl4xNWrTj2Dgfz7xIam4CpCXdnzwhB9khYNOpyvBAQ', '2019-12-07 11:29:21', '2019-12-07 11:29:21'),
(3, 'Cratos', 'cratos@gmail.com', '$2y$10$kafAUZWLmznRC15W3JWwUe57Tj/MGf/i4e8i3CANsLB9IcfDRl5Xi', NULL, '2019-12-07 11:47:24', '2019-12-07 11:47:24'),
(4, 'Aym70', 'noahaymeric@gmail.com', '$2y$10$YX9DibLvi92zJgP6n.fLFuit.DlMiYeIeeprX25UoK9l07V8M7eAm', NULL, '2019-12-08 13:40:26', '2019-12-08 13:40:26'),
(5, 'freud', 'ouioui@gmail.com', '$2y$10$wKUIXltoZSozbhCcZjF83O3JawahBYPZoFKe23jcEW6K6Lsll7nim', NULL, '2019-12-10 07:22:40', '2019-12-10 07:22:40'),
(6, '17', '17@gmail.com', '$2y$10$iTHF9z8aSqXjOgJ1E8vQ6ePqQXKkD7jWY7Wr45MR4P9LQSsQcGtSa', NULL, '2019-12-17 17:42:29', '2019-12-17 17:42:29'),
(7, 'Ronaldo', 'ronaldonelsonfoh@yahoo.fr', '$2y$10$bBXDXGIcFC6u2efkZWdY5e4ZlkicTG0/OeclSUbFI0o.CKuzUKeza', 'pQDQOgqb4WorLPRKUkVDJ16zXcQ24DoOziGM2epcejGjPFY1jV5kOaZGWQrW', '2019-12-17 18:42:56', '2019-12-17 18:42:56'),
(8, 'Nelson', 'nlsonthebeat@yahoo.com', '$2y$10$eqjAz4ou1P9rYUuED2OtrOOlFecTvBOErNBZM2nPKUsb5U806x6.C', '2500gi6oApUskirlHhLNaG55pmkOfn4jNoQrbcB8b5faK2E4chGg3JRSNr0k', '2019-12-18 07:19:37', '2019-12-18 07:19:37'),
(9, 'marc', 'ft@gmail.com', '$2y$10$vhUJ4cQUOi.MppQ6vljKW.f/Ui4N5oQss2V8rCv8KEHv9OQSc0xl.', NULL, '2019-12-18 08:58:39', '2019-12-18 08:58:39'),
(10, 'marc', 'ft123@gmail.com', '$2y$10$E1ASZYGm.7WdoxGeqZhq5.4ExqgNYyx1nNCR0XlBvgCNxfwQxynuy', 'mLggRLDGB9GHCdxXPKYBSL5tVxnrItZRNyb3I3jzirM1aeWwVNwyNxFJ2lf8', '2019-12-18 08:59:30', '2019-12-18 08:59:30'),
(11, 'marc', 'ft456@gmail.com', '$2y$10$S92sgr2k5mbCr3HqbIxp9eY5OG6Al7Da7ACXKcVm3jf3/nOgWr8ki', NULL, '2019-12-18 09:01:09', '2019-12-18 09:01:09'),
(12, 'Test 2', 'ftTest2@gmail.com', '$2y$10$1HKBe8KY5dJA.TAI7OwVnec0/0Opys3eq1j4A4l1tQnmRO9kGPOgO', NULL, '2019-12-18 10:14:34', '2019-12-18 10:14:34');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category_equpements`
--
ALTER TABLE `category_equpements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `equipements`
--
ALTER TABLE `equipements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fiche_rapports`
--
ALTER TABLE `fiche_rapports`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `maintenances`
--
ALTER TABLE `maintenances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maintenances_tache_id_foreign` (`tache_id`),
  ADD KEY `maintenances_equipement_id_foreign` (`equipement_id`),
  ADD KEY `maintenances_technicien_id_foreign` (`technicien_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_expeditor_id_foreign` (`expeditor_id`),
  ADD KEY `notifications_destinator_id_foreign` (`destinator_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personnes`
--
ALTER TABLE `personnes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Index pour la table `taches`
--
ALTER TABLE `taches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `taches_responsable_id_foreign` (`responsable_id`),
  ADD KEY `taches_equipement_id_foreign` (`equipement_id`);

--
-- Index pour la table `template_notifications`
--
ALTER TABLE `template_notifications`
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
-- AUTO_INCREMENT pour la table `category_equpements`
--
ALTER TABLE `category_equpements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `equipements`
--
ALTER TABLE `equipements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `fiche_rapports`
--
ALTER TABLE `fiche_rapports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `maintenances`
--
ALTER TABLE `maintenances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personnes`
--
ALTER TABLE `personnes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `taches`
--
ALTER TABLE `taches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `template_notifications`
--
ALTER TABLE `template_notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
