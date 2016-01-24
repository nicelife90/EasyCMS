CREATE TABLE `movies` (
  `id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'UID de la vidéo',
  `title` varchar(250) NOT NULL COMMENT 'Titre de la vidéo',
  `section` int(2) NOT NULL COMMENT 'Section de la rubrique d''aide',
  `link` varchar(50) NOT NULL COMMENT 'Lien de la vidéo',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table contenant les vidéo de formations'