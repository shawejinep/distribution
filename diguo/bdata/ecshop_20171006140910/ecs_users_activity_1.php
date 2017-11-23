<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_users_activity`;");
E_C("CREATE TABLE `ecs_users_activity` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_nickname` varchar(200) NOT NULL,
  `user_head` varchar(200) NOT NULL,
  `act_id` mediumint(8) NOT NULL,
  `act_type` tinyint(3) NOT NULL,
  `shop_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `new_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `activity_time` int(10) unsigned NOT NULL DEFAULT '0',
  `order_times` int(10) unsigned NOT NULL DEFAULT '0',
  `is_finished` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_users_activity` values('1','4246','吴帅','http://wx.qlogo.cn/mmopen/ajNVdqHZLLDcEqQ1yFlQx0mDaic1kV7VQ82kpF8X1DwcA2BPS3HVhd3w0sWas0s3uxZN97wuCRicHrksQXjPjqaQ/0','24','5','20.00','17.68','1453949924','0','0');");
E_D("replace into `ecs_users_activity` values('2','4420','VV朋友圈助手','','24','5','20.00','20.00','1453961486','0','0');");
E_D("replace into `ecs_users_activity` values('3','4373','随风潜','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6tMkmiaSrJ0aZ4MP6KsP2K5JSZbTYIgZictbGvwxB76XBNlP2YKky4xMR9zLzYUfqFticKwAFRGkaX8uvrwIjhsCmm/0','24','5','20.00','20.00','1453961541','0','0');");
E_D("replace into `ecs_users_activity` values('4','4272','建华传媒','http://wx.qlogo.cn/mmopen/2qmw3N1fBBOHrHicE7v6TicjT1lcUdia6pYaEf3v0lljHLIS3jPibGWJAL6jojB4SibMXuT6XQ7p0Qy403Aq353kt3ic0VCy3iboTq1/0','24','5','20.00','18.05','1453962029','0','0');");
E_D("replace into `ecs_users_activity` values('5','4696','在一起','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl4xHiczdqdNVL9xyicWF8eoBrpdZvjzOibibs27E4CRLYY3Pk56UbJl1jCHCV2HusFgzPxsviapkHNLZb6H7g1hejk06/0','24','5','20.00','15.68','1453962196','0','0');");
E_D("replace into `ecs_users_activity` values('6','4699','。Cui mohan','http://wx.qlogo.cn/mmopen/ib7Efy61IoTCJ1zrNiaxGERR7qzN6W6CG4ZlBxFRmVIQheV1UjTcS6LpaqMLp2SoWTb8fO4KOPhebW8pHTraG5SvbicTvtf2K8ic/0','24','5','20.00','20.00','1453962915','0','0');");
E_D("replace into `ecs_users_activity` values('7','4275','A阿华','http://wx.qlogo.cn/mmopen/9OakAVM0cSbPrdgtx9ekT3Ha8cHiaibMvuQWbKmSK6IicH4Kw6ibkLCOJxk435u8pDiciczYKI1DfxgzdcgT7MAw1iaLcaibFnibCZiaVn/0','24','5','20.00','11.49','1453963385','0','0');");
E_D("replace into `ecs_users_activity` values('8','4284','王美佳','http://wx.qlogo.cn/mmopen/ib7Efy61IoTC0uP7zicroPrVyuFh9CiaDZKOp0MK0w2Jibcwe5doibXDy7p6b6o0AtzyfQeIDciaDc5JY6Aps3606XQrZ88PU2uyTt/0','24','5','20.00','14.09','1453963567','0','0');");
E_D("replace into `ecs_users_activity` values('9','4565','刘义桥大师弟子·兰江宁','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6tvaesBDEgGdP08Nbpz9eZDx5WNnWHL9JromPBNVYRKrIN9DPibnfORSM4MZ8IY1o72DHLt8GBJBHmPOVib7hjGXa/0','24','5','20.00','15.84','1453963569','0','0');");
E_D("replace into `ecs_users_activity` values('10','4651','洛辰-日本代购、留学','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl7MMmUfJtPwZ3s8UuqnRTahVuLnLHS5kTUfCwjw1UuQZT25UhaEhluc7mvLJica7vbunUaTmibkOXDC0nialKKp5ud/0','24','5','20.00','18.11','1453963928','0','0');");
E_D("replace into `ecs_users_activity` values('11','4703','车明亮','http://wx.qlogo.cn/mmopen/PiajxSqBRaEJibhClFlsRKVxkULBbqv3yxicyaqyZM8ujNrdhbmDjCHkXB7VwUuStLX1Pj3vPhoqh3oibVwMF9veDA/0','24','5','20.00','17.72','1453963972','0','0');");
E_D("replace into `ecs_users_activity` values('12','4680','蒙仕杰~爱才通公司','http://wx.qlogo.cn/mmopen/ib7Efy61IoTCa81PxgXjKC9wNWGuXjqyrttrLC942lKzop2mCoibtFrdkfPYIqmLW5rf68Cs4sEeic4f0AcicCibE9YDHyH4TebCH/0','24','5','20.00','16.85','1453964305','0','0');");
E_D("replace into `ecs_users_activity` values('13','4298','周明生','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6tMkmiaSrJ0aZicvbZFXzvQGITksicoBQqStE00ia3ibk2oZna857Zicajch18SJnrPbwNicvSPQ6zXUuichxn2CmY612u2/0','24','5','20.00','17.67','1453965474','0','0');");
E_D("replace into `ecs_users_activity` values('14','4663','无界智慧金融--鱼涛','http://wx.qlogo.cn/mmopen/PiajxSqBRaEJ6UCgIBVO5NEaj24wibUySQ7e10mlicKiaCYIfOY49RdmpLxx2WmFoWO58ReAtXBYqhV0mibkjo0cxRw/0','24','5','20.00','15.44','1453966816','0','0');");
E_D("replace into `ecs_users_activity` values('15','4674','小于哥','http://wx.qlogo.cn/mmopen/ZMdxSDafpxTC1v2Yibiau0EMz4gklJV8j8Z8ee6Bibxpa6A4tlWy16napA4tUibu6mwTuYibuT5ZNtEc3aqL5uYrRlnVtnIS0T8eD/0','24','5','20.00','18.82','1453967853','0','0');");
E_D("replace into `ecs_users_activity` values('16','4225','巨匠 微信超級會員','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6uY6ibwUq4koibQyXd5RsVr0h6UsrayHrR1bET5VW99cVgqcicDn7tU6TTxD2h22kgW1HvT4TbXZyfc71HevdEfH0F/0','24','5','20.00','18.02','1453968864','0','0');");
E_D("replace into `ecs_users_activity` values('17','4722','徐骏杰','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6tMkmiaSrJ0aZ8KCTe24l6pIEVxmd5JL3tNG8gZ5d2CAGfF2g8ZwYtf7tyYOsBwCWKN5hZr0icZ7mnDAznFmmMCab/0','24','5','20.00','16.81','1453969140','0','0');");
E_D("replace into `ecs_users_activity` values('18','4404','平凡的人','http://wx.qlogo.cn/mmopen/ZMdxSDafpxRVdbUja4umKfiahhiaZiaf2Tib5ibdW8oBg0ic2a4pz9C3YcpMzhcwmFhnpMN7MpMZGPAaxhq5Z3aU29rw/0','24','5','20.00','18.82','1453970999','0','0');");
E_D("replace into `ecs_users_activity` values('19','4725','艾歌','http://wx.qlogo.cn/mmopen/ZMdxSDafpxTC1v2Yibiau0EHicpMiano0oUdWCUd4NGTZzwj9mZFLibkggPFzZ5d5OzMFLAcqa3RAusZGFia8txmicTeBOvOkWibv6xT/0','24','5','20.00','18.80','1453971511','0','0');");
E_D("replace into `ecs_users_activity` values('20','4659','a金刚','http://wx.qlogo.cn/mmopen/ajNVdqHZLLAibpyQrbVfdLkuia6FsE36UFJiac0ZfTwv8ThDPxllY7mdXxw8xEv6nAibspnhtBjSkm9z4omsyuD8eg/0','24','5','20.00','14.22','1453973416','0','0');");
E_D("replace into `ecs_users_activity` values('21','4630','【51魟鱼网】51hongyu.com','http://wx.qlogo.cn/mmopen/MDujI20ZrCUjqjibiammfEzK9HcRtZ5hv5bkAhRTuTaicsKoA6HrYgXyepz7Zo7Ew5ePJxQTB2Cnfu2ZNeokyBWr6ugTywzpeJz/0','24','5','20.00','17.70','1453973818','0','0');");
E_D("replace into `ecs_users_activity` values('22','4677','品茶修心 坐而论道-我是密谋茶馆','http://wx.qlogo.cn/mmopen/ZMdxSDafpxTC1v2Yibiau0EEOWJoCLcj67MhOib5qe2FPBNNCf4FNjibWHiaHSibKr9uTx4jfDDXQzr9KFQxsicniaZrTbZzCX6ib7cXs/0','24','5','20.00','16.34','1453976725','0','0');");
E_D("replace into `ecs_users_activity` values('23','4737','兰色姿恋','http://wx.qlogo.cn/mmopen/Q3auHgzwzM59t54x0WO4DC6SVhwicJpfjjJLrMWpTpzVbBHClc8gc4ZsSGWt4SmU3MyAD1Jy9XeLWJeeYkZGqInUV9qX9vFA1M7Imn6gEmCU/0','24','5','20.00','16.16','1453991616','0','0');");
E_D("replace into `ecs_users_activity` values('24','4498','小龙虾','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl781ldteHN3QefRJG6pj3muxVdI0bZKLyjNjRSuAyb6x3V7BB0WI7C5crIvvBjEvPqmiaiblicDvM88DGQOeQQKUvZ/0','24','5','20.00','16.53','1453994080','0','0');");
E_D("replace into `ecs_users_activity` values('25','4293','马华泉','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl5hgUd91Aiagps9jticMlqE5ia3dJjkVDsjBUJL7Y1oqzOwuLqOOHG7nxxBRomeZFVKEN9UCLYicTGG9f3GzW0Gm7Hc/0','24','5','20.00','16.03','1453997770','0','0');");
E_D("replace into `ecs_users_activity` values('26','4739','~知足常乐~吴东国','http://wx.qlogo.cn/mmopen/ib7Efy61IoTBRS4IY49lGmqkretvGzajOIUEXPANl10Cczs3cPbcIH1al98LM6iaT2odcy8fXGSK4EMGlgdG7GAkWfqXqBibVOp/0','24','5','20.00','20.00','1453999210','0','0');");
E_D("replace into `ecs_users_activity` values('27','4740','春明','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl5hgUd91Aiagph18pqXXQB3tQic7q65Qia2ze0ILibk4T3xLbxBpLMhe7Ucg7NWRMN9MHrqx1Ka35wGMHOAiaqEGN8gp/0','24','5','20.00','15.84','1453999639','0','0');");
E_D("replace into `ecs_users_activity` values('28','4741','玮哥~超级派对CEO','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6tvaesBDEgGdA0ZGoQHPstZoJLD2AZ9tJv99p6nwOxodqXiaNib5x2sIlwJ1ysSy6rSozB01mFP8tibF8EoIHubmpF/0','24','5','20.00','18.15','1453999729','0','0');");
E_D("replace into `ecs_users_activity` values('29','4427','家大于天','http://wx.qlogo.cn/mmopen/ib7Efy61IoTDfdjaN2k3ZoCVwiahicUDrTHaw20aWmpiaYF5g8an8lBOtM3ia5BZPiax7XDjkbuxKplWFLTUArYWOTb8h8ewBxqpaL/0','24','5','20.00','15.16','1454000650','0','0');");
E_D("replace into `ecs_users_activity` values('30','4753','芯    碎','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6ulfylfCayZF2yDMybCwUWLWVwjkmicZPWiaGWZqtJrTVvTT6XSNB0dVU2ibsbicHq6HZ1QYz2JmYFPut6ribsMo9I3c/0','24','5','20.00','17.15','1454004326','0','0');");
E_D("replace into `ecs_users_activity` values('31','4587','曾毅','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6tMkmiaSrJ0aZ2m0lu7evyFCX9f6ibKT43icKfEwXsLh0XIVm8jiba4czGojMJh2mzwoaZjiawd05U40RhoBgootbOWz/0','24','5','20.00','20.00','1454005194','0','0');");
E_D("replace into `ecs_users_activity` values('32','4448','cc','http://wx.qlogo.cn/mmopen/ib7Efy61IoTCJ1zrNiaxGERYRnbU9cmk8135iaibjXWpGake7wy3OYUH1TzjE9ufcvDp8VMo0ibdTTDZnEs3wp0dOejHic2ZhDw5dx/0','24','5','20.00','15.04','1454011616','0','0');");
E_D("replace into `ecs_users_activity` values('33','4772','yongsen','http://wx.qlogo.cn/mmopen/ZMdxSDafpxQD2AYFER3of5hibVjXibOh9vXDuL0yzcwe84BTtvibJBvZchGewVEqiaeSC9E2MVrX2hUveLJicIlxOog/0','24','5','20.00','17.69','1454023860','0','0');");
E_D("replace into `ecs_users_activity` values('34','4557','毛明祥-艾祥电商','http://wx.qlogo.cn/mmopen/PiajxSqBRaELZCpA8TUobQLP8bH5ic4rSNicxTNVbCUvd1cb4DKbCJC28ZicKz21ou8RPCibNIJjIfAlcBqIEKOwqeg/0','24','5','20.00','20.00','1454028812','0','0');");
E_D("replace into `ecs_users_activity` values('35','4333','临沧慧明科技','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6tvaesBDEgGdBCRlkpQM3GM1Ts6e2Vq4Ruhy5F9iahY3csgD09JuMSfh4buj7iaFicTiaHba5JDtoDrwKHxrSnlPwgu/0','24','5','20.00','15.12','1454029036','0','0');");
E_D("replace into `ecs_users_activity` values('36','4325','大城','http://wx.qlogo.cn/mmopen/PiajxSqBRaEI86dPcm4EnogIE0piaoVTzUnzsv8cz7WuibRUbfdsLK1KyY2a4SJmmvPMFicDEx8OIHFSJbocIKApsg/0','24','5','20.00','17.73','1454033149','0','0');");
E_D("replace into `ecs_users_activity` values('37','4381','a.吴国硕','http://wx.qlogo.cn/mmopen/PiajxSqBRaEJDV8Il6Sy3Ezp65cLPia5wYicX3CMib2y9icsXtMt7GvZic07dGhgmpGBvIa7rPZA6bbZuP6FXV1uz4GQ/0','24','5','20.00','20.00','1454045638','0','0');");
E_D("replace into `ecs_users_activity` values('38','4781','吾皇万岁','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6tMkmiaSrJ0aZ4M5MnEyTw2HVA51ia1p4uh33PDaat2LyhswaJ5c7LNGiarhFW1Wx8NIHv4MqsJ0alwTIb9WmpE72U/0','24','5','20.00','18.34','1454053339','0','0');");
E_D("replace into `ecs_users_activity` values('39','4793','读前往后从','http://wx.qlogo.cn/mmopen/MDujI20ZrCUjqjibiammfEzPcibooFOFGBF5e5gdlSpjfFQ5e7tDYQCH8uZsmWvWGLBic0Cn0q5tKbpvt7Twz8MabqfAhXXiaJHicq/0','24','5','20.00','18.70','1454128670','0','0');");
E_D("replace into `ecs_users_activity` values('40','4792','Mr.Alimjohn','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl5hgUd91AiagpkBgw2AWCHLCepA4KBBkYaHgTInibP0wyuiacnCnLFygGLsYVV5qZSn1zqlALybgjZLEtEicmfJJ8or/0','24','5','20.00','16.91','1454132423','0','0');");
E_D("replace into `ecs_users_activity` values('41','4800','@༄ཉི奥巴牛ཉྀ༄','http://wx.qlogo.cn/mmopen/ib7Efy61IoTAXQKD01uKw9g8gicaHfyV4duQvC25XNomCT5yyxxzFeFJRc69Ogt9iaZTYBjooExtgelXQ6JNgFrU2bAWvgWCzHN/0','24','5','20.00','20.00','1454153871','0','0');");
E_D("replace into `ecs_users_activity` values('42','4799','我的未来不是梦','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl5hgUd91AiagplUpc7lZiamiaAyDfibrEWxScuOHlqu5iarlNEkzibvbY2EwwJW9CaECPg5ibbAKlftdEUMmjG11x6g4nY/0','24','5','20.00','15.52','1454183897','0','0');");
E_D("replace into `ecs_users_activity` values('43','4586','风扬技术小钟','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl6UOlVTzOvsrAyHU3IJhMLPbHPrZN2CEsEp4U3oNWlFHQow048Mf7HDavPyP6sfVPGvwytu2xjKzsvINLcwuXAd/0','24','5','20.00','17.82','1454226391','0','0');");
E_D("replace into `ecs_users_activity` values('44','4813','卫亮','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl5hgUd91AiagpsbecRY71VJhOXlW9BTicLiaZiaS9s1N9jj91wNoia5ZQnic9dCBqZjVqYMlytzXBq4qJC1Md93cia67LN/0','24','5','20.00','17.74','1454274040','0','0');");
E_D("replace into `ecs_users_activity` values('45','4820','A农民٩(๑❛ᴗ❛๑)۶','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl5hgUd91AiagptLPwaDD3lvpQ3h4lRr9UOaJZ1Na4uUVoxvf1qXN92Nww9KicIkybsFL99JgT8EIahQE0KpD2HrDR/0','24','5','20.00','17.63','1454316929','0','0');");
E_D("replace into `ecs_users_activity` values('46','4483','Joom','http://wx.qlogo.cn/mmopen/ajNVdqHZLLAcObV13IXqSta8Mj2bJNO7HkRFY8512rwgRqcVXYYyLtpY8PHCLRiatRa3Gn3InyiaSS9FwAdfxd4xuCIY8Lc7U0k4bG9yelzY4/0','24','5','20.00','17.04','1454317898','0','0');");
E_D("replace into `ecs_users_activity` values('47','4317','李健','http://wx.qlogo.cn/mmopen/ib7Efy61IoTCqQb0o9ricFTCIm1PbgjXBBy19amDCgzZmVDk82jW9Jet297ibXZhUG5xtTUKZL3icB1jm7YZhsXnJiaDRQ5UPiclZl/0','24','5','20.00','11.86','1454321568','0','0');");
E_D("replace into `ecs_users_activity` values('48','4829','王凡','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl5hgUd91AiagprVJDia2iaXibjtIIMfzmZQ8ZA6o4v5bf4Vv10cejlQ6I7pPibU9R5ORIN7LYelnGLibOHZ7fsW3718cf/0','24','5','20.00','16.57','1454396983','0','0');");
E_D("replace into `ecs_users_activity` values('49','4835','A00000扭转乾坤','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl5e7Fa5fYRYQ4oa1WQGZicRo0wnUib5RNCyE4quoVJkq9muW9SzZCDPKmeMS68eyHO6PQF4ia3mgdgKkNdiaamZFKmn/0','24','5','20.00','20.00','1454432883','1','0');");
E_D("replace into `ecs_users_activity` values('50','4836','苏继龙','http://wx.qlogo.cn/mmopen/Q3auHgzwzM5Y5S0LLVsBkmB8MlxWOmAryVgQUyjQvaRVTm9k6ZKTIO2ZrPob6ib1068xhoEZXmSuta67oGBr6Iw97J2pxa3oY6uF2hMMS4Ag/0','24','5','20.00','16.24','1454438645','0','0');");
E_D("replace into `ecs_users_activity` values('51','4412','杉伊','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6uZHLoMuN4hjAA06mtiaPWAEXblFibziaSyQ8p9bCUGyiaFH5puJy0yaJs3kXOw8WXpSh2ibLSGGCgL59IQe5PzCFjoq/0','24','5','20.00','17.60','1454462435','0','0');");
E_D("replace into `ecs_users_activity` values('52','4849','林总','http://wx.qlogo.cn/mmopen/ib7Efy61IoTA1FfGoHpd38gqUqJib7ic4RYnibF98t8E1xOMb2niar4X8J4PA2O4bFwVRiazqJ90DHlqss0aAaNNoSmOmBiatjiaRR8r/0','24','5','20.00','20.00','1454545573','0','0');");
E_D("replace into `ecs_users_activity` values('53','4184','jiancheng','http://wx.qlogo.cn/mmopen/ibnbXAZSrgicKlf9SrF3M5Gs4d74TMPw6YXJGlzib8jHVBT7cC8Q2Rhg4MuM0xwVux1xRnHb43m7TFnm9uWIQmmZAfSB7mwhgu3/0','24','5','20.00','10.76','1454560424','0','0');");
E_D("replace into `ecs_users_activity` values('54','4779','tianxin4779','','24','5','20.00','15.99','1454564730','0','0');");
E_D("replace into `ecs_users_activity` values('55','4852','向权','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6vsVIkk4EFp8jFmVBia2fzyPILlsmdZJwS0gjs6ZN32ic6CXHmSta33kvPWgjlUl751wT3POaAGicdrAjSgBJKFgvh/0','24','5','20.00','18.54','1454601411','1','0');");
E_D("replace into `ecs_users_activity` values('56','4881','。洃冭誏ヽ','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl5hgUd91AiagpqgIcaibSstLkfOtSicIdanmngsG4deMqp7BT3WK4N1QC4ibjZ5ffOcq0LlWtpoB7v3veDBPwDciaNDZ/0','24','5','20.00','15.89','1455494643','0','0');");
E_D("replace into `ecs_users_activity` values('57','4879','星石久久xing499.cn','http://wx.qlogo.cn/mmopen/ib7Efy61IoTC4wcyib2GTqwrwXNHowUQUWMfrl5p8fc4zYZcZc1JG19zuGrj9AAmQxQBgpuktvWF5ApuOAcRzPCmfaj4I5Nklib/0','24','5','20.00','16.09','1455501850','0','0');");
E_D("replace into `ecs_users_activity` values('58','4921','热带鱼','http://wx.qlogo.cn/mmopen/ib7Efy61IoTCJ1zrNiaxGERTQMYGU73QnZCWF4kqibiapEDlEPX4eicTnBR1V2flsmeUdWdEUV9icobDppReFDVSMSHuk3fdlAzvnU/0','24','5','20.00','12.33','1455691624','0','0');");
E_D("replace into `ecs_users_activity` values('59','4443','超越梦想一营养师','http://wx.qlogo.cn/mmopen/ZMdxSDafpxTNqEapPl1xFt8hm6lhPpPQo754dFlrVKpxoBkwib064aoto4nX73g87My0vBadIgFE2TXrSSOIia1A/0','24','5','20.00','17.34','1455694170','0','0');");
E_D("replace into `ecs_users_activity` values('60','4607','怡人晓欣','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl7jFdhK25ERs1oqBC9bQf7W2h2qoabOibjBwwAG0cbR9aUQSHicQQxVZ4tvvrRLFichx3QgAo2DYeqrJHJa2bl5CC8/0','24','5','20.00','17.16','1455822935','0','0');");
E_D("replace into `ecs_users_activity` values('61','4939','大王叫我来巡山','http://wx.qlogo.cn/mmopen/ZMdxSDafpxQQp7HtvhbKSIBD0psAz05w2yRoLuB6aaBVXicb8eYnv5nYYkiaWlYv1jaHqleQTiacN1RrmeGqSEgKw/0','24','5','20.00','15.21','1455844044','0','0');");
E_D("replace into `ecs_users_activity` values('62','4953','[万才商业模式]~张万才','http://wx.qlogo.cn/mmopen/ib7Efy61IoTCJ1zrNiaxGERQKUyQIIL9N27GJUMnvOdlgLfd3YFZiaVSoddfYQU6GZjFOVN8nxdu6F7vUzx85e1hm1iaKe7QCxU8/0','24','5','20.00','15.03','1455863880','0','0');");
E_D("replace into `ecs_users_activity` values('63','4956','A芳尔鲜花客服5','http://wx.qlogo.cn/mmopen/MDujI20ZrCUjqjibiammfEzKEK1XOtW6blicNTh8BRsZ4SJbXmws01REGZsTanGdibiabjWpq4n4gpejsWGcibQFrLgFyOvOrBllibt/0','24','5','20.00','20.00','1455869295','0','0');");
E_D("replace into `ecs_users_activity` values('64','4668','狐云网络','http://wx.qlogo.cn/mmopen/ib7Efy61IoTA36L7OGiajyAdiaicnia4MwDMCpYTG553P9QTDkGqYOuzsrD0gJQAGWWREpKHFGouciafZ27r0dw4lpVHmunmyPMpEg/0','24','5','20.00','16.64','1455876019','0','0');");
E_D("replace into `ecs_users_activity` values('65','4965','佳玖百货','http://wx.qlogo.cn/mmopen/c3BoXQhZGs0fKrHH57xlavrSavOL4BQMibUkvb4gqiaiatAAfY4W2yu2C4wiagYckr3e9keQmDYiaJ5ljzJwo1P8sqOrpvPVickkKB/0','24','5','20.00','15.02','1456000651','0','0');");
E_D("replace into `ecs_users_activity` values('66','5026','刘佳','http://wx.qlogo.cn/mmopen/ibnbXAZSrgicKlf9SrF3M5GrG7sC8iabwxsYjcHlmwvGE88RbE2rRAyvvibJ6WWia5nHH3iaqXDYHrfwvmFklBHibuLa5xg97z6bPIM/0','24','5','20.00','14.35','1456426592','0','0');");
E_D("replace into `ecs_users_activity` values('67','5046','DinS-香港诺希（NOHON）','http://wx.qlogo.cn/mmopen/ib7Efy61IoTC0uP7zicroPrQraCbLiaHicJ1kvvwcbibYPcJ4uKOoJQbtX8oY0icAnic3zAWtsibPYFKQWcQlHnXIzezBiaiaTmzMa5Aic3/0','24','5','20.00','17.20','1456427927','0','0');");
E_D("replace into `ecs_users_activity` values('68','5075','勇往直前','http://wx.qlogo.cn/mmopen/ib7Efy61IoTCJ1zrNiaxGERTE6c80W3G8PkESYTSvPspicrN1BRTGzXwWzeEj7zcgPGRia062YVkzV8ftYZ7GsWJzSnmFGs8r9ibI/0','24','5','20.00','20.00','1456609454','0','0');");
E_D("replace into `ecs_users_activity` values('69','5135','Bing','http://wx.qlogo.cn/mmopen/2KjiaxU8ZEl63iatatlUbMfK05F1YW92rc3myuJHTwmKfVeFLBuE3wBF3nfxiaB8Y6Iz0tHIuKTiaGtTKT89pJTnrg/0','24','5','20.00','17.05','1456948128','0','0');");
E_D("replace into `ecs_users_activity` values('70','5137','小强','http://wx.qlogo.cn/mmopen/ZMdxSDafpxR1lMoltBlHrwoOoKSRf31TVQCyebrcQlicCKUeS4v6WCXay9SK0xJoZicoQsDbLTuDzgspH2IHLURg/0','24','5','20.00','15.54','1456957335','0','0');");
E_D("replace into `ecs_users_activity` values('71','5052','鹏','http://wx.qlogo.cn/mmopen/ZMdxSDafpxS9zPJRDxFcQFrzXW4vXnxOO3bXDHmQGKTe0SQ5rheIlo1Ks5z8YUGMHu9OBkjcdTbfB0mMYFt7Gw/0','24','5','20.00','20.00','1456963815','0','0');");
E_D("replace into `ecs_users_activity` values('72','5141','frank','http://wx.qlogo.cn/mmopen/omcwWwUiapMl5Eo05BoNtk1WRib1WyqpiagwnAqNOqMOIzTN2y9ISPomaHa7X0WkQ3l7MGfhH3faTkBpmibGjWia2HE6KWuHtoxht/0','24','5','20.00','20.00','1456963836','0','0');");
E_D("replace into `ecs_users_activity` values('73','4516','阿雷-易天','http://wx.qlogo.cn/mmopen/ZMdxSDafpxTC1v2Yibiau0ELlIyBVpk0ZUEwqz6ohHSwksQv9EYXJ1fAogoZdcaFmhb78QfaLQSYJ6KaSHFOep02op15zzaicNj/0','24','5','20.00','20.00','1456983529','0','0');");
E_D("replace into `ecs_users_activity` values('74','5150','ming','http://wx.qlogo.cn/mmopen/ib7Efy61IoTCNW7eB2T1RPrCBibTO27rRdO6rfAXyc3oBC96Fg34e5UW2uaHjbTEOZgm3ZanBO5mXZEpLas6VF4h5riatg9wpIL/0','24','5','20.00','8.50','1456992465','1','0');");
E_D("replace into `ecs_users_activity` values('75','5151','taobao123','','24','5','20.00','17.68','1456992768','0','0');");
E_D("replace into `ecs_users_activity` values('76','5155','a珍惜☜╭(╯ε╰)╮☞拥有','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6tMkmiaSrJ0aZ838zryyW2fBozfWROBZe0sXKPsGkhv3dXn1rdTNibwMQVlrzrr13GPEFccWYfLj8ibkprSjL6FsIe/0','24','5','20.00','20.00','1457034860','0','0');");
E_D("replace into `ecs_users_activity` values('77','5159','优雅地生活 优雅地老去-金惑金','http://wx.qlogo.cn/mmopen/ib7Efy61IoTCDnzN0C0ceq0ibicVzBQAfxD2FnTuMaggicg3eJ4ibyTiaibOvsSOetnib6DqTG3tgg5NY724P6aPgbAF1kJZ0BQLNOMm/0','24','5','20.00','16.75','1457043467','0','0');");
E_D("replace into `ecs_users_activity` values('78','5176','风一样的年华','http://wx.qlogo.cn/mmopen/iaJ9CYbic2W6tLoXgzoZzrLW6OAqbNJfgKgCXLaLIWaSTtO7ib4TLcqibm8hWjlNCrQovzyE5uMHwkwBeobzgjasMT6HJru2Fbee/0','24','5','20.00','16.71','1457150538','0','0');");
E_D("replace into `ecs_users_activity` values('79','5073','扬帆网.汪咏权','http://wx.qlogo.cn/mmopen/PiajxSqBRaEKOZBYFysmyoYQnRG6TwX83ia5bcicgJr4ABdkVic6gXL9KATyUYCXtol5s03dYg6GHDiaibbwOxibjV2ng/0','24','5','20.00','20.00','1457197971','0','0');");
E_D("replace into `ecs_users_activity` values('80','5193','李健','','24','5','20.00','17.02','1457246228','0','0');");

require("../../inc/footer.php");
?>