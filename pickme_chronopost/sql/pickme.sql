CREATE TABLE IF NOT EXISTS `PREFIX_pickme_shop_orders` (
  `id_order` int(10) unsigned NOT NULL,
  `id_pickme_shop` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `PREFIX_pickme_shops` (
  `id_pickme_shop` int(10) unsigned NOT NULL auto_increment,
  `pickme_id` varchar(30) NULL,
  `name` varchar(255) NULL,
  `address` varchar(1000) NULL,
  `location` varchar(400) NULL,
  `postal_code` varchar(20) NULL,
  PRIMARY KEY  (`id_pickme_shop`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
