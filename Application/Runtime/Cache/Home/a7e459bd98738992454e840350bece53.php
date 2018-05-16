<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
    <title>维修方案</title>
    <link rel="stylesheet" href="/che/Public/Home/css1/planstyle.css"/>
    <link rel="stylesheet" href="/che/Public/Home/css1/弹出框样式表.css"/>
    <!--<script type="text/javascript" src="js/action.js"></script>-->
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--
作者：张津瑞
时间：2018-04-16
描述：(c) Copyright 2018 睿腾网络. All Rights Reserved.
-->

</head>

<body class="bg">

<script>

    function abc($img1) {
        var aaa=document.getElementById('image1')
        var bbb=document.getElementById('image2')
        var ccc=document.getElementById('singal1')
        var sss=document.getElementById('sss')
        aaa.style.background="#ddd"
        bbb.style.background="#fff"
        ccc.innerHTML="全国连锁，统一门店，静候您的光临"
            // sss.style.display="none"
        document.getElementById("fuwu").value=$img1;


    }
    function bcd($img2) {


        var aaa=document.getElementById('image1')
        var bbb=document.getElementById('image2')
        var ccc=document.getElementById('singal1')
        var sss=document.getElementById('sss')
        aaa.style.background="#fff"
        bbb.style.background="#ddd"
        ccc.innerHTML="30分钟上门服务，让服务变的随时随地"
        // sss.style.display="block"
        console.log("+2324234"+$img2);
        document.getElementById("fuwu").value=$img2;

    }

    function times() {

        var time=document.getElementById('wx_time').value;


        document.getElementById("time1").value=time;
        document.getElementById("center_0").innerHTML=time;

    }




</script>

<form id="yy2" method="post" action="<?php echo U('wx');?>" enctype="multipart/form-data">


<div class="top_1">
    <p class="yugu">预估服务价</p>
    <p class="yuguj">￥
        <span class="yuguji"><?php echo ($tw["price"]); ?></span></p>

</div>
<div class="top_2">
    <p class="top_2_1"><a href="weixiufangan.html"><img src="/che/Public/Home/images1/刷新.png" width="6%"/></a> 重选服务</p>
    <p class="top_2_2"><a href="#"><img src="/che/Public/Home/images1/感叹号.png" width="6%"/></a> 服务列表</p>
</div>

<div class="center">
    <p class="fangshi">选择服务方式</p>
    <div class="image1" id="image1" name="fangshi"  onclick="abc(1)" style="background: #ddd"><img src="/che/Public/Home/images1/门店.png" width="40%" height="90%"/>
        <p>到店服务</p>
    </div>
    <div class="image2" id="image2" name="fangshi"  onclick="bcd(2)"><img src="/che/Public/Home/images1/上门服务.png" width="40%" height="90%"/>
        <p>上门服务</p>
    </div>
    <div class="clear"></div>

    <div id="singal1" class="singal">全国连锁，统一门店，静候您的光临</div>
    <!--<div id="singal2" class="singal">30分钟上门服务，让服务变的随时随地</div>-->
</div>
<div class="center_1">

    <div class="xian" id="sss"><img src="/che/Public/Home/images1/时钟.png" width="4%"/><p class="center_0" id="center_0">请选择时间</p>
        <a class="" name="wx_time"  data-toggle="modal" data-target="#myModal">&gt</a>
    </div>
    <input id="time1" name="time1" type="hidden">

    <div class="xian"><img src="/che/Public/Home/images1/优惠券.png" width="4%"/><p class="center_0">请选择优惠券</p>
        <a data-toggle="modal" data-target="#myyouhui" id="returns">&gt</a>
    </div>
    <input id="yh11" name="yh" type="hidden">
    <input id="fuwu" name="fuwu" value="1" type="hidden">
    <input type="hidden" name="wid" value="<?php echo ($tw["ybid"]); ?>">
</div>
<div class="center_2">
    <p class="fix1">备注</p>
    <input type="text" name="wx_intro" placeholder="在此输入你的留言"/>
</div>
<div class="clear"></div>
<div class="bottom">
    <input class="fix2" type="checkbox"/><span class="color">我已经详细阅读并同意<span
        class="special">《赛文蒸汽洗车用户服务协议》</span></span>

</div>
<div class="bottom_1">
    <h4>温馨提示</h4>
    <p class="size">

        1.具体上门时间以工程师预约为准<br/> 2.损坏零件工程师需要收回，如需自留另补差价
        <br/> 3.该维修价格为预计金额，实际金额以工程师检测故障为准
    </p>
    <div class="bottom_2">

        <button class="bottom_2_1" type="submit">立即服务</button>

    </div>

</div>

</form>


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
                        请选择上门时间
                    </h4>
                </div>
            </div>

            <div class="modal-body">
                <p class="p1">上门日期</p>
                <input  name="wx_time" id="wx_time" type="datetime-local">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="times()">确认</button>



            </div>
            <!--<div class="modal-footer">-->
                <!--<p class="p1">上门时间</p>-->
                <!--<table style="text-align: center; margin-bottom: 10%;" width="100%" border="1" cellspacing="0"-->
                       <!--cellpadding="0">-->
                    <!--<tr>-->
                        <!--<a href="#">-->
                            <!--<td>08:15</td>-->
                        <!--</a>-->
                        <!--<a href="#">-->
                            <!--<td>09:15</td>-->
                        <!--</a>-->
                        <!--<a href="#">-->
                            <!--<td>10:15</td>-->
                        <!--</a>-->
                        <!--<a href="#">-->
                            <!--<td>11:15</td>-->
                        <!--</a>-->
                    <!--</tr>-->
                    <!--<tr>-->
                        <!--<a href="#">-->
                            <!--<td>12:15</td>-->
                        <!--</a>-->
                        <!--<a href="#">-->
                            <!--<td>13:15</td>-->
                        <!--</a>-->
                        <!--<a href="#">-->
                            <!--<td>14:15</td>-->
                        <!--</a>-->
                        <!--<a href="#">-->
                            <!--<td>15:15</td>-->
                        <!--</a>-->
                    <!--</tr>-->
                    <!--<tr>-->
                        <!--<a href="#">-->
                            <!--<td> 16:15</td>-->
                        <!--</a>-->
                        <!--<a href="#">-->
                            <!--<td> 17:15</td>-->
                        <!--</a>-->
                        <!--<a href="#">-->
                            <!--<td> 18:15</td>-->
                        <!--</a>-->
                        <!--<a href="#">-->
                            <!--<td> 19:15</td>-->
                        <!--</a>-->
                    <!--</tr>-->
                <!--</table>-->

            <!--</div>-->
        </div>

        <!-- /.modal-content -->
    </div>
    <!-- /.modal -->
</div>


<!-- 模态框（Modal） -->
<div class="modal fade" id="myyouhui" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"  >
            <div class="top">
                <a href="#"><strong><span class="return_1" ><</span></a></strong><strong><span class="return" >我的优惠券</span></strong>
            </div>
            <?php if(is_array($tx)): $i = 0; $__LIST__ = $tx;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="youhui_1" id="center">
               <a href="#" id="youhui" class="btn btn-default" data-dismiss="modal"  onclick="youhui('<?php echo ($vo["price"]); ?>')" style="width: 92%; margin-top: 10px; height: 220px;
               background:url('/che/Public/Home/images1/优惠券1'); background-size:cover;
display: block;" >
                   <!--<img src="/che/Public/Home/images1/优惠券1.png"  width="100%" style="position: relative"   /></a>-->
                <div style="width: 100px;height: 50px; background: rgba(255,255,255,0);position: relative; left: 30px; top: 120px; color: #fff;font-size: 26px;">￥<?php echo ($vo["price"]); ?>元</div>
               </a>

        </div><?php endforeach; endif; else: echo "" ;endif; ?>

    </div>
</div>
</body>
<script>
    function youhui($value) {
var youhui= document.getElementById('returns').innerHTML=$value+"元"
        //console.log("dqwe"+$value);
        document.getElementById("yh11").value=$value;

    }

</script>

</html>