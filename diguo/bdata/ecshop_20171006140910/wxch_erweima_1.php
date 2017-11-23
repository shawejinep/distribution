<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_erweima`;");
E_C("CREATE TABLE `wxch_erweima` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `hearimg_width` int(10) NOT NULL,
  `hearimg_hight` int(10) NOT NULL,
  `qr_width` int(10) NOT NULL,
  `qr_hight` int(10) NOT NULL,
  `bg_img` varchar(50) DEFAULT NULL COMMENT '背景图片',
  `hearimg_x` int(10) NOT NULL,
  `hearimg_y` int(10) NOT NULL,
  `qr_x` int(10) NOT NULL,
  `qr_y` int(10) NOT NULL,
  `text_red` int(10) NOT NULL,
  `text_geren` int(10) NOT NULL,
  `text_blue` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_erweima` values('1','60','60','200','200','data/qrcode/1454288584458508665.jpg','70','30','165','392','255','0','0');");

require("../../inc/footer.php");
?>