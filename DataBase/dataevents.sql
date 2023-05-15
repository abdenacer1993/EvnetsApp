-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 15 mai 2023 à 00:09
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
-- Base de données :  `dataevents`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `login`, `password`, `email`, `type`) VALUES
(1, 'admin ben super', 'superAdmin', 'admin', 'admin@super.com', 'superadmin'),
(2, 'admin ben simple', 'simpleAdmin', 'admin', 'admin@simple.com', 'simpleadmin'),
(5, 'abess ben abbes', 'abbes', 'abes', 'abes@gmail.com', 'simpleadmin');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `discription` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `discription`) VALUES
(2, 'Mariage', 'Mariage'),
(3, 'Camp', 'Camp');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `email`, `password`) VALUES
(2, 'test ben test', 'test@gmail.com', 'azerty'),
(3, 'abdenacer hasnaoui', 'abdenacer1993@gmail.com', 'nacer');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_poste` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `id_poste`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(1, 2, '../p-admin/Controller/upload/64616180e799e-1684103552.jpg', '../p-admin/Controller/upload/64616180e8f2c-1684103552.jpg', '../p-admin/Controller/upload/64616180ea1df-1684103552.jpg', '../p-admin/Controller/upload/64616180ec43d-1684103552.jpg', '../p-admin/Controller/upload/64616180ed893-1684103552.jpg'),
(3, 3, 'upload/646177b824a72-1684109240.jpg', 'upload/646177b825378-1684109240.jpg', 'upload/646177b826731-1684109240.jpg', 'upload/646177b826fbd-1684109240.jpg', 'upload/646177b827cea-1684109240.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `postes`
--

DROP TABLE IF EXISTS `postes`;
CREATE TABLE IF NOT EXISTS `postes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_salle` varchar(30) NOT NULL,
  `nom_prop_salle` varchar(50) NOT NULL,
  `type_event` varchar(20) NOT NULL,
  `images` varchar(255) NOT NULL,
  `numtel_salle` varchar(12) NOT NULL,
  `etat` varchar(30) NOT NULL,
  `id_a` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `postes`
--

INSERT INTO `postes` (`id`, `nom_salle`, `nom_prop_salle`, `type_event`, `images`, `numtel_salle`, `etat`, `id_a`) VALUES
(2, 'mariage salle', 'test ben test', 'Mariage', 'upload/645c1132cb5b7-1683755314.jpg', '12345678', 'Accpter', 2),
(3, 'azerty', 'test ben test', 'Camp', '../../p-admin/Controller/upload/646034a11e84b-1684026529.jpg', '24567890', 'Accpter', 2);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sujet` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `date` varchar(10) NOT NULL,
  `lu` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id`, `nom`, `email`, `sujet`, `msg`, `date`, `lu`) VALUES
(1, 'foulan ben foulan', 'foulan@gmail.com', 'test', 'test test test', '09/05/2023', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
