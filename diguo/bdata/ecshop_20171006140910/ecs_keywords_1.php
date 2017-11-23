<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keywords`;");
E_C("CREATE TABLE `ecs_keywords` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `keyword` varchar(90) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keywords` values('2015-11-14','ecshop','请输入关键词','3');");
E_D("replace into `ecs_keywords` values('2015-11-14','ecshop','1111111','1');");
E_D("replace into `ecs_keywords` values('2015-11-14','ecshop','奶粉','1');");
E_D("replace into `ecs_keywords` values('2015-11-15','ecshop','女','5');");
E_D("replace into `ecs_keywords` values('2015-11-17','ecshop','油','1');");
E_D("replace into `ecs_keywords` values('2015-11-17','ecshop','洁','1');");
E_D("replace into `ecs_keywords` values('2015-11-17','ecshop','乐优双宝','3');");
E_D("replace into `ecs_keywords` values('2015-11-17','ecshop','蜜蜡','2');");
E_D("replace into `ecs_keywords` values('2015-11-19','ecshop','衣服','1');");
E_D("replace into `ecs_keywords` values('2015-11-19','ecshop','88888','2');");
E_D("replace into `ecs_keywords` values('2015-11-19','ecshop','羽绒服','1');");
E_D("replace into `ecs_keywords` values('2015-11-20','ecshop','我的上级是','1');");
E_D("replace into `ecs_keywords` values('2015-11-20','ecshop','在','1');");
E_D("replace into `ecs_keywords` values('2015-11-21','ecshop','迪奥','3');");
E_D("replace into `ecs_keywords` values('2015-11-23','ecshop','边','2');");
E_D("replace into `ecs_keywords` values('2015-11-25','ecshop','测试','2');");
E_D("replace into `ecs_keywords` values('2015-11-25','ecshop','搜索','3');");
E_D("replace into `ecs_keywords` values('2015-11-25','ecshop','马','2');");
E_D("replace into `ecs_keywords` values('2015-11-25','ecshop','蜜蜡','2');");
E_D("replace into `ecs_keywords` values('2015-11-25','ecshop','','1');");
E_D("replace into `ecs_keywords` values('2015-11-25','ecshop','��??��??','1');");
E_D("replace into `ecs_keywords` values('2015-11-27','ecshop','你好','3');");
E_D("replace into `ecs_keywords` values('2015-11-27','ecshop','手机搜索','1');");
E_D("replace into `ecs_keywords` values('2015-11-28','ecshop','CS','1');");
E_D("replace into `ecs_keywords` values('2015-11-28','ecshop','用一次就坏了','3');");
E_D("replace into `ecs_keywords` values('2015-11-29','ecshop','电脑','3');");
E_D("replace into `ecs_keywords` values('2015-12-01','ecshop','乐优双宝','1');");
E_D("replace into `ecs_keywords` values('2015-12-02','ecshop','乐优双宝','11');");
E_D("replace into `ecs_keywords` values('2015-12-02','ecshop','乐优双宝电子课本','1');");
E_D("replace into `ecs_keywords` values('2015-12-03','ecshop','汇峰','1');");
E_D("replace into `ecs_keywords` values('2015-12-04','ecshop','我买了你们产品登入密码登不上去怎么办','4');");
E_D("replace into `ecs_keywords` values('2015-12-06','ecshop','数学','1');");
E_D("replace into `ecs_keywords` values('2015-12-06','ecshop','花千骨','1');");
E_D("replace into `ecs_keywords` values('2015-12-06','ecshop','50','1');");
E_D("replace into `ecs_keywords` values('2015-12-06','ecshop','50元','1');");
E_D("replace into `ecs_keywords` values('2015-12-07','ecshop','50','3');");
E_D("replace into `ecs_keywords` values('2015-12-07','ecshop','触爱cici','1');");
E_D("replace into `ecs_keywords` values('2015-12-10','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2015-12-10','ecshop','婴儿蚕丝面膜','3');");
E_D("replace into `ecs_keywords` values('2015-12-13','ecshop','熹妃传','7');");
E_D("replace into `ecs_keywords` values('2015-12-22','ecshop','欧米茄3','1');");
E_D("replace into `ecs_keywords` values('2015-12-23','ecshop','球鞋','1');");
E_D("replace into `ecs_keywords` values('2015-12-23','ecshop','金币','1');");
E_D("replace into `ecs_keywords` values('2015-12-23','ecshop','测试','1');");
E_D("replace into `ecs_keywords` values('2015-12-28','ecshop','九朵云（Cloud9）马油膏7','1');");
E_D("replace into `ecs_keywords` values('2015-12-29','ecshop','红酒','1');");
E_D("replace into `ecs_keywords` values('2016-01-02','ecshop','111','1');");
E_D("replace into `ecs_keywords` values('2016-01-02','ecshop','生','1');");
E_D("replace into `ecs_keywords` values('2016-01-02','ecshop','痒','1');");
E_D("replace into `ecs_keywords` values('2016-01-05','ecshop','坏了维修怎么维修','1');");
E_D("replace into `ecs_keywords` values('2016-01-09','ecshop','卸妆','1');");
E_D("replace into `ecs_keywords` values('2016-01-12','ecshop','游戏','2');");
E_D("replace into `ecs_keywords` values('2016-01-12','ecshop','英雄联盟','1');");
E_D("replace into `ecs_keywords` values('2016-01-12','ecshop','你好，在吗？','1');");
E_D("replace into `ecs_keywords` values('2016-01-13','ecshop','88888','17');");
E_D("replace into `ecs_keywords` values('2016-01-14','ecshop','七夕','3');");
E_D("replace into `ecs_keywords` values('2016-01-14','ecshop','糕点','1');");
E_D("replace into `ecs_keywords` values('2016-01-15','ecshop','开心大萝卜','1');");
E_D("replace into `ecs_keywords` values('2016-01-15','ecshop','开心大','1');");
E_D("replace into `ecs_keywords` values('2016-01-17','ecshop','果皂','1');");
E_D("replace into `ecs_keywords` values('2016-01-18','ecshop','衣','1');");
E_D("replace into `ecs_keywords` values('2016-01-21','ecshop','乐优双宝','3');");
E_D("replace into `ecs_keywords` values('2016-01-21','ecshop','怎么下在当地书本','1');");
E_D("replace into `ecs_keywords` values('2016-01-23','ecshop','密码','1');");
E_D("replace into `ecs_keywords` values('2016-01-23','ecshop','眼霜','1');");
E_D("replace into `ecs_keywords` values('2016-01-25','ecshop','奶粉','1');");
E_D("replace into `ecs_keywords` values('2016-01-27','ecshop','泊泉雅','1');");
E_D("replace into `ecs_keywords` values('2016-01-28','ecshop','1在','1');");
E_D("replace into `ecs_keywords` values('2016-01-28','ecshop','一','1');");
E_D("replace into `ecs_keywords` values('2016-01-28','ecshop','请输入关键词','1');");
E_D("replace into `ecs_keywords` values('2016-01-29','ecshop','华为p8max','3');");
E_D("replace into `ecs_keywords` values('2016-01-29','ecshop','地方纷纷大幅的股份','1');");
E_D("replace into `ecs_keywords` values('2016-02-01','ecshop','密码错误','1');");
E_D("replace into `ecs_keywords` values('2016-02-02','ecshop','蛋白粉','1');");
E_D("replace into `ecs_keywords` values('2016-02-02','ecshop','钱麦','1');");
E_D("replace into `ecs_keywords` values('2016-02-02','ecshop','pos','1');");
E_D("replace into `ecs_keywords` values('2016-02-02','ecshop','水','1');");
E_D("replace into `ecs_keywords` values('2016-02-03','ecshop','香水','1');");
E_D("replace into `ecs_keywords` values('2016-02-03','ecshop','bb','1');");
E_D("replace into `ecs_keywords` values('2016-02-04','ecshop','','2');");
E_D("replace into `ecs_keywords` values('2016-02-04','ecshop','请输入关键词','2');");
E_D("replace into `ecs_keywords` values('2016-02-15','ecshop','林夕梦','1');");
E_D("replace into `ecs_keywords` values('2016-02-18','ecshop','乐优双宝','2');");
E_D("replace into `ecs_keywords` values('2016-02-20','ecshop','双优乐宝','2');");
E_D("replace into `ecs_keywords` values('2016-02-20','ecshop','迪奥','8');");
E_D("replace into `ecs_keywords` values('2016-02-20','ecshop','N','4');");
E_D("replace into `ecs_keywords` values('2016-02-20','ecshop','次芳','1');");
E_D("replace into `ecs_keywords` values('2016-02-20','ecshop','次','1');");
E_D("replace into `ecs_keywords` values('2016-02-20','ecshop','牛栏','1');");
E_D("replace into `ecs_keywords` values('2016-02-20','ecshop','牛','1');");
E_D("replace into `ecs_keywords` values('2016-02-20','ecshop','糕点','3');");
E_D("replace into `ecs_keywords` values('2016-02-20','ecshop','叶酸','1');");
E_D("replace into `ecs_keywords` values('2016-02-23','ecshop','N','1');");
E_D("replace into `ecs_keywords` values('2016-02-25','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2016-02-25','ecshop','珠利莱','1');");
E_D("replace into `ecs_keywords` values('2016-02-29','ecshop','测试','2');");
E_D("replace into `ecs_keywords` values('2016-03-05','ecshop','科教频道','1');");

require("../../inc/footer.php");
?>