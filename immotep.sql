-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 12 Janvier 2015 à 12:41
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `immotep`
--

CREATE DATABASE IF NOT EXISTS `immotep` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `immotep`;

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE IF NOT EXISTS `annonce` (
  `idAnnonce` int(11) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `superficie` float NOT NULL,
  `numero` int(11) NOT NULL,
  `rue` text NOT NULL,
  `ville` text NOT NULL,
  `codePostal` int(11) NOT NULL,
  `pays` text NOT NULL,
  `nombreDeChambres` int(11) NOT NULL,
  `nombreDeLits` int(11) NOT NULL,
  `nombreDeSallesDeBain` int(11) NOT NULL,
  `idMembre` int(11) NOT NULL,
  PRIMARY KEY (`idAnnonce`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `idCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` int(11) NOT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorieoption`
--

CREATE TABLE IF NOT EXISTS `categorieoption` (
  `idCategorieOption` int(11) NOT NULL AUTO_INCREMENT,
  `nom` int(11) NOT NULL,
  PRIMARY KEY (`idCategorieOption`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `idCommentaire` int(11) NOT NULL AUTO_INCREMENT,
  `idMembre` int(11) NOT NULL,
  `idAnnonce` int(11) NOT NULL,
  `date` date NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`idCommentaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `contrainte`
--

CREATE TABLE IF NOT EXISTS `contrainte` (
  `idContrainte` int(11) NOT NULL AUTO_INCREMENT,
  `nomContrainte` text NOT NULL,
  `public` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idContrainte`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `contrainte`
--

INSERT INTO `contrainte` (`idContrainte`, `nomContrainte`, `public`) VALUES
(0, 'Contraintes impossible et automatique', 0),
(1, 'Enfant non admis', 1),
(2, 'Animaux non admis', 1),
(3, 'Non fumeur', 1),
(4, 'Pas de bruit après 22H', 1);

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

CREATE TABLE IF NOT EXISTS `equipement` (
  `idEquipement` int(11) NOT NULL AUTO_INCREMENT,
  `nomEquipement` text NOT NULL,
  `public` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idEquipement`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `equipement`
--

INSERT INTO `equipement` (`idEquipement`, `nomEquipement`, `public`) VALUES
(1, 'Balcon/Terrasse', 1),
(2, 'Transat', 1),
(3, 'Canapé', 1),
(4, 'Jardin', 1),
(5, 'Piscine', 1),
(6, 'Piano', 1),
(7, 'Jacuzzi', 1),
(8, 'Télévision', 1),
(9, 'Lave-vaisselle', 1),
(10, 'Sèche-linge', 1),
(11, 'Douche', 1),
(12, 'Baignoire', 1),
(13, 'Ascenseur', 1),
(14, 'Garage', 1),
(15, 'Cave', 1),
(16, 'Accessible aux handicapés', 1),
(17, 'Grenier', 1),
(18, 'Micro-ondes', 1),
(19, 'Four', 1),
(20, 'Climatisation', 1),
(21, 'Cheminée', 1),
(22, 'Wi-Fi', 1);

-- --------------------------------------------------------

--
-- Structure de la table `estequipede`
--

CREATE TABLE IF NOT EXISTS `estequipede` (
  `idAnnonce` int(11) NOT NULL,
  `idEquipement` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `precisions` text NOT NULL,
  PRIMARY KEY (`idAnnonce`,`idEquipement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `idImage` int(11) NOT NULL AUTO_INCREMENT,
  `idAnnonce` int(11) NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`idImage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `idMembre` int(11) NOT NULL AUTO_INCREMENT,
  `pseudonyme` text NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `motDePasseCrypte` text NOT NULL,
  `adresseElectronique` text NOT NULL,
  `telephone` text NOT NULL,
  `dateDeNaissance` text NOT NULL,
  `sexe` int(11) NOT NULL,
  `cle` varchar(32) NOT NULL,
  `actif` int(11) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`idMembre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `idCommentaire` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `texteCommentaire` text NOT NULL,
  `idSujet` int(11) NOT NULL,
  PRIMARY KEY (`idCommentaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `propose`
--

CREATE TABLE IF NOT EXISTS `propose` (
  `idAnnonce` int(11) NOT NULL,
  `idService` int(11) NOT NULL,
  `precisions` text NOT NULL,
  PRIMARY KEY (`idAnnonce`,`idService`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `requiert`
--

CREATE TABLE IF NOT EXISTS `requiert` (
  `idAnnonce` int(11) NOT NULL,
  `idContrainte` int(11) NOT NULL,
  `precisions` text NOT NULL,
  PRIMARY KEY (`idAnnonce`,`idContrainte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `idService` int(11) NOT NULL AUTO_INCREMENT,
  `nomService` text NOT NULL,
  `public` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idService`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `service`
--

INSERT INTO `service` (`idService`, `nomService`, `public`) VALUES
(0, 'Service impossible et automatique', 0),
(1, 'Garder un chien', 1),
(2, 'Garder un ou plusieurs petits animaux domestiques', 1),
(3, 'Faire du jardinage', 1);

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

CREATE TABLE IF NOT EXISTS `sujet` (
  `idSujet` int(11) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `date` time NOT NULL,
  `ferme` tinyint(1) NOT NULL,
  `idMembre` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  PRIMARY KEY (`idSujet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
