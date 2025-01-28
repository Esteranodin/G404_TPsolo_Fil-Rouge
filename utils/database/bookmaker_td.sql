-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 28 jan. 2025 à 10:29
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bookmaker_td`
--

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_saler` bigint DEFAULT NULL,
  `isbn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `id_author` bigint NOT NULL,
  `parutionAt` date NOT NULL,
  `publisher` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `resum` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` bigint DEFAULT NULL,
  `id_image` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `book_id_image_foreign` (`id_image`),
  KEY `book_id_author_foreign` (`id_author`),
  KEY `book_id_saler_foreign` (`id_saler`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `book_categorie`
--

DROP TABLE IF EXISTS `book_categorie`;
CREATE TABLE IF NOT EXISTS `book_categorie` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_categorie` bigint NOT NULL,
  `id_book` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `book_categorie_id_book_foreign` (`id_book`),
  KEY `book_categorie_id_categorie_foreign` (`id_categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` bigint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `img_path` varchar(255) NOT NULL,
  `img_alt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` bigint NOT NULL,
  `id_book` bigint NOT NULL,
  `score` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `note_id_book_foreign` (`id_book`),
  KEY `note_id_user_foreign` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_isbn` bigint NOT NULL,
  `purchaseAt` datetime NOT NULL,
  `id_saler` bigint NOT NULL,
  `id_buyer` bigint NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sales_id_isbn_unique` (`id_isbn`),
  KEY `sales_id_buyer_foreign` (`id_buyer`),
  KEY `sales_id_saler_foreign` (`id_saler`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `mail` varchar(191) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `id_user_pro` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_mail_unique` (`mail`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `mail`, `password`, `lastname`, `firstname`, `role`, `id_user_pro`) VALUES
(21, 'pamelarose@gmail.com', '$2y$10$H4BW4xGqApdjZT6jkw443Ol993aWVxUjd.mdDO3cunTkARxxUGRwC', 'Rose', 'Pamela', '', NULL),
(28, 'june@gmail.com', '$2y$10$N6MaFDxFEJOBz87tCT.Hd.iwC8xVdvvq5hK3Woc22oIekCdX09VqO', 'June', 'June', '', 10),
(26, 'monhand@gmail.com', '$2y$10$XScTxpm0t07QNyo.Ysj5z.eXArhmrE1SeuPKHhSws8RjeMJLmojk2', 'Benmouhoub', 'Mohand', '', NULL),
(27, 'lafritedu42@gmail.com', '$2y$10$tIVsCAOcT9B5EvL1u1628eU7Z6KJaICumUBpAFSZgnhPRnEGWSDv2', 'Pelisse', 'Jérémy', '', 9);

-- --------------------------------------------------------

--
-- Structure de la table `user_pro`
--

DROP TABLE IF EXISTS `user_pro`;
CREATE TABLE IF NOT EXISTS `user_pro` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `company_adress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `is_validated` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user_pro`
--

INSERT INTO `user_pro` (`id`, `phone`, `company`, `company_adress`, `is_validated`) VALUES
(9, '45654656654', 'La frite du 42', 'Cours Fauriel', 0),
(10, '09867454578', 'Les éditions Edda', 'Dunbar Ecosse', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
