-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 09 mai 2018 à 12:37
-- Version du serveur :  5.7.19
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
-- Base de données :  `projet_ucapes`
--

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nom` varchar(16) NOT NULL,
  `prenom` varchar(16) NOT NULL,
  `sexe` varchar(5) NOT NULL,
  `dateNaissance` varchar(10) NOT NULL COMMENT 'Format MM/DD/YYYY',
  `emailResponsable` varchar(32) NOT NULL COMMENT 'Adresse mail du parent responsable de l''enfant',
  `informations` varchar(500) NOT NULL COMMENT '(500 caractères max)',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''utilisateur',
  `motDePasse` char(32) NOT NULL COMMENT 'Mot de passe',
  `email` char(64) NOT NULL COMMENT 'Email',
  `statutAdmin` tinyint(1) NOT NULL COMMENT 'Est administrateur ou non',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
