<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_collect_goods`;");
E_C("CREATE TABLE `ecs_collect_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0',
  `is_attention` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rec_id`),
  KEY `user_id` (`user_id`),
  KEY `goods_id` (`goods_id`),
  KEY `is_attention` (`is_attention`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_collect_goods` values('26','4278','9','1449740418','0');");
E_D("replace into `ecs_collect_goods` values('5','4199','123','1447466780','0');");
E_D("replace into `ecs_collect_goods` values('6','4199','112','1447482172','0');");
E_D("replace into `ecs_collect_goods` values('7','4201','120','1447541085','0');");
E_D("replace into `ecs_collect_goods` values('8','4201','112','1447663625','0');");
E_D("replace into `ecs_collect_goods` values('9','4276','123','1447733382','0');");
E_D("replace into `ecs_collect_goods` values('10','4268','1','1447804509','0');");
E_D("replace into `ecs_collect_goods` values('11','4309','67','1447834061','0');");
E_D("replace into `ecs_collect_goods` values('12','4317','109','1447876064','0');");
E_D("replace into `ecs_collect_goods` values('13','4214','123','1447904131','0');");
E_D("replace into `ecs_collect_goods` values('14','4214','119','1447919231','0');");
E_D("replace into `ecs_collect_goods` values('15','4338','93','1447973706','0');");
E_D("replace into `ecs_collect_goods` values('16','4359','56','1448016296','0');");
E_D("replace into `ecs_collect_goods` values('17','4428','109','1448352414','0');");
E_D("replace into `ecs_collect_goods` values('18','4448','113','1448411455','0');");
E_D("replace into `ecs_collect_goods` values('19','4308','17','1448421432','0');");
E_D("replace into `ecs_collect_goods` values('20','4276','9','1448439727','0');");
E_D("replace into `ecs_collect_goods` values('21','4488','119','1448556476','0');");
E_D("replace into `ecs_collect_goods` values('22','4254','46','1448688428','0');");
E_D("replace into `ecs_collect_goods` values('23','4548','123','1448864590','0');");
E_D("replace into `ecs_collect_goods` values('24','4543','93','1449211568','0');");
E_D("replace into `ecs_collect_goods` values('25','4654','19','1449447316','0');");
E_D("replace into `ecs_collect_goods` values('27','4894','108','1450848158','0');");
E_D("replace into `ecs_collect_goods` values('28','4741','122','1450949597','0');");
E_D("replace into `ecs_collect_goods` values('29','4918','5','1451013330','0');");
E_D("replace into `ecs_collect_goods` values('30','4270','113','1451509268','0');");
E_D("replace into `ecs_collect_goods` values('31','4327','93','1451776538','0');");
E_D("replace into `ecs_collect_goods` values('32','4436','19','1452369945','0');");
E_D("replace into `ecs_collect_goods` values('33','4483','113','1452591831','0');");
E_D("replace into `ecs_collect_goods` values('34','4493','118','1452636838','0');");
E_D("replace into `ecs_collect_goods` values('35','4560','115','1453072603','0');");
E_D("replace into `ecs_collect_goods` values('36','4506','123','1453277353','0');");
E_D("replace into `ecs_collect_goods` values('37','4621','119','1453424304','0');");
E_D("replace into `ecs_collect_goods` values('38','4624','112','1453450453','0');");
E_D("replace into `ecs_collect_goods` values('39','4606','9','1453453196','0');");
E_D("replace into `ecs_collect_goods` values('40','4638','115','1453768907','0');");
E_D("replace into `ecs_collect_goods` values('41','4457','119','1453786585','0');");
E_D("replace into `ecs_collect_goods` values('42','4810','123','1454223290','0');");
E_D("replace into `ecs_collect_goods` values('43','4824','104','1454363384','0');");
E_D("replace into `ecs_collect_goods` values('44','4824','123','1454363623','0');");
E_D("replace into `ecs_collect_goods` values('45','4825','9','1454365404','0');");
E_D("replace into `ecs_collect_goods` values('46','4829','113','1454396584','0');");
E_D("replace into `ecs_collect_goods` values('47','4829','119','1454396603','0');");
E_D("replace into `ecs_collect_goods` values('48','4836','109','1454449866','0');");
E_D("replace into `ecs_collect_goods` values('49','4621','123','1454698757','0');");
E_D("replace into `ecs_collect_goods` values('50','4912','123','1455664514','0');");
E_D("replace into `ecs_collect_goods` values('51','4965','120','1456001811','0');");
E_D("replace into `ecs_collect_goods` values('52','5133','115','1456941752','0');");
E_D("replace into `ecs_collect_goods` values('53','4264','1','1456941979','0');");
E_D("replace into `ecs_collect_goods` values('54','5138','113','1456970041','0');");
E_D("replace into `ecs_collect_goods` values('55','5153','9','1457030422','0');");

require("../../inc/footer.php");
?>