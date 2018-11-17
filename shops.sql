-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 17 nov. 2018 à 14:35
-- Version du serveur :  5.7.21-log
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `shops`
--

-- --------------------------------------------------------

--
-- Structure de la table `liked_shops`
--

DROP TABLE IF EXISTS `liked_shops`;
CREATE TABLE IF NOT EXISTS `liked_shops` (
  `shop_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`shop_id`,`user_id`),
  KEY `fk_shop_has_user_user1_idx` (`user_id`),
  KEY `fk_shop_has_user_shop_idx` (`shop_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `liked_shops`
--

INSERT INTO `liked_shops` (`shop_id`, `user_id`) VALUES
(1, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `shop`
--

DROP TABLE IF EXISTS `shop`;
CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `distance` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `shop`
--

INSERT INTO `shop` (`id`, `name`, `description`, `distance`) VALUES
(1, 'shop1', 'description1', 12),
(2, 'shop2', 'desc2', 13),
(3, 'shop3', 'desc3', 10),
(4, 'shop4', 'desc4', 22);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(70) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `pass`) VALUES
(1, 'zyad.elkhadir@laposte.net', 'pass'),
(2, 'zyad.elkhadir@gmail.com', 'pass12'),
(3, 'simoallouli@gmail.com', 'simo'),
(4, 'zyad.e@gmail.com', 'zyad'),
(5, 'zyad.el@gmail.com', 'pa');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `liked_shops`
--
ALTER TABLE `liked_shops`
  ADD CONSTRAINT `fk_shop_has_user_shop` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_shop_has_user_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
