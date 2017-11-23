<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_order`;");
E_C("CREATE TABLE `wxch_order` (
  `id` tinyint(1) NOT NULL,
  `order_name` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `autoload` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `wxch_order` values('1','order','发货提醒','images/201511/1447426820185580052.jpg','<p>&nbsp;ffffff</p>','yes');");
E_D("replace into `wxch_order` values('2','reorder','订单确认提醒','images/201511/1447426803758289168.jpg','fff','yes');");
E_D("replace into `wxch_order` values('3','pay','成功支付','images/201511/1447426810770159793.jpg','已经成功支付','yes');");
E_D("replace into `wxch_order` values('4','tuijian_reply','发展会员关注提醒','','','yes');");
E_D("replace into `wxch_order` values('6','share_danpin','分享单品缩略图设置','images/201511/1447426780839140493.jpg','','');");
E_D("replace into `wxch_order` values('5','share_shouye','分享首页缩略图设置','images/201511/1447426792261746203.jpg','','');");
E_D("replace into `wxch_order` values('7','remind','下单通知管理员','images/201603/1456792240059619400.jpg','tianxin4246','no');");

require("../../inc/footer.php");
?>