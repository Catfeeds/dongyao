<?php /*a:1:{s:69:"/www/wwwroot/manong.yaho.cc/application/index/view/member/logins.html";i:1547089728;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
   <?php echo widget("Last/left"); ?>
<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div>	<div class="fly-panel fly-panel-user" pad20>
		<div class="layui-tab layui-tab-brief" lay-filter="user">
      	<ul class="layui-tab-title" id="LAY_mine">
       	        	<li class=""><a href="/index/member/upgrade">会员升级</a></li>
                  <li class="layui-this"><a href="/index/member/logins">登陆日志</a></li>
                	<li ><a href="/index/member/vipup">开通记录</a></li>
                	<!-- <li class=""><a href="/member/account/permission">会员权限</a></li>
                	<li class=""><a href="/member/account/oauth">快捷登录</a></li> -->
              	</ul>
      	<div class="layui-tab-content" style="padding: 20px 0;">
        	<table class="layui-table" lay-skin="line">
				<colgroup><col width="200"><col width="200"><col></colgroup>
				<thead>
     				<tr><th>登录时间</th><th>登录地区</th><th>客户端详情</th></tr>
     			</thead>
     			<tbody>
          <?php foreach($info as $value): ?>
     				<tr>
     					<td><font color="red"><?php echo htmlentities($value['addlogin']); ?></font></td>
     					<td><atarget="_blank"><?php echo htmlentities($value['username']); ?></a></td>
     					<td>Windows 10 Chrome 68.0.3440.106</td>
     				</tr>
     			<?php endforeach; ?>
     		</tbody>
     		</table>
      	</div>
    	</div>
  	</div>
</div>
   <?php echo widget("Last/mfooter"); ?>
