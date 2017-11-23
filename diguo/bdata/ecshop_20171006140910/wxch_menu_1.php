<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_menu`;");
E_C("CREATE TABLE `wxch_menu` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `menu_type` varchar(6) NOT NULL,
  `level` int(1) NOT NULL,
  `name` varchar(30) NOT NULL,
  `value` varchar(250) NOT NULL,
  `aid` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_menu` values('1','click','1','购物商城','','0');");
E_D("replace into `wxch_menu` values('2','click','1','我的地盘','','0');");
E_D("replace into `wxch_menu` values('3','click','1','活动中心','','0');");
E_D("replace into `wxch_menu` values('4','view','2','商城首页','http://shop.ciyin.cc/mobile/','1');");
E_D("replace into `wxch_menu` values('5','view','2','','','1');");
E_D("replace into `wxch_menu` values('6','view','2','拼团','http://shop.ciyin.cc/mobile/pintuan.php','1');");
E_D("replace into `wxch_menu` values('7','view','2','','','1');");
E_D("replace into `wxch_menu` values('8','click','2','','','1');");
E_D("replace into `wxch_menu` values('9','view','2','分销中心','http://shop.ciyin.cc/mobile/distribute.php','2');");
E_D("replace into `wxch_menu` values('10','click','2','','','2');");
E_D("replace into `wxch_menu` values('11','click','2','','','2');");
E_D("replace into `wxch_menu` values('12','view','2','用户中心','http://shop.ciyin.cc/mobile/user.php','2');");
E_D("replace into `wxch_menu` values('13','click','2','','','2');");
E_D("replace into `wxch_menu` values('14','click','2','','','3');");
E_D("replace into `wxch_menu` values('15','view','2','砍价','http://shop.ciyin.cc/mobile/cut.php','3');");
E_D("replace into `wxch_menu` values('16','click','2','大转盘','dzp','3');");
E_D("replace into `wxch_menu` values('17','click','2','砸金蛋','zjd','3');");
E_D("replace into `wxch_menu` values('18','click','2','签到','qiandao','3');");

require("../../inc/footer.php");
?>