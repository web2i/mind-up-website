-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2016 at 08:51 AM
-- Server version: 5.5.47-0+deb8u1
-- PHP Version: 5.6.17-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

DROP TABLE IF EXISTS `texts`;
CREATE TABLE IF NOT EXISTS `texts` (
  `textId` varchar(255) NOT NULL,
  `public` tinyint(1) NOT NULL,
  `french` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`public`, `textId`, `french`) VALUES
(1, 'PAGE-TYPE-ID', 'DEFAULT'),
(1, 'website', 'Mind Up'),
(1, 'copyright', 'Copyright 2015 mind-up'),
(1, 'alt-logo', '[image for the logo]'),
(1, 'alt-twitter', 'DEFAULT'),
(1, 'alt-facebook', 'DEFAULT'),
(1, 'alt-google', 'DEFAULT'),
(1, 'a-home', 'Home'),
(1, 'a-login', 'Login'),
(1, 'a-team', 'Team'),

(1, 'a-inscription', 'inscription'),
(1, 'a-manage-members', 'manage-members'),
(1, 'a-profil', 'profil'),
(1, 'a-edit-profil', 'edit-profil'),
(1, 'a-edit-figures', 'edit-figures'),
(1, 'a-edit-projects', 'edit-projects'),
(1, 'a-edit-texts', 'edit-texts'),
(1, 'a-logout', 'logout'),
(1, 'a-project', 'project'),

(1, 'a-projects', 'Projects'),
(1, 'home-h-1-1', 'home-h-1-1'),
(1, 'home-h-2-1', 'home-h-2-1'),
(1, 'home-h-2-2', 'home-h-2-2'),
(1, 'home-h-3-1', 'home-h-3-1'),
(1, 'home-h-3-2', 'home-h-3-2'),
(1, 'home-p-1', 'home-p-1'),
(1, 'home-p-2', 'home-p-2'),
(1, 'home-p-3', 'home-p-3'),
(1, 'home-p-4', 'home-p-4'),
(1, 'home-p-5', 'home-p-5'),
(1, 'home-p-6', 'home-p-6'),
(1, 'home-p-7', 'home-p-7'),
(1, 'home-p-8', 'home-p-8'),
(1, 'rights-browseBackOffice', 'browseBackOffice'),
(1, 'rights-editSelfInfos', 'editSelfInfos'),
(1, 'rights-readOtherInfos', 'readOtherInfos'),
(1, 'rights-manageProject', 'manageProject'),
(1, 'rights-editFigures', 'editFigures'),
(1, 'rights-editOtherInfos', 'editOtherInfos'),
(1, 'rights-editPublicTexts', 'editPublicTexts'),
(1, 'rights-managePositions', 'managePositions'),
(1, 'rights-manageMembers', 'manageMembers'),
(1, 'admin', 'Administrateur'),
(1, 'guest', 'guest'),
(1, 'project-manager', 'Chargé d\'affaires'),
(1, 'member', 'member'),
(1, 'president', 'Président'),
(0, 'user-1-description','Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? [33] At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat'),
(0, 'project-1-title', 'Projet 1'),
(0, 'project-1-description', 'Le rojet 1 blablabla ... '),
(0, 'project-2-title', 'Projet 2'),
(0, 'project-2-description', 'Le rojet 2 blablabla ... '),
(0, 'project-3-title', 'Projet 3'),
(0, 'project-3-description', 'Le rojet 3 blablabla ... ')
;



--
-- Indexes for dumped tables
--

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
 ADD PRIMARY KEY (`textId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `texts`
--
/*ALTER TABLE `texts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;*/
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
