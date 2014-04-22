-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 14 Avril 2014 à 18:58
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `lightsearch1_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `websites`
--

CREATE TABLE IF NOT EXISTS `websites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(250) NOT NULL,
  `keywords` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `websites`
--

INSERT INTO `websites` (`id`, `title`, `description`, `url`, `keywords`) VALUES
(1, 'Reactbooth', 'Oudom sieng seng website', 'http://www.reactbooth.com', 'canvas'),
(2, 'Google', 'Search Engine for the future generation website', 'http://www.google.com', 'google search ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
