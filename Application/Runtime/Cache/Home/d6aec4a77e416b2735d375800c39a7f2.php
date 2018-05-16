<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" name="viewport"
          content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
    <title>Home</title>
    <style>
        a {
            color: white;
            text-decoration: none;
        }

        .title {
            margin: 0 auto;
            max-width: 720px;
            width: 100%;
            margin-left: -8px;
            position: fixed;
            top: 0;
            height: 45px;
            border-bottom: 1px solid #dcdcdc;
            background-color: white;
            line-height: 45px;
            font-size: 17px;
            float: left;
            z-index: 999;
            text-align: center;
        }

        .bd {
            max-width: 750px;
        }

        div {
            float: left;
        }

        .t1 {
            position: relative;
            left: 15px;
        }

        .t2 {
            position: absolute;
            right: 15px;
            top: 5px;
        }

        .smsj {
            margin-top: 50px;
            width: 100%;
            height: 100px;
            text-align: center;
            line-height: 100px;
            font-size: 40px;
            font-family: "微软雅黑";
            max-width: 720px;
            background-color: lightblue;
        }

        .ddsj {
            margin-top: 10px;
            width: 100%;
            height: 100px;
            text-align: center;
            line-height: 100px;
            font-size: 40px;
            font-family: "微软雅黑";
            max-width: 720px;
            background-color: lightgreen;
        }

        .main {
            width: 100%;
            max-width: 710px;
        }
    </style>
</head>
<body>
<div class="title">

    <div class="t1">

    </div>
    养护汽车
    <div class="t1">

    </div>
</div>

<div class="main">
    <div class="smsj">
        <a href="/che/index.php/Home/Index/orderlist2">试驾订单查询</a>
    </div>
    <div class="ddsj" style="background-color: lightpink;">
        <a href="/che/index.php/Home/Index/orderlist3">保养订单查询</a>
    </div>
    <div class="ddsj" style="background-color: lightcoral;">
        <a href="/che/index.php/Home/Index/orderlist4">维修订单查询</a>
    </div>
    <div class="ddsj" style="background-color: lightsalmon;">
        <a href="/che/index.php/Home/Index/orderlist5">钣金喷漆订单查询</a>
    </div>
</div>
</div>
</body>
</html>