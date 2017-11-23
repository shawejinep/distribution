<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_prize_append`;");
E_C("CREATE TABLE `wxch_prize_append` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `prize_id` int(4) unsigned NOT NULL,
  `prize_name` varchar(64) NOT NULL,
  `prize_value` int(8) unsigned NOT NULL,
  `prize_number` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_prize_append` values('19','3','1','2','1');");
E_D("replace into `wxch_prize_append` values('20','3','','0','0');");
E_D("replace into `wxch_prize_append` values('21','3','','0','0');");
E_D("replace into `wxch_prize_append` values('22','3','','0','0');");
E_D("replace into `wxch_prize_append` values('23','3','','0','0');");
E_D("replace into `wxch_prize_append` values('24','3','','0','0');");

require("../../inc/footer.php");
?>