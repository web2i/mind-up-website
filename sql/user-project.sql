SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `userProjects`;
CREATE TABLE IF NOT EXISTS `userProjects` (
  `id` int(11) NOT NULL,
  `projectId` int(11) NOT NULL,
  `memberId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `userProjects` (`id`, `projectId`, `memberId`) VALUES
(0, 0, 0),
(1, 1, 1)
;

ALTER TABLE `userProjects`
 ADD PRIMARY KEY (`id`);
 
ALTER TABLE `userProjects`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
