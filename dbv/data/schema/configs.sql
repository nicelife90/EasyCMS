CREATE TABLE `configs` (
  `param` varchar(40) NOT NULL COMMENT 'Nom du paramètre',
  `value` varchar(250) NOT NULL COMMENT 'Valeur du paramètre',
  PRIMARY KEY (`param`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='version du CMS'