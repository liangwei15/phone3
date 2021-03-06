<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="stylesheet" href="/che/Public/Admin/assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/che/Public/Admin/assets/css/admin.css">
    <link rel="stylesheet" href="/che/Public/Admin/assets/css/app.css">
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body data-type="generalComponents">



<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <a href="javascript:;" class="tpl-logo">
            <img src="/che/Public/Admin/assets/img/logo.png" alt="">
        </a>
    </div>
    <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
            data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
            class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span
                    class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>

            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="tpl-header-list-user-nick">禁言小张</span><span class="tpl-header-list-user-ico"> <img
                        src="/che/Public/Admin/assets/img/user01.png"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="#"><span class="am-icon-bell-o"></span> 资料</a></li>
                    <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                    <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li><a href="###" class="tpl-header-list-link"><span
                    class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
        </ul>
    </div>
</header>


<div class="tpl-page-container tpl-page-header-fixed">


    <div class="tpl-left-nav tpl-left-nav-hover">
    <div class="tpl-left-nav-title">
        Amaze UI 列表
    </div>
    <div class="tpl-left-nav-list">
        <ul class="tpl-left-nav-menu">
            <li class="tpl-left-nav-item">
                <a href="/che/index.php/Admin/Index/form-amazeui.html" class="nav-link">
                    <i class="am-icon-home"></i>
                    <span>首页</span>
                </a>
            </li>
			 <li class="tpl-left-nav-item">
                <a href="/che/index.php/Admin/Index/userlist.html" class="nav-link">
                    <i class="am-icon-home"></i>
                    <span>管理员管理</span>
                </a>
            </li>
            <li class="tpl-left-nav-item">
                <!-- 打开状态 a 标签添加 active 即可   -->
                <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-wpforms"></i>
                    <span>车辆管理</span>
                    <!-- 列表打开状态的i标签添加 tpl-left-nav-more-ico-rotate 图表即90°旋转  -->
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                </a>
                <!-- 打开状态 添加 display:block-->
                <ul class="tpl-left-nav-sub-menu" style="display: block;">
                    <li>
                        <!-- 打开状态 a 标签添加 active 即可   -->
                        <a href="/che/index.php/Admin/Index/form-amazeui.html">
                            <i class="am-icon-angle-right"></i>
                            <span>品牌增加</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>

                        <a href="/che/index.php/Admin/Index/brondlist.html">
                            <i class="am-icon-angle-right"></i>
                            <span>品牌列表</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="tpl-left-nav-item">
                <!-- 打开状态 a 标签添加 active 即可   -->
                <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-wpforms"></i>
                    <span>零件管理</span>
                    <!-- 列表打开状态的i标签添加 tpl-left-nav-more-ico-rotate 图表即90°旋转  -->
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                </a>
                <!-- 打开状态 添加 display:block-->
                <ul class="tpl-left-nav-sub-menu" style="display: block;">
                    <li>
                        <!-- 打开状态 a 标签添加 active 即可   -->
                        <a href="/che/index.php/Admin/Index/addcomponents.html">
                            <i class="am-icon-angle-right"></i>
                            <span>零件种类增加</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>

                        <a href="/che/index.php/Admin/Index/brondlist2.html">
                            <i class="am-icon-angle-right"></i>
                            <span>查看/增加零件</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="tpl-left-nav-item">
                <!-- 打开状态 a 标签添加 active 即可   -->
                <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-wpforms"></i>
                    <span>预约管理</span>
                    <!-- 列表打开状态的i标签添加 tpl-left-nav-more-ico-rotate 图表即90°旋转  -->
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                </a>
                <!-- 打开状态 添加 display:block-->
                <ul class="tpl-left-nav-sub-menu" style="display: block;">
                    <li>
                        <!-- 打开状态 a 标签添加 active 即可   -->
                        <a href="/che/index.php/Admin/Index/shijiayuyue.html">
                            <i class="am-icon-angle-right"></i>
                            <span>试驾预约</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>
                    </li>
                    <li>
                        <!-- 打开状态 a 标签添加 active 即可   -->
                        <a href="/che/index.php/Admin/Index/baoyangyuyue.html">
                            <i class="am-icon-angle-right"></i>
                            <span>保养预约</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>
                    </li>
					 <li>
                        <!-- 打开状态 a 标签添加 active 即可   -->
                        <a href="/che/index.php/Admin/Index/weixiuyuyue.html">
                            <i class="am-icon-angle-right"></i>
                            <span>维修预约</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="tpl-left-nav-item">
                <!-- 打开状态 a 标签添加 active 即可   -->
                <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-wpforms"></i>
                    <span>钣金喷漆管理</span>
                    <!-- 列表打开状态的i标签添加 tpl-left-nav-more-ico-rotate 图表即90°旋转  -->
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                </a>
                <!-- 打开状态 添加 display:block-->
                <ul class="tpl-left-nav-sub-menu" style="display: block;">
                    <li>
                        <!-- 打开状态 a 标签添加 active 即可   -->
                        <a href="/che/index.php/Admin/Index/brondlist3">
                            <i class="am-icon-angle-right"></i>
                            <span>价格设置</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>

                        <a href="/che/index.php/Admin/Index/bjyuyue.html">
                            <i class="am-icon-angle-right"></i>
                            <span>钣金喷漆预约</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="tpl-left-nav-item">
                <!-- 打开状态 a 标签添加 active 即可   -->
                <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-wpforms"></i>
                    <span>验证管理</span>
                    <!-- 列表打开状态的i标签添加 tpl-left-nav-more-ico-rotate 图表即90°旋转  -->
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                </a>
                <!-- 打开状态 添加 display:block-->
                <ul class="tpl-left-nav-sub-menu" style="display: block;">
                    <li>
                        <!-- 打开状态 a 标签添加 active 即可   -->
                        <a href="/che/index.php/Admin/Index/yanzheng">
                            <i class="am-icon-angle-right"></i>
                            <span>订单验证</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>

                        <a href="/che/index.php/Admin/Index/tuikuan.html">
                            <i class="am-icon-angle-right"></i>
                            <span>退款</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>
                    </li>
                </ul>
            </li>




        </ul>
    </div>
</div>


    <div class="tpl-content-wrapper">
        <div class="tpl-content-page-title">
            Amaze UI 文字列表
        </div>
        <ol class="am-breadcrumb">
            <li><a href="#" class="am-icon-home">首页</a></li>
            <li><a href="#">Amaze UI CSS</a></li>
            <li class="am-active">文字列表</li>
        </ol>
        <div class="tpl-portlet-components">
            <div class="portlet-title">
                <div class="caption font-green bold">
                    钣金喷漆列表
                </div>


            </div>
            <div class="tpl-block">

                <div class="am-g">
                    <div class="am-u-sm-12">
                        <form class="am-form">
                            <table class="am-table am-table-striped am-table-hover table-main">
                                <thead>
                                <tr>
                                    <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                    <th class="table-id">ID</th>
                                    <th class="table-title">车型</th>
                                    <th class="table-title">姓名</th>
                                    <th class="table-title">时间</th>
                                    <th class="table-set">车牌号</th>
                                    <th class="table-set">总价</th>
                                    <th class="table-set">手机号</th>
                                    <th class="table-set">维修明细</th>
                                    <th class="table-set">付款情况</th>
                                    <th class="table-set">备注</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(is_array($vo['voo'])): $i = 0; $__LIST__ = $vo['voo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2o): $mod = ($i % 2 );++$i;?><tr>
                                        <td><input type="checkbox"></td>
                                        <td><?php echo ($i); ?></td>
                                        <td><a href="#"><?php echo ($vo["carname"]); ?>-<?php echo ($vo["modelname"]); ?>-<?php echo ($vo["displacementname"]); ?></a></td>
                                        <td><a href="#"><?php echo ($vo["xm"]); ?></a></td>
                                        <td><a href="#"><?php echo ($vo["sj"]); ?></a></td>
                                        <td><a href="#"><?php echo ($vo["cph"]); ?></a></td>
                                        <td><a href="#"><?php echo ($vo["price"]); ?></a></td>
                                        <td><a href="#"><?php echo ($vo["tel"]); ?></a></td>
                                        <td><a href="#"   data-toggle="modal" data-target="#myModal<?php echo ($i); ?>">点击查看</a></td>
                                        <div class="modal fade" id="myModal<?php echo ($i); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 150px;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                            &times;
                                                        </button>
                                                        <h4 class="modal-title" id="myModalLabel">
                                                            钣金喷漆明细
                                                        </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        前保险杠.........<?php if($v2o["qbxg"] == null): ?>无需进行钣金喷漆 <?php else: echo ($v2o["qbxg"]); ?>元<?php endif; ?><br>

                                                       发动机舱盖
                                                           .........<?php if($v2o["fdjcg"] == null): ?>无需进行钣金喷漆 <?php else: echo ($v2o["fdjcg"]); ?>元<?php endif; ?><br>
                                                       左前翼子板
                                                           .........<?php if($v2o["zqyzb"] == null): ?>无需进行钣金喷漆 <?php else: echo ($v2o["zqyzb"]); ?>元<?php endif; ?><br>
                                                      右前翼子板.........<?php if($v2o["yqyzb"] == null): ?>无需进行钣金喷漆 <?php else: echo ($v2o["yqyzb"]); ?>元<?php endif; ?><br>
                                                       做底大边.........<?php if($v2o["zddb"] == null): ?>无需进行钣金喷漆 <?php else: echo ($v2o["zddb"]); ?>元<?php endif; ?><br>
                                                       左反光镜.........<?php if($v2o["zfgj"] == null): ?>无需进行钣金喷漆 <?php else: echo ($v2o["zfgj"]); ?>元<?php endif; ?><br>
                                                        右反光镜.........<?php if($v2o["yfgj"] == null): ?>无需进行钣金喷漆 <?php else: echo ($v2o["yfgj"]); ?>元<?php endif; ?><br>
                                                       左前门.........<?php if($v2o["zqm"] == null): ?>无需进行钣金喷漆 <?php else: echo ($v2o["zqm"]); ?>元<?php endif; ?><br>
                                                       右前门.........<?php if($v2o["yqm"] == null): ?>无需进行钣金喷漆 <?php else: echo ($v2o["yqm"]); ?>元<?php endif; ?><br>
                                                        车顶.........<?php if($v2o["cd"] == null): ?>无需进行钣金喷漆 <?php else: echo ($v2o["cd"]); ?>元<?php endif; ?><br>
                                                       左后门.........<?php if($v2o["yhm"] == null): ?>无需进行钣金喷漆 <?php else: echo ($v2o["yhm"]); ?>元<?php endif; ?><br>
                                                       行李箱盖.........<?php if($v2o["xlxg"] == null): ?>无需进行钣金喷漆 <?php else: echo ($v2o["xlxg"]); ?>元<?php endif; ?><br>
                                                       左后翼子板.........<?php if($v2o["zhyzb"] == null): ?>无需进行钣金喷漆 <?php else: echo ($v2o["zhyzb"]); ?>元<?php endif; ?><br>
                                                       右后翼子板.........<?php if($v2o["yhyzb"] == null): ?>无需进行钣金喷漆 <?php else: echo ($v2o["yhzyb"]); ?>元<?php endif; ?><br>
                                                        后保险杠.........<?php if($v2o["hbxg"] == null): ?>无需进行钣金喷漆 <?php else: echo ($v2o["hbxg"]); ?>元<?php endif; ?><br>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                                                        </button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal -->
                                        </div>
                                       <td><a href="#"><?php if($vo["zhuangtai"] == 1): ?>到店付款<?php elseif($vo["zhuangtai"] == 2): ?>全款付清-未消费
										<?php elseif($vo["zhuangtai"] == 99): ?>全款付清-消费完毕
										<?php elseif($vo["zhuangtai"] == 4): ?>订单取消<?php endif; ?></a></td>

                                        <td><a href="#"><?php echo ($vo["bz"]); ?></a></td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>

                                </tbody>
                            </table>
                            <div class="am-cf am-pagination tpl-pagination">
                                <?php echo ($page); ?>
                            </div>
                            <hr>

                        </form>
                    </div>

                </div>
            </div>
            <div class="tpl-alert"></div>
        </div>


    </div>

</div>
<!-- 模态框（Modal） -->


<script src="/che/Public/Admin/assets/js/jquery.min.js"></script>
<script src="/che/Public/Admin/assets/js/amazeui.min.js"></script>
<script src="/che/Public/Admin/assets/js/app.js"></script>
</body>

</html>