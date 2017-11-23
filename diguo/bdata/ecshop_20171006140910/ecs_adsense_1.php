<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_adsense`;");
E_C("CREATE TABLE `ecs_adsense` (
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `clicks` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `from_ad` (`from_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_adsense` values('1','本站','662');");
E_D("replace into `ecs_adsense` values('24','本站','785');");
E_D("replace into `ecs_adsense` values('30','本站','83');");
E_D("replace into `ecs_adsense` values('29','本站','9');");
E_D("replace into `ecs_adsense` values('28','本站','95');");
E_D("replace into `ecs_adsense` values('25','本站','222');");
E_D("replace into `ecs_adsense` values('3','本站','498');");
E_D("replace into `ecs_adsense` values('2','本站','559');");
E_D("replace into `ecs_adsense` values('27','本站','90');");
E_D("replace into `ecs_adsense` values('3','singlemessage','2');");
E_D("replace into `ecs_adsense` values('0','本站','105');");
E_D("replace into `ecs_adsense` values('16633','本站','1');");
E_D("replace into `ecs_adsense` values('32767','本站','1');");
E_D("replace into `ecs_adsense` values('32767','本站','1');");
E_D("replace into `ecs_adsense` values('26','本站','130');");
E_D("replace into `ecs_adsense` values('41','本站','50');");
E_D("replace into `ecs_adsense` values('54','本站','88');");
E_D("replace into `ecs_adsense` values('55','本站','55');");
E_D("replace into `ecs_adsense` values('52','本站','49');");
E_D("replace into `ecs_adsense` values('40','本站','59');");
E_D("replace into `ecs_adsense` values('39','本站','41');");
E_D("replace into `ecs_adsense` values('56','本站','44');");
E_D("replace into `ecs_adsense` values('32767','本站','1');");
E_D("replace into `ecs_adsense` values('4','本站','9');");
E_D("replace into `ecs_adsense` values('12','本站','1');");
E_D("replace into `ecs_adsense` values('62','本站','1');");
E_D("replace into `ecs_adsense` values('19','本站','3');");
E_D("replace into `ecs_adsense` values('32767','本站','1');");
E_D("replace into `ecs_adsense` values('17','本站','1');");
E_D("replace into `ecs_adsense` values('5','本站','1');");

require("../../inc/footer.php");
?>