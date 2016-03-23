SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `project_techno`;
CREATE TABLE IF NOT EXISTS `project_techno` (
`id` int(11) NOT NULL,
  `projectId` varchar(255) NOT NULL,
  `technoId` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;


INSERT INTO `project_techno` (`id`, `projectId`, `technoId`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4);


ALTER TABLE `project_techno`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `project_techno`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;

