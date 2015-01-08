<?php
/**
 * 基本数据来源：excel直接拷贝粘贴到这里
 *               空白字段需用“0”或其他默认字符补齐
 * 输出到控制台/页面 直接拷贝到对应文件
 */

/*
//种子基础信息 SeedData.cfg.php

$data = 'ID	形象	名字	中文名字	部位	稀有度	解锁等级	成长值
1001	n_seed_b001	たねっこ	种球	1	1	1	20
1002	n_seed_b007	わたっこ	绒球	1	2	1	20
1003	n_seed_b002	まめっこ	黄豆	1	3	1	56
1004	n_seed_b003	なしっこ	梨	1	4	2	160
1005	n_seed_b004	ドリアンっこ	榴莲	1	5	3	293
1006	n_seed_b005	もくっこ	云团	1	6	4	540
1007	n_seed_b006	ハナツボミ	花苞	1	7	5	831
1008	n_seed_b008	たにくっこ	橡皮	1	8	6	1527
1009	n_seed_b009	くりっこ	栗子	1	9	9	1924
1010	n_seed_b010	トマっこ	番茄	1	10	12	2351
1011	n_seed_b011	キャロっこ	胡萝卜	1	11	15	2805
1012	n_seed_b012	パプリっこ	灯笼椒	1	12	18	3286
1013	n_seed_b013	モモっこ	桃子	1	13	21	3791
1014	n_seed_b014	ベリーっこ	蓝莓	1	14	24	4320
1015	n_seed_b015	リンゴっこ	苹果	1	15	27	4871
1016	n_seed_b016	サンザシ	山楂	1	16	30	5443
1017	n_seed_b017	チェリっこ	樱桃	1	17	33	6037
1018	n_seed_b018	ザクロっこ	石榴	1	18	36	6651
1019	n_seed_b019	モロコシっこ	玉米	1	19	39	7284
1020	n_seed_b020	ニンニっこ	蒜头	1	20	42	7936
1021	n_seed_b021	ライム王子	青柠王子	1	21	45	8606
1022	n_seed_b022	ドンさん	橡果	1	22	48	9295
1023	n_seed_b023	メロンっこ	香瓜	1	23	51	10000
1024	n_seed_b024	キャベっこ	卷心菜	1	24	54	10240
1025	n_seed_b025	タケっこ	竹笋	1	25	57	11214
1026	n_seed_b026	パイナっこ	菠萝	1	26	61	12218
1027	n_seed_b027	イチゴちゃん	草莓	1	27	65	13251
1028	n_seed_b028	ヘーゼルナッツ	榛果	1	28	69	14310
1029	n_seed_b029	つぼみっこ	菜根	1	29	73	15397
1030	n_seed_b030	ケーキさん	蛋糕	1	30	77	16510
2001	n_seed_f001	スマイル	微笑	2	1	1	25
2002	n_seed_f002	キラメキ	哈哈	2	2	1	25
2003	n_seed_f003	すこやか	大嘴	2	3	1	75
2004	n_seed_f004	ねむねむ	闭眼	2	4	2	125
2005	n_seed_f005	ワクワク	喵	2	5	5	200
2006	n_seed_f006	ハッピー	小鼻子	2	6	8	275
2007	n_seed_f007	ウットリ	眯眼	2	7	12	375
2008	n_seed_f008	もふもふ	兔脸	2	8	16	475
2009	n_seed_f009	ゆかいな	快乐	2	9	20	575
2010	n_seed_f010	せいじつ	长睫毛	2	10	24	675
2011	n_seed_f011	イジワル	邪恶	2	11	28	775
2012	n_seed_f012	パッチリ	大眼珠	2	12	32	875
2013	n_seed_f013	ソボクな	抿嘴	2	13	36	975
2014	n_seed_f014	テレてる	羞涩	2	14	40	1075
2015	n_seed_f015	たおやか	小嘴巴	2	15	44	1175
2016	n_seed_f016	オシャレ	妩媚	2	16	48	1275
2017	n_seed_f017	モエモエ	长眼睛	2	17	52	1375
2018	n_seed_f018	やこうせい	猫头鹰	2	18	56	1475
2019	n_seed_f019	ニヒル	深邃	2	19	60	1575
2020	n_seed_f020	ツンデレ	傲娇	2	20	64	1675
2021	n_seed_f021	とくいげ	穆先生	2	21	68	1775
2022	n_seed_f022	ニャーニャー	高级喵	2	22	72	1875
2023	n_seed_f023	ドキドキ	明亮	2	23	76	1975
2024	n_seed_f024	ふきげん	不开心	2	24	80	2075
2025	n_seed_f025	キュート	可爱	2	25	84	2175
2026	n_seed_f026	イケてる	帅气	2	26	101	2175
2027	n_seed_f027	つぶらな	撒娇	2	27	101	2175
2028	n_seed_f028	スイートな	甜甜	2	28	101	2175
2029	n_seed_f029	なきむし	纠结	2	29	101	2175
2030	n_seed_f030	ウサギな	兔牙	2	30	101	2175
2031	n_seed_f031	ベビーフェース	baby	2	1	1	0
3001	n_seed_r001	ツルをのせた	瓜藤	3	1	1	15
3002	n_seed_r002	ミツバをのせた	三叶	3	2	1	15
3003	n_seed_r003	ヘタぼうしの	六叶	3	3	1	77
3004	n_seed_r004	つるキャップの	藤蔓	3	4	2	167
3005	n_seed_r005	ハッパだらけの	五叶	3	5	4	277
3006	n_seed_r006	ヤシをのせた	椰树	3	6	7	474
3007	n_seed_r007	なにかがはえた	芽条	3	7	10	703
3008	n_seed_r008	てんしアクセの	光环	3	8	13	960
3009	n_seed_r009	ミントをのせた	薄荷叶	3	9	16	1242
3010	n_seed_r010	クローバーの	四叶草	3	10	19	1547
3011	n_seed_r011	スズランがさいた	铃兰	3	11	22	1875
3012	n_seed_r012	キンモクセイの	金木樨	3	12	25	2222
3013	n_seed_r013	ほしアクセの	星光	3	13	28	2589
3014	n_seed_r014	モヤシをのせた	豆芽	3	14	31	2973
3015	n_seed_r015	ほのおアクセの	火焰	3	15	34	3375
3016	n_seed_r016	スイセンがさいた	水仙花	3	16	37	3794
3017	n_seed_r017	イチゴニットの	草莓花	3	17	40	4229
3018	n_seed_r018	ラッパバナの	小喇叭	3	18	43	4679
3019	n_seed_r019	キノコぼうしの	蘑菇	3	19	46	5145
3020	n_seed_r020	ウメをのせた	梅花	3	20	49	5624
3021	n_seed_r021	ヒガンバナの	石蒜花	3	21	52	6118
3022	n_seed_r022	センニチコウの	千日红	3	22	55	6625
3023	n_seed_r023	アジサイがさいた	绣球花	3	23	58	7146
3024	n_seed_r024	アサガオがさいた	牵牛花	3	24	62	7860
3025	n_seed_r025	サンゴぼうしの	珊瑚	3	25	66	8597
3026	n_seed_r026	カボチャハットの	南瓜	3	26	70	9355
3027	n_seed_r027	クリームアクセの	奶油	3	27	74	10135
3028	n_seed_r028	ユリぼうしの	百合花	3	28	78	10935
3029	n_seed_r029	ベリークラウンの	浆果王冠	3	29	82	11754
3030	n_seed_r030	ビスカクラウンの	扶桑王冠	3	30	86	12594
4001	n_seed_e001	セミの羽	蝉翼	4	1	1	0
4002	n_seed_e002	白い羽	翅膀	4	2	1	0
4003	n_seed_e003	わんこの耳	狗耳朵	4	3	1	0
4004	n_seed_e004	まるい耳	招风耳	4	4	3	0
4005	n_seed_e005	こぞうの耳	小飞象	4	5	5	0
4006	n_seed_e006	雲の鼻	云花	4	6	8	0
4007	n_seed_e007	リボン	蝴蝶结	4	7	11	0
4008	n_seed_e008	こぐまの耳	熊耳朵	4	8	14	0
4009	n_seed_e009	ねこの耳	小叽耳	4	9	17	0
4010	n_seed_e010	小さな花	蛋黄花	4	10	20	0
4011	n_seed_e011	かわいい葉	小树叶	4	11	23	0
4012	n_seed_e012	大きなウロコ	鱼鳍	4	12	26	0
4013	n_seed_e013	ファーの耳	毛耳朵	4	13	29	0
4014	n_seed_e014	ひつじの角	绵羊角	4	14	32	0
4015	n_seed_e015	てんとう虫の羽	瓢虫壳	4	15	35	0
4016	n_seed_e016	悪魔の翼	恶魔翅膀	4	16	38	0
4017	n_seed_e017	蝶ネクタイ	小领结	4	17	41	0
4018	n_seed_e018	ネイビーなカラー	娃娃领	4	18	44	0
4019	n_seed_e019	スカーフ	领巾	4	19	47	0
4020	n_seed_e020	もこもこマフラー	毛领头	4	20	50	0
4021	n_seed_e021	花のネックレス	花项链	4	21	53	0
4022	n_seed_e023	虫とりあみ	网兜	4	22	56	0
4023	n_seed_e024	おだんご	小丸子	4	23	59	0
4024	n_seed_e025	わたがし	棉花糖	4	24	63	0
4025	n_seed_e026	風船	气球	4	25	67	0
4026	n_seed_e027	トッピングアイス	巧克力酥	4	26	71	0
4027	n_seed_e028	アイスクリーム	冰淇淋	4	27	75	0
4028	n_seed_e022	ひつじの	绵羊帽	4	28	79	0
4029	n_seed_e029	あやしい頭巾	包头巾	4	29	83	0
4030	n_seed_e030	イチゴのバッグ	草莓包	4	30	87	0
';
$data = str_replace("\r","",$data);
foreach ( explode("\n",$data) as $line ) {
    if( empty($line) ) continue ;
    $tmp = explode("\t",$line);
    echo $tmp[0]." => array(\n\t'dataName' => '$tmp[1]',\n\t'image' => '$tmp[0]',\n\t'dataType' => '$tmp[4]',\n\t'level' => '$tmp[5]',\n\t'unlockLevel' => '$tmp[6]',\n\t'growValue' => '$tmp[7]',\n),\n";
}



*/



/*
//种子部件名字对应的语言文件 
//message/$LANG$/SeedData.php

$data = "
n_seed_b007	わたっこ
n_seed_b001	たねっこ
n_seed_b002	まめっこ
n_seed_b003	なしっこ
n_seed_b004	ドリアンっこ
n_seed_b005	もくっこ
n_seed_b006	ハナツボミ
n_seed_b008	たにくっこ
n_seed_b009	くりっこ
n_seed_b010	トマっこ
n_seed_b011	キャロっこ
n_seed_b012	パプリっこ
n_seed_b013	モモっこ
n_seed_b014	ベリーっこ
n_seed_b015	リンゴっこ
n_seed_b016	サンザシ
n_seed_b017	チェリっこ
n_seed_b018	ザクロっこ
n_seed_b019	モロコシっこ
n_seed_b020	ニンニっこ
n_seed_b021	ライム王子
n_seed_b022	ドンさん
n_seed_b023	メロンっこ
n_seed_b024	キャベっこ
n_seed_b025	タケっこ
n_seed_b026	パイナっこ
n_seed_b027	イチゴちゃん
n_seed_b028	ヘーゼルナッツ
n_seed_b029	つぼみっこ
n_seed_b030	ケーキさん
n_seed_f001	スマイル
n_seed_f002	キラメキ
n_seed_f003	すこやか
n_seed_f004	ねむねむ
n_seed_f005	ワクワク
n_seed_f006	ハッピー
n_seed_f007	ウットリ
n_seed_f008	もふもふ
n_seed_f009	ゆかいな
n_seed_f010	せいじつ
n_seed_f011	イジワル
n_seed_f012	パッチリ
n_seed_f013	ソボクな
n_seed_f014	テレてる
n_seed_f015	たおやか
n_seed_f016	オシャレ
n_seed_f017	モエモエ
n_seed_f018	やこうせい
n_seed_f019	ニヒル
n_seed_f020	ツンデレ
n_seed_f021	とくいげ
n_seed_f022	ニャーニャー
n_seed_f023	ドキドキ
n_seed_f024	ふきげん
n_seed_f025	キュート
n_seed_f026	イケてる
n_seed_f027	つぶらな
n_seed_f028	スイートな
n_seed_f029	なきむし
n_seed_f030	ウサギな
n_seed_f031	ベビーフェース
n_seed_r001	ツルをのせた
n_seed_r002	ミツバをのせた
n_seed_r003	ヘタぼうしの
n_seed_r004	つるキャップの
n_seed_r005	ハッパだらけの
n_seed_r006	ヤシをのせた
n_seed_r007	なにかがはえた
n_seed_r008	てんしアクセの
n_seed_r009	ミントをのせた
n_seed_r010	クローバーの
n_seed_r011	スズランがさいた
n_seed_r012	キンモクセイの
n_seed_r013	ほしアクセの
n_seed_r014	モヤシをのせた
n_seed_r015	ほのおアクセの
n_seed_r016	スイセンがさいた
n_seed_r017	イチゴニットの
n_seed_r018	ラッパバナの
n_seed_r019	キノコぼうしの
n_seed_r020	ウメをのせた
n_seed_r021	ヒガンバナの
n_seed_r022	センニチコウの
n_seed_r023	アジサイがさいた
n_seed_r024	アサガオがさいた
n_seed_r025	サンゴぼうしの
n_seed_r026	カボチャハットの
n_seed_r027	クリームアクセの
n_seed_r028	ユリぼうしの
n_seed_r029	ベリークラウンの
n_seed_r030	ビスカクラウンの
n_seed_e001	セミの羽
n_seed_e002	白い羽
n_seed_e003	わんこの耳
n_seed_e004	まるい耳
n_seed_e005	こぞうの耳
n_seed_e006	雲の鼻
n_seed_e007	リボン
n_seed_e008	こぐまの耳
n_seed_e009	ねこの耳
n_seed_e010	小さな花
n_seed_e011	かわいい葉
n_seed_e012	大きなウロコ
n_seed_e013	ファーの耳
n_seed_e014	ひつじの角
n_seed_e015	てんとう虫の羽
n_seed_e016	悪魔の翼
n_seed_e017	蝶ネクタイ
n_seed_e018	ネイビーなカラー
n_seed_e019	スカーフ
n_seed_e020	もこもこマフラー
n_seed_e021	花のネックレス
n_seed_e022	虫とりあみ
n_seed_e023	おだんご
n_seed_e024	わたがし
n_seed_e025	風船
n_seed_e026	トッピングアイス
n_seed_e027	アイスクリーム
n_seed_e028	ひつじの
n_seed_e029	あやしい頭巾
n_seed_e030	イチゴのバッグ
";

$key = '';

foreach( explode("\n",$data) as $line ) {
	$line = trim($line);
	if( empty($line)) continue ;
	$tmp = explode("\t",$line);
	if( empty($tmp[1]) )continue ;
	echo "\t'{$key}{$tmp[0]}'\t=> '{$tmp[1]}' ,\n";
}
*/


/*
//地图探索数据  dropData.cfg.php

$data = '1001	1图常规素材	1	1	100	10000	1	1;6;11;16	2500;2500;2500;2500
1002	1图素材地+	1	1	100	10000	1	1;6;11;16	1500;5500;1500;1500
1003	1图素材风+	1	1	100	10000	1	1;6;11;16	5500;1500;1500;1500
1004	1图素材水+	1	1	100	10000	1	1;6;11;16	1500;1500;5500;1500
1005	1图素材火+	1	1	100	10000	1	1;6;11;16	1500;1500;1500;5500
1006	1图装饰	1	1	100	10000	1	1000;1001;4001;1011;1028;1003;1004;4000;1002;1006;1012;1013;1031;1005;1014;1033;4002	588;588;588;588;588;588;588;588;588;588;588;588;588;589;589;589;589
1011	2图常规素材	1	1	100	10000	1	1;6;11;16;2;7;12;17	2125;2125;2125;2125;375;375;375;375
1012	2图素材地+	1	1	100	10000	1	1;6;11;16;2;7;12;17	1275;4675;1275;1275;225;825;225;225
1013	2图素材风+	1	1	100	10000	1	1;6;11;16;2;7;12;17	4675;1275;1275;1275;825;225;225;225
1014	2图素材水+	1	1	100	10000	1	1;6;11;16;2;7;12;17	1275;1275;4675;1275;225;225;825;225
1015	2图素材火+	1	1	100	10000	1	1;6;11;16;2;7;12;17	1275;1275;1275;4675;225;225;225;825
1016	2图装饰	1	1	100	10000	1	1000;1001;4001;1011;1028;1003;1004;4000;1002;1006;1012;1013;1031;1005;1014;1033;4002;1007;1015;1085;1086;1008;1016;1010;1048;4003;1009;1034;1074;1078;1018;1017;1076;1077;1037;1049;1025;4004	529;529;529;529;529;529;529;529;529;529;530;530;530;530;530;530;530;47;47;47;47;47;47;47;47;48;48;48;48;48;48;48;48;48;48;48;48;48
1021	3图常规素材	1	1	100	10000	1	1;6;11;16;2;7;12;17;3;8;13;18	1500;1500;1500;1500;875;875;875;875;125;125;125;125
1022	3图素材地+	1	1	100	10000	1	1;6;11;16;2;7;12;17;3;8;13;18	900;3300;900;900;525;1925;525;525;75;275;75;75
1023	3图素材风+	1	1	100	10000	1	1;6;11;16;2;7;12;17;3;8;13;18	3300;900;900;900;1925;525;525;525;275;75;75;75
1024	3图素材水+	1	1	100	10000	1	1;6;11;16;2;7;12;17;3;8;13;18	900;900;3300;900;525;525;1925;525;75;75;275;75
1025	3图素材火+	1	1	100	10000	1	1;6;11;16;2;7;12;17;3;8;13;18	900;900;900;3300;525;525;525;1925;75;75;75;275
1026	3图装饰	1	1	100	10000	1	1000;1001;4001;1011;1028;1003;1004;4000;1002;1006;1012;1013;1031;1005;1014;1033;4002;1007;1015;1085;1086;1008;1016;1010;1048;4003;1009;1034;1074;1078;1018;1017;1076;1077;1037;1049;1025;4004;1023;1024;1073;1020;1029;1075;1030;1026;1035;4005;1027;1032;1050;1087;1036;1047;1052;1053;1088;1054;4006;1038;1051;1055;1079;1089;1080;1040;1057;4007	412;412;412;412;412;412;412;412;412;412;412;412;412;411;411;411;411;95;95;95;95;95;95;95;95;95;95;95;95;95;95;95;95;96;96;96;96;96;16;16;16;16;16;16;16;16;16;16;16;16;16;16;16;16;16;16;16;16;15;15;15;15;15;15;15;15;15;15
1031	4图常规素材	1	1	100	10000	1	1;6;11;16;21;2;7;12;17;22;3;8;13;18;23;4;9;14;19;24	800;800;800;800;800;800;800;800;800;800;300;300;300;300;300;100;100;100;100;100
1032	4图素材地+	1	1	100	10000	1	1;6;11;16;21;2;7;12;17;22;3;8;13;18;23;4;9;14;19;24	480;2080;480;480;480;480;2080;480;480;480;180;780;180;180;180;60;260;60;60;60
1033	4图素材风+	1	1	100	10000	1	1;6;11;16;21;2;7;12;17;22;3;8;13;18;23;4;9;14;19;24	2080;480;480;480;480;2080;480;480;480;480;780;180;180;180;180;260;60;60;60;60
1034	4图素材水+	1	1	100	10000	1	1;6;11;16;21;2;7;12;17;22;3;8;13;18;23;4;9;14;19;24	480;480;2080;480;480;480;480;2080;480;480;180;180;780;180;180;60;60;260;60;60
1035	4图素材火+	1	1	100	10000	1	1;6;11;16;21;2;7;12;17;22;3;8;13;18;23;4;9;14;19;24	480;480;480;2080;480;480;480;480;2080;480;180;180;180;780;180;60;60;60;260;60
1036	4图装饰	1	1	100	10000	1	1000;1001;4001;1011;1028;1003;1004;4000;1002;1006;1012;1013;1031;1005;1014;1033;4002;1007;1015;1085;1086;1008;1016;1010;1048;4003;1009;1034;1074;1078;1018;1017;1076;1077;1037;1049;1025;4004;1023;1024;1073;1020;1029;1075;1030;1026;1035;4005;1027;1032;1050;1087;1036;1047;1052;1053;1088;1054;4006;1038;1051;1055;1079;1089;1080;1040;1057;4007;1042;1058;1084;1059;1043;1056;1081;4008;1060;1044;1066;1092;1067;1082;4009;1046;1063;1068;1061;1069;1083	294;294;294;294;294;294;294;294;294;294;294;294;294;294;294;295;295;143;143;143;143;143;143;143;143;143;143;143;143;143;143;143;143;143;143;142;142;142;53;53;53;53;53;53;53;53;53;53;53;53;53;53;53;53;53;53;53;53;54;54;54;54;54;54;54;54;54;54;18;18;18;18;18;18;18;18;18;18;18;18;18;18;18;18;18;18;19;19;19;19
1041	5图常规素材	1	1	100	10000	1	1;6;11;16;21;26;2;7;12;17;22;27;3;8;13;18;23;28;4;9;14;19;24;29;5;10;15;20;25;30	100;100;100;100;100;100;800;800;800;800;800;800;616;616;617;617;617;617;100;100;100;100;100;100;50;50;50;50;50;50
1042	5图素材地+	1	1	100	10000	1	1;6;11;16;21;26;2;7;12;17;22;27;3;8;13;18;23;28;4;9;14;19;24;29;5;10;15;20;25;30	60;300;60;60;60;60;480;2400;480;480;480;480;370;1850;370;370;370;370;60;300;60;60;60;60;30;150;30;30;30;30
1043	5图素材风+	1	1	100	10000	1	1;6;11;16;21;26;2;7;12;17;22;27;3;8;13;18;23;28;4;9;14;19;24;29;5;10;15;20;25;30	300;60;60;60;60;60;2400;480;480;480;480;480;1850;370;370;370;370;370;300;60;60;60;60;60;150;30;30;30;30;30
1044	5图素材水+	1	1	100	10000	1	1;6;11;16;21;26;2;7;12;17;22;27;3;8;13;18;23;28;4;9;14;19;24;29;5;10;15;20;25;30	60;60;300;60;60;60;480;480;2400;480;480;480;370;370;1850;370;370;370;60;60;300;60;60;60;30;30;150;30;30;30
1045	5图素材火+	1	1	100	10000	1	1;6;11;16;21;26;2;7;12;17;22;27;3;8;13;18;23;28;4;9;14;19;24;29;5;10;15;20;25;30	60;60;60;300;60;60;480;480;480;2400;480;480;370;370;370;1850;370;370;60;60;60;300;60;60;30;30;30;150;30;30
1046	5图装饰	1	1	100	10000	1	1000;1001;4001;1011;1028;1003;1004;4000;1002;1006;1012;1013;1031;1005;1014;1033;4002;1007;1015;1085;1086;1008;1016;1010;1048;4003;1009;1034;1074;1078;1018;1017;1076;1077;1037;1049;1025;4004;1023;1024;1073;1020;1029;1075;1030;1026;1035;4005;1027;1032;1050;1087;1036;1047;1052;1053;1088;1054;4006;1038;1051;1055;1079;1089;1080;1040;1057;4007;1042;1041;1058;1084;1059;1043;1056;1081;4008;1060;1044;1066;1092;1067;1082;4009;1046;1063;1068;1061;1069;1083;1062;1070;1093;1071;1072;1064;1065;1094;1045	176;176;176;176;176;176;176;176;176;177;177;177;177;177;177;177;177;190;190;190;190;190;190;190;190;190;190;190;191;191;191;191;191;191;191;191;191;191;67;67;67;67;67;67;67;67;67;67;67;67;67;67;67;67;67;67;67;67;66;66;66;66;66;66;66;66;66;66;36;36;36;36;36;36;36;36;36;36;36;36;36;36;37;37;37;37;37;37;37;37;22;22;22;22;22;22;22;23;23
2001	3阶小素材包	2	1	100	10000	4	3;8;13;18	2500;2500;2500;2500
2002	4阶素材包	2	1	100	10000	6	4;9;14;19;24;29	1000;1000;1000;1000;1000;5000
2003	5阶素材包	2	1	100	10000	6	5;10;15;20;25;30	1000;1000;1000;1000;1000;5000
';

foreach( explode("\n",$data) as $line ) {
    $tmp = explode("\t",trim($line));
    if( empty($tmp[8]) ) continue ;
    $items = explode(';',$tmp[7]);
    $rates = explode(';',$tmp[8]);
    echo "$tmp[0] => array(\n\t'name' => '$tmp[1]',\n\t'kind' => '".count($rates)."',\n\t'num' => '$tmp[3]',\n\t'Probability' => array(".implode(',',$rates)."),\n\t'item' => array(".implode(',',$items)."),\n),\n";
}
*/




/*
//打开宝箱获得的物品概率 ChestRate.cfg.php
$data = 'gold	gold	10	5000
gold	gold	20	1500
gold	gold	50	500
money	money	100	200
money	money	500	50
money	money	1000	25
item	31	1	50
item	32	1	25
item	33	1	25
item	34	1	50
item	35	1	25
item	37	1	50
item	38	1	25
item	4000	1	300
item	4001	1	300
item	4002	1	275
item	4003	1	275
item	4004	1	250
item	4005	1	250
item	4006	1	225
item	4007	1	225
item	4008	1	200
item	4009	1	175
';


foreach( explode("\n",$data) as $line ) {
    $tmp = explode("\t",trim($line));
    if( empty($tmp[3]) ) continue ;
    echo "array(\n\t'type' => '$tmp[0]',\n\t'id' => '$tmp[1]',\n\t'count' => '$tmp[2]',\n\t'rate' => '$tmp[3]',\n),\n";
}

*/

/*
//身体长出装备需要的成长值  SeedBodyAttributes.cfg.php
$data = '1	25
2	25
3	59
4	141
5	234
6	389
7	558
8	737
9	926
10	1123
11	1328
12	1538
13	1755
14	1977
15	2204
16	2436
17	2673
18	2913
19	3158
20	3407
21	3659
22	4001
23	4349
24	4702
25	5061
26	5425
27	5795
28	6168
29	6547
30	6930
';
$data = str_replace("\r","",$data);
foreach ( explode("\n",$data) as $line ) {
    if( empty($line) ) continue ;
    $tmp = explode("\t",$line);
    echo ($tmp[0]+1000)." => ".$tmp[1]." ,\n";
}
*/


/*
//装备需要的各种属性  SeedDressData.cfg.php
$data = '1	4	3	2	1	0	0	4001	0
2	3	4	1	2	0	0	4002	0
3	2	1	4	3	0	0	4003	0
4	1	2	3	4	0	0	4004	0
5	4	2	1	3	0	0	4005	0
6	1	4	3	2	0	0	4006	0
7	1	3	4	2	0	0	4007	0
8	3	2	1	4	0	0	4008	0
9	4	1	2	3	0	0	4009	0
10	3	4	2	1	0	0	4010	0
11	2	3	4	1	0	0	4011	0
12	2	1	3	4	0	0	4012	0
13	4	2	0	3	1	0	4013	0
14	2	4	3	0	1	0	4014	0
15	0	3	4	2	1	0	4015	0
16	3	0	2	4	1	0	4016	0
17	1	0	2	0	4	3	4017	1
18	3	1	2	0	4	0	4018	1
19	1	3	0	2	0	4	4019	1
20	0	0	1	3	4	2	4020	1
21	2	1	0	0	3	4	4021	1
22	0	2	0	1	4	3	4022	1
23	3	0	1	2	0	4	4023	1
24	0	3	0	1	2	4	4024	1
25	4	2	3	0	0	1	4025	1
26	0	4	3	2	0	1	4026	0
27	0	0	4	2	3	1	4027	1
28	3	0	0	4	2	1	4028	1
29	2	3	0	0	4	1	4029	1
30	0	0	3	2	1	4	4030	0
';

$data = str_replace("\r","",$data);
foreach ( explode("\n",$data) as $line ) {
    if( empty($line) ) continue ;
    $tmp = explode("\t",$line);
    //echo "    ".($tmp[0]+4000)." => array(\n        'unlockLevel' => $tmp[1],\n        'attributes' => array(";
    echo "    ".($tmp[0]+4000)." => array(\n        'attributes' => array(";
    for( $i=1;$i<7;$i++ ) {
        echo "\n            ".($i)." => $tmp[$i] ,";
    }
    echo "\n        ) ,\n        'position' => $tmp[8] ,\n    ) ,\n";
}

*/