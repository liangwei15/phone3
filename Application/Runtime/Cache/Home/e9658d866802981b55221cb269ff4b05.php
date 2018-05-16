<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="/che/Public/Home/css1/odstyle.css" />
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--
作者：张津瑞
时间：2018-04-16
描述：(c) Copyright 2018 睿腾网络. All Rights Reserved.
-->
	<title>订单详情</title>
</head>

<body class="bg">

<div id="center">
	<div class="zhuangtai" style="height: 50px;">
		<p class="huifont">订单状态</p><p class="padding"><?php if($info["zhuangtai"] == 1): ?>订单已提交
		<?php elseif($info["zhuangtai"] == 2): ?>订单已取消
		<?php else: endif; ?></p>
	</div>

	<div style="clear: both"></div>
	<div class="zhuangtai">
		<div class="xian"><span class="huifont1">门店地址：大连</span></div>
		<div class="xian"> <span class="huifont1">服务时间：<?php echo ($info["dd_time"]); ?></span></div>
		<div class="xian"> <span class="huifont2">联系电话：<?php echo ($info["tel"]); ?></span></div>
	</div>
	<div class="zhuangtai">
		<div class="xian">
			<h3>哈佛H6</h3></div>
		<div class="xian"><span class="xiche"><?php if($info["dd_fangshi"] == 1): ?>到店服务
			<?php elseif($info["dd_fangshi"] == 2): ?>上面服务<?php else: endif; ?></span> <span class="xiche1">￥<?php echo ($info["price"]); ?></span> </div>
		<div class="white"> </div>

	</div>

	<div class="zhuangtai">
		<span class="youhui">明细</span>
	</div>
	<div class="zhuangtai">
		<div>
			<p class="huifont2">价格</p> <p class="xiche1">￥<?php echo ($info["price"]); ?></p></div>
		<div style="clear: both"></div>
		<div><p class="huifont2">优惠</p><p class="xiche1">-￥<?php echo ($info["dd_youhui"]); ?></p></div>
		<div style="clear: both"></div>
		<div><p class="huifont2">预计需支付</p><p class="xiche1">￥<?php echo ($info['price'] - $info['dd_youhui']); ?></p></div>



		<div style="clear: both"></div>
		<p class="huifont2_1">预计价格为预估费用，价格以最终方案价格为准</p>
	</div>
	<div class="zhuangtai">
		<span class="youhui">留言：</span><?php echo ($info["dd_intro"]); ?>
	</div>
	<div class="zhuangtai">
		<span class="youhui">订单编号</span><span class="huifont2_2"><?php echo ($info["rands"]); ?></span><br />
		<span class="youhui">下单时间</span><span class="huifont2_2"><?php echo ($info["dd_time"]); ?></span>
	</div>
	<?php if($info["zhuangtai"] == 1): ?><div class="zhuangtai_1">
		<button class="bottom_2" type="button" onclick="">付款</button>
		<button class="bottom_1" data-toggle="modal" data-target="#myModal">取消订单</button>
	</div>
		<?php elseif($info["zhuangtai"] == 2): ?>
		<button class="bottom_2" type="button" onclick="window.location.href='/che/index.php/Home/Index/yuyuejinzhan.html'">返回首页</button>
		<?php else: endif; ?>

	<!-- 模态框（Modal） -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;
					</button>
					<div class="modal-title1">
						<h4 class="modal-title" id="myModalLabel">
							订单取消原因
						</h4>
						<h5 class="modal-title" id="myModalLabel">
							请反馈原因我们会努力改进
						</h5>
					</div>
				</div>

				<div class="modal-body"><form method="post" action="/che/index.php/Home/Index/qxdd">
					<!--<input type='checkbox' name='VoteOption1' value="超出了上门服务范围"> 超出了上门服务范围<br />-->
					<!--<input type='checkbox' name='VoteOption1' value="需要重新修改订单信息"> 需要重新修改订单信息<br />-->
					<!--<input type='checkbox' name='VoteOption1' value="报价太高了"> 报价太高了<br />-->
					<!--<input type='checkbox' name='VoteOption1' value="不想到店维修"> 不想到店维修<br />-->
					<!--<input type='checkbox' name='VoteOption1' value="重启恢复正常了"> 重启恢复正常了<br />-->
					<!--<input type='checkbox' name='VoteOption1' value="等待时间太久"> 等待时间太久<br />-->
					<!--<input type='checkbox' name='VoteOption1' value="不放心上门服务"> 不放心上门服务<br />-->
					<!--<input type='checkbox' name='VoteOption1' value=1> 工程师无法在约定时间内到达<br />-->
					<input type="hidden" name="dd_id" value="<?php echo ($info["dd_id"]); ?>">
					<textarea style="resize: none;width: 100%; margin-top: 8%;" rows="5" cols="50" placeholder="手动输入原因，您可以输入100个字" name="yuanyin"></textarea>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">取 消
					</button>
					<button type="submit" class="btn btn-primary">
						提 交
					</button>
				</div>
			</div>
			</form>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal -->
	</div>

</body>

</html>