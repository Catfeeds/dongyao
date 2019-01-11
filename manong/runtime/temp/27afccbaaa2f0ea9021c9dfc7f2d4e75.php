<?php /*a:1:{s:75:"C:\Users\Dongyao001\Desktop\manong\application\index\view\member\index.html";i:1545122254;}*/ ?>
﻿   <?php echo widget("Last/header"); ?>
   <?php echo widget("Last/left"); ?>

<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div>	<div class="fly-panel fly-panel-user" pad20>
		<div class="layui-tab layui-tab-brief" lay-filter="user" id="LAY_uc">
			<div class="fly-msg fly-text fly-mb20">hi~~<a class="fly-red"> public </a>，欢迎登陆码农网会员中心！</div>
			<div class="layui-row">
				<div class="layui-col-md12">
        			<div class="profile-sidebar">
               			<div class="portlet light profile-sidebar-portlet ">
                		<div class="profile-userpic">
                    			<a href="https://www.codesceo.com/index.php?s=member&c=account&m=avatar"><img src="/static/index/Picture/avatar_90.png" class="img-responsive"></a>
                		</div>
                		<div class="profile-usertitle">
                    		<div class="profile-usertitle-name"> public </div>
                    		<div class="profile-usertitle-job"> </div>
                		</div>
                		<div class="profile-userbuttons">
                    		<a class="layui-btn layui-btn-sm layui-btn-normal layui-btn-radius" href="https://www.codesceo.com/index.php?s=member&c=account&m=upgrade">升级VIP</a>
                    		<a class="layui-btn layui-btn-sm layui-btn-danger layui-btn-radius" href="/member/score/">充值积分</a>
                		</div>
                		<div class="profile-usermenu" style="margin-top:23px;">
                    		<ul class="nav">
                        		<li class=""><a href="https://www.codesceo.com/index.php?s=member&c=account&m=permission"><i class="layui-icon">&#xe612;</i> 会员组：普通会员</a></li>
                        		<li><a href="https://www.codesceo.com/index.php?s=member&c=pay&m=score"><i class="layui-icon">&#xe63f;</i> 积分：1.0</a></li>
                        		<li><a href="https://www.codesceo.com/index.php?s=member&c=pay&m=experience"><i class="layui-icon">&#xe735;</i> 经验：8</a></li>
                        		<li><a href="https://www.codesceo.com/index.php?s=member&c=pay&m=index"><i class="layui-icon">&#xe65e;</i> RMB：0.00 元</a></li>
                    		</ul>
                		</div>
                		</div>
                	</div>
        			<div class="profile-content">
               		<div class="layui-row">
                   	<div class="layui-col-md12">
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption">
                                <a href="https://www.codesceo.com/index.php?s=member&c=notice&m=go" class="caption-subject font-blue bold uppercase">通知提醒</a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <ul class="feeds">
                            	                            	<li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col2">
                                                <div class="desc" style="padding:5px;">您的会员组等级升级成功</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="date"> 3天前 </div>
                                    </div>
                                </li>
                                                           	</ul>
                        </div>
                    </div>
                	</div>
            		</div>
            		<div class="layui-row">
                	<div class="layui-col-md12">
                    <div class="portlet light  ">
                        <div class="portlet-title">
                            <div class="caption">
                                <a href="https://www.codesceo.com/index.php?s=member&c=account&m=login" class="caption-subject font-blue bold uppercase"><i class="fa fa-calendar "></i> 登录记录</a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <ul class="feeds">
                              	                               	<li>
                               		<div class="desc" style="padding:5px;">
                                        <font color="red">2018-12-18 08:47</font>                                        <a href="http://www.baidu.com/baidu?wd=111.161.109.103" target="_blank">北京</a>
                                        Windows 10 Chrome 68.0.3440.106									</div>
                                </li>
                                                               	<li>
                               		<div class="desc" style="padding:5px;">
                                        <font color="red">2018-12-18 08:40</font>                                        <a href="http://www.baidu.com/baidu?wd=111.161.109.103" target="_blank">北京</a>
                                        Windows 10 Chrome 68.0.3440.106									</div>
                                </li>
                                                               	<li>
                               		<div class="desc" style="padding:5px;">
                                        2018-12-17 15:53                                        <a href="http://www.baidu.com/baidu?wd=111.161.109.103" target="_blank">北京</a>
                                        Windows 10 Chrome 68.0.3440.106									</div>
                                </li>
                                                               	<li>
                               		<div class="desc" style="padding:5px;">
                                        2018-12-16 12:24                                        <a href="http://www.baidu.com/baidu?wd=111.161.109.103" target="_blank">北京</a>
                                        Windows 10 Chrome 68.0.3440.106									</div>
                                </li>
                                                            </ul>
                        </div>
                    </div>
                	</div>
            		</div>
        			</div>
    			</div>
			</div>
		</div>
	</div>
</div>
<div class="fly-footer">
	<p><a href="/">码农网</a>2017 &copy;<a href="/">codesceo.com</a></p>
</div>
<script type="text/javascript" src="/static/index/Scripts/layui.all.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#left_').parent().parent().addClass('layui-nav-itemed');
    });
</script>
<script type="text/javascript">
    //手机设备的简单适配
var treeMobile = $('.site-tree-mobile'),
	shadeMobile = $('.site-mobile-shade')

treeMobile.on('click', function(){
	$('body').addClass('site-mobile');
});

shadeMobile.on('click', function(){
	$('body').removeClass('site-mobile');
});
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?ab05efc706718e3c3c1a66d1a3b0d70f";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script></body>
</html>