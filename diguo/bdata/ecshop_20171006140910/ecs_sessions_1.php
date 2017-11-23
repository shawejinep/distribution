<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions`;");
E_C("CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `adminid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions` values('c2b3bdee8da2c9aea7ca774096c8e19e','1507269049','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('23260c5c31e0317e363263f4e5c79f64','1507269049','0','0','140.207.54.79','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('1bd3720049f1ea770f5bb2523b9cc485','1507268970','0','0','140.207.54.79','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('be1b54f1b16f88366568025bd6c7812e','1507270086','0','1','139.205.202.49','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1507241286;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('12300f2eb114b7ce3ef163f8462afca5','1507268878','0','0','139.205.202.49','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('0a7cb08a96b3da9c19c906f6657e6aed','1507269055','0','0','140.207.54.79','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('660da1629a5956c94249b96fe624928f','1507269054','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('a56d7418a19d98239bb24eb54a5a275e','1507269055','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('defce0cde892eceaf9bd5cf8b1a14ff0','1507269055','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('b2ca9d74047e64d28ad8b6445f182921','1507269062','0','0','140.207.54.80','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('96b7408acb73cd72c0c478a8ed3e48eb','1507269061','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('886e6cd728c6df5b89c9ffea11c25bf6','1507269062','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('ae5c712f8e6571624bc9f8855093e90d','1507269064','0','0','140.207.54.79','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('0b7aa5428aaf7bb8ef2571975c6f77c7','1507269064','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('4d31fb005da58325e90944c741c0ba51','1507269073','0','0','140.207.54.80','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('034ff68336a905d5b47fe66c28df3678','1507269073','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('62bcaedb8b47bfd07092f653167f6b71','1507269073','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('54ff793aec8714ba43613c8d3cbabe33','1507269073','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('6d937bd85b24d0acb51e40dd68fffddf','1507269772','5202','0','139.205.202.49','tianxin5202','1','1.00','0','a:6:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"wechat_id\";s:28:\"oh7wNwzQ2EdzobivS3vAZvPwDa6Y\";s:9:\"last_time\";i:1507240279;s:7:\"last_ip\";s:0:\"\";}');");
E_D("replace into `ecs_sessions` values('e236d920f10ad5a21f17db835d7a791b','1507269089','0','0','140.207.54.79','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('3b78ce312ea56e11f630e239cc63d4e6','1507269089','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('b2568b30510ce770bcc977474e2ba0e4','1507269093','0','0','140.207.54.79','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('238f24998df6b591ad207799d9fb9d67','1507269092','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('1bea538c1c716690f5111c43055ecfcb','1507269092','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('6694d3bcbd6ac4d0f8795f7e6133b4d0','1507269093','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('6fe0b334125ecc607a0517b9aaae7214','1507269102','0','0','117.185.27.114','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('a8e52ca61dadc8f9d41c2d3c5141f974','1507269201','0','0','140.207.54.80','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('2ad7d448318a528b711e67c12abc49b9','1507269201','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('e26722d2dfd9db404c91e30fec603bc5','1507269337','0','0','140.207.54.79','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('92e88c3cfd8b32b615b2da3bb2e008e3','1507269337','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('975f24e0b021088c12245ef2902711c2','1507269754','0','0','140.207.54.79','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('fb3528e7142f6bfad98ef39e4e2d36d6','1507269754','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('5d888a2e644a638b2cc76c3f58e273fe','1507269770','0','0','140.207.54.79','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('6362fa7f84915a87e59645a92956410f','1507269769','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('52fb5d3a239f9582ccdd801487c6bfe1','1507269770','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('f78a86de60650123972e7b6bb6ccd20a','1507269770','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('42a5439b57942f8fd2b7a904f228e21e','1507269785','0','0','140.207.54.79','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('9e87d8608c060389fdcabcac08c0b5af','1507269785','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('c33ec4d4dbded5e0bc5d551ccfcd5547','1507269806','0','0','140.207.54.79','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('6626ffcaacdcce65f0ed4b3d03703a02','1507269805','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('38f74efa739e7e9ba29344124a7d85d2','1507269806','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('4ea67d9fd71712768cb464b4c60e4eba','1507269812','0','0','139.205.202.49','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('d80c7e2d9cc46d98f6aa2efa6ab1c53a','1507269815','0','0','140.207.54.79','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('273259e8c127488b5ea356951b516bd7','1507269815','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('3820fe368def82e41fb1a834b3bd7ad4','1507269822','0','0','140.207.54.79','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('d5737cbeaff03546da9911f37b5c8286','1507269818','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('000f0a5bac0ba523b109d4917fab77c7','1507269822','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('b8d7b08a8310ce234d8208b87a7f782f','1507269846','0','0','140.207.54.80','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('fcadb859f7004f41f3d9e82f74d3992c','1507269842','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('436dd71fca74722e54a2f9972e9452b0','1507269846','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('c43b2b33eb4cfead55724d2e465f0f69','1507269865','0','0','140.207.54.79','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('2465adfeca3f21fcf6ed3569317f9cf0','1507269863','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('2a68443e21c4316a46e52a7478079140','1507269864','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('197d83a8e4c65006d1b4a77eb96c650f','1507270114','5202','0','139.205.202.49','tianxin5202','1','1.00','0','a:6:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"wechat_id\";s:28:\"oh7wNwzQ2EdzobivS3vAZvPwDa6Y\";s:9:\"last_time\";s:10:\"1507240275\";s:7:\"last_ip\";s:14:\"139.205.202.49\";}');");
E_D("replace into `ecs_sessions` values('e2874b79e338591749505745ce9fce6e','1507269865','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('f992d83063765aa2a0701f5e865acc49','1507269884','0','0','123.151.138.73','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('47a7bc39e98eb5b6ccae499bf1bc6ef7','1507269959','0','0','140.207.54.80','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('e14e31f2439e1b5f28fd968ebfa2d5c6','1507269959','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('7d96beffef8bd0f92f15fd464e7d2a2e','1507269961','0','0','140.207.54.79','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('33b17b34c4017f82005226e02732aee9','1507269961','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('aba2b74df4f1263fcad90fdc0ce280f7','1507269961','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('b9de688a7b7e598131cce3f87bfe3cbb','1507270027','0','0','140.207.54.79','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('581ecee5300b758a5b448904a820c970','1507270027','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('0feadc09ac712aa6faab041dd3ee227d','1507270035','0','0','140.207.54.79','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('789ee38130db5b0e0a4e78a530482e35','1507270034','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('6493f623529db4e565549160186fa781','1507270034','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('078d42f10673f14884cb949e32e3a2ae','1507270035','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('b85c22b834fcb06a6ae6ef04fa8ec712','1507270113','0','0','140.207.54.80','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('4e9abf38708a92a8981e4b63f5e23687','1507270113','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('24180dda7025d3d15a771c9c24b5d77d','1507270115','0','0','140.207.54.80','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('532f756f4612654637a8b1776eb1b517','1507270114','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('b1abcd83b0cd801ffa63a1f0d42fe70d','1507270115','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('527d24a27a048028aeb7a531abdde40a','1507270115','0','0','47.94.194.217','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");

require("../../inc/footer.php");
?>