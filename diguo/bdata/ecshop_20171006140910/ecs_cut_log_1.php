<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cut_log`;");
E_C("CREATE TABLE `ecs_cut_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `act_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `user_act_id` mediumint(8) NOT NULL,
  `act_user` mediumint(8) NOT NULL,
  `bid_user` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `bid_user_nickname` varchar(200) NOT NULL,
  `bid_user_head` varchar(200) NOT NULL,
  `bid_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `after_bid_price` decimal(10,2) NOT NULL,
  `bid_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cut_log` values('1','24','0','4246','4246','吴帅','http://wx.qlogo.cn/mmopen/ajNVdqHZLLDcEqQ1yFlQx0mDaic1kV7VQ82kpF8X1DwcA2BPS3HVhd3w0sWas0s3uxZN97wuCRicHrksQXjPjqaQ/0','2.32','17.68','1453949989');");
E_D("replace into `ecs_cut_log` values('2','24','0','4272','4272','建华传媒','http://wx.qlogo.cn/mmopen/2qmw3N1fBBOHrHicE7v6TicjT1lcUdia6pYaEf3v0lljHLIS3jPibGWJAL6jojB4SibMXuT6XQ7p0Qy403Aq353kt3ic0VCy3iboTq1/0','1.95','18.05','1453962041');");
E_D("replace into `ecs_cut_log` values('3','24','0','4696','4696','在一起','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl4xHiczdqdNVL9xyicWF8eoBrpdZvjzOibibs27E4CRLYY3Pk56UbJl1jCHCV2HusFgzPxsviapkHNLZb6H7g1hejk06/0','4.32','15.68','1453962222');");
E_D("replace into `ecs_cut_log` values('4','24','0','4275','4275','A阿华','http://wx.qlogo.cn/mmopen/9OakAVM0cSbPrdgtx9ekT3Ha8cHiaibMvuQWbKmSK6IicH4Kw6ibkLCOJxk435u8pDiciczYKI1DfxgzdcgT7MAw1iaLcaibFnibCZiaVn/0','3.72','16.28','1453963410');");
E_D("replace into `ecs_cut_log` values('5','24','0','4275','4284','王美佳','http://wx.qlogo.cn/mmopen/ib7Efy61IoTC0uP7zicroPrVyuFh9CiaDZKOp0MK0w2Jibcwe5doibXDy7p6b6o0AtzyfQeIDciaDc5JY6Aps3606XQrZ88PU2uyTt/0','4.79','11.49','1453963547');");
E_D("replace into `ecs_cut_log` values('6','24','0','4284','4284','王美佳','http://wx.qlogo.cn/mmopen/ib7Efy61IoTC0uP7zicroPrVyuFh9CiaDZKOp0MK0w2Jibcwe5doibXDy7p6b6o0AtzyfQeIDciaDc5JY6Aps3606XQrZ88PU2uyTt/0','3.90','16.10','1453963578');");
E_D("replace into `ecs_cut_log` values('7','24','0','4565','4565','刘义桥大师弟子·兰江宁','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6tvaesBDEgGdP08Nbpz9eZDx5WNnWHL9JromPBNVYRKrIN9DPibnfORSM4MZ8IY1o72DHLt8GBJBHmPOVib7hjGXa/0','4.16','15.84','1453963587');");
E_D("replace into `ecs_cut_log` values('8','24','0','4284','4275','A阿华','http://wx.qlogo.cn/mmopen/9OakAVM0cSbPrdgtx9ekT3Ha8cHiaibMvuQWbKmSK6IicH4Kw6ibkLCOJxk435u8pDiciczYKI1DfxgzdcgT7MAw1iaLcaibFnibCZiaVn/0','2.01','14.09','1453963650');");
E_D("replace into `ecs_cut_log` values('9','24','0','4651','4651','洛辰-日本代购、留学','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl7MMmUfJtPwZ3s8UuqnRTahVuLnLHS5kTUfCwjw1UuQZT25UhaEhluc7mvLJica7vbunUaTmibkOXDC0nialKKp5ud/0','1.89','18.11','1453963937');");
E_D("replace into `ecs_cut_log` values('10','24','0','4703','4703','车明亮','http://wx.qlogo.cn/mmopen/PiajxSqBRaEJibhClFlsRKVxkULBbqv3yxicyaqyZM8ujNrdhbmDjCHkXB7VwUuStLX1Pj3vPhoqh3oibVwMF9veDA/0','2.28','17.72','1453963988');");
E_D("replace into `ecs_cut_log` values('11','24','0','4680','4680','蒙仕杰~爱才通公司','http://wx.qlogo.cn/mmopen/ib7Efy61IoTCa81PxgXjKC9wNWGuXjqyrttrLC942lKzop2mCoibtFrdkfPYIqmLW5rf68Cs4sEeic4f0AcicCibE9YDHyH4TebCH/0','3.15','16.85','1453964325');");
E_D("replace into `ecs_cut_log` values('12','24','0','4298','4298','周明生','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6tMkmiaSrJ0aZicvbZFXzvQGITksicoBQqStE00ia3ibk2oZna857Zicajch18SJnrPbwNicvSPQ6zXUuichxn2CmY612u2/0','2.33','17.67','1453965482');");
E_D("replace into `ecs_cut_log` values('13','24','0','4663','4663','无界智慧金融--鱼涛','http://wx.qlogo.cn/mmopen/PiajxSqBRaEJ6UCgIBVO5NEaj24wibUySQ7e10mlicKiaCYIfOY49RdmpLxx2WmFoWO58ReAtXBYqhV0mibkjo0cxRw/0','4.56','15.44','1453966834');");
E_D("replace into `ecs_cut_log` values('14','24','0','4674','4674','小于哥','http://wx.qlogo.cn/mmopen/ZMdxSDafpxTC1v2Yibiau0EMz4gklJV8j8Z8ee6Bibxpa6A4tlWy16napA4tUibu6mwTuYibuT5ZNtEc3aqL5uYrRlnVtnIS0T8eD/0','1.18','18.82','1453967858');");
E_D("replace into `ecs_cut_log` values('15','24','0','4225','4225','巨匠 微信超級會員','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6uY6ibwUq4koibQyXd5RsVr0h6UsrayHrR1bET5VW99cVgqcicDn7tU6TTxD2h22kgW1HvT4TbXZyfc71HevdEfH0F/0','1.98','18.02','1453968877');");
E_D("replace into `ecs_cut_log` values('16','24','0','4722','4722','徐骏杰','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6tMkmiaSrJ0aZ8KCTe24l6pIEVxmd5JL3tNG8gZ5d2CAGfF2g8ZwYtf7tyYOsBwCWKN5hZr0icZ7mnDAznFmmMCab/0','3.19','16.81','1453969155');");
E_D("replace into `ecs_cut_log` values('17','24','0','4404','4404','平凡的人','http://wx.qlogo.cn/mmopen/ZMdxSDafpxRVdbUja4umKfiahhiaZiaf2Tib5ibdW8oBg0ic2a4pz9C3YcpMzhcwmFhnpMN7MpMZGPAaxhq5Z3aU29rw/0','1.18','18.82','1453971009');");
E_D("replace into `ecs_cut_log` values('18','24','0','4725','4725','艾歌','http://wx.qlogo.cn/mmopen/ZMdxSDafpxTC1v2Yibiau0EHicpMiano0oUdWCUd4NGTZzwj9mZFLibkggPFzZ5d5OzMFLAcqa3RAusZGFia8txmicTeBOvOkWibv6xT/0','1.20','18.80','1453971520');");
E_D("replace into `ecs_cut_log` values('19','24','0','4659','4659','a金刚','http://wx.qlogo.cn/mmopen/ajNVdqHZLLAibpyQrbVfdLkuia6FsE36UFJiac0ZfTwv8ThDPxllY7mdXxw8xEv6nAibspnhtBjSkm9z4omsyuD8eg/0','3.50','16.50','1453973426');");
E_D("replace into `ecs_cut_log` values('20','24','0','4659','4630','【51魟鱼网】51hongyu.com','http://wx.qlogo.cn/mmopen/MDujI20ZrCUjqjibiammfEzK9HcRtZ5hv5bkAhRTuTaicsKoA6HrYgXyepz7Zo7Ew5ePJxQTB2Cnfu2ZNeokyBWr6ugTywzpeJz/0','2.28','14.22','1453973800');");
E_D("replace into `ecs_cut_log` values('21','24','0','4630','4630','【51魟鱼网】51hongyu.com','http://wx.qlogo.cn/mmopen/MDujI20ZrCUjqjibiammfEzK9HcRtZ5hv5bkAhRTuTaicsKoA6HrYgXyepz7Zo7Ew5ePJxQTB2Cnfu2ZNeokyBWr6ugTywzpeJz/0','2.30','17.70','1453973829');");
E_D("replace into `ecs_cut_log` values('22','24','0','4677','4677','品茶修心 坐而论道-我是密谋茶馆','http://wx.qlogo.cn/mmopen/ZMdxSDafpxTC1v2Yibiau0EEOWJoCLcj67MhOib5qe2FPBNNCf4FNjibWHiaHSibKr9uTx4jfDDXQzr9KFQxsicniaZrTbZzCX6ib7cXs/0','3.66','16.34','1453976732');");
E_D("replace into `ecs_cut_log` values('23','24','0','4737','4737','兰色姿恋','http://wx.qlogo.cn/mmopen/Q3auHgzwzM59t54x0WO4DC6SVhwicJpfjjJLrMWpTpzVbBHClc8gc4ZsSGWt4SmU3MyAD1Jy9XeLWJeeYkZGqInUV9qX9vFA1M7Imn6gEmCU/0','3.84','16.16','1453991628');");
E_D("replace into `ecs_cut_log` values('24','24','0','4498','4498','小龙虾','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl781ldteHN3QefRJG6pj3muxVdI0bZKLyjNjRSuAyb6x3V7BB0WI7C5crIvvBjEvPqmiaiblicDvM88DGQOeQQKUvZ/0','3.47','16.53','1453994089');");
E_D("replace into `ecs_cut_log` values('25','24','0','4293','4293','马华泉','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl5hgUd91Aiagps9jticMlqE5ia3dJjkVDsjBUJL7Y1oqzOwuLqOOHG7nxxBRomeZFVKEN9UCLYicTGG9f3GzW0Gm7Hc/0','3.97','16.03','1453997776');");
E_D("replace into `ecs_cut_log` values('26','24','0','4740','4740','春明','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl5hgUd91Aiagph18pqXXQB3tQic7q65Qia2ze0ILibk4T3xLbxBpLMhe7Ucg7NWRMN9MHrqx1Ka35wGMHOAiaqEGN8gp/0','4.16','15.84','1453999668');");
E_D("replace into `ecs_cut_log` values('27','24','0','4741','4741','玮哥~超级派对CEO','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6tvaesBDEgGdA0ZGoQHPstZoJLD2AZ9tJv99p6nwOxodqXiaNib5x2sIlwJ1ysSy6rSozB01mFP8tibF8EoIHubmpF/0','1.85','18.15','1453999734');");
E_D("replace into `ecs_cut_log` values('28','24','0','4427','4427','家大于天','http://wx.qlogo.cn/mmopen/ib7Efy61IoTDfdjaN2k3ZoCVwiahicUDrTHaw20aWmpiaYF5g8an8lBOtM3ia5BZPiax7XDjkbuxKplWFLTUArYWOTb8h8ewBxqpaL/0','4.84','15.16','1454000661');");
E_D("replace into `ecs_cut_log` values('29','24','0','4753','4753','芯    碎','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6ulfylfCayZF2yDMybCwUWLWVwjkmicZPWiaGWZqtJrTVvTT6XSNB0dVU2ibsbicHq6HZ1QYz2JmYFPut6ribsMo9I3c/0','2.85','17.15','1454004330');");
E_D("replace into `ecs_cut_log` values('30','24','0','4448','4448','cc','http://wx.qlogo.cn/mmopen/ib7Efy61IoTCJ1zrNiaxGERYRnbU9cmk8135iaibjXWpGake7wy3OYUH1TzjE9ufcvDp8VMo0ibdTTDZnEs3wp0dOejHic2ZhDw5dx/0','3.06','16.94','1454011623');");
E_D("replace into `ecs_cut_log` values('31','24','0','4772','4772','yongsen','http://wx.qlogo.cn/mmopen/ZMdxSDafpxQD2AYFER3of5hibVjXibOh9vXDuL0yzcwe84BTtvibJBvZchGewVEqiaeSC9E2MVrX2hUveLJicIlxOog/0','2.31','17.69','1454023899');");
E_D("replace into `ecs_cut_log` values('32','24','0','4333','4333','临沧慧明科技','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6tvaesBDEgGdBCRlkpQM3GM1Ts6e2Vq4Ruhy5F9iahY3csgD09JuMSfh4buj7iaFicTiaHba5JDtoDrwKHxrSnlPwgu/0','4.88','15.12','1454029041');");
E_D("replace into `ecs_cut_log` values('33','24','0','4325','4325','大城','http://wx.qlogo.cn/mmopen/PiajxSqBRaEI86dPcm4EnogIE0piaoVTzUnzsv8cz7WuibRUbfdsLK1KyY2a4SJmmvPMFicDEx8OIHFSJbocIKApsg/0','2.27','17.73','1454033162');");
E_D("replace into `ecs_cut_log` values('34','24','0','4781','4781','吾皇万岁','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6tMkmiaSrJ0aZ4M5MnEyTw2HVA51ia1p4uh33PDaat2LyhswaJ5c7LNGiarhFW1Wx8NIHv4MqsJ0alwTIb9WmpE72U/0','1.66','18.34','1454053363');");
E_D("replace into `ecs_cut_log` values('35','24','0','4448','4785','家琪','http://wx.qlogo.cn/mmopen/ZMdxSDafpxRKWmZT0iaS4G6U3qg9GGAamhW5oTkfXhonsicicFLn5Tdibywblvy0uXQ6Gp8DYTDhHdFkIibRLCy3aZg/0','1.90','15.04','1454093016');");
E_D("replace into `ecs_cut_log` values('36','24','0','4793','4793','读前往后从','http://wx.qlogo.cn/mmopen/MDujI20ZrCUjqjibiammfEzPcibooFOFGBF5e5gdlSpjfFQ5e7tDYQCH8uZsmWvWGLBic0Cn0q5tKbpvt7Twz8MabqfAhXXiaJHicq/0','1.30','18.70','1454128678');");
E_D("replace into `ecs_cut_log` values('37','24','0','4792','4792','Mr.Alimjohn','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl5hgUd91AiagpkBgw2AWCHLCepA4KBBkYaHgTInibP0wyuiacnCnLFygGLsYVV5qZSn1zqlALybgjZLEtEicmfJJ8or/0','3.09','16.91','1454132443');");
E_D("replace into `ecs_cut_log` values('38','24','0','4799','4799','我的未来不是梦','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl5hgUd91AiagplUpc7lZiamiaAyDfibrEWxScuOHlqu5iarlNEkzibvbY2EwwJW9CaECPg5ibbAKlftdEUMmjG11x6g4nY/0','4.48','15.52','1454183904');");
E_D("replace into `ecs_cut_log` values('39','24','0','4586','4586','风扬技术小钟','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl6UOlVTzOvsrAyHU3IJhMLPbHPrZN2CEsEp4U3oNWlFHQow048Mf7HDavPyP6sfVPGvwytu2xjKzsvINLcwuXAd/0','2.18','17.82','1454226401');");
E_D("replace into `ecs_cut_log` values('40','24','0','4813','4813','卫亮','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl5hgUd91AiagpsbecRY71VJhOXlW9BTicLiaZiaS9s1N9jj91wNoia5ZQnic9dCBqZjVqYMlytzXBq4qJC1Md93cia67LN/0','2.26','17.74','1454274044');");
E_D("replace into `ecs_cut_log` values('41','24','0','4820','4820','A农民٩(๑❛ᴗ❛๑)۶','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl5hgUd91AiagptLPwaDD3lvpQ3h4lRr9UOaJZ1Na4uUVoxvf1qXN92Nww9KicIkybsFL99JgT8EIahQE0KpD2HrDR/0','2.37','17.63','1454316931');");
E_D("replace into `ecs_cut_log` values('42','24','0','4483','4483','Joom','http://wx.qlogo.cn/mmopen/ajNVdqHZLLAcObV13IXqSta8Mj2bJNO7HkRFY8512rwgRqcVXYYyLtpY8PHCLRiatRa3Gn3InyiaSS9FwAdfxd4xuCIY8Lc7U0k4bG9yelzY4/0','2.96','17.04','1454317904');");
E_D("replace into `ecs_cut_log` values('43','24','0','4317','4317','李健','http://wx.qlogo.cn/mmopen/ib7Efy61IoTCqQb0o9ricFTCIm1PbgjXBBy19amDCgzZmVDk82jW9Jet297ibXZhUG5xtTUKZL3icB1jm7YZhsXnJiaDRQ5UPiclZl/0','4.92','15.08','1454321578');");
E_D("replace into `ecs_cut_log` values('44','24','0','4829','4829','王凡','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl5hgUd91AiagprVJDia2iaXibjtIIMfzmZQ8ZA6o4v5bf4Vv10cejlQ6I7pPibU9R5ORIN7LYelnGLibOHZ7fsW3718cf/0','3.43','16.57','1454396992');");
E_D("replace into `ecs_cut_log` values('45','24','0','4836','4836','苏继龙','http://wx.qlogo.cn/mmopen/Q3auHgzwzM5Y5S0LLVsBkmB8MlxWOmAryVgQUyjQvaRVTm9k6ZKTIO2ZrPob6ib1068xhoEZXmSuta67oGBr6Iw97J2pxa3oY6uF2hMMS4Ag/0','3.76','16.24','1454438659');");
E_D("replace into `ecs_cut_log` values('46','24','0','4412','4412','杉伊','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6uZHLoMuN4hjAA06mtiaPWAEXblFibziaSyQ8p9bCUGyiaFH5puJy0yaJs3kXOw8WXpSh2ibLSGGCgL59IQe5PzCFjoq/0','2.40','17.60','1454462441');");
E_D("replace into `ecs_cut_log` values('47','24','0','4184','4184','jiancheng','http://wx.qlogo.cn/mmopen/ibnbXAZSrgicKlf9SrF3M5Gs4d74TMPw6YXJGlzib8jHVBT7cC8Q2Rhg4MuM0xwVux1xRnHb43m7TFnm9uWIQmmZAfSB7mwhgu3/0','4.49','15.51','1454564533');");
E_D("replace into `ecs_cut_log` values('48','24','0','4184','4779','tianxin4779','','4.75','10.76','1454564703');");
E_D("replace into `ecs_cut_log` values('49','24','0','4779','4779','tianxin4779','','4.01','15.99','1454564748');");
E_D("replace into `ecs_cut_log` values('50','24','0','4852','4852','向权','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6vsVIkk4EFp8jFmVBia2fzyPILlsmdZJwS0gjs6ZN32ic6CXHmSta33kvPWgjlUl751wT3POaAGicdrAjSgBJKFgvh/0','1.46','18.54','1454601427');");
E_D("replace into `ecs_cut_log` values('51','24','0','4881','4881','。洃冭誏ヽ','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl5hgUd91AiagpqgIcaibSstLkfOtSicIdanmngsG4deMqp7BT3WK4N1QC4ibjZ5ffOcq0LlWtpoB7v3veDBPwDciaNDZ/0','4.11','15.89','1455494678');");
E_D("replace into `ecs_cut_log` values('52','24','0','4879','4879','星石久久xing499.cn','http://wx.qlogo.cn/mmopen/ib7Efy61IoTC4wcyib2GTqwrwXNHowUQUWMfrl5p8fc4zYZcZc1JG19zuGrj9AAmQxQBgpuktvWF5ApuOAcRzPCmfaj4I5Nklib/0','3.91','16.09','1455501857');");
E_D("replace into `ecs_cut_log` values('53','24','0','4921','4921','热带鱼','http://wx.qlogo.cn/mmopen/ib7Efy61IoTCJ1zrNiaxGERTQMYGU73QnZCWF4kqibiapEDlEPX4eicTnBR1V2flsmeUdWdEUV9icobDppReFDVSMSHuk3fdlAzvnU/0','3.34','16.66','1455691629');");
E_D("replace into `ecs_cut_log` values('54','24','0','4921','4920','农场','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl5hgUd91AiagplcWQ0hEwTbtQ1eR4gKba7XP0OUryX6KxGP7MybK8PibdqkwAqn6DTibjUib8YR9upGUffyj6asc2vZ/0','4.33','12.33','1455691696');");
E_D("replace into `ecs_cut_log` values('55','24','0','4443','4443','超越梦想一营养师','http://wx.qlogo.cn/mmopen/ZMdxSDafpxTNqEapPl1xFt8hm6lhPpPQo754dFlrVKpxoBkwib064aoto4nX73g87My0vBadIgFE2TXrSSOIia1A/0','2.66','17.34','1455694189');");
E_D("replace into `ecs_cut_log` values('56','24','0','4607','4607','怡人晓欣','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl7jFdhK25ERs1oqBC9bQf7W2h2qoabOibjBwwAG0cbR9aUQSHicQQxVZ4tvvrRLFichx3QgAo2DYeqrJHJa2bl5CC8/0','2.84','17.16','1455822938');");
E_D("replace into `ecs_cut_log` values('57','24','0','4939','4939','大王叫我来巡山','http://wx.qlogo.cn/mmopen/ZMdxSDafpxQQp7HtvhbKSIBD0psAz05w2yRoLuB6aaBVXicb8eYnv5nYYkiaWlYv1jaHqleQTiacN1RrmeGqSEgKw/0','4.79','15.21','1455844062');");
E_D("replace into `ecs_cut_log` values('58','24','0','4953','4953','[万才商业模式]~张万才','http://wx.qlogo.cn/mmopen/ib7Efy61IoTCJ1zrNiaxGERQKUyQIIL9N27GJUMnvOdlgLfd3YFZiaVSoddfYQU6GZjFOVN8nxdu6F7vUzx85e1hm1iaKe7QCxU8/0','4.97','15.03','1455863886');");
E_D("replace into `ecs_cut_log` values('59','24','0','4668','4668','狐云网络','http://wx.qlogo.cn/mmopen/ib7Efy61IoTA36L7OGiajyAdiaicnia4MwDMCpYTG553P9QTDkGqYOuzsrD0gJQAGWWREpKHFGouciafZ27r0dw4lpVHmunmyPMpEg/0','3.36','16.64','1455876024');");
E_D("replace into `ecs_cut_log` values('60','24','0','4965','4965','佳玖百货','http://wx.qlogo.cn/mmopen/c3BoXQhZGs0fKrHH57xlavrSavOL4BQMibUkvb4gqiaiatAAfY4W2yu2C4wiagYckr3e9keQmDYiaJ5ljzJwo1P8sqOrpvPVickkKB/0','4.98','15.02','1456000662');");
E_D("replace into `ecs_cut_log` values('61','24','0','5026','5026','刘佳','http://wx.qlogo.cn/mmopen/ibnbXAZSrgicKlf9SrF3M5GrG7sC8iabwxsYjcHlmwvGE88RbE2rRAyvvibJ6WWia5nHH3iaqXDYHrfwvmFklBHibuLa5xg97z6bPIM/0','2.96','17.04','1456426601');");
E_D("replace into `ecs_cut_log` values('62','24','0','5026','5034','白开水','','2.69','14.35','1456426672');");
E_D("replace into `ecs_cut_log` values('63','24','0','5046','5046','DinS-香港诺希（NOHON）','http://wx.qlogo.cn/mmopen/ib7Efy61IoTC0uP7zicroPrQraCbLiaHicJ1kvvwcbibYPcJ4uKOoJQbtX8oY0icAnic3zAWtsibPYFKQWcQlHnXIzezBiaiaTmzMa5Aic3/0','1.01','18.99','1456427933');");
E_D("replace into `ecs_cut_log` values('64','24','0','5046','5047','alina娜娜','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl7k1G5NRPbjdPnkBSibWRRiaY68tHnicECl5HgQZptNmQl9BqGoEicBhhrWYwAeta69kem0MAoNz6AoiaqcAibRxe4Q8D/0','1.79','17.20','1456428345');");
E_D("replace into `ecs_cut_log` values('65','24','0','5135','5135','Bing','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl63iatatlUbMfK05F1YW92rc3myuJHTwmKfVeFLBuE3wBF3nfxiaB8Y6Iz0tHIuKTiaGtTKT89pJTnrg/0','2.95','17.05','1456948151');");
E_D("replace into `ecs_cut_log` values('66','24','0','5137','5137','小强','http://wx.qlogo.cn/mmopen/ZMdxSDafpxR1lMoltBlHrwoOoKSRf31TVQCyebrcQlicCKUeS4v6WCXay9SK0xJoZicoQsDbLTuDzgspH2IHLURg/0','4.46','15.54','1456957396');");
E_D("replace into `ecs_cut_log` values('67','24','0','5150','5150','ming','http://wx.qlogo.cn/mmopen/ib7Efy61IoTCNW7eB2T1RPrCBibTO27rRdO6rfAXyc3oBC96Fg34e5UW2uaHjbTEOZgm3ZanBO5mXZEpLas6VF4h5riatg9wpIL/0','4.27','15.73','1456992473');");
E_D("replace into `ecs_cut_log` values('68','24','0','5151','5151','taobao123','','2.32','17.68','1456992778');");
E_D("replace into `ecs_cut_log` values('69','24','0','5150','5151','taobao123','','2.66','13.07','1456992909');");
E_D("replace into `ecs_cut_log` values('70','24','0','5159','5159','优雅地生活 优雅地老去-金惑金','http://wx.qlogo.cn/mmopen/ib7Efy61IoTCDnzN0C0ceq0ibicVzBQAfxD2FnTuMaggicg3eJ4ibyTiaibOvsSOetnib6DqTG3tgg5NY724P6aPgbAF1kJZ0BQLNOMm/0','3.25','16.75','1457043480');");
E_D("replace into `ecs_cut_log` values('71','24','0','5150','5159','优雅地生活 优雅地老去-金惑金','http://wx.qlogo.cn/mmopen/ib7Efy61IoTCDnzN0C0ceq0ibicVzBQAfxD2FnTuMaggicg3eJ4ibyTiaibOvsSOetnib6DqTG3tgg5NY724P6aPgbAF1kJZ0BQLNOMm/0','4.57','8.50','1457057765');");
E_D("replace into `ecs_cut_log` values('72','24','0','5176','5176','风一样的年华','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6tLoXgzoZzrLW6OAqbNJfgKgCXLaLIWaSTtO7ib4TLcqibm8hWjlNCrQovzyE5uMHwkwBeobzgjasMT6HJru2Fbee/0','3.29','16.71','1457150543');");
E_D("replace into `ecs_cut_log` values('73','24','0','5193','5193','李健','','2.98','17.02','1457246248');");
E_D("replace into `ecs_cut_log` values('74','24','0','4317','5193','李健','','3.22','11.86','1457246281');");

require("../../inc/footer.php");
?>