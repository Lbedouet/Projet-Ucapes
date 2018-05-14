-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 14 mai 2018 à 14:03
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
-- Base de données :  `ucapes_2`
--

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `idUtilisateur` int(8) NOT NULL,
  `nom` varchar(16) NOT NULL,
  `prenom` varchar(16) NOT NULL,
  `sexe` varchar(5) NOT NULL,
  `dateNaissance` varchar(10) NOT NULL COMMENT 'Format MM/DD/YYYY',
  `emailResponsable` varchar(32) NOT NULL COMMENT 'Adresse mail du parent responsable de l''enfant',
  `informations` varchar(500) NOT NULL COMMENT '(500 caractères max)',
  PRIMARY KEY (`id`),
  KEY `id` (`idUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etablissements`
--

DROP TABLE IF EXISTS `etablissements`;
CREATE TABLE IF NOT EXISTS `etablissements` (
  `id` int(6) NOT NULL,
  `idPays` int(6) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `coordonnées` varchar(255) NOT NULL,
  `id_pays` int(6) NOT NULL,
  `placeDisponible` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`idPays`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `postule`
--

DROP TABLE IF EXISTS `postule`;
CREATE TABLE IF NOT EXISTS `postule` (
  `idEleve` int(11) NOT NULL,
  `idPays` int(11) NOT NULL,
  KEY `idEleve` (`idEleve`),
  KEY `idPays` (`idPays`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de l''utilisateur',
  `identifiant` varchar(50) NOT NULL,
  `motDePasse` char(32) NOT NULL COMMENT 'Mot de passe',
  `email` char(64) NOT NULL COMMENT 'Email',
  `statutAdmin` tinyint(1) NOT NULL COMMENT 'Est administrateur ou non',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `identifiant`, `motDePasse`, `email`, `statutAdmin`) VALUES
(1, 'admin1', 'admin', 'admin@admin.com', 1),
(2, 'eleve1', 'eleve', 'eleve@eleve.com', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD CONSTRAINT `eleve_ibfk_1` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `etablissements`
--
ALTER TABLE `etablissements`
  ADD CONSTRAINT `etablissements_ibfk_1` FOREIGN KEY (`idPays`) REFERENCES `pays` (`id`);

--
-- Contraintes pour la table `postule`
--
ALTER TABLE `postule`
  ADD CONSTRAINT `postule_ibfk_1` FOREIGN KEY (`idEleve`) REFERENCES `eleve` (`id`),
  ADD CONSTRAINT `postule_ibfk_2` FOREIGN KEY (`idPays`) REFERENCES `pays` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
