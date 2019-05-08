-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 08 Mai 2019 à 15:57
-- Version du serveur: 5.6.11-log
-- Version de PHP: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `webdesign`
--
CREATE DATABASE IF NOT EXISTS `webdesign` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webdesign`;

-- --------------------------------------------------------

--
-- Structure de la table `categoriepieces`
--

CREATE TABLE IF NOT EXISTS `categoriepieces` (
  `IDCATEGORIE` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NOMCATEGORIE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IDCATEGORIE`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `categoriepieces`
--

INSERT INTO `categoriepieces` (`IDCATEGORIE`, `NOMCATEGORIE`) VALUES
(1, 'Salon'),
(2, 'Chambre'),
(3, 'Cuisine'),
(4, 'Dressing'),
(5, 'Bureau'),
(6, 'Salle de bain');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `NUMEROS` varchar(50) DEFAULT NULL,
  `MAIL` varchar(50) DEFAULT NULL,
  `LIEU` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ensemble`
--

CREATE TABLE IF NOT EXISTS `ensemble` (
  `IDENSEMBLE` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `IDCATEGORIE` int(10) unsigned NOT NULL,
  `NOMMODELE` longtext,
  PRIMARY KEY (`IDENSEMBLE`),
  KEY `FK_CATENSEMBLE` (`IDCATEGORIE`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `ensemble`
--

INSERT INTO `ensemble` (`IDENSEMBLE`, `IDCATEGORIE`, `NOMMODELE`) VALUES
(1, 1, 'Salon chaleureux avec des couleurs vive et un design tr&egrave;s soign&eacute;e digne d&#039;un professionel '),
(2, 1, 'Salon chaleureux avec des couleurs noir et blanc et un design tr&egrave;s soign&eacute;e digne d&#039;un professionel '),
(3, 1, 'Salon chaleureux avec des couleurs argent&eacute;e et un design tr&egrave;s soign&eacute;e digne d&#039;un professionel '),
(4, 1, 'Salon chaleureux en cuivre et un design tr&egrave;s soign&eacute;e digne d&#039;un professionel '),
(5, 1, 'Salon chaleureux avec un design tr&egrave;s soign&eacute;e digne d&#039;un professionel ');

-- --------------------------------------------------------

--
-- Structure de la table `pieces`
--

CREATE TABLE IF NOT EXISTS `pieces` (
  `IDPIECES` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `IDCATEGORIE` int(10) unsigned NOT NULL,
  `NOMPIECES` varchar(50) DEFAULT NULL,
  `DESCRIPTIONS` longtext,
  `NOTES` int(11) DEFAULT NULL,
  `NOUVEAU` int(11) DEFAULT NULL,
  `MATIERES` longtext,
  PRIMARY KEY (`IDPIECES`),
  KEY `FK_SOUSCATEGORIE` (`IDCATEGORIE`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `pieces`
--

INSERT INTO `pieces` (`IDPIECES`, `IDCATEGORIE`, `NOMPIECES`, `DESCRIPTIONS`, `NOTES`, `NOUVEAU`, `MATIERES`) VALUES
(1, 1, 'Isabel - Armoire classique pin massif - Couleur - ', 'Caract&eacute;ristiques techniques :Composition de l''armoire : 2 portes / &eacute;tag&egrave;resMati&egrave;res :Structure et &eacute;tag&egrave;res en pin massif &eacute;co-certifi&eacute; FSCFonds en HDF 3 mmFinit...', 4, 1, 'Bois'),
(2, 1, 'Etag&egrave;re en ch&ecirc;ne massif rouge 3 porte', 'Caract&eacute;ristiques techniques : Mati&egrave;res : Panneaux de particules m&eacute;lamin&eacute;s Pieds en ch&ecirc;ne massif Dimensions hors tout : ...', 5, 1, 'Bois'),
(3, 2, 'Lit coffre 2 places bois blanc avec sommier 140x19', 'Caractéristiques techniques : Matières : Structure en panneau de particules de bois Cadre à lattes en hêtre multiplis et hêtre massif Embouts en pl...', 4, 1, 'Bois'),
(4, 2, 'Lit 2 places ch&ecirc;ne avec tiroirs et niche 140', 'Caract&eacute;ristiques techniques :Mati&egrave;res :Panneau de particules de boisCoulisses en m&eacute;talFinition : Rev&ecirc;tu d''un d&eacute;cor papier imitation ch&ecirc;ne bross&eacute;Dimensions du c...', 5, 0, 'Bois'),
(5, 3, 'Bureau noyer et m&eacute;tal noir avec 2 tiroirs Y', 'LLe bureau Yale est confectionn&eacute; en panneaux de particules de bois avec des pieds en tube de m&eacute;tal. L&rsquo;association de m&eacute;tal noir et de bois de noyer apporte une...', 3, 0, 'Bois'),
(6, 2, 'Meuble tv en bois blanc avec casier CUBO', 'Caract&eacute;ristiques techniques :Mati&egrave;res : panneaux de particules m&eacute;lamin&eacute;s laqu&eacute; mat et pieds en bois de ch&ecirc;neDimensions :Longueur : 150 cmLargeur : 40 cmHauteur... ', 5, 1, 'Bois');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NOMUTILISATEUR` varchar(50) DEFAULT NULL,
  `MDP` longtext,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `NOMUTILISATEUR`, `MDP`) VALUES
(1, 'toky', '1a6cd6fde8f5bef78bd6fc398010e41b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
