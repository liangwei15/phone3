<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>下单成功</title>
    <link rel="stylesheet" type="text/css" href="/phone3/Public/Home/css/Four.css">
</head>
<body>
<div class="out">
    <img src="/phone3/Public/Home/img/ss.gif" class="tp">
    <p class="big">上门维修下单成功</p>
    <p class="small">稍后将有客服与您联系，请保持手机畅通</p>
    <div class="one"onclick="window.open('#','_self');">返回首页</div>
    <div class="two" onclick="window.open('/phone3/index.php/Home/Index/six.html?id=<?php echo ($tm["rand"]); ?>','_self');">查看订单</div>

</div>
</body>
</html>