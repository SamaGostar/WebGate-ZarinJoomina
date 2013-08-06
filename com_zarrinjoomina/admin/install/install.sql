DROP  TABLE IF EXISTS #__zarinpal,#__zarinpal_c;
CREATE TABLE IF NOT EXISTS `#__zarinpal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `pro_price` int(11) NOT NULL,
  `pro_l_price` int(11) NOT NULL,
  `pro_des` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `pro_various` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
CREATE TABLE IF NOT EXISTS `#__zarinpal_c` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_number` varchar(36) NOT NULL,
  `per_zarin` int(11) NOT NULL,
  `per_maliat` int(11) NOT NULL,
  `sendprice` int(11) NOT NULL,
  `szarinpalprice` int(11) NOT NULL,
  `smaliatprice` int(11) NOT NULL,
  `ssenprice` int(11) NOT NULL,
  `stotalpris` int(11) NOT NULL,
  `redirect_link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;
INSERT INTO `#__zarinpal_c` (`id`, `acc_number`, `per_zarin`, `per_maliat`, `sendprice`, `szarinpalprice`, `smaliatprice`, `ssenprice`, `stotalpris`, `redirect_link`) VALUES
(1, 'شماره حساب 36  کاراکتری', 0, 0, 0, 0, 0, 0,0, 'http://');

INSERT INTO `#__components` (
`id` ,
`name` ,
`link` ,
`menuid` ,
`parent` ,
`admin_menu_link` ,
`admin_menu_alt` ,
`option` ,
`ordering` ,
`admin_menu_img` ,
`iscore` ,
`params` ,
`enabled`
)
VALUES (
1000 , 'zarinjoomina', 'option=com_zarinjoomina', '0', '0', 'option=com_zarinjoomina', 'zarinjoomina', 'com_zarinjoomina', '0', 'components/com_zarinjoomina/assets/images/com_zarinjoomina.ico', '0', '', '1'
);
INSERT INTO `#__components` (
`id` ,
`name` ,
`link` ,
`menuid` ,
`parent` ,
`admin_menu_link` ,
`admin_menu_alt` ,
`option` ,
`ordering` ,
`admin_menu_img` ,
`iscore` ,
`params` ,
`enabled`
)
VALUES 
(1001, 'تنظیمات', 'option=com_zarinjoomina&controller=config&task=edit&cid[]=1', 0, 1000, 'option=com_zarinjoomina&controller=config&task=edit&cid[]=1', 'زرین جومینا', 'com_zarinjoomina', 0, 'stats', 0, '', 1);