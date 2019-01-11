<?php /*a:1:{s:68:"/www/wwwroot/manong.yaho.cc/application/index/view/member/vipup.html";i:1547089741;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
  <?php echo widget("Last/left"); ?>
<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div><div class="fly-panel fly-panel-user" pad20>
	<div class="layui-tab layui-tab-brief" lay-filter="user">
      	<ul class="layui-tab-title" id="LAY_mine">
       	        	<li ><a href="/index/member/upgrade">会员升级</a></li>
                	<li ><a href="/index/member/logins">登陆日志</a></li>
                  <li class="layui-this"><a href="/index/member/vipup">开通记录</a></li>
              	</ul>
      	<div class="layui-tab-content" style="padding: 20px 0;">
        	<table class="layui-table" lay-skin="line">
				<thead>
     				<tr>
            <th>用户</th>
            <th>开通时间</th>
            <th>消费余额</th>
            <th>状态</th>
            </tr>
     			</thead>
     			<tbody>
     			    <?php foreach($notice as $value): ?>
                <tr>
                   <th><img src="<?php echo htmlentities($value['userpic']); ?>" width="69" height="40px"></th>
                   <th><?php echo htmlentities($value['addtime']); ?></th>
                   <th><?php echo htmlentities($value['money']); ?></th>
                   <th><?php echo htmlentities($value['desc']); ?></th>
                </tr>
              <?php endforeach; ?>
          </tbody>
     		</table>
      	</div>
      	<div style="text-align: center;">
    		<div class="laypage-main" >
    		</div>
    	</div>
    </div>
</div>
</div>
   <?php echo widget("Last/mfooter"); ?>
