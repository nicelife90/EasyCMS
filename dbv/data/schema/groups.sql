CREATE TABLE `groups` (
  `group_id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID du groupe',
  `group` varchar(35) NOT NULL COMMENT 'Nom du groupe',
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Définition des groupe pour le CMS'