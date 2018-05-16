<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="/che/Public/Home/css1/postyle.css" />
		<!--
	作者：张津瑞
	时间：2018-04-07
	描述：(c) Copyright 2018 睿腾网络. All Rights Reserved. 
-->
		<title>下单成功</title>
	</head>

	<body>

		<div class="xiadan">
			<img src="/che/Public/Home/images1/下单成功.png" width="30%" height="30%" />
		</div>
		<div class="xiadan_1">
			<h2>下单成功</h2>
		</div>
		<div class="text">
			<p class="text_1">
				门店地址：大连<br /> 服务时间：<?php echo ($tw["dd_time"]); ?>
				<br /> 联系电话：<?php echo ($tw["tel"]); ?>
				<br />
			</p>
		</div>
		<div class="bottom">
			<button class="bottom_1" type="button" onclick="window.open('/che/index.php/Home/Index/yuyuejinzhan.html?id=<?php echo ($tw["wid"]); ?>','_self');">返回首页</button>
			<button class="bottom_2" type="button" onclick="window.open('/che/index.php/Home/Index/dingdan_detail.html?id=<?php echo ($tw["dd_id"]); ?>','_self');">查看订单</button>
		</div>

	</body>

</html>