<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<head>

    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>维修服务</title>
    <link rel="stylesheet" type="text/css" href="/phone3/Public/Home/css/First.css">
<script>
    function times() {

        var time=document.getElementById('wx_time').value;


        document.getElementById("time1").value=time;
        document.getElementById("center_0").innerHTML=time;

    }
    function dizhi() {

        var time=document.getElementById('address').value;


        document.getElementById("address1").value=time;
        document.getElementById("center_1").innerHTML=time;

    }
    function youhui1() {

        document.getElementById('server').value=1;
        document.getElementById('youhui1').style.border="3px yellow solid";
        document.getElementById('youhui2').style.border="none";

    }
    function youhui2() {

        document.getElementById('server').value=2;
        document.getElementById('youhui1').style.border="none";
        document.getElementById('youhui2').style.border="3px yellow solid";

    }
    function jsedit1(){
        //从数据库里获取当前要修改的数据

           document.getElementById('duihuanma').value=time;
            $.ajax({
                type:'post',
                url:'/Index/edit',
                data:{Time:time},
            });
            $('#hui').val(json.c_price);



        //把数据放到模态框中显示
    }


    function jsedit() {

        var ccc = document.getElementById('duihuanma').value;

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                alert(xhr.responseText);
                obj = JSON.parse(xhr.responseText);
                console.log(obj);
                document.getElementById("hui").innerHTML =
                    obj['c_price'];
                // JSON.parse(xhr.responseText, function(k, v) {
                //     document.write( v );// 输出当前属性，最后一个为 ""
                //     document.write("<br>");
                //     return k;       // 返回修改的值
                //
                // });
            }
        }
        xhr.open('get', "/phone3/index.php/Home/Index/edit?key=" + ccc);
        xhr.send(null);

    }


</script>
</head>
<body>
<form action="<?php echo U('add_repair');?>" method="post" enctype="multipart/form-data">
    <input type="hidden" id="time1" name="time">
    <!--<input type="hidden" id="address1" name="address">-->
    <!--<input type="hidden" id="server" name="youhui">-->
    <input type="hidden"  id="hui" name="hui">
    <input type="hidden" name="prices" value="<?php echo ($da["price"]); ?>">
    <input  type="hidden" value="<?php echo ($tm["fid"]); ?>" name="huihuai">

<div class="out">
    <div class="yellow">
        <p class="price"><strong>预估维修价</strong><br/>
            &yen;<span class="big"><?php echo ($da["price"]); ?></span>
        </p>
    </div>

    <div class="out1">
        <div class="list">
            <a href="/phone3/index.php/Home/Index/zero_1.html"><img src="/phone3/Public/Home/img/return.gif" width="30" height="30"/></a>
            <span> 重选故障</span>
        </div>
        <div class="list2">
            <img src="/phone3/Public/Home/img/plaint.gif" width="30" height="30"/>
            <span> 故障列表</span>
        </div>
    </div>

    <div class="clear"></div>
    <div class="add"></div>
    <div class="out2">
        <p class="title">选择维修方式</p>

        <div class="pic2 pic" onclick="window.open('/phone3/index.php/Home/Index/First?fid=<?php echo ($tm["fid"]); ?>','_self');" style="width: 33%">
            <img src="/phone3/Public/Home/img/Tp_01.gif" width="100%" height="100%"/>

            <p class="text1">上门维修</p>
        </div>

        <div class="pic2" onclick="window.open('/phone3/index.php/Home/Index/First_2?fid=<?php echo ($tm["fid"]); ?>','_self');" style="width: 33%">
            <img src="/phone3/Public/Home/img/Tp_02.gif" width="100%" height="100%"/>

            <p class="text">到店维修</p>
        </div>

        <div class="pic2" onclick="window.open('/phone3/index.php/Home/Index/First_3?fid=<?php echo ($tm["fid"]); ?>','_self');"style="width: 33%">
            <img src="/phone3/Public/Home/img/Tp_03.gif" width="100%" height="100%"/>

            <p class="text3">邮寄维修</p>
        </div>

        <!--<div class="pic3" onclick="window.open('/phone3/index.php/Home/Index/First_4?fid=<?php echo ($tm["fid"]); ?>','_self');">-->
            <!--<img src="/phone3/Public/Home/img/Tp_04.gif" width="75%" height="100%"/>-->

            <!--<p class="text">现场维修</p>-->
        <!--</div>-->
    </div>
    <div class="clear"></div>
    <div class="add1">
        <p class="time">30分钟上门服务，让服务变得随时随地</p>
    </div>
    <div class="box">
        <div class="box1">
            <!--<img src="/phone3/Public/Home/img/little_001.gif" width="100%" height="100%" class="head"/>-->
            <!--<p class="flout" id="center_1">请选择服务地址</p><a data-toggle="modal" data-target="#myModal" id="returns">-->
            <!--<img src="/phone3/Public/Home/img/next.gif" width="100%" height="100%" class="next">-->
        <!--</a>-->
            <img src="/phone3/Public/Home/img/little_001.gif" width="100%" height="100%" class="head"/>
            <input class="flout" name="address" placeholder="请选择服务地址" id="center_1" style="height: 40px;width: 85%">
            <img src="/phone3/Public/Home/img/next.gif" width="100%" height="100%" class="next">
        </div>
        <!--<div style="clear:both"></div>-->
        <div class="box1">
            <!--<img src="/phone3/Public/Home/img/little_002.gif" width="100%" height="100%" class="head"/>-->
            <!--<p class="flout" id="center_0">请选择上门时间</p><a data-toggle="modal" data-target="#shijian" id="returns1">-->
            <!--<img src="/phone3/Public/Home/img/next.gif" width="100%" height="100%" class="next">-->
        <!--</a>-->
            <img src="/phone3/Public/Home/img/little_002.gif" width="100%" height="100%" class="head"/>
            <input class="flout" name="time" type="datetime-local" id="center_0" placeholder="请选择上门时间" style="height: 40px;width: 85%"></input>
            <img src="/phone3/Public/Home/img/next.gif" width="100%" height="100%" class="next">
        </div>
        <div class="box1">
            <img src="/phone3/Public/Home/img/T3_2.gif" width="100%" height="100%" class="head"/>
            <input class="flout" name="phone" type="number" id="center_0" placeholder="请输入您的联系方式" style="height: 40px;width: 85%"></input>
            <!--<p class="flout" id="center_2">请输入您的联系方式</p><a data-toggle="modal" data-target="#tel" id="returns1">-->
            <img src="/phone3/Public/Home/img/next.gif" width="100%" height="100%" class="next">
            </a>
        </div>
        <!--<div style="clear:both"></div>-->
        <div class="box1">
            <!--<img src="/phone3/Public/Home/img/little_003.gif" width="100%" height="100%" class="head"/>-->
            <!--<p class="flout">请选择优惠券</p><a data-toggle="modal" data-target="#myyouhui" id="returns2">-->
            <!--<img src="/phone3/Public/Home/img/next.gif" width="100%" height="100%" class="next">-->
        <!--</a>-->
            <img src="/phone3/Public/Home/img/little_003.gif" width="100%" height="100%" class="head"/>
            <!--<p class="flout">请选择优惠券</p>-->
            请选择优惠券： <select name="youhui">
            <?php if(is_array($tb)): $i = 0; $__LIST__ = $tb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["discountid"]); ?>"><?php echo ($vo["price"]); ?>元优惠卷</option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
            <img src="/phone3/Public/Home/img/next.gif" width="100%" height="100%" class="next">
        </div>
    </div>


    <div class="add2"></div>
    <div class="exchange ">
        <p class="txt1" >兑换</p><input type="text" id="duihuanma" placeholder="再次输入你的兑换码" class="none"/>
        <input type="button" onclick="jsedit()" value="兑换"  class="change" style="border-radius: 5px"/>
    </div>
    <div class="add2"></div>
    <div class="exchange">
        <p class="txt1">备注</p><input type="text" name="intro" placeholder="在此输入你的留言" class="none"/>
    </div>
    <div class="under">
        <input type="checkbox" class="flout"/>
        <p class="read">我已详细阅读并同意</p><span class="colour">《小唯快修用户服务协议》</span>
        <div class="clear"></div>
        <p class="say">温馨提示</p>

        <ol class="ol">
            <li class="height">具体上门时间以工程师预约为准</li>
            <li class="height">损坏零件工程师需要收回，如需自留另补差价</li>
            <li class="height">该维修价格为预计金额，实际金额以工程师检测故障为准</li>
        </ol>
        <input type="submit" style="margin-left: 180px" value="立即维修" class="btn btn-primary btn-lg" />
    </div>


</div>
</form>



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    请选择服务地址
                </h4>
            </div>
            <div class="modal-body">

                <input type="text"  id="address">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="dizhi()">确认</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->

                </div>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="shijian" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <div class="modal-title1">
                    <h4 class="modal-title" id="myModalLabel1">
                        请选择上门时间
                    </h4>
                </div>
            </div>

            <div class="modal-body">
                <p class="p1">上门日期</p>
                <input  name="wx_time" id="wx_time" type="datetime-local">
                <button type="button" class="btn btn-default" data-dismiss="modal"  onclick="times()">确认</button>



            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="myyouhui" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel2">
                    请选择优惠券
                </h4>
            </div>
            <div class="modal-body">

                <div class="out">
                    <img src="/phone3/Public/Home/img/TT_01.gif" width="100%" class="own" id="youhui1" onclick="youhui1()">
                    <img src="/phone3/Public/Home/img/TT_02.gif" width="100%" class="two" id="youhui2" onclick="youhui2()">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    提交更改
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->

</div>
</div>
</div>
</div>


</body>
</html>