DROP TABLE IF EXISTS `ps_themeconfigurator`;
CREATE TABLE `ps_themeconfigurator` (
  `id_item` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_shop` int(10) unsigned NOT NULL,
  `id_lang` int(10) unsigned NOT NULL,
  `item_order` int(10) unsigned NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `title_use` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `hook` varchar(100) DEFAULT NULL,
  `url` text,
  `target` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `image` varchar(100) DEFAULT NULL,
  `image_w` varchar(10) DEFAULT NULL,
  `image_h` varchar(10) DEFAULT NULL,
  `html` text,
  `active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_item`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

/* Scheme for table ps_themeconfigurator */
INSERT INTO `ps_themeconfigurator` VALUES
('8','1','1','1',NULL,'0','top','index.php?id_category=3&controller=category','0','d9d99006a5a6d6bd032b2be76edf1c72f2ecf127_banner1.png','570','344','<h2>Makeup</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('9','1','2','1',NULL,'0','top','index.php?id_category=3&controller=category','0','4d98d2fba5ed727f75f25b3648caab53dda19651_banner1.png','570','344','<h2>Makeup</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('10','1','3','1',NULL,'0','top','index.php?id_category=3&controller=category','0','cf29ac105f65a12262306f6d0879ca3f55b40f18_banner1.png','570','344','<h2>Makeup</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('11','1','4','1',NULL,'0','top','index.php?id_category=3&controller=category','0','76df93a0cd3e483f473860ebd47fe0ab203ee3ae_banner1.png','570','344','<h2>Makeup</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('12','1','5','1',NULL,'0','top','index.php?id_category=3&controller=category','0','96f4a075a347374fcd333d9d7b0618d0ed29d732_banner1.png','570','344','<h2>Makeup</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('13','1','5','2',NULL,'0','top','index.php?id_category=4&controller=category','0','7b63d515fcc538c37bfb2ce0eddc913d89c17048_banner2.png','570','344','<h2>Perfume</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('14','1','1','2',NULL,'0','top','index.php?id_category=4&controller=category','0','7295098893366d6634d4e94980fc3ef724f4d9f3_banner2.png','570','344','<h2>Perfume</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('15','1','2','2',NULL,'0','top','index.php?id_category=4&controller=category','0','856ba5a8c9655892167ce09a92665445476f56ea_banner2.png','570','344','<h2>Perfume</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('16','1','3','2',NULL,'0','top','index.php?id_category=4&controller=category','0','93d6eac1a33027f693df1348bf85fab49d81f829_banner2.png','570','344','<h2>Perfume</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('17','1','4','2',NULL,'0','top','index.php?id_category=4&controller=category','0','7228fd391bb820ab2350ab0123a9c3ee39eb070b_banner2.png','570','344','<h2>Perfume</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('18','1','5','3',NULL,'0','top','index.php?id_category=5&controller=category','0','ac4055c7ca70ea6e7d26d5b9d4f689e413c67183_banner3.png','570','344','<h2>Must Have</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('19','1','1','3',NULL,'0','top','index.php?id_category=5&controller=category','0','f6f7ff5ec4561a4e183fc28d41f3ea870e27fc6d_banner3.png','570','344','<h2>Must Have</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('20','1','2','3',NULL,'0','top','index.php?id_category=5&controller=category','0','ca805aaeef5175fa9110c20bcc97bdd3bcc5f116_banner3.png','570','344','<h2>Must Have</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('21','1','3','3',NULL,'0','top','index.php?id_category=5&controller=category','0','1c797d2ecfec1b3d4c2b39bd8c9e5b866057e883_banner3.png','570','344','<h2>Must Have</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('22','1','4','3',NULL,'0','top','index.php?id_category=5&controller=category','0','28d53368063592ed88d4995864cec45e6cd429f7_banner3.png','570','344','<h2>Must Have</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('23','1','1','4',NULL,'0','top','index.php?id_category=6&controller=category','0','bbfe73c74ffd3fa4ca11d8dd72ec592bb767ea2d_banner4.png','570','344','<h2>Age Defy</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('24','1','2','4',NULL,'0','top','index.php?id_category=6&controller=category','0','f4a020c1730db40c1bf24cb4005c7fac3e847f97_banner4.png','570','344','<h2>Age Defy</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('25','1','3','4',NULL,'0','top','index.php?id_category=6&controller=category','0','7811c88583af54b7014d7795fcf8a8fa6a6047f3_banner4.png','570','344','<h2>Age Defy</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('26','1','4','4',NULL,'0','top','index.php?id_category=6&controller=category','0','81db173ecbcc390cc558d4f24d194c4e34dec06a_banner4.png','570','344','<h2>Age Defy</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('27','1','5','4',NULL,'0','top','index.php?id_category=6&controller=category','0','358ecf7117919be173f42c15a42363d18accc0cb_banner4.png','570','344','<h2>Age Defy</h2>\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officdsi.</p>','1'),
('28','1','1','1',NULL,'0','home','index.php?id_category=5&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-truck\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1'),
('29','1','2','1',NULL,'0','home','index.php?id_category=5&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-truck\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1'),
('30','1','3','1',NULL,'0','home','index.php?id_category=5&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-truck\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1'),
('31','1','4','1',NULL,'0','home','index.php?id_category=5&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-truck\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1'),
('32','1','5','1',NULL,'0','home','index.php?id_category=5&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-truck\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1'),
('33','1','1','2',NULL,'0','home','index.php?id_category=6&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-credit-card\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1'),
('34','1','2','2',NULL,'0','home','index.php?id_category=6&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-credit-card\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1'),
('35','1','3','2',NULL,'0','home','index.php?id_category=6&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-credit-card\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1'),
('36','1','4','2',NULL,'0','home','index.php?id_category=6&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-credit-card\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1'),
('37','1','5','2',NULL,'0','home','index.php?id_category=6&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-credit-card\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1'),
('38','1','1','3',NULL,'0','home','index.php?id_category=7&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-refresh\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1'),
('39','1','2','3',NULL,'0','home','index.php?id_category=7&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-refresh\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1'),
('40','1','3','3',NULL,'0','home','index.php?id_category=7&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-refresh\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1'),
('41','1','4','3',NULL,'0','home','index.php?id_category=7&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-refresh\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1'),
('42','1','5','3',NULL,'0','home','index.php?id_category=7&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-refresh\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1'),
('43','1','1','4',NULL,'0','home','index.php?id_category=8&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-thumbs-o-up\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1'),
('44','1','2','4',NULL,'0','home','index.php?id_category=8&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-thumbs-o-up\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1'),
('45','1','3','4',NULL,'0','home','index.php?id_category=8&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-thumbs-o-up\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1'),
('47','1','4','4',NULL,'0','home','index.php?id_category=8&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-thumbs-o-up\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1'),
('48','1','5','4',NULL,'0','home','index.php?id_category=8&controller=category','0',NULL,NULL,NULL,'<span class=\"fa fa-thumbs-o-up\"></span>\r\n<h2>Excepteur sint occaecat</h2>\r\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>','1');