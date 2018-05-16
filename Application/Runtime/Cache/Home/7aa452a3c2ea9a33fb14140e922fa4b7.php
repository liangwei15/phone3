<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
	<meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
	<!--<link rel="stylesheet" href="css/O2style.css" />-->
	<!--
作者：张津瑞
时间：2018-04-07
描述：(c) Copyright 2018 睿腾网络. All Rights Reserved.
-->
	<title>预约进站</title>
	<link rel="stylesheet" href="/che/Public/Home/css1/appointmentstyle.css" />
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body class="bg">
<div class="picture">
	<div id="myCarousel" class="carousel slide">
		<!-- 轮播（Carousel）指标 -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<!-- 轮播（Carousel）项目 -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="/che/Public/Home/images1/car1.jpg" alt="First slide" width="100%" height="100%" />
			</div>
			<div class="item">
				<img src="/che/Public/Home/images1/car2.jpg" alt="Second slide" width="100%" height="100%" />
			</div>
			<div class="item">
				<img src="/che/Public/Home/images1/car3.jpg" alt="Third slide" width="100%" height="100%" />
			</div>

		</div>

		<!-- 轮播（Carousel）导航 -->
		<a class="left carousel-control" href=" " role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<div class="form" style="border-radius: 20px; padding: 15px;  ">
	<strong><p>预约信息</p></strong>

	<form action="<?php echo U('submit');?>" method=POST name="form1">
		<div class="formhang1">
			<strong><span class="fix1">车型</span></strong>
			<select class="fix3" name="cardmodel">
				<option>请选择</option>
				<?php if(is_array($tw)): $i = 0; $__LIST__ = $tw;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["carname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>

		</div>
		<div class="formhang1">
			<p class="fix1">姓名</p>
			<input name="name" type="text" placeholder="请输入您的姓名" size="15px" />
		</div>
		<div class="formhang1">
			<p class="fix1">电话</p>

			<input name="tel" type="text" placeholder="请输入您的手机号码" size="15px" />

		</div>

		<div class="formhang1">
			<p class="fix2">车牌号</p>

			<input name="cardid" type="text" placeholder="请输入您的车牌号" size="15px" />

		</div>
		<div class="formhang1">
			<p class="fix2">公里数</p>

			<input name="kilometer" type="text" placeholder="请输入行驶里程(km)" size="15px" />

		</div>

		<strong><span class="fixn">赛文蒸汽洗车服务有限公司</span></strong>



		<strong><p class="title">服务内容</p></strong>
		<div class="bottom">
			<strong><span class="style" id="xcby" onclick="xcby()">洗车保养</span></strong>
			<strong ><span class="style" id="wxwh" onclick="wxwh()">维修维护</span></strong>
			<strong ><span class="style_1" id="bjgh" onclick="bjgh()">部件更换</span></strong>
			<strong><input type="hidden" id="server"   name="server"></strong>

		</div>

		<div class="areapadding1">

			<input class="areapadding" type="submit" value="提交">
		</div>
	</form>






</div>


</body>
<script>
function xcby() {

    document.getElementById('server').value=1;
    document.getElementById('xcby').style.border="3px #ccc solid";
    document.getElementById('wxwh').style.border="none";
    document.getElementById('bjgh').style.border="none";
}
function wxwh() {

    document.getElementById('server').value=2;
    document.getElementById('wxwh').style.border="3px #ccc solid";
    document.getElementById('xcby').style.border="none";
    document.getElementById('bjgh').style.border="none";

}
function bjgh() {

    document.getElementById('server').value=3;
    document.getElementById('wxwh').style.border="none";
    document.getElementById('xcby').style.border="none";
    document.getElementById('bjgh').style.border="3px #ccc solid";

}
</script>
</html>