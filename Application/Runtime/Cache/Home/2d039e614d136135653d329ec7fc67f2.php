<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="/phone2/Public/Home/css1/liststyle.css" />
	<!--
作者：张津瑞
时间：2018-04-16
描述：(c) Copyright 2018 睿腾网络. All Rights Reserved.
-->
	<title>订单列表</title>
</head>



<body class="bg">
<?php if(is_array($dingdan_list)): $i = 0; $__LIST__ = $dingdan_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="center" onclick="window.open('dingdan_detail?id=<?php echo ($vo["dd_id"]); ?>')">


	<div class="center_1"><p class="center_1_1">订单编号：<?php echo ($vo["rands"]); ?></p><p class="center_1_2"><?php if($vo["zhuangtai"] == 1): ?>订单已提交
		<?php elseif($vo["zhuangtai"] == 2): ?>订单已取消
		<?php else: endif; ?>
	</div>

	<!--1804104447393843834-->
	<div class="clear"></div>
	<div class="center_2"><p class="center_2_1"><?php echo ($vo["carname"]); ?></p><p class="center_2_2"><?php if($vo["dd_fangshi"] == 1): ?>洗车保养
		<?php elseif($vo["dd_fangshi"] == 0): ?>维修维护
		<?php else: ?>部件更换<?php endif; ?></p></div>
	<!--福特野马-->
	<div class="center_3"><p class="center_3_1">合计(估计:)￥<?php echo ($vo['price'] - $vo['dd_youhui']); ?></p><p class="center_3_2"><?php echo ($vo["dd_time"]); ?> </p></div>
	<!--80.00-->
</div><?php endforeach; endif; else: echo "" ;endif; ?>
</body>

</html>