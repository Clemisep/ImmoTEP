-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
-- 
-- Client : 127.0.0.1
-- Généré le : Mar 25 Novembre 2014 à 09:50
-- Version du serveur : 5.6.17
-- Version de PHP : 5.5.12
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
-- 
-- Base de données : `immotep`
-- 
-- --------------------------------------------------------
-- 
-- Structure de la table `adresse`
-- 
CREATE TABLE IF NOT EXISTS `adresse` (
`IdAdresse` int(15) NOT NULL AUTO_INCREMENT,
`IdMembres` int(15) NOT NULL,
`IdLogement` int(15) NOT NULL,
`Rue` varchar(25) NOT NULL,
`Ville` varchar(25) NOT NULL,
`CodePostage` int(15) NOT NULL,
`Pays` varchar(15) NOT NULL,
`Numéro` int(15) NOT NULL,
PRIMARY KEY (`IdAdresse`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- --------------------------------------------------------
-- 
-- Structure de la table `annonce`
-- 
CREATE TABLE IF NOT EXISTS `annonce` (
`IdAnnonce` int(15) NOT NULL AUTO_INCREMENT,
`IdSujet` int(15) NOT NULL,
`IdMembers` int(11) NOT NULL,
`Description` varchar(11) NOT NULL,
`IdLogement` int(11) NOT NULL,
`IdImage` int(11) NOT NULL,
`IdContrainte` int(11) NOT NULL,
PRIMARY KEY (`IdAnnonce`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- --------------------------------------------------------
-- 
-- Structure de la table `commentaire`
-- 
CREATE TABLE IF NOT EXISTS `commentaire` (
`IdCommentaire` int(15) NOT NULL AUTO_INCREMENT,
`IdMembres` int(15) NOT NULL,
`IdSujet` int(15) NOT NULL,
`Contenu` varchar(1000) NOT NULL,
`Date` datetime NOT NULL,
PRIMARY KEY (`IdCommentaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- --------------------------------------------------------
-- 
-- Structure de la table `contraintes`
-- 
CREATE TABLE IF NOT EXISTS `contraintes` (
`IdContraintes` int(15) NOT NULL AUTO_INCREMENT,
`IdMembres` int(15) NOT NULL,
PRIMARY KEY (`IdContraintes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- 
-- Contenu de la table `contraintes`
-- 
INSERT INTO `contraintes` (`IdContraintes`) VALUES
(0);
-- --------------------------------------------------------
-- 
-- Structure de la table `images`
-- 
CREATE TABLE IF NOT EXISTS `images` (
`IdImages` int(15) NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`IdImages`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- --------------------------------------------------------
-- 
-- Structure de la table `logement`
-- 
CREATE TABLE IF NOT EXISTS `logement` (
`IdLogement` int(15) NOT NULL AUTO_INCREMENT,
`IdMembres` int(15) NOT NULL,
`IdAdresse` varchar(1000) NOT NULL,
`Chambres` int(15) NOT NULL,
`Superficie` int(15) NOT NULL,
`SaleDeBain` int(15) NOT NULL,
PRIMARY KEY (`IdLogement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- --------------------------------------------------------
-- 
-- Structure de la table `membres`
-- 
CREATE TABLE IF NOT EXISTS `membres` (
`IdMembres` int(11) NOT NULL AUTO_INCREMENT,
`NomMembres` varchar(25) NOT NULL,
`PrenomMembres` varchar(25) NOT NULL,
`Passord1` varchar(255) NOT NULL,
`Passord2` varchar(255) NOT NULL,
`NumeroMembres` varchar(25) NOT NULL,
`Emailmembres` varchar(30) NOT NULL,
`DatedeNaissanceMembres` varchar(25) NOT NULL,
`SexeMembres` varchar(25) NOT NULL,
`AdresseMembres` varchar(25) NOT NULL,
PRIMARY KEY (`IdMembres`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- --------------------------------------------------------
-- 
-- Structure de la table `messageprivé`
-- 
CREATE TABLE IF NOT EXISTS `messageprivé` (
`IdMessage` int(15) NOT NULL AUTO_INCREMENT,
`IdMembres` int(15) NOT NULL,
`Contenu` text NOT NULL,
`Objet` varchar(1000) NOT NULL,
`Date` datetime NOT NULL,
PRIMARY KEY (`IdMessage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- --------------------------------------------------------
-- 
-- Structure de la table `note`
-- 
CREATE TABLE IF NOT EXISTS `note` (
`IdNote` int(15) NOT NULL AUTO_INCREMENT,
`IdAnnonce` int(15) NOT NULL,
PRIMARY KEY (`IdNote`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- --------------------------------------------------------
-- 
-- Structure de la table `services`
-- 
CREATE TABLE IF NOT EXISTS `services` (
`IdServices` int(15) NOT NULL AUTO_INCREMENT,
`IdAnnonce` int(15) NOT NULL,
`Taches` varchar(220) NOT NULL,
PRIMARY KEY (`IdServices`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
-- --------------------------------------------------------
-- 
-- Structure de la table `sujet`
-- 
CREATE TABLE IF NOT EXISTS `sujet` (
`IdSujet` int(15) NOT NULL AUTO_INCREMENT,
`IdMembres` int(11) NOT NULL,
`Titre` varchar(30) NOT NULL,
`Date` datetime NOT NULL,
PRIMARY KEY (`IdSujet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
