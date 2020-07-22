-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 17 déc. 2019 à 19:33
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

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

DROP TABLE IF EXISTS `category_equpements`;
CREATE TABLE IF NOT EXISTS `category_equpements` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `equipements`
--

DROP TABLE IF EXISTS `equipements`;
CREATE TABLE IF NOT EXISTS `equipements` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fabriquant` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emplacement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_serie` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequence_maitenance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

DROP TABLE IF EXISTS `fiche_rapports`;
CREATE TABLE IF NOT EXISTS `fiche_rapports` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `maintenances`
--

DROP TABLE IF EXISTS `maintenances`;
CREATE TABLE IF NOT EXISTS `maintenances` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tache_id` int(10) UNSIGNED DEFAULT NULL,
  `equipement_id` int(10) UNSIGNED DEFAULT NULL,
  `technicien_id` int(10) UNSIGNED DEFAULT NULL,
  `date_debut` int(11) DEFAULT NULL,
  `date_fin` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `maintenances_tache_id_foreign` (`tache_id`),
  KEY `maintenances_equipement_id_foreign` (`equipement_id`),
  KEY `maintenances_technicien_id_foreign` (`technicien_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `objet` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expeditor_id` int(11) NOT NULL,
  `destinator_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_expeditor_id_foreign` (`expeditor_id`),
  KEY `notifications_destinator_id_foreign` (`destinator_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personnes`
--

DROP TABLE IF EXISTS `personnes`;
CREATE TABLE IF NOT EXISTS `personnes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profiles_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `profiles`
--

INSERT INTO `profiles` (`id`, `nom`, `prenom`, `email`, `telephone`, `adresse`, `role`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Stephane', 'Cyrille', 'stephcyril.sc@gmail.com', '6934585480', 'PK 17', 'Chef service', 1, '2019-12-07 09:13:15', '2019-12-07 11:38:22'),
(2, 'Zaytoven', 'Karim', 'zaytoven@gmail.com', '699887744', 'Makepe', 'Technicien', 2, '2019-12-07 11:29:21', '2019-12-07 11:37:09'),
(3, 'Cratos', 'God', 'cratos@gmail.com', '699554477', 'Bonanjo', 'Technicien', 3, '2019-12-07 11:47:24', '2019-12-07 11:47:24'),
(4, 'Noah', 'Aymeric', 'noahaymeric@gmail.com', '695280828', 'PK 17', 'Technicien', 4, '2019-12-08 13:40:26', '2019-12-08 13:40:26'),
(5, 'Rolland', 'Roger', 'ouioui@gmail.com', '622220242', 'pointe noire', 'Technicien', 5, '2019-12-10 07:22:40', '2019-12-10 07:22:40'),
(6, 'monsieur', '17', '17@gmail.com', '123456789', '17', 'Technicien', 6, '2019-12-17 17:42:29', '2019-12-17 17:42:29');

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

DROP TABLE IF EXISTS `taches`;
CREATE TABLE IF NOT EXISTS `taches` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `responsable_id` int(11) NOT NULL,
  `equipement_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `taches_responsable_id_foreign` (`responsable_id`),
  KEY `taches_equipement_id_foreign` (`equipement_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `taches`
--

INSERT INTO `taches` (`id`, `libelle`, `description`, `date_debut`, `date_fin`, `responsable_id`, `equipement_id`, `created_at`, `updated_at`) VALUES
(1, 'Maintenir appareil de veille', 'La maintenace d\'une serie d\'appareils', '2019-12-12 00:00:00', '2019-12-14 00:00:00', 2, 1, '2019-12-07 11:59:03', '2019-12-07 11:59:03'),
(2, 'Maintenace electronique', 'Les appareils electroniques en veille', '2019-12-16 00:00:00', '2019-12-18 00:00:00', 2, 2, '2019-12-07 11:59:53', '2019-12-07 11:59:53'),
(3, 'Maintenance salle serveur', 'Ménage général et néttoyage des RACKS serveur', '2019-12-20 00:00:00', '2019-12-22 00:00:00', 2, 4, '2019-12-07 12:00:43', '2019-12-07 12:00:43');

-- --------------------------------------------------------

--
-- Structure de la table `template_notifications`
--

DROP TABLE IF EXISTS `template_notifications`;
CREATE TABLE IF NOT EXISTS `template_notifications` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_tete` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pied` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Stephcyrille', 'stephcyril.sc@gmail.com', '$2y$10$PlfiyrhkqtwFe0/W.KzCrulJHYpsJvAJ3SO.A9sLfJODKf35Xd0GW', 'oRkOk86Vz2h9ah5bUqiCzzlPYP8mIGCVRyA7n2JVokIW8cTz9DANXiP37Uwn', '2019-12-07 09:13:15', '2019-12-07 09:13:15'),
(2, 'Zaytoven', 'zaytoven@gmail.com', '$2y$10$IFtqFGhuKM8RZZaszsmlce0JMagaqBaMLSnFkoo/Y1NLXNRP.5C12', 'fcYDhdNNODTZVpcNFIjl4xNWrTj2Dgfz7xIam4CpCXdnzwhB9khYNOpyvBAQ', '2019-12-07 11:29:21', '2019-12-07 11:29:21'),
(3, 'Cratos', 'cratos@gmail.com', '$2y$10$kafAUZWLmznRC15W3JWwUe57Tj/MGf/i4e8i3CANsLB9IcfDRl5Xi', NULL, '2019-12-07 11:47:24', '2019-12-07 11:47:24'),
(4, 'Aym70', 'noahaymeric@gmail.com', '$2y$10$YX9DibLvi92zJgP6n.fLFuit.DlMiYeIeeprX25UoK9l07V8M7eAm', NULL, '2019-12-08 13:40:26', '2019-12-08 13:40:26'),
(5, 'freud', 'ouioui@gmail.com', '$2y$10$wKUIXltoZSozbhCcZjF83O3JawahBYPZoFKe23jcEW6K6Lsll7nim', NULL, '2019-12-10 07:22:40', '2019-12-10 07:22:40'),
(6, '17', '17@gmail.com', '$2y$10$iTHF9z8aSqXjOgJ1E8vQ6ePqQXKkD7jWY7Wr45MR4P9LQSsQcGtSa', NULL, '2019-12-17 17:42:29', '2019-12-17 17:42:29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
