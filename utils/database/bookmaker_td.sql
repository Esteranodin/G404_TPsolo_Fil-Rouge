-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 24 jan. 2025 à 15:41
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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `mail`, `password`, `lastname`, `firstname`, `role`, `id_user_pro`) VALUES
(4, 'benny@gmail.com', '$2y$10$XqFp8vSr/e0n.iRUJ1RAO.44T5vanuOr6zdB6R/B3myjTNOUj33hS', 'Gagnaire', 'Benjamin', '', 0),
(2, 'esteranodin@hotmail.fr', '$2y$10$SF.p.1O9gyQHKoPFYxDdDOAdEas.gAgOsr9gV.uMKY7LxUDFxSeG2', 'Sabatier', 'Marion', 'admin', 0),
(6, 'laloutre@gmail.com', '$2y$10$LnhiPj8SN2yU0eQ2MjSZI.ifkH6vaV1ynvKt7k95dZIySWrhFQHhC', 'Carlier', 'Clément', '', 0),
(9, 'supertemoin@gmail.com', '$2y$10$ZIsZN3p8EI6m8yTpMIYnA.PPrbQWRvli6j.QM.74.neMwIRvWGByC', 'Breisse', 'Stéphane', '', 0),
(15, 'june@gmail.com', '$2y$10$yRemmSEt1vZwBXyIiRckzeMD.crGmFy6Mm30F5V2MpJeSqBXu3YrG', 'june', 'june', '', NULL),
(11, 'lacdescygnes@gmail.com', '$2y$10$M4xcL73MyT3KwXN9X76mt.p3Uj5NXWYltxCe0x7RBDIeuV0zdOBDm', 'Kerever', 'Laouïg', '', 0),
(12, 'potichat@gmail.com', '$2y$10$Y8SYCIsbWSSHC1RtpMCQBef1HB0pTJ.XRK5flSbpmYLufhfYGgKXa', 'Ponson', 'Adrien', '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
