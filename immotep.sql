-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 20 Janvier 2015 à 22:30
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

-- --------------------------------------------------------


CREATE DATABASE IF NOT EXISTS `immotep` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `immotep`;

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
  `publique` int(11) NOT NULL,
  PRIMARY KEY (`idAnnonce`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`idAnnonce`, `titre`, `description`, `superficie`, `numero`, `rue`, `ville`, `codePostal`, `pays`, `nombreDeChambres`, `nombreDeLits`, `nombreDeSallesDeBain`, `idMembre`, `publique`) VALUES
(1, '1', 'Description1', 45, 1, '1', '1', 1, 'France', 5, 6, 2, 1, 1),
(2, '2', 'Description2', 1245, 2, '2', '2', 2, 'France', 45, 62, 23, 1, 1),
(3, '2', 'Description2', 1245, 2, '2', '2', 2, 'France', 45, 62, 23, 1, 1),
(4, '2', 'Description2', 1245, 2, '2', '2', 2, 'France', 40, 62, 23, 1, 1),
(5, '2', 'Description2', 1245, 2, '2', '2', 2, 'France', 45, 62, 23, 1, 1),
(6, 'La lampe', 'osef', 78645, 13, 'rue', 'v!lle', 0, 'nulle part', 1200, 1300, 1100, 1, 1),
(7, 'Nouveau', '20/01/2015', 12, 0, 'rue', 'blabla', 75000, 'France', 12, 45, 63, 2, 1),
(8, 'nom', 'Description.', 5, 0, 'rue', 'mont', 78180, 'France', 12, 32, 0, 2, 1),
(9, 'nom', 'Description.', 5, 0, 'rue', 'mont', 78180, 'France', 12, 32, 0, 2, 1);

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
  `date` datetime NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`idCommentaire`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`idCommentaire`, `idMembre`, `idAnnonce`, `date`, `contenu`) VALUES
(1, 2, 7, '2015-01-20 00:00:00', 'Premier commentaire'),
(2, 2, 7, '2015-01-20 00:00:00', 'test'),
(3, 2, 7, '2015-01-20 00:00:00', 'Encore un commentaire !'),
(4, 2, 7, '2015-01-20 15:07:49', 'essai');

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
(1, 'Enfants non admis', 1),
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
(5, 5, ''),
(7, 10, ''),
(7, 14, ''),
(7, 15, ''),
(7, 18, ''),
(8, 14, ''),
(8, 18, ''),
(8, 22, ''),
(9, 10, ''),
(9, 14, ''),
(9, 18, '');

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
  `dateDeNaissance` date NOT NULL,
  `sexe` int(11) NOT NULL,
  `cle` varchar(32) NOT NULL,
  `actif` int(11) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `banni` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idMembre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`idMembre`, `pseudonyme`, `nom`, `prenom`, `motDePasseCrypte`, `adresseElectronique`, `telephone`, `dateDeNaissance`, `sexe`, `cle`, `actif`, `admin`, `banni`) VALUES
(1, 'Â²', 'Â²', 'Â²', 'Â²', 'adrelec@yopmail.com', '0123456789', '0000-00-00', 0, '2616605503cb1c283d318e054f29e173', 0, 0, 0),
(2, 'Pierre2', 'Dupont', 'Jean-Pierre', '1', 'bf2e@gmail.com', '0123456789', '1992-00-00', 0, '4645', 1, 1, 0),
(3, 'monpseudo', 'Jean', 'Dupont', 'CeciÃ©mon0', 'adrelec@yopmail.com', '0123456789', '0000-00-00', 1, '3c6e43500d2fc7648133c18a7d038d20', 0, 0, 0),
(4, 'monpseudo3', 'Jean', 'Dupont', 'CeciÃ©mon0', 'adrelec@yopmail.com', '0123456789', '0000-00-00', 1, 'c88c44cc3ef1793e3f1222d16b1b669e', 0, 0, 0),
(5, 'monpseudo4', 'Jean', 'Dupont', 'CeciÃ©mon0', 'adrelec@yopmail.com', '0123456789', '0000-00-00', 1, '2736e4feb6ceb6152035205299afb5fc', 0, 0, 0),
(6, 'monpseudo5', 'Jean', 'Dupont', 'CeciÃ©mon0', 'adrelec@yopmail.com', '0123456789', '0000-00-00', 1, 'ca8d5a3c8221804a0a61783c2e960d9b', 0, 0, 0),
(7, 'monpseudo6', 'Jean', 'Dupont', 'CeciÃ©mon0', 'adrelec@yopmail.com', '0123456789', '0000-00-00', 1, '22f6ca77ad4a267bbe1a2b664e600b4a', 0, 0, 0),
(8, 'monpseudo8', 'Jean', 'Dupont', 'CeciÃ©mon0', 'adrelec@yopmail.com', '0123456789', '0000-00-00', 1, 'a3ba7295818f8fe934ad1f5841c2b88b', 0, 0, 0),
(9, 'monpseudo9', 'Jean', 'Dupont', 'CeciÃ©mon0', 'adrelec@yopmail.com', '0123456789', '0000-00-00', 1, 'b69064e9f67ae6ff628fbd5df3ddd053', 0, 0, 0),
(10, 'monpseudo10', 'Jean', 'Dupont', 'CeciÃ©mon0', 'adrelec@yopmail.com', '0123456789', '1992-05-25', 1, 'e86dc383bae72dafdb2e2e4b0ea2fa8a', 0, 0, 0),
(11, 'monpseudo15', 'Yep', 'Dupont', 'CeciÃ©mon0', 'adrelec@yopmail.com', '0123456789', '1992-05-25', 1, '0ecf495199d8daa98157553f5ce30bb1', 0, 0, 0),
(12, 'monpseudo51', 'Nom', 'prÃ©nom', 'CeciÃ©mon0', 'adr@yopmail.com', '0123456789', '1992-00-00', 0, '5cac88f5c9b5737ce588bf02b651cd3b', 1, 0, 0),
(13, 'Ninis8', 'Meziani', 'Yanis', 'Ymeziani88-16', 'ymeziani@outlook.fr', '0685683341', '1994-02-16', 1, 'c21d421e20560a103c1720ecc413023b', 1, 0, 0);

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
(5, 1, ''),
(6, 0, ''),
(7, 0, ''),
(7, 1, ''),
(7, 2, ''),
(8, 0, ''),
(9, 0, '');

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
(6, 0, ''),
(7, 0, ''),
(7, 1, ''),
(8, 0, ''),
(9, 0, '');

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
('accueil', 'GrÃ¢ce Ã  ImmoTEP vous pouvez trouver le logement idÃ©al pour vous, gratuitement, Ã  condition de rÃ©aliser les services demandÃ©s par le propriÃ©taire et de respecter les contraintes indiquÃ©es.\r\nImmoTEP vous propose :<br/>\r\nUn service <strong>Gratuit</strong><br/>\r\nDes annonces <strong>DÃ©taillÃ©es</strong><br/>\r\nUne <strong>Recherche</strong> facile Ã  utiliser', 'With ImmoTEP you can find the ideal tenement for you, free, provided to perform the services requested by the owner and respect given constraints. ImmoTEP offers:<br/>\r\nA <strong>Free</strong> service<br/>\r\n<strong>Detailed</strong> ads<br/>\r\nAn easy <strong>Search</strong> to use'),
('conditionsUtilisation', 'Nos annonces sont strictement réservées aux particuliers. En acceptant les présentes conditions générales de vente et en publiant une annonce dans nos colonnes, vous vous engagez sur l''honneur à ne pas être un professionnel de l''immobilier, ni agir directement ou indirectement, pour le compte d''un professionnel de l''immobilier. S''il \r\napparaît que cette condition n''est pas remplie, nous nous réservons le droit de supprimer votre annonce de nos supports, et de conserver, à titre de provision sur indemnité, le prix versé au titre du forfait, sans nous interdire d''entamer toutes autres actions judiciaires.', '(untranslated part: conditions d''utilisation)'),
('faq', 'Texte de la FAQ', 'Text of the FAQ'),
('mentionsLegales', 'Texte mentions lÃ©gales.', 'English text for Mentions lÃ©gales.'),
('reglement', '<p>En publiant votre annonce dans le groupe ImmoTEP.com, vous acceptez les conditions suivantes :\r\n\r\n<br>\r\n\r\n<fieldset>\r\n	<legend><h4>Lâ€™annonceur</h4></legend>\r\n	<p>Nos annonces sont strictement rÃ©servÃ©es aux particuliers. En acceptant les prÃ©sentes conditions gÃ©nÃ©rales de vente et en publiant une annonce dans nos colonnes, vous vous engagez sur l''honneur Ã  ne pas Ãªtre un professionnel de l''immobilier, ni agir directement ou indirectement, pour le compte d''un professionnel de l''immobilier. S''il apparaÃ®t que cette condition n''est pas remplie, nous nous rÃ©servons le droit de supprimer votre annonce de nos supports, sans nous interdire d''entamer toutes actions judiciaires.</p>\r\n</fieldset>\r\n<br>\r\n<fieldset>\r\n	<legend><h4>Lâ€™annonce</h4></legend>\r\n	<p>Vous garantissez que les renseignements fournis sont exacts et ne sont entachÃ©s d''aucune erreur ou omission de caractÃ¨re trompeur ou malhonnÃªte. Notre responsabilitÃ©, en tant que SociÃ©tÃ© Ã©ditrice ne pourra Ãªtre engagÃ©e, Ã  quel que titre que ce soit, si les renseignements portÃ©s dans l''annonce ou si la qualitÃ© de l''annonceur se rÃ©vÃ¨lent inexactes.</p>\r\n	<p>Nous ne diffusons qu''un seul bien par annonce. Le texte et les coordonnÃ©es tÃ©lÃ©phoniques figurant dans les annonces peuvent Ãªtre modifiÃ©s gratuitement en cours de parution. Toutefois le bien dÃ©crit doit rester celui d''origine sans possibilitÃ© d''y substituer un autre bien.</p>\r\n</fieldset>\r\n<br>\r\n<fieldset>\r\n	<legend><h4>Forfaits</h4></legend>\r\n        <p>Nos services sont complÃ¨tement gratuit. Si quiquoncque vous demande un service payant veuillez nous contacter. </p>\r\n</fieldset>\r\n<br>\r\n<fieldset>\r\n	<legend><h4>Photos</h4></legend>\r\n	Si vous joignez des photos Ã  votre annonces, nous vous informons que nous ne sommes pas en mesure de publier :\r\n	<ul>\r\n        <li>Les photos de qualitÃ© insuffisante ;</li>\r\n        <li>Les photos prÃ©sentant des personnes;</li>\r\n        <li>Les photos aÃ©riennes prises par un professionnel ;</li>\r\n        <li>Les photos-montage (plusieurs photos en une) ;</li>\r\n        <li>Les dessins d''architecte ou de promoteur;</li>\r\n        <li> Les photos provenant d''un magazine, d''une plaquette touristique ou commerciale, d''une carte postale .</li>\r\n    </ul>    \r\n</fieldset>\r\n<br>\r\n<fieldset>\r\n<legend><h4>Droit de refus</h4></legend>\r\n\r\n<p>ImmoTEP se rÃ©serve le droit de refuser toute annonce dont le caractÃ¨re pourrait Ãªtre contraire Ã  l''esprit et Ã  la vocation du site.</p>\r\n\r\n<p>Seules les adresses de sites internet personnels pourront Ãªtre publiÃ©es dans l''annonce aprÃ¨s vÃ©rification par nos services.\r\n</p>\r\n</fieldset>', '<p>By publishing your ad in the ImmoTEP.com group, you agree to the following conditions:\r\n\r\n<br>\r\n\r\n<fieldset>\r\n	<legend><h4>The Advertiser</h4></legend>\r\n	<p>Our ads are strictly reserved for particulars. By accepting these terms and conditions and by publishing an ad in our columns, you agree to honor not being a real estate professional or act directly or indirectly on behalf of a professional of estate. If it appears that this condition is not met, we reserve the right to remove your ad in our media, without forbidding us to start all legal actions.</p>\r\n</fieldset>\r\n<br>\r\n<fieldset>\r\n	<legend><h4>The ad</h4></legend>\r\n	<p>You warrant that the information provided is accurate and is not vitiated by any error of misleading or dishonest character. Our responsibility, as a Publishing company can not be held if the information contained in the announcement or if the quality of the advertiser is inaccurate.</p>\r\n	<p>\r\nWe distribute only one property per ad. The text and phone contact information in the ads can be changed for free during publication. However, the property described must remain the original without the possibility to substitute another property.</p>\r\n</fieldset>\r\n<br>\r\n<fieldset>\r\n	<legend><h4>Packages</h4></legend>\r\n        <p>Our services are completely free. If someone asks you for a paid service, please contact us. </p>\r\n</fieldset>\r\n<br>\r\n<fieldset>\r\n	<legend><h4>Photos</h4></legend>\r\n	If you attach photos to your ads, we inform you that we are not able to publish:\r\n	<ul>\r\n        <li>Pictures of insufficient quality;</li>\r\n        <li>Photos with people;</li>\r\n        <li>Aerial photos taken by a professional;</li>\r\n        <li>Photos-editing (multiple photos one);</li>\r\n        <li>Architectural drawings or promoter;</li>\r\n        <li>Pictures from a magazine, a tourist or commercial wafer of a postcard.</li>\r\n    </ul>\r\n</fieldset>\r\n<br>\r\n<fieldset>\r\n<legend><h4>Right of refusal</h4></legend>\r\n\r\n<p>ImmoTEP reserves the right to refuse any advertisement whose character could be contrary to the spirit and purpose of the site. </p>\r\n\r\n<p>Only personal website addresses may be published in the ad after verification by us.\r\n</p>\r\n</fieldset>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
