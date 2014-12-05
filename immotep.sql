-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 05 Décembre 2014 à 11:04
-- Version du serveur: 5.5.31
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `immotep`
--
CREATE DATABASE IF NOT EXISTS `immotep` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `immotep`;

-- --------------------------------------------------------

--
-- Structure de la table `Annonce`
--

CREATE TABLE IF NOT EXISTS `Annonce` (
  `idAnnonce` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `superficie` float NOT NULL,
  `numero` int(11) NOT NULL,
  `rue` text NOT NULL,
  `ville` text NOT NULL,
  `codePostal` int(11) NOT NULL,
  `pays` text NOT NULL,
  `idMembre` int(11) NOT NULL,
  PRIMARY KEY (`idAnnonce`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Categorie`
--

CREATE TABLE IF NOT EXISTS `Categorie` (
  `idCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` int(11) NOT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Commentaire`
--

CREATE TABLE IF NOT EXISTS `Commentaire` (
  `idCommentaire` int(11) NOT NULL AUTO_INCREMENT,
  `idMembre` int(11) NOT NULL,
  `idAnnonce` int(11) NOT NULL,
  `date` date NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`idCommentaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Contrainte`
--

CREATE TABLE IF NOT EXISTS `Contrainte` (
  `idContrainte` int(11) NOT NULL AUTO_INCREMENT,
  `nomContrainte` text NOT NULL,
  PRIMARY KEY (`idContrainte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Equipement`
--

CREATE TABLE IF NOT EXISTS `Equipement` (
  `idEquipement` int(11) NOT NULL AUTO_INCREMENT,
  `nomEquipement` text NOT NULL,
  PRIMARY KEY (`idEquipement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `estEquipeDe`
--

CREATE TABLE IF NOT EXISTS `estEquipeDe` (
  `idAnnonce` int(11) NOT NULL,
  `idEquipement` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `precisions` text NOT NULL,
  PRIMARY KEY (`idAnnonce`,`idEquipement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Image`
--

CREATE TABLE IF NOT EXISTS `Image` (
  `idImage` int(11) NOT NULL AUTO_INCREMENT,
  `idAnnonce` int(11) NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`idImage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Membre`
--

CREATE TABLE IF NOT EXISTS `Membre` (
  `idMembre` int(11) NOT NULL AUTO_INCREMENT,
  `pseudonyme` text NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `motDePasseCrypte` text NOT NULL,
  `adresseElectronique` text NOT NULL,
  `telephone` text NOT NULL,
  `dateDeNaissance` text NOT NULL,
  `sexe` int(11) NOT NULL,
  PRIMARY KEY (`idMembre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Message`
--

CREATE TABLE IF NOT EXISTS `Message` (
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
-- Structure de la table `Service`
--

CREATE TABLE IF NOT EXISTS `Service` (
  `idService` int(11) NOT NULL AUTO_INCREMENT,
  `nomService` int(11) NOT NULL,
  PRIMARY KEY (`idService`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Sujet`
--

CREATE TABLE IF NOT EXISTS `Sujet` (
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
