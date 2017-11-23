<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_activity`;");
E_C("CREATE TABLE `ecs_goods_activity` (
  `act_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `act_name` varchar(255) NOT NULL,
  `act_desc` text NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `is_finished` tinyint(3) unsigned NOT NULL,
  `ext_info` text NOT NULL,
  PRIMARY KEY (`act_id`),
  KEY `act_name` (`act_name`,`act_type`,`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_activity` values('22','测试拍卖','甜心100测试拍卖','2','164','0','111111','1444118400','1444982400','0','a:5:{s:7:\"deposit\";d:5;s:11:\"start_price\";d:2;s:9:\"end_price\";d:6666;s:9:\"amplitude\";d:5;s:6:\"no_top\";i:0;}');");
E_D("replace into `ecs_goods_activity` values('23','希思黎轻柔护肤西柚柔肤水250ml','','1','1','0','希思黎轻柔护肤西柚柔肤水250ml','1452326400','1452672000','0','a:4:{s:12:\"price_ladder\";a:2:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:2;}i:1;a:2:{s:6:\"amount\";i:2;s:5:\"price\";d:1;}}s:15:\"restrict_amount\";i:10;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:1;}');");
E_D("replace into `ecs_goods_activity` values('24','甜心100砍价活动测试','甜心100砍价活动演示甜心100砍价活动演示甜心100砍价活动演示甜心100砍价活动演示','5','5','0','索爱原装M2卡读卡器','1453862100','1488191700','0','a:9:{s:11:\"start_price\";s:4:\"1.00\";s:9:\"end_price\";s:4:\"5.00\";s:9:\"max_price\";i:0;s:11:\"cost_points\";i:0;s:9:\"showlimit\";s:1:\"0\";s:7:\"needreg\";s:1:\"0\";s:12:\"orders_limit\";i:0;s:11:\"share_title\";s:27:\"甜心100砍价活动演示\";s:11:\"share_brief\";s:27:\"甜心100砍价活动演示\";}');");
E_D("replace into `ecs_goods_activity` values('25','品团活动测试','甜心100拼团测试甜心100拼团测试甜心100拼团测试甜心100拼团测试甜心100拼团测试甜心100拼团测试甜心100拼团测试甜心100拼团测试甜心100拼团测试甜心100拼团测试','7','123','0','迪奥红毒女士香水EDT 50ml','1456992000','1489478400','0','a:18:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:500;s:5:\"price\";d:15;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:10:\"single_buy\";s:1:\"1\";s:16:\"single_buy_price\";d:0;s:12:\"market_price\";d:0;s:8:\"discount\";d:3.5;s:12:\"virtual_sold\";i:1000;s:10:\"time_limit\";d:24;s:10:\"open_limit\";d:0;s:13:\"choose_number\";s:1:\"1\";s:13:\"notify_header\";N;s:10:\"need_login\";s:1:\"1\";s:10:\"qrcode_img\";N;s:11:\"share_title\";s:21:\"甜心100拼团测试\";s:11:\"share_brief\";s:21:\"甜心100拼团测试\";s:9:\"share_img\";s:0:\"\";s:7:\"deposit\";d:0;}');");

require("../../inc/footer.php");
?>