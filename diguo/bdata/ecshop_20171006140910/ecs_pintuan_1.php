<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_pintuan`;");
E_C("CREATE TABLE `ecs_pintuan` (
  `pt_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_nickname` varchar(200) NOT NULL,
  `user_head` varchar(200) NOT NULL,
  `act_id` mediumint(8) NOT NULL,
  `act_type` tinyint(3) NOT NULL,
  `need_people` int(10) NOT NULL DEFAULT '0',
  `available_people` int(10) unsigned NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  `end_time` int(10) unsigned NOT NULL DEFAULT '0',
  `create_succeed` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0-1-2',
  PRIMARY KEY (`pt_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_pintuan` values('1','4180','小君','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6tMkmiaSrJ0aZ3MYREn3QfoHXg4npKzJrS9K2tib1vQVyJv180JF0hVRMfua5QDdtAOxcJvCCicfwDLyFXRYzAWVvS/0','25','7','500','499','15.00','1457035695','1457122095','0','2');");

require("../../inc/footer.php");
?>