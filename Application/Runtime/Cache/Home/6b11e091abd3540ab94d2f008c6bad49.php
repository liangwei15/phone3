<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<head>

    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>维修服务</title>
    <link rel="stylesheet" type="text/css" href="/phone3/Public/Home/css/First-4.css">
    <script>
        function namea() {
            var name1=document.getElementById('name').value;


            document.getElementById("name1").value=name1;
            document.getElementById("center_1").innerHTML=name1;
        }
        function lian() {
            var name1=document.getElementById('lian').value;


            document.getElementById("lian1").value=name1;
            document.getElementById("center_2").innerHTML=name1;
        }
        function bian() {
            var name1=document.getElementById('bian').value;


            document.getElementById("bian1").value=name1;
            document.getElementById("center_3").innerHTML=name1;
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
<form action="/phone3/index.php/Home/Index/add_repair4" enctype="multipart/form-data" method="post">
    <input type="hidden" name="name" id="name1">
    <input type="hidden" name="lian" id="lian1">
    <input type="hidden" name="bian" id="bian1">
    <input type="hidden"  id="hui" name="hui">
    <input type="hidden" name="server" id="server">
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
            <img src="/phone3/Public/Home/img/return.gif" width="30" height="30"/>
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

        <div class="pic2 pic" onclick="window.open('/phone3/index.php/Home/Index/First?fid=<?php echo ($tm["fid"]); ?>','_self');">
            <img src="/phone3/Public/Home/img/big_03.gif" width="100%" height="100%"/>

            <p class="text1">上门维修</p>
        </div>
        <div class="pic2" onclick="window.open('/phone3/index.php/Home/Index/First_2?fid=<?php echo ($tm["fid"]); ?>','_self');">
            <img src="/phone3/Public/Home/img/big_05.gif" width="100%" height="100%"/>

            <p class="text">到店维修</p>
        </div>
        <div class="pic2" onclick="window.open('/phone3/index.php/Home/Index/First_3?fid=<?php echo ($tm["fid"]); ?>','_self');">
            <img src="/phone3/Public/Home/img/big_07.gif" width="100%" height="100%"/>
            <p class="text">邮寄维修</p>
        </div>
        <div class="pic3" onclick="window.open('/phone3/index.php/Home/Index/First_4?fid=<?php echo ($tm["fid"]); ?>','_self');">
            <img src="/phone3/Public/Home/img/big_09.gif" width="75%" height="100%"/>
            <p class="text3">现场维修</p>
        </div>
    </div>
    <div class="clear"></div>
    <div class="add1">
        <p class="time">小唯快修为客户承担来回运费，请放心邮寄</p>
    </div>
    <div class="box">
        <div class="box1">
            <img src="/phone3/Public/Home/img/T3_1.gif" width="100%" height="100%" class="head"/>
            <!--<p class="flout" id="center_1">请输入您的称呼</p><a data-toggle="modal" data-target="#ccname" id="returns4">-->
            <input class="flout" type="text" name="name" placeholder="请输入您的称呼" id="center_1" style="height: 40px;width: 85%">
            <img src="/phone3/Public/Home/img/next.gif" width="100%" height="100%" class="next"></a>
        </div>
        <div style="clear:both"></div>
        <div class="box1">
            <img src="/phone3/Public/Home/img/T3_2.gif" width="100%" height="100%" class="head"/>
            <!--<p class="flout" id="center_2">请输入您的联系方式</p><a data-toggle="modal" data-target="#lianxi" id="returns4">-->
            <input class="flout" type="number" name="lian" placeholder="请输入您的联系方式" id="center_1" style="height: 40px;width: 85%">
            <img src="/phone3/Public/Home/img/next.gif" width="100%" height="100%" class="next"></a>
        </div>
        <div style="clear:both"></div>
        <div class="box1">
            <img src="/phone3/Public/Home/img/T3_3.gif" width="100%" height="100%" class="head"/>
            <!--<p class="flout" id="center_3">请输入工程师的编号</p><a data-toggle="modal" data-target="#bianhao" id="returns4">-->
            <input class="flout" type="number" name="bian" placeholder="请输入工程师的编号" id="center_1" style="height: 40px;width: 85%">
            <img src="/phone3/Public/Home/img/next.gif" width="100%" height="100%" class="next"></a>
        </div>
        <div style="clear:both"></div>
        <div class="box1">
            <img src="/phone3/Public/Home/img/T3_4.gif" width="100%" height="100%" class="head"/>
            <!--<p class="flout" id="center_4">请选择优惠券</p><a data-toggle="modal" data-target="#myyouhui" id="returns4">-->
            请选择优惠券： <select name="server">
            <?php if(is_array($tb)): $i = 0; $__LIST__ = $tb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["discountid"]); ?>"><?php echo ($vo["price"]); ?>元优惠卷</option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
            <img src="/phone3/Public/Home/img/next.gif" width="100%" height="100%" class="next"></a>
        </div>
    </div>
    <div class="add2"></div>
    <div class="exchange ">
        <p class="txt1">兑换</p><input type="text" id="duihuanma"  placeholder="再次输入你的兑换码" class="none"/>
        <input type="button"  onclick="jsedit()" value="兑换" class="change" style="border-radius: 5px"/>
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
        <input type="submit" value="立即维修" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"/>
    </div>
</form>

</div>
<!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
    <!--<div class="modal-dialog">-->
        <!--<div class="modal-content">-->
            <!--<div class="modal-header">-->
                <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">-->
                    <!--&times;-->
                <!--</button>-->
                <!--<h4 class="modal-title" id="myModalLabel">-->
                    <!--模态框（Modal）标题-->
                <!--</h4>-->
            <!--</div>-->
            <!--<div class="modal-body">-->
                <!--在这里添加一些文本-->
            <!--</div>-->
            <!--<div class="modal-footer">-->
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">关闭-->
                <!--</button>-->
                <!--<button type="button" class="btn btn-primary">-->
                    <!--提交更改-->
                <!--</button>-->
            <!--</div>-->
        <!--</div>&lt;!&ndash; /.modal-content &ndash;&gt;-->
    <!--</div>&lt;!&ndash; /.modal &ndash;&gt;-->
<!--</div>-->

<div class="modal fade" id="ccname" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    请输入您的称呼
                </h4>
            </div>
            <div class="modal-body">
                <input type="text"  id="name">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="namea()">
                    提交更改
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<div class="modal fade" id="lianxi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    请输入您的联系方式
                </h4>
            </div>
            <div class="modal-body">
                <input type="text"  id="lian">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="lian()">
                    提交更改
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<div class="modal fade" id="bianhao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    请输入工程师的编号
                </h4>
            </div>
            <div class="modal-body">
                <input type="text"  id="bian">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="bian()">
                    提交更改
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<div class="modal fade" id="myyouhui" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel4">
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

</body>
</html>