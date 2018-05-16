<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" name="viewport"
          content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
    <title></title>
    <style>
        a {
            text-decoration: none;
            color: dimgray;
            font-size: 15px;
        }

        body {
            background-color: lightgrey;
        }

        .title {
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

        .main {
            margin-top: 100px;
            margin-left: -46px;
            max-width: 1200px;
        }

        .ti1 {
            position: absolute;
            left: 10px;
            top: 8px;
            float: left;
        }

        .ti2 {
            float: left;
            position: absolute;
            top: 8px;
            right: 20px;
        }

        .ti3 {
            position: absolute;
            left: 45%;
            float: left;
        }

        .name {
            position: absolute;
            top: 65px;
            font-size: 20px;
        }

        .tb {
            position: absolute;
            left: 2%;
            top: 130px;
            padding: 10px;
            background-color: white;
            border-radius: 15px 15px 15px 15px;
            margin: 0 auto;
            margin-left: 5%;
            width: 80%;
           margin-bottom: 30px;;
        }

        .tb table {
            margin: 0 auto;
        }

        .tb table .txt {
            margin-top: 10px;
            width: 200px;
            height: 25px;
            border-radius: 10px 10px 10px 10px;
            border: 1px solid darkgray;
        }

        .tb table .txt1 {
            margin-top: 10px;
            width: 200px;
            height: 75px;
            border-radius: 10px 10px 10px 10px;
            border: 1px solid darkgray;
        }

        .tj {
            margin-top: 10px;
            height: 30px;
            width: 40%;
            background-color: dimgray;
            border: 1px solid dimgray;
            color: white;
            border-radius: 5px 5px 5px 5px;
        }

        tr {
            height: 50px;
        }
    </style>
</head>
<body>
<div class="title">
    <div class="ti3">
        <font>预约详情</font>
    </div>
    <div class="ti1">
        <a href="/web/haval/index.php/Home/Index/code.html"><img src="/web/haval/Public/Home/img/home.png"/></a>
    </div>
</div>
<div class="name"><?php echo ($info['carname']); ?>-<?php echo ($info['modelname']); ?> -<?php echo ($info['displacementname']); ?></div>
<div class="main">

    <div class="tb">
            <table border="1"  style="border-collapse:collapse;">
                <tr>
                    <td >姓名：</td>
                    <td><?php echo ($info["xm"]); ?></td>
                </tr>
                <tr>
                    <td>预约时间：</td>
                    <td><?php echo ($info["sj"]); ?></td>
                </tr>

                </tr>
                <tr>
                    <td>手机号：</td>
                    <td><?php echo ($info["tel"]); ?></td>
                </tr>
                <tr>
                    <td>车牌号：</td>
                    <td>
                        <?php echo ($info["cph"]); ?>
                        </td>
                </tr>

                <tr>
                    <td>备注：</td>
                    <td><?php echo ($info["bz"]); ?></td>
                </tr>
                <tr>
                    <td>核验码：</td>
                    <td><?php echo ($info["rands"]); ?></td>
                </tr>
                <tr>

                    <td colspan="2">

                        <?php if($info["zhuangtai"] == 4): ?><p>订单已经取消</p>
                            <?php elseif($info["zhuangtai"] == 99): ?>
                            <p>订单已经消费</p>
                            <?php else: ?>
                            <input type="button" value="取消预约" onclick="location.href='qx5?ybid=<?php echo ($info["ybid"]); ?>'" class="tj"><?php endif; ?>

                    </td>
                </tr>
            </table>

    </div>
</div>
</body>
</html>