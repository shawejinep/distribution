<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_action`;");
E_C("CREATE TABLE `ecs_order_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_place` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=148 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_action` values('125','998','admin','1','0','0','0','11111','1447234163');");
E_D("replace into `ecs_order_action` values('126','999','admin','1','0','0','0','1111','1447234436');");
E_D("replace into `ecs_order_action` values('127','999','admin','1','0','2','0','222','1447234443');");
E_D("replace into `ecs_order_action` values('128','999','admin','5','5','2','0','','1447234455');");
E_D("replace into `ecs_order_action` values('129','999','admin','1','1','2','1','','1447234455');");
E_D("replace into `ecs_order_action` values('130','1000','admin','1','0','0','0','121212','1447234597');");
E_D("replace into `ecs_order_action` values('131','1000','admin','1','0','2','0','1212','1447234605');");
E_D("replace into `ecs_order_action` values('132','1001','admin','1','0','2','0','2323','1447235771');");
E_D("replace into `ecs_order_action` values('133','1002','admin','1','0','2','0','222','1447235924');");
E_D("replace into `ecs_order_action` values('134','1003','admin','1','0','2','0','1212','1447236086');");
E_D("replace into `ecs_order_action` values('135','999','系统','1','2','2','0','计划任务：定期自动确定收货，订单号：2015111281999，执行状态：成功','1449830394');");
E_D("replace into `ecs_order_action` values('136','1032','buyer','2','0','0','0','用户取消','1450945385');");
E_D("replace into `ecs_order_action` values('137','1120','buyer','2','0','0','0','用户取消','1452214486');");
E_D("replace into `ecs_order_action` values('138','1128','buyer','2','0','0','0','用户取消','1452639685');");
E_D("replace into `ecs_order_action` values('139','1156','buyer','2','0','0','0','用户取消','1453539459');");
E_D("replace into `ecs_order_action` values('140','1117','buyer','2','0','0','0','用户取消','1453539466');");
E_D("replace into `ecs_order_action` values('141','1164','buyer','2','0','0','0','用户取消','1454046660');");
E_D("replace into `ecs_order_action` values('142','1198','buyer','2','0','0','0','用户取消','1455844285');");
E_D("replace into `ecs_order_action` values('143','1202','buyer','2','0','0','0','用户取消','1455844288');");
E_D("replace into `ecs_order_action` values('144','1203','buyer','2','0','0','0','用户取消','1455844292');");
E_D("replace into `ecs_order_action` values('145','1197','buyer','2','0','0','0','用户取消','1455844296');");
E_D("replace into `ecs_order_action` values('146','1224','buyer','2','0','0','0','用户取消','1456506122');");
E_D("replace into `ecs_order_action` values('147','1254','buyer','2','0','0','0','用户取消','1456938072');");

require("../../inc/footer.php");
?>