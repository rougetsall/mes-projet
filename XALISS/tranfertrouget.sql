-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 19 Décembre 2015 à 18:11
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `tranfertrouget`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `login`, `password`, `nom`, `prenom`, `telephone`, `adresse`) VALUES
(1, 'Genere', 'cool05', 'Dieng', 'Pierre', '77 327 04 78', 'pikine');

-- --------------------------------------------------------

--
-- Structure de la table `caissier`
--

CREATE TABLE IF NOT EXISTS `caissier` (
  `id_caissier` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `etat` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_caissier`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `caissier`
--

INSERT INTO `caissier` (`id_caissier`, `login`, `password`, `nom`, `prenom`, `telephone`, `adresse`, `etat`) VALUES
(1, '', '', 'mmm', 'ddsw', 'hdhdhd', '', 0),
(14, 'rouget', 'sall', 'sall', 'rouget', '77 458 45 14', 'medina', 0),
(15, 'amadou', 'sall', 'DIOP', 'lamine', '771125802', 'rue', 1),
(16, 'Genere', 'dieng', 'dieng', 'pierre', '773270224', 'pikine', 1),
(17, 'licenceinf', 'fall', 'fall', 'anta', '77012580', 'mermoz', 0);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(10) NOT NULL AUTO_INCREMENT,
  `num_carte_ident` int(20) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `localite` varchar(100) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_client`, `num_carte_ident`, `nom`, `prenom`, `telephone`, `adresse`, `localite`) VALUES
(115, 2147483647, 'samba', 'sall', '771452326', 'rue 47', 'national'),
(116, 1444511222, 'diop', 'marema', '777154518', 'ucad', 'national');

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id_trans` int(10) NOT NULL AUTO_INCREMENT,
  `code_envoi` varchar(8) NOT NULL,
  `montant` double NOT NULL,
  `gain` double NOT NULL,
  `date` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `id_exp` int(10) NOT NULL,
  `id_caissier` int(10) NOT NULL,
  `question` varchar(20) NOT NULL,
  `reponse` varchar(20) NOT NULL,
  `id_benef` int(10) NOT NULL,
  PRIMARY KEY (`id_trans`),
  KEY `id_exp` (`id_exp`),
  KEY `FK_FAIRE_UN_RETRAIT` (`id_benef`),
  KEY `FK_SE_FAIT_PAR` (`id_caissier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Contenu de la table `transaction`
--

INSERT INTO `transaction` (`id_trans`, `code_envoi`, `montant`, `gain`, `date`, `type`, `id_exp`, `id_caissier`, `question`, `reponse`, `id_benef`) VALUES
(76, '03189097', 10000, 700, '2015-12-19', 'TRANSFERT', 115, 15, 'maman', 'papa', 116),
(77, '03189097', 10000, 700, '2015-12-19', 'RETRAIT', 115, 1, 'maman', 'papa', 116),
(78, '03189097', 10000, 700, '2015-12-19', 'RETRAIT', 115, 1, 'maman', 'papa', 116),
(79, '03189097', 10000, 700, '2015-12-19', 'RETRAIT', 115, 1, 'maman', 'papa', 116),
(80, '03189097', 10000, 700, '2015-12-19', 'RETRAIT', 115, 1, 'maman', 'papa', 116),
(81, '03189097', 10000, 700, '2015-12-19', 'RETRAIT', 115, 1, 'maman', 'papa', 116);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `FK_FAIRE_UN_ENVOI` FOREIGN KEY (`id_exp`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `FK_FAIRE_UN_RETRAIT` FOREIGN KEY (`id_benef`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `FK_SE_FAIT_PAR` FOREIGN KEY (`id_caissier`) REFERENCES `caissier` (`id_caissier`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
