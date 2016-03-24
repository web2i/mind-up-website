SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `technology`;
CREATE TABLE IF NOT EXISTS `technology` (
`id` int(11) NOT NULL,
  `pathImg` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;


INSERT INTO `technology` (`id`, `pathImg`) VALUES
(1, 'apple.png'),
(2, 'eclipse.png'),
(3, 'python.png'),
(4, 'trello.png');


ALTER TABLE `technology`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `technology`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;

