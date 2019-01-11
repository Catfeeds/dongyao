<?php /*a:1:{s:77:"C:\Users\Dongyao001\Desktop\manong\application\index\view\member\upgrade.html";i:1545102502;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
   <?php echo widget("Last/left"); ?>
<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div>	<div class="fly-panel fly-panel-user" pad20>
		<div class="layui-tab layui-tab-brief" lay-filter="user">
      	<ul class="layui-tab-title" id="LAY_mine">
       	        	<li class="layui-this"><a href="/index/member/upgrade">会员升级</a></li>
                	<li class=""><a href="/index/member/logins">登陆日志</a></li>
              <!--   	<li class=""><a href="/member/account/permission">会员权限</a></li>
                	<li class=""><a href="/member/account/oauth">快捷登录</a></li> -->
              	</ul>
      	<div class="layui-tab-content" style="padding: 20px 0;">
				       		<div class="fly-msg fly-mb20"><a> 一个星期内补差价升级，半年内可优惠部分升级：</a> 白银会员优惠49元，黄金会员优惠169元。</div>
        	<table class="layui-table" lay-skin="line">
				<colgroup><col width="150"><col width="200"><col></colgroup>
				<thead>
     				<tr><th>名称</th><th>费用</th><th>操作</th></tr>
     			</thead>
     			<tbody>
     				     				<tr>
     					<td>白银会员</td>
     					<td>99.00RMB/年</td>
     					<td>     					<a href="https://www.codesceo.com/index.php?s=member&c=account&m=upgrade&id=4" class="layui-btn layui-btn-sm layui-btn-danger">立即开通</a>
     					<a href="/index.php?s=member&c=pay&m=add&cz=99.00" class="layui-btn layui-btn-sm">充值余额</a>
     					    					</td>
     				</tr>
     				     				<tr>
     					<td>黄金会员</td>
     					<td>269.00RMB/年</td>
     					<td>     					<a href="https://www.codesceo.com/index.php?s=member&c=account&m=upgrade&id=5" class="layui-btn layui-btn-sm layui-btn-danger">立即开通</a>
     					<a href="/index.php?s=member&c=pay&m=add&cz=269.00" class="layui-btn layui-btn-sm">充值余额</a>
     					    					</td>
     				</tr>
     				     				<tr>
     					<td>钻石会员</td>
     					<td>469.00RMB/年</td>
     					<td>     					<a href="https://www.codesceo.com/index.php?s=member&c=account&m=upgrade&id=7" class="layui-btn layui-btn-sm layui-btn-danger">立即开通</a>
     					<a href="/index.php?s=member&c=pay&m=add&cz=469.00" class="layui-btn layui-btn-sm">充值余额</a>
     					    					</td>
     				</tr>
     				     			</tbody>
     		</table>
      	</div>
    	</div>
  	</div>
</div>
<div class="dr_poster_fixed" id="dr_poster_7" style="z-index:9999999;position:fixed;right:20px;top:80px;width:150px;height:px"><div><a href="https://www.codesceo.com/index.php?c=api&m=poster_show&id=21" target="_blank"><img src="Picture/b3b18eece5.png"  width="150" height="" /></a></div><div style="text-align:right;padding-top:5px"><a href="#;" onclick="$('#dr_poster_7').hide()">关闭</a></div></div><div class="fly-footer">
	<p><a href="/">码农网</a>2017 &copy;<a href="/">codesceo.com</a></p>
</div>
<script type="text/javascript" src="/static/index/Scripts/layui.all.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#left_10').parent().parent().addClass('layui-nav-itemed');
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