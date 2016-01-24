CREATE TABLE `sidebar` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'UID de l''items',
  `title_fr` varchar(50) NOT NULL COMMENT 'Titre francais',
  `content_fr` mediumtext NOT NULL COMMENT 'Contenu francais',
  `title_en` varchar(50) NOT NULL COMMENT 'Titre abglais',
  `content_en` mediumtext NOT NULL COMMENT 'Contenu anglais',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table contenant les items de la side bar'