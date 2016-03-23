-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 23 Mars 2016 à 15:06
-- Version du serveur :  5.5.47-0+deb8u1
-- Version de PHP :  5.6.17-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `website`
--

-- --------------------------------------------------------

--
-- Structure de la table `project_picture`
--

CREATE TABLE IF NOT EXISTS `project_picture` (
`id` int(11) NOT NULL,
  `projectId` int(11) NOT NULL,
  `picturePath` varchar(255) NOT NULL,
  `id_img` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `project_picture`
--

INSERT INTO `project_picture` (`id`, `projectId`, `picturePath`, `id_img`) VALUES
(1, 1, 'path', 'project-image-1'),
(2, 1, 'path', 'project-image-2'),
(3, 1, 'path', 'project-image-3'),
(4, 1, 'path', 'project-tech-1'),
(5, 1, 'path', 'project-tech-2'),
(6, 1, 'path', 'project-tech-3'),
(7, 1, 'path', 'profil-image-1'),
(8, 1, 'path', 'profil-image-2');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `project_picture`
--
ALTER TABLE `project_picture`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `project_picture`
--
ALTER TABLE `project_picture`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
