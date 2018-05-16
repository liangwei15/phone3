<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head> 
		<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
		<title></title>
		<style>
			a{
				text-decoration: none;
				color: dimgray;
				font-size: 15px;
			}
			body{
				background-color: lightgrey;
			}
			li{
				list-style: none;
			}
			.d1{
				width: 15%;
				height: 30px;
				background-color: whitesmoke;
				border: 1px solid lightslategray;
				border-radius: 5px 5px 5px 5px;
				float: left;
				margin: 7px; 
				text-align: center;
				line-height: 30px;
				font-family: "微软雅黑";  
			}
			.head{  
				width: 100%;
				height: 250px;
				margin-top: 80px;
				max-width: 1200px;
				
			}
			.title{ 
				margin-left: -8px;
				position: fixed;
				top: 0;
				width: 100%;
				height: 50px; 
				background-color: white;
				line-height: 50px;
				font-size: 20px;
				float: left;
				z-index: 1000;
				max-width: 1200px;
			
			} 
			.main{ 
				margin-top: -40px;
				margin-left: -46px; 
				max-width: 1200px;
			} 
			.ti1{
				position: absolute;
				left: 10px;
				top: 8px; 
				float: left; 
			}
			.ti2{
				float: left;
				position: absolute;
				top: 8px;
				right: 20px; 
			}
			.ti3{
				position: absolute; 
				left: 40%;
				float: left;
			}
			#a,#b,#c,#d,#f,#g,#h,#j,#k,#l,#m,#n,#o,#q,#r,#s,#w,#x,#y,#z{
				font-size: 20px;
				font-family: "微软雅黑";
				margin: 10px;  
			}
			.li1{
				background-color: white; 
				height: 70px; 
				width: 101%;
				border-top: 1px solid gray;
				border-bottom: 1px solid gray;
				margin-top: -1px; 
				float: left;
				line-height:70px;
				font-size: 20px; 
				font-family: "微软雅黑";
			} 
			.lg1{
				position: relative;
				left: 10px;
				padding: 10px;
				height: 10%;
				float: left;
				margin-right: 20px;
			}
		</style>
	</head>
	<body>
		<div class="title">
			<div class="ti3">
			<font>选择品牌</font>
			</div>
			<div class="ti1">
				<a href="/web/haval/index.php/Home/Index/code.html"><img src="/web/haval/Public/Home/img/home.png" /></a>
			</div>
		</div>
		<div class="head">
		<div class="d1"><a href="#a">A</a></div>
		<div class="d1"><a href="#b">B</a></div>
		<div class="d1"><a href="#c">C</a></div>
		<div class="d1"><a href="#d">D</a></div> 
		<div class="d1"><a href="#f">F</a></div>
		<div class="d1"><a href="#g">G</a></div>
		<div class="d1"><a href="#h">H</a></div> 
		<div class="d1"><a href="#j">J</a></div>
		<div class="d1"><a href="#k">K</a></div>
		<div class="d1"><a href="#l">L</a></div>
		<div class="d1"><a href="#m">M</a></div>
		<div class="d1"><a href="#n">N</a></div>
		<div class="d1"><a href="#o">O</a></div> 
		<div class="d1"><a href="#q">Q</a></div>
		<div class="d1"><a href="#r">R</a></div>
		<div class="d1"><a href="#s">S</a></div>
		<div class="d1"><a href="#w">W</a></div>
		<div class="d1"><a href="#x">X</a></div>
		<div class="d1"><a href="#y">Y</a></div>
		<div class="d1"><a href="#z">Z</a></div>
		</div> 
		
		<div class="main">
		<ul>
<?php if(is_array($orderinfo)): $i = 0; $__LIST__ = $orderinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li id="<?php echo (strtolower($vo['firstword'])); ?>"><?php echo ($vo['firstword']); ?> </li>
	<?php if(is_array($vo['voo'])): $i = 0; $__LIST__ = $vo['voo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2o): $mod = ($i % 2 );++$i;?><div class="li1"onclick="location.href='asdmd5?id=<?php echo ($v2o["id"]); ?>'">
			<div class="lg1">
				<img src="/web/haval/Public/Home/img/<?php echo ($v2o["logo"]); ?>" height="40px"/>
			</div>
			<?php echo ($v2o["carname"]); ?>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/b1.png" height="40px"/></div>-->
			 <!--奥迪（进口）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/b1.png" height="40px"/></div>-->
			<!--奥迪（一汽）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/b1.png" height="40px"/></div>-->
			<!--奥铃-->
		<!--</div>--><?php endforeach; endif; else: echo "" ;endif; ?>
		
			<!--<li id="b">B</li>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/baojun.png" height="40px"/></div>-->
			<!--宝骏-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="40px"/></div>-->
			<!--宝马（华晨）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="40px"/></div>-->
			<!--宝马（进口）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/baowo.png" height="40px"/></div>-->
			<!--宝沃-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="40px"/></div>-->
			<!--保时捷-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="40px"/></div>-->
			<!--北汽-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--奔驰（北京）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--奔驰（福建）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--奔驰（进口）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--奔腾-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--本田（东风）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--本田（广汽）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--比亚迪-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--标致（东风）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--标致（进口）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--别克（进口）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--别克（上海通用）-->
		<!--</div>-->
		<!---->
			<!--<li id="c">C</li>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--长安-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--长城-->
		<!--</div>-->
		<!---->
		<!--<li id="d">D</li>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--DS-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--DS（进口）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--大众（进口）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--大众（上汽）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--大众（一汽）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--道奇（东南）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--道奇（进口）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--东风-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--东风风度-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--东南-->
		<!--</div>-->
		<!---->
		<!--<li id="f">F</li>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--菲亚特（广汽）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--菲亚特（进口）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--菲亚特（南京）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--丰田（广汽）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--丰田（进口-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--丰田（一汽）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--福特（江铃）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--福特（进口）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--福特（长安）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--福田-->
		<!--</div>-->
		<!---->
		<!--<li id="g">G</li>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--观致-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--广汽传祺-->
		<!--</div>-->
		<!---->
		<!--<li id="h">H</li>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--哈飞-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--哈弗-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--海马-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--红旗-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--华普-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--华泰-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--黄海-->
		<!--</div> -->
		<!---->
		<!--<li id="j">J</li>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--Jeep（北京）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--Jeep（广汽）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--Jeep（进口）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--吉利-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--江淮-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--江铃-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--捷豹（进口）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--金杯-->
		<!--</div> -->
		<!---->
		<!--<li id="k">K</li>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--开瑞-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--凯迪拉克（进口）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--凯迪拉克（上汽通用）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--克莱斯勒（北京）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--克莱斯勒（东南）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--克莱斯勒（进口）-->
		<!--</div> -->
		<!---->
		<!--<li id="l">L</li>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--雷克萨斯-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--雷诺（东风）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--雷诺（进口）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--力帆-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--猎豹-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--林肯-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--铃木（昌河）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--铃木（进口）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--铃木（长安）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--陆风-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--路虎（进口）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--路虎（奇瑞捷豹）-->
		<!--</div> -->
		<!---->
		<!--<li id="m">M</li>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--MG-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--MINI-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--马自达（进口）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--马自达（一汽）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--马自达（长安）-->
		<!--</div> -->
		<!---->
		<!--<li id="n">N</li>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--纳智捷-->
		<!--</div> -->
		<!---->
		<!--<li id="o">O</li>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--讴歌-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--欧宝-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--欧马可-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--欧曼-->
		<!--</div>-->
		<!---->
		<!--<li id="q">Q</li>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--奇瑞-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--启辰-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--起亚（东风悦达）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--起亚（进口）-->
		<!--</div>-->
		<!---->
		<!--<li id="r">R</li>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--日产（东风）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--日产（进口）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--日产（郑州）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--荣威-->
		<!--</div>-->
		<!---->
		<!--<li id="s">S</li>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--smart-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--萨博-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--三菱（北京吉普）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--三菱（东南）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--三菱（广汽）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--三菱（进口）-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--上汽大通-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--时代-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--双龙-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--斯巴鲁-->
		<!--</div>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--斯柯达-->
		<!--</div> -->
		<!---->
		<!--<li id="w">W</li>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--沃尔沃（进口）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--沃尔沃（亚太）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--沃尔沃（长安）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--五菱-->
		<!--</div> -->
		<!---->
		<!--<li id="x">X</li>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--现代（北京）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--现代（进口）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--雪佛兰（进口）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--雪佛兰（上汽通用）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--雪铁龙（东风）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--雪铁龙（进口）-->
		<!--</div> -->
		<!---->
		<!--<li id="y">Y</li>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--一汽-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--英菲尼迪-->
		<!--</div> -->
		<!---->
		<!--<li id="z">Z</li>-->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--中华-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--中华（华晨）-->
		<!--</div> -->
		<!--<div class="li1">-->
			<!--<div class="lg1"><img src="img/bmw.png" height="100%"/></div>-->
			<!--众泰-->
		<!--</div> -->
		
		
		</ul>
		</div>
	</body>
</html>