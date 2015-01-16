-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 16 Janvier 2015 à 10:40
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`idAnnonce`, `titre`, `description`, `superficie`, `numero`, `rue`, `ville`, `codePostal`, `pays`, `nombreDeChambres`, `nombreDeLits`, `nombreDeSallesDeBain`, `idMembre`) VALUES
(1, '1', 'Description1', 45, 1, '1', '1', 1, 'France', 5, 6, 2, 1),
(2, '2', 'Description2', 1245, 2, '2', '2', 2, 'France', 45, 62, 23, 1),
(3, '2', 'Description2', 1245, 2, '2', '2', 2, 'France', 45, 62, 23, 1),
(4, '2', 'Description2', 1245, 2, '2', '2', 2, 'France', 40, 62, 23, 1),
(5, '2', 'Description2', 1245, 2, '2', '2', 2, 'France', 45, 62, 23, 1),
(6, 'La lampe', 'osef', 78645, 13, 'rue', 'v!lle', 0, 'nulle part', 1200, 1300, 1100, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `contrainte`
--

INSERT INTO `contrainte` (`idContrainte`, `nomContrainte`, `public`) VALUES
(0, 'Contrainte automatiquement ajoutée', 0),
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
  `precisions` text NOT NULL,
  PRIMARY KEY (`idAnnonce`,`idEquipement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `estequipede`
--

INSERT INTO `estequipede` (`idAnnonce`, `idEquipement`, `precisions`) VALUES
(1, 6, ''),
(1, 10, ''),
(1, 14, ''),
(1, 19, ''),
(2, 1, ''),
(2, 5, ''),
(3, 1, ''),
(3, 5, ''),
(4, 1, ''),
(4, 5, ''),
(5, 1, ''),
(5, 5, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`idMembre`, `pseudonyme`, `nom`, `prenom`, `motDePasseCrypte`, `adresseElectronique`, `telephone`, `dateDeNaissance`, `sexe`, `cle`, `actif`, `admin`) VALUES
(1, 'Â²', 'Â²', 'Â²', 'Â²', 'adrelec@yopmail.com', '0123456789', '01/01/2000', 0, '2616605503cb1c283d318e054f29e173', 0, 0),
(2, 'Pierre', 'Dupont', 'Jean-Pierre', '1', 'bf2e@gmail.com', '0123456789', '13/09/1976', 1, '4645', 1, 0);

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

--
-- Contenu de la table `propose`
--

INSERT INTO `propose` (`idAnnonce`, `idService`, `precisions`) VALUES
(1, 0, ''),
(2, 0, ''),
(3, 0, ''),
(4, 0, ''),
(5, 1, '');

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

--
-- Contenu de la table `requiert`
--

INSERT INTO `requiert` (`idAnnonce`, `idContrainte`, `precisions`) VALUES
(1, 0, ''),
(1, 2, ''),
(2, 0, ''),
(3, 0, ''),
(4, 0, ''),
(5, 0, ''),
(5, 1, ''),
(5, 2, ''),
(6, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `idService` int(11) NOT NULL AUTO_INCREMENT,
  `nomService` text NOT NULL,
  `public` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idService`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `service`
--

INSERT INTO `service` (`idService`, `nomService`, `public`) VALUES
(1, 'Garder un chien', 1),
(2, 'Garder un ou plusieurs petits animaux domestiques', 1),
(3, 'Faire du jardinage', 1),
(4, 'Service automatique et impossible', 0);

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

-- --------------------------------------------------------

--
-- Structure de la table `texte`
--

CREATE TABLE IF NOT EXISTS `texte` (
  `nomTexte` varchar(30) NOT NULL,
  `contenuFrancais` text NOT NULL,
  `contenuAnglais` text NOT NULL,
  PRIMARY KEY (`nomTexte`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `texte`
--

INSERT INTO `texte` (`nomTexte`, `contenuFrancais`, `contenuAnglais`) VALUES
('accueil', 'nouveau texte', 'new text'),
('conditionsUtilisation', 'Nos annonces sont strictement réservées aux particuliers. En acceptant les présentes conditions générales de vente et en publiant une annonce dans nos colonnes, vous vous engagez sur l''honneur à ne pas être un professionnel de l''immobilier, ni agir directement ou indirectement, pour le compte d''un professionnel de l''immobilier. S''il \r\napparaît que cette condition n''est pas remplie, nous nous réservons le droit de supprimer votre annonce de nos supports, et de conserver, à titre de provision sur indemnité, le prix versé au titre du forfait, sans nous interdire d''entamer toutes autres actions judiciaires.', '(untranslated part: conditions d''utilisation)');
('MentionsLegalesProtections', 'Les données transmises par nos annonceurs sont confidentielles et, en aucun cas ne font l''objet de transmission à des tiers, sauf en cas de réquisition judiciaire ou de demande par une autorité habilitée.
    Conformément à la loi informatique et liberté du 6 janvier 1978, vous disposez d''un droit d''accès, de modification, de rectification et de suppression des données vous concernant. Pour exercer ce droit, vous pouvez vous adresser à "CLIENTE".
    Lorsque vous passez votre annonce, il est nécessaire que vous communiquiez à ImmoTEP le type de bien que vous proposez, le lieu où il se situe, le texte de l''annonce, les services que vous demandez, le numéro de téléphone et/ou l''adresse e-mail où vous souhaitez que les personnes intéressées vous contactent. ImmoTEP collecte aussi vos coordonnées personnelles, nom, prénom adresse, numéro de téléphone, e-mail. Ces données sont strictement confidentielles et ne sont pas transmises à des tiers, sauf réquisition judiciaire ou demande d''une autorité habilitée. Ces données sont obligatoires pour le traitement de votre annonce et dans le cas où vous refusez de les communiquer, nous ne sommes pas en mesure de publier votre annonce.
    Lorsque vous vous connectez aux services de ImmoTEP par Internet, nous conservons la trace de ces connexions électroniques.'),
('MentionsLegalesFinalite', ' La conservation et le traitement des données ci-dessus énumérées répondent aux finalités suivantes :
Gestion de la relation commerciale ;
Gestion de la comptabilité client ;
Constitution et gestion de fichiers de clients et de prospects ;
Analyses statistiques à des fins commerciales et études relatives au marché immobilier ;
Envoi ultérieur de lettres d''information par mail, de propositions commerciales par mail, courrier ou SMS.
Si vous ne désirez pas recevoir les lettres d''information ou les propositions commerciales de ImmoTEP, contactez-nous au "NUMERO DE TELEPHONE" .
Durée de conservation des données à caractère personnel;'),
('MentionsLegalesSecurite', ' ImmoTEP prend toutes les mesures nécessaires pour garantir la sécurité des données stockées, notamment pour empêcher que des tiers non autorisés puissent y accéder.'),




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
