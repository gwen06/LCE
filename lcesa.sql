-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 04 Décembre 2013 à 18:01
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `lcesa`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass2_md5` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`ID`, `user`, `pass2_md5`) VALUES
(1, 'gwen', '*63D85DCA15EAFFC58C908FD2FAE50CCBC60C4EA2');

-- --------------------------------------------------------

--
-- Structure de la table `dosage`
--

CREATE TABLE IF NOT EXISTS `dosage` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Traitement2` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `dosage`
--

INSERT INTO `dosage` (`ID`, `Traitement2`) VALUES
(1, 'Changement injecteur'),
(2, 'Changement pompe'),
(3, 'Reglage pompe de dosage'),
(4, 'Reglage temps de dosage');

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

CREATE TABLE IF NOT EXISTS `intervention` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Machine` varchar(50) NOT NULL,
  `Traitement` varchar(50) NOT NULL,
  `Technique` varchar(50) NOT NULL,
  `Commentaire` varchar(50) NOT NULL,
  `DATE` date NOT NULL,
  `Heure` time NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `intervention`
--

INSERT INTO `intervention` (`ID`, `Nom`, `Machine`, `Traitement`, `Technique`, `Commentaire`, `DATE`, `Heure`) VALUES
(1, 'Vanags Tony', 'L4', '', 'Teflon', '', '2013-11-25', '14:49:47'),
(2, 'Vanags Tony', 'L4', 'Changement de couteaux horizontaux', 'Technique', '', '2013-11-25', '14:49:47'),
(3, 'Vanags Tony', 'L3', 'Changement des couteaux', 'Technique', 'bonjour', '2013-11-25', '14:56:51'),
(5, 'Vanags Tony', 'L1', '', 'Teflon', '', '2013-12-02', '16:31:44'),
(6, 'Vanags Tony', 'L1', '', 'Teflon', '', '2013-12-02', '16:33:39'),
(7, 'Vanags Tony', 'L1', '', 'Teflon', '', '2013-12-02', '16:39:59'),
(8, 'Vanags Tony', 'L1', '', 'Teflon', '', '2013-12-02', '16:40:43'),
(9, 'Vanags Tony', 'L1', '', 'Teflon', '', '2013-12-02', '16:40:52'),
(10, 'Vanags Tony', 'L1', '', 'Teflon', '', '2013-12-02', '16:41:03'),
(11, 'Vanags Tony', 'L1', '', 'Teflon', '', '2013-12-02', '16:41:34'),
(12, 'Vanags Tony', 'L1', 'Roulement', 'Mecanique', '', '2013-12-02', '16:47:45'),
(13, 'Vanags Tony', 'L2', '', 'Teflon', '', '2013-12-02', '16:48:54'),
(14, 'Vanags Tony', 'L2', 'Pince', 'Technique', '', '2013-12-02', '16:49:00'),
(15, 'Vanags Tony', 'L3', 'Pince', 'Technique', '', '2013-12-02', '16:49:07'),
(16, 'Vanags Tony', 'L3', 'Reglage pompe de dosage', 'Dosage', '', '2013-12-02', '16:49:07'),
(17, 'Vanags Tony', 'L3', 'Pince', 'Technique', '', '2013-12-02', '16:49:18'),
(18, 'Vanags Tony', 'L3', 'Reglage pompe de dosage', 'Dosage', '', '2013-12-02', '16:49:18'),
(19, 'Vanags Tony', 'L1', 'Changement pompe', 'Dosage', '', '2013-12-02', '16:49:57'),
(20, 'Vanags Tony', 'L4', 'Te de porte', 'Mecanique', '', '2013-12-02', '16:50:43'),
(21, 'Vanags Tony', 'L1', 'Changement pompe', 'Dosage', '', '2013-12-03', '08:56:03'),
(22, 'Vanags Tony', 'L1', '', 'Teflon', '', '2013-12-03', '09:32:42'),
(23, 'Vanags Tony', 'L1', '', 'Teflon', '', '2013-12-03', '09:54:44'),
(24, 'Vanags Tony', 'L1', '', 'Teflon', '', '2013-12-04', '10:08:32'),
(25, 'Vanags Tony', 'L1', 'Scellage', 'Technique', '', '2013-12-04', '10:08:39'),
(26, 'Vanags Tony', 'L2', 'Scellage', 'Technique', '', '2013-12-04', '10:09:02'),
(27, 'Vanags Tony', 'L2', 'Circuit hydraulique', 'Mecanique', '', '2013-12-04', '10:09:02'),
(28, 'Vanags Tony', 'L1', '', 'Teflon', '', '2013-12-04', '11:36:45');

-- --------------------------------------------------------

--
-- Structure de la table `machine`
--

CREATE TABLE IF NOT EXISTS `machine` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `machine`
--

INSERT INTO `machine` (`ID`, `Nom`) VALUES
(1, 'L1'),
(2, 'L2'),
(3, 'L3'),
(4, 'L4'),
(5, 'L5'),
(6, 'L6'),
(7, 'L7'),
(8, 'L8'),
(9, 'L9'),
(10, 'L10'),
(11, 'K1'),
(12, 'K2'),
(13, 'K3'),
(14, 'K4'),
(15, 'K5'),
(16, 'COLLEUSE'),
(17, 'STICK 1'),
(18, 'STICK 2');

-- --------------------------------------------------------

--
-- Structure de la table `mecanique`
--

CREATE TABLE IF NOT EXISTS `mecanique` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Traitement3` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `mecanique`
--

INSERT INTO `mecanique` (`ID`, `Traitement3`) VALUES
(1, 'Roulement'),
(2, 'Graissage'),
(3, 'Came'),
(4, 'Te de porte'),
(5, 'Axes'),
(6, 'Circuit hydraulique'),
(7, 'Autres mecaniques');

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

CREATE TABLE IF NOT EXISTS `technicien` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(20) NOT NULL,
  `pass_md5` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `technicien`
--

INSERT INTO `technicien` (`ID`, `Nom`, `pass_md5`) VALUES
(1, 'Vanags Tony', '*63D85DCA15EAFFC58C908FD2FAE50CCBC60C4EA2'),
(2, 'Baron Jonathan', ''),
(3, 'Nobile Guillaume', ''),
(4, 'Garello Jean-Michel', ''),
(5, 'Bonnefous Gerard', ''),
(6, 'Pierrot Claude', ''),
(7, 'Brochard Ludovic', ''),
(8, 'Breteau Hermann', '');

-- --------------------------------------------------------

--
-- Structure de la table `technique1`
--

CREATE TABLE IF NOT EXISTS `technique1` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `traitement4` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `technique1`
--

INSERT INTO `technique1` (`ID`, `traitement4`) VALUES
(1, 'Scellage'),
(2, 'Transfert'),
(3, 'Numero de lot'),
(4, 'Palpeur'),
(5, 'Pince'),
(6, 'cellule'),
(7, 'Changement des couteaux'),
(8, 'Changement des couteaux tete serviette'),
(9, 'Reglage tete serviette'),
(10, 'Reglage temps de dosage'),
(11, 'Reglage de l''alu'),
(12, 'Reglage de la traction'),
(13, 'Pression hydraulique'),
(14, 'Changement de couteaux horizontaux'),
(15, 'Changement de couteaux rotatifs');

-- --------------------------------------------------------

--
-- Structure de la table `technique2`
--

CREATE TABLE IF NOT EXISTS `technique2` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `traitement5` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `technique2`
--

INSERT INTO `technique2` (`ID`, `traitement5`) VALUES
(1, 'Reglage margeur A/B/C'),
(2, 'Reglage tapis de pliage'),
(3, 'Reglage point de colle'),
(4, 'Reglage ventouse'),
(5, 'Reglage cellule de comptage');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
