<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_log`;");
E_C("CREATE TABLE `ecs_admin_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `log_info` varchar(255) NOT NULL DEFAULT '',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`log_id`),
  KEY `log_time` (`log_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=187 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_log` values('130','1434188949','1','编辑权限管理: xiaojun','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('131','1434190810','1','编辑权限管理: xiaojun','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('132','1434326444','1','编辑权限管理: xiaojun','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('133','1434326578','1','编辑权限管理: xiaojun','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('134','1434327021','1','编辑权限管理: xiaojun','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('135','1434327143','1','编辑权限管理: xiaojun','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('136','1435827986','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('137','1435829365','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('138','1439793064','1','添加商品: 111111','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('139','1440670941','1','添加属性: 颜色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('140','1440670956','1','编辑商品: 111111','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('141','1440673798','1','编辑会员等级: 注册用户','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('142','1443948282','1','编辑权限管理: xiaojun','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('143','1443948440','1','编辑权限管理: xiaojun','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('144','1444031951','1','编辑权限管理: xiaojun','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('145','1444036026','1','编辑权限管理: xiaojun','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('146','1444687052','1','编辑会员等级: vip','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('147','1444688165','1','添加拍卖活动: 测试拍卖','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('148','1444688338','1','编辑拍卖活动: 测试拍卖','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('149','1444689716','1','编辑商品: 111111','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('150','1447234054','1','编辑会员账号: 11111111','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('151','1447236017','1','编辑会员账号: 111111','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('152','1447417961','1','编辑广告: 3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('153','1447417975','1','编辑广告: 2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('154','1447417986','1','编辑广告: 1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('155','1447424318','1','编辑商品: 兰芝多效四合一泡沫洗面奶180ml','218.14.142.60');");
E_D("replace into `ecs_admin_log` values('156','1447426865','1','编辑商店设置: ','218.14.142.60');");
E_D("replace into `ecs_admin_log` values('157','1447426880','1','编辑商店设置: ','218.14.142.60');");
E_D("replace into `ecs_admin_log` values('158','1447478724','1','编辑商店设置: ','61.143.19.205');");
E_D("replace into `ecs_admin_log` values('159','1447804348','1','编辑权限管理: admin','61.145.35.250');");
E_D("replace into `ecs_admin_log` values('160','1447804354','1','删除权限管理: tianxin100','61.145.35.250');");
E_D("replace into `ecs_admin_log` values('161','1447804355','1','删除权限管理: xiaojun','61.145.35.250');");
E_D("replace into `ecs_admin_log` values('162','1450078167','1','编辑支付方式: 微信支付','113.250.36.210');");
E_D("replace into `ecs_admin_log` values('163','1451178564','4','编辑前台语言项: ','218.88.23.243');");
E_D("replace into `ecs_admin_log` values('164','1451180116','4','编辑前台语言项: ','218.88.23.243');");
E_D("replace into `ecs_admin_log` values('165','1452403706','1','添加团购商品: 希思黎轻柔护肤西柚柔肤水250ml','121.12.22.87');");
E_D("replace into `ecs_admin_log` values('166','1452550138','1','删除会员账号: tianxin4224','211.103.255.5');");
E_D("replace into `ecs_admin_log` values('167','1453948607','1','添加: 甜心100砍价活动测试','106.38.204.118');");
E_D("replace into `ecs_admin_log` values('168','1456793231','1','删除会员账号: tianxin4469','115.29.142.137');");
E_D("replace into `ecs_admin_log` values('169','1456947276','1','编辑: 甜心100砍价活动测试','115.29.142.137');");
E_D("replace into `ecs_admin_log` values('170','1457032604','1','添加拼团商品: 迪奥红毒女士香水EDT 50ml','115.29.142.137');");
E_D("replace into `ecs_admin_log` values('171','1457032666','1','编辑拼团商品: 迪奥红毒女士香水EDT 50ml[25]','115.29.142.137');");
E_D("replace into `ecs_admin_log` values('172','1458103897','1','删除商品分类: 糕点','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('173','1458103934','1','回收商品: 微信商城分销系统|ecshop分销|商城分销源码|微商城分销|技术支持','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('174','1458152560','1','删除权限管理: xiaojun','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('175','1458152593','1','卸载支付方式: alipay','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('176','1458152599','1','卸载支付方式: alipay1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('177','1458152619','1','卸载支付方式: bank','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('178','1458152624','1','卸载支付方式: balance','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('179','1458154570','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('180','1458154578','1','卸载支付方式: epay95','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('181','1458154596','1','卸载支付方式: upop_wap','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('182','1458154629','1','编辑支付方式: 微信支付','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('183','1479606122','1','删除权限管理: tianxin100','139.205.205.45');");
E_D("replace into `ecs_admin_log` values('184','1479606125','1','删除权限管理: haihui','139.205.205.45');");
E_D("replace into `ecs_admin_log` values('185','1479606168','1','编辑权限管理: admin','139.205.205.45');");
E_D("replace into `ecs_admin_log` values('186','1507241283','1','编辑商店设置: ','139.205.202.49');");

require("../../inc/footer.php");
?>