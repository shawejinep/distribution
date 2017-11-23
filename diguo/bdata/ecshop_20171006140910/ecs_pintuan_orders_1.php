<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_pintuan_orders`;");
E_C("CREATE TABLE `ecs_pintuan_orders` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pt_id` int(10) unsigned NOT NULL DEFAULT '0',
  `act_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `act_user` mediumint(8) NOT NULL,
  `follow_user` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `follow_user_nickname` varchar(200) NOT NULL,
  `follow_user_head` varchar(200) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL,
  `follow_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_pintuan_orders` values('1','1','25','4180','4180','小君','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6tMkmiaSrJ0aZ3MYREn3QfoHXg4npKzJrS9K2tib1vQVyJv180JF0hVRMfua5QDdtAOxcJvCCicfwDLyFXRYzAWVvS/0','1261','1457035695');");

require("../../inc/footer.php");
?>