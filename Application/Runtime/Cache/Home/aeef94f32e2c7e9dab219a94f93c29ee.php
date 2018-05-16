<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>list</title>
    <link type="text/css" href="/phone2/Public/Home/css/index.css" rel="stylesheet">
</head>
<body>

<div class="out" >

    <div class="top" >
        <p class="top-1">
            订单列表
        </p>
    </div>
    <?php if(is_array($tm)): $i = 0; $__LIST__ = $tm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="out-1" style="margin-top: 10%">
        <div class="out-2">
            <p class="coding">
                订单编码：<?php echo ($vo["rand"]); ?>
            <p class="coding-1">
            <?php if($vo["zhuangtai"] == 1): ?>订单已提交
                <?php elseif($vo["zhuangtai"] == 2): ?>订单已取消
                <?php else: endif; ?>
            </p>
            </p>
        </div>
        <div class="clear"></div>
        <div class="out-3">
            <p class="iphone">
                <?php echo ($vo["phonename"]); ?>
            </p>
            <p class="gray">
                屏碎（不能现实操作）
            </p>
        </div>
        <div class="out-4">
            <p class="money">
                合计（估计）：￥<?php echo ($vo['all_price'] - $vo['price']-$vo['r_price']); ?>
            </p>
           
        </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>


</body>
</html>