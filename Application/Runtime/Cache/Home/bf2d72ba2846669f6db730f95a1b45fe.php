<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css">

        *{
            margin: 0;
            padding: 0;
            font-size: 14px;
            color: #000;
        }
        .out{
            width: 100%;
            height: 40px;
        }
        .top{
            font-size: 25px;
            text-align: center;
        }
        .none{
            width: 100%;
            height: 40px;
        }
        .clear{
            clear: both;
        }

        .apple{
            float: left;
            padding-top: 15px;
            padding-left: 1%;
            width: 40%;
            height: 40%;
        }
        .out1{
            border: 1px solid #5B5B5B;
            background-color: #ffffff;
            height: 120px;
            width: 90%;
            border-radius: 10px;
            position:absolute;
            left: 5%;
            top:240px;

        }
        .change{
            border: 1px solid #858585;
            height: 50px;
            line-height: 50px;
            border-radius: 10px;
        }
        .iphone{
            width: 65%;
            float:left;
        }


        .type{
            width: 25%;
            float: left;
            text-align: center;
            margin-top: 30px;
            margin-left: 5%;
        }
        .detection{
            padding-top: 30px;
        }
        .seven{
            font-size: 17px;
        }
        .in{
            border: 1px solid #858585;
            height: 50px;
            width: 33%;
            float: left;
        }
        .over{
            border: 1px solid #858585;
            height: 50px;
            width: 33%;
            float: left;
        }

        .out2{
            width: 94%;
            border: 1px solid #858585;
            margin-left: 3%;
            margin-top: 120px;

        }
        .index{
            float: left;
            line-height: 50px;
            padding-left: 5%;
        }
        .tp{
            float: left;
            width: 32%;
            height: 75%;
            padding-top: 5px;
            padding-left: 5%;
        }
        .money{
            float: left;
            color: #646464;
        }
        .fast{
            float: left;
        }
        .pad{
            float: left;
            width: 25%;
        }
        .left{
            height: 60px;
            line-height: 60px;
            float: left;
            width: 64%;

        }
        .fast{
            background: #b9b9b9;
            color: black;
            font-size: 23px;
            margin-left: 5%;
            text-align: center;
            line-height: 60px;
            width: 100%;
        }
        .right{
            height: 60px;
            float: left;
            width: 36%;
        }
        .under{
            margin-top: 70px;
        }







    </style>
</head>

<body>

<div class="out2">
    <?php if(is_array($tm)): $i = 0; $__LIST__ = $tm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="in" onclick="window.open('/phone2/index.php/Home/Index/zero.html?id=<?php echo ($vo["id"]); ?>','_self')">
            <p class="index">
                <?php echo ($vo["cname"]); ?>
            </p>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>

</div>
</body>
</html>