<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
		<!--
	作者：张津瑞
	时间：2018-04-16
	描述：(c) Copyright 2018 睿腾网络. All Rights Reserved. 
-->
		<link rel="stylesheet" href="/che2/Public/Home/css1/discountsstyle.css" />
		<title>优惠券</title>
	</head>

	<body>
		<div class="top">
			<a href="me.html"><strong><span class="return_1" ><</span></a></strong><strong><span class="return">我的优惠券</span></strong>
		</div>
		<?php if(is_array($tx)): $i = 0; $__LIST__ = $tx;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="youhui_1" id="center">
				<a href="#" id="youhui" style="width: 92%; margin-top: 10px; height: 220px;
               background:url('/che2/Public/Home/images1/youhuiquan.png'); background-size:cover;
display: block;" >
					<!--<img src="/che2/Public/Home/images1/优惠券1.png"  width="100%" style="position: relative"   /></a>-->
					<div style="width: 100px;height: 50px; background: rgba(255,255,255,0);position: relative; left: 30px; top: 120px; color: #fff;font-size: 26px;">￥<?php echo ($vo["price"]); ?>元</div>
				</a>

			</div><?php endforeach; endif; else: echo "" ;endif; ?>

	</body>

</html>