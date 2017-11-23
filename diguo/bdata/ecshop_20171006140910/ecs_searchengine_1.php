<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_searchengine`;");
E_C("CREATE TABLE `ecs_searchengine` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_searchengine` values('2014-06-24','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-01-25','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-01-26','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-02-01','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-02-03','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2015-02-04','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-02-05','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-05','GOOGLE','90');");
E_D("replace into `ecs_searchengine` values('2015-02-06','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-06','GOOGLE','821');");
E_D("replace into `ecs_searchengine` values('2015-02-07','GOOGLE','936');");
E_D("replace into `ecs_searchengine` values('2015-02-08','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-02-08','GOOGLE','1207');");
E_D("replace into `ecs_searchengine` values('2015-02-09','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-09','GOOGLE','1635');");
E_D("replace into `ecs_searchengine` values('2015-02-18','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-02-18','GOOGLE','7');");
E_D("replace into `ecs_searchengine` values('2015-02-19','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-02-20','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-20','GOOGLE','4');");
E_D("replace into `ecs_searchengine` values('2015-02-21','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-02-21','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-22','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-22','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-02-22','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-23','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-02-23','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-02-23','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-24','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-24','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2015-02-24','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-25','GOOGLE','7');");
E_D("replace into `ecs_searchengine` values('2015-02-25','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-26','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2015-02-26','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-27','GOOGLE','4');");
E_D("replace into `ecs_searchengine` values('2015-02-27','GOOGLE ADSENSE','1');");
E_D("replace into `ecs_searchengine` values('2015-02-27','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-28','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-28','GOOGLE','28');");
E_D("replace into `ecs_searchengine` values('2015-02-28','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-01','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-01','GOOGLE','13');");
E_D("replace into `ecs_searchengine` values('2015-03-01','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-02','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-03-02','GOOGLE','7');");
E_D("replace into `ecs_searchengine` values('2015-03-03','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-03','GOOGLE','19');");
E_D("replace into `ecs_searchengine` values('2015-03-04','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-04','GOOGLE','22');");
E_D("replace into `ecs_searchengine` values('2015-03-05','GOOGLE','10');");
E_D("replace into `ecs_searchengine` values('2015-03-06','GOOGLE','17');");
E_D("replace into `ecs_searchengine` values('2015-03-07','GOOGLE','7');");
E_D("replace into `ecs_searchengine` values('2015-03-08','BAIDU','21');");
E_D("replace into `ecs_searchengine` values('2015-03-08','GOOGLE','11');");
E_D("replace into `ecs_searchengine` values('2015-03-09','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-03-11','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-11','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-03-12','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-03-12','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-03-13','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-13','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-03-14','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-03-14','GOOGLE','13');");
E_D("replace into `ecs_searchengine` values('2015-03-15','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-15','GOOGLE','68');");
E_D("replace into `ecs_searchengine` values('2015-03-16','GOOGLE','19');");
E_D("replace into `ecs_searchengine` values('2015-03-17','GOOGLE','4');");
E_D("replace into `ecs_searchengine` values('2015-03-18','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-18','GOOGLE','51');");
E_D("replace into `ecs_searchengine` values('2015-03-19','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-19','GOOGLE','33');");
E_D("replace into `ecs_searchengine` values('2015-03-20','GOOGLE','8');");
E_D("replace into `ecs_searchengine` values('2015-03-21','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-21','GOOGLE','124');");
E_D("replace into `ecs_searchengine` values('2015-03-22','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-22','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2015-03-24','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-25','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-03-26','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-26','GOOGLE','21');");
E_D("replace into `ecs_searchengine` values('2015-03-27','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-03-27','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-03-28','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-28','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-03-29','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-29','GOOGLE','32');");
E_D("replace into `ecs_searchengine` values('2015-03-30','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-30','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2015-03-31','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-31','GOOGLE','20');");
E_D("replace into `ecs_searchengine` values('2015-04-01','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-04-01','GOOGLE','9');");
E_D("replace into `ecs_searchengine` values('2015-04-02','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-04-03','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-04-03','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2015-04-04','GOOGLE','9');");
E_D("replace into `ecs_searchengine` values('2015-04-04','GOOGLE ADSENSE','1');");
E_D("replace into `ecs_searchengine` values('2015-04-05','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-04-06','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-06','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2015-04-07','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2015-04-08','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-04-08','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-04-09','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-09','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-04-09','GOOGLE ADSENSE','1');");
E_D("replace into `ecs_searchengine` values('2015-04-10','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-04-10','MSN','1');");
E_D("replace into `ecs_searchengine` values('2015-04-11','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-11','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2015-04-11','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2015-04-12','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-04-13','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2015-04-13','GOOGLE ADSENSE','1');");
E_D("replace into `ecs_searchengine` values('2015-04-13','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-14','GOOGLE','8');");
E_D("replace into `ecs_searchengine` values('2015-04-15','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-04-15','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-04-15','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-16','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-16','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2015-04-16','GOOGLE ADSENSE','1');");
E_D("replace into `ecs_searchengine` values('2015-04-17','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-04-18','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2015-04-19','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-04-19','GOOGLE','8');");
E_D("replace into `ecs_searchengine` values('2015-04-20','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-20','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2015-04-20','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-21','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-04-21','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-04-22','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-04-22','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-04-23','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-23','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2015-04-24','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-24','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-04-25','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-25','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-04-26','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-26','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-27','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-27','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2015-04-28','GOOGLE','7');");
E_D("replace into `ecs_searchengine` values('2015-04-29','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-29','GOOGLE','4');");
E_D("replace into `ecs_searchengine` values('2015-04-30','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-30','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2015-05-01','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-05-01','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-02','GOOGLE','4');");
E_D("replace into `ecs_searchengine` values('2015-05-03','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-04','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-04','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2015-05-04','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-05','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-05','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2015-05-06','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-06','GOOGLE','8');");
E_D("replace into `ecs_searchengine` values('2015-05-07','GOOGLE','11');");
E_D("replace into `ecs_searchengine` values('2015-05-08','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-08','GOOGLE','13');");
E_D("replace into `ecs_searchengine` values('2015-05-08','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-09','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-09','GOOGLE','28');");
E_D("replace into `ecs_searchengine` values('2015-05-09','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-10','BAIDU','3');");
E_D("replace into `ecs_searchengine` values('2015-05-10','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-11','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-11','GOOGLE','4');");
E_D("replace into `ecs_searchengine` values('2015-05-11','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-12','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-05-12','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-05-12','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-13','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-13','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-05-14','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-14','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-05-15','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-15','GOOGLE','7');");
E_D("replace into `ecs_searchengine` values('2015-05-16','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-05-16','SOGOU','2');");
E_D("replace into `ecs_searchengine` values('2015-05-17','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-05-18','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-18','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-05-18','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-20','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-20','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2015-05-21','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-22','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-22','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-05-23','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-23','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-05-23','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-24','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-05-26','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2015-05-26','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-27','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-28','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-05-29','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-29','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-05-30','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-05-30','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-05-30','SOGOU','2');");
E_D("replace into `ecs_searchengine` values('2015-05-31','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-05-31','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2015-06-01','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-06-01','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-11-14','SOGOU','2');");
E_D("replace into `ecs_searchengine` values('2015-11-15','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-11-15','YAHOO','2');");
E_D("replace into `ecs_searchengine` values('2015-11-17','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-11-17','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-11-18','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-11-19','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-11-20','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-11-21','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-11-21','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-11-22','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-11-22','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-11-23','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-11-23','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-11-24','SOGOU','3');");
E_D("replace into `ecs_searchengine` values('2015-11-24','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-11-25','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-11-26','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-11-26','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-11-27','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-11-27','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-11-28','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-11-28','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-11-29','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-11-30','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-11-30','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2015-12-01','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-02','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-02','SOGOU','5');");
E_D("replace into `ecs_searchengine` values('2015-12-03','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-12-04','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-04','YAHOO','2');");
E_D("replace into `ecs_searchengine` values('2015-12-04','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-05','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-06','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-06','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-07','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-07','YAHOO','2');");
E_D("replace into `ecs_searchengine` values('2015-12-07','SOGOU','2');");
E_D("replace into `ecs_searchengine` values('2015-12-08','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-12-08','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-12-08','SOGOU','2');");
E_D("replace into `ecs_searchengine` values('2015-12-09','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-12-10','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-12-10','YAHOO','2');");
E_D("replace into `ecs_searchengine` values('2015-12-11','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-12-12','BAIDU','5');");
E_D("replace into `ecs_searchengine` values('2015-12-13','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-14','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-14','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-12-14','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-15','SOGOU','9');");
E_D("replace into `ecs_searchengine` values('2015-12-16','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-12-17','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-19','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-12-20','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-12-20','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-21','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-22','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-22','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2015-12-23','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-12-23','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-24','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-25','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-12-25','SOGOU','2');");
E_D("replace into `ecs_searchengine` values('2015-12-27','BAIDU','3');");
E_D("replace into `ecs_searchengine` values('2015-12-27','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-12-29','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-29','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-30','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-12-30','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-12-30','GOOGLE','32');");
E_D("replace into `ecs_searchengine` values('2015-12-31','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-12-31','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-01','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2016-01-01','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-01-01','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-02','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2016-01-03','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-04','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-04','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2016-01-05','BAIDU','3');");
E_D("replace into `ecs_searchengine` values('2016-01-05','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-01-06','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-07','SOGOU','2');");
E_D("replace into `ecs_searchengine` values('2016-01-08','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2016-01-09','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-10','BAIDU','5');");
E_D("replace into `ecs_searchengine` values('2016-01-10','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-01-10','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2016-01-11','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2016-01-11','GOOGLE','20');");
E_D("replace into `ecs_searchengine` values('2016-01-12','GOOGLE','57');");
E_D("replace into `ecs_searchengine` values('2016-01-13','GOOGLE','242');");
E_D("replace into `ecs_searchengine` values('2016-01-13','BAIDU','3');");
E_D("replace into `ecs_searchengine` values('2016-01-13','YAHOO','3');");
E_D("replace into `ecs_searchengine` values('2016-01-14','BAIDU','3');");
E_D("replace into `ecs_searchengine` values('2016-01-14','GOOGLE','9');");
E_D("replace into `ecs_searchengine` values('2016-01-15','GOOGLE','8');");
E_D("replace into `ecs_searchengine` values('2016-01-15','SOGOU','2');");
E_D("replace into `ecs_searchengine` values('2016-01-15','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-16','GOOGLE','4');");
E_D("replace into `ecs_searchengine` values('2016-01-16','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2016-01-16','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-17','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-01-17','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2016-01-18','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2016-01-18','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2016-01-18','YAHOO','3');");
E_D("replace into `ecs_searchengine` values('2016-01-18','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-19','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-20','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2016-01-20','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-20','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-21','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2016-01-21','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2016-01-22','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-22','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2016-01-22','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2016-01-23','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-01-24','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2016-01-25','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-25','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2016-01-26','YAHOO','2');");
E_D("replace into `ecs_searchengine` values('2016-01-26','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2016-01-26','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-26','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-27','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2016-01-28','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2016-01-28','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-28','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-29','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2016-01-29','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2016-01-29','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-29','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2016-01-30','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2016-01-30','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-01-31','SOGOU','3');");
E_D("replace into `ecs_searchengine` values('2016-01-31','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-02-01','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-02-01','SOGOU','3');");
E_D("replace into `ecs_searchengine` values('2016-02-01','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-02-02','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-02-03','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-02-03','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-02-03','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-02-04','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-02-04','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2016-02-04','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2016-02-05','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-02-05','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2016-02-06','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-02-06','SOGOU','4');");
E_D("replace into `ecs_searchengine` values('2016-02-06','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2016-02-06','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2016-02-07','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2016-02-12','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2016-02-12','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-02-13','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-02-14','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2016-02-14','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-02-15','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-02-15','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-02-16','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-02-16','SOGOU','3');");
E_D("replace into `ecs_searchengine` values('2016-02-16','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-02-16','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2016-02-17','BAIDU','3');");
E_D("replace into `ecs_searchengine` values('2016-02-17','YAHOO','2');");
E_D("replace into `ecs_searchengine` values('2016-02-17','SOGOU','3');");
E_D("replace into `ecs_searchengine` values('2016-02-17','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2016-02-18','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2016-02-18','YAHOO','2');");
E_D("replace into `ecs_searchengine` values('2016-02-19','YAHOO','2');");
E_D("replace into `ecs_searchengine` values('2016-02-19','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2016-02-19','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-02-20','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2016-02-20','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2016-02-20','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-02-21','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-02-21','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2016-02-21','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2016-02-23','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2016-02-23','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-02-25','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-02-25','YAHOO','2');");
E_D("replace into `ecs_searchengine` values('2016-02-26','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2016-02-26','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-02-27','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-02-27','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-02-28','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2016-02-28','SOGOU','2');");
E_D("replace into `ecs_searchengine` values('2016-02-29','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-02-29','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-03-01','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2016-03-01','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-03-02','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-03-02','YAHOO','2');");
E_D("replace into `ecs_searchengine` values('2016-03-02','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-03-03','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-03-04','SOGOU','2');");
E_D("replace into `ecs_searchengine` values('2016-03-04','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-03-04','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2016-03-05','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2016-03-05','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2016-03-05','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2016-03-06','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2016-03-06','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-03-07','SOGOU','1');");

require("../../inc/footer.php");
?>