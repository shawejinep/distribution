<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_account`;");
E_C("CREATE TABLE `ecs_user_account` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `admin_user` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `add_time` int(10) NOT NULL DEFAULT '0',
  `paid_time` int(10) NOT NULL DEFAULT '0',
  `admin_note` varchar(255) NOT NULL,
  `user_note` varchar(255) NOT NULL,
  `process_type` tinyint(1) NOT NULL DEFAULT '0',
  `payment` varchar(90) NOT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `is_paid` (`is_paid`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_account` values('1','381','','111.00','1428803144','0','','11','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('2','381','','111.00','1428803169','0','','11','0','支付宝','0');");
E_D("replace into `ecs_user_account` values('4','3623','','0.01','1432345864','0','','吕河','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('5','164','','-1.00','1432468131','0','','真实姓名:【】开户行:【】银行账户:【】手机:【】留言:【1】','1','','0');");
E_D("replace into `ecs_user_account` values('6','164','','-20.00','1432843366','0','','真实姓名:【】开户行:【】银行账户:【】手机:【】留言:【111】','1','','0');");
E_D("replace into `ecs_user_account` values('7','4396','','1.00','1448675471','0','','1','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('8','4671','','50.00','1449388105','0','','杨芷','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('9','4671','','50.00','1449388106','0','','杨芷','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('10','4671','','50.00','1449388182','0','','2649100313@qq.com','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('11','4671','','50.00','1449388203','0','','杨芷2649100313@qq.com','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('12','4671','','50.00','1449388211','0','','2649100313@qq.com','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('13','4699','','11.00','1449620732','0','','gd','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('14','4906','','0.10','1450919911','0','','呵呵','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('15','4906','','0.10','1450919920','0','','呵呵','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('16','4906','','0.10','1450919924','0','','呵呵','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('17','4264','','50.00','1451500535','0','','888','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('18','4309','','100.00','1451703423','0','','哈哈我','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('19','4368','','0.01','1452019274','0','','试试','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('20','4611','','0.10','1453339920','0','','记录','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('21','4624','','122.00','1453450303','0','','eeeeee','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('22','4776','','50.00','1454057284','0','','gh','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('23','4776','','50.00','1454057289','0','','gh','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('24','4819','','100.00','1454313717','0','','1','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('26','4939','','0.01','1455825720','0','','r','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('27','4218','','500.00','1456563338','0','','理','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('28','4218','','500.00','1456563345','0','','理','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('29','4218','','500.00','1456563350','0','','理','0','微信支付','0');");
E_D("replace into `ecs_user_account` values('30','5100','','1.00','1456938840','0','','11','0','微信支付','0');");

require("../../inc/footer.php");
?>