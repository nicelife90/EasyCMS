CREATE TABLE `slider` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'UID de l''items',
  `path` varchar(250) NOT NULL COMMENT 'chemin vers l''image',
  `text_fr` varchar(250) NOT NULL COMMENT 'Texte francais',
  `text_en` varchar(250) NOT NULL COMMENT 'Texte anglais',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table contenant les images du slider'