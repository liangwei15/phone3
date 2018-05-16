<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<head>

    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>维修服务</title>
    <link rel="stylesheet" type="text/css" href="/phone2/Public/Home/css/First-4.css">

</head>
<body>
<div class="out">
    <div class="yellow">
        <p class="price"><strong>预估维修价</strong><br/>
            &yen;<span class="big">330</span>
        </p>
    </div>
    <div class="out1">
        <div class="list">
            <img src="/phone2/Public/Home/img/return.gif" width="30" height="30"/>
            <span> 重选故障</span>
        </div>
        <div class="list2">
            <img src="/phone2/Public/Home/img/plaint.gif" width="30" height="30"/>
            <span> 故障列表</span>
        </div>
    </div>
    <div class="clear"></div>
    <div class="add"></div>
    <div class="out2">
        <p class="title">选择维修方式</p>

        <div class="pic2 pic">
            <img src="/phone2/Public/Home/img/big_03.gif" width="100%" height="100%"/>

            <p class="text1">上门维修</p>
        </div>
        <div class="pic2">
            <img src="/phone2/Public/Home/img/big_05.gif" width="100%" height="100%"/>

            <p class="text">到店维修</p>
        </div>
        <div class="pic2">
            <img src="/phone2/Public/Home/img/big_07.gif" width="100%" height="100%"/>
            <p class="text">邮寄维修</p>
        </div>
        <div class="pic3">
            <img src="/phone2/Public/Home/img/big_09.gif" width="75%" height="100%"/>

            <p class="text3">现场维修</p>
        </div>
    </div>
    <div class="clear"></div>
    <div class="add1">
        <p class="time">小唯快修为客户承担来回运费，请放心邮寄</p>
    </div>
    <div class="box">
        <div class="box1">
            <img src="/phone2/Public/Home/img/T3_1.gif" width="100%" height="100%" class="head"/>
            <p class="flout">请输入您的称呼</p><img src="/phone2/Public/Home/img/next.gif" width="100%" height="100%" class="next">
        </div>
        <div style="clear:both"></div>
        <div class="box1">
            <img src="/phone2/Public/Home/img/T3_2.gif" width="100%" height="100%" class="head"/>
            <p class="flout">请输入您的联系方式</p><img src="/phone2/Public/Home/img/next.gif" width="100%" height="100%" class="next">
        </div>
        <div style="clear:both"></div>
        <div class="box1">
            <img src="/phone2/Public/Home/img/T3_3.gif" width="100%" height="100%" class="head"/>
            <p class="flout">请输入工程师的编号</p><img src="/phone2/Public/Home/img/next.gif" width="100%" height="100%" class="next">
        </div>
        <div style="clear:both"></div>
        <div class="box1">
            <img src="/phone2/Public/Home/img/T3_4.gif" width="100%" height="100%" class="head"/>
            <p class="flout">请选择优惠券</p><img src="/phone2/Public/Home/img/next.gif" width="100%" height="100%" class="next">
        </div>
    </div>
    <div class="add2"></div>
    <div class="exchange ">
        <p class="txt1">兑换</p><input type="text" value="再次输入你的兑换码" class="none"/>
        <input type="button" value="兑换" class="change" style="border-radius: 5px"/>
    </div>
    <div class="add2"></div>
    <div class="exchange">
        <p class="txt1">备注</p><input type="text" value="在此输入你的留言" class="none"/>
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
        <input type="button" value="立即维修" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"/>
    </div>


</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    模态框（Modal）标题
                </h4>
            </div>
            <div class="modal-body">
                在这里添加一些文本
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
                <button type="button" class="btn btn-primary">
                    提交更改
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

</body>
</html>