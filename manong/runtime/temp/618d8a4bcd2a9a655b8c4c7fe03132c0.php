<?php /*a:1:{s:70:"/www/wwwroot/manong.yaho.cc/application/index/view/member/upgrade.html";i:1547169386;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
   <?php echo widget("Last/left"); ?>
<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div>	<div class="fly-panel fly-panel-user" pad20>
		<div class="layui-tab layui-tab-brief" lay-filter="user">
      	<ul class="layui-tab-title" id="LAY_mine">
       	        	<li class="layui-this"><a href="/index/member/upgrade">会员升级</a></li>
                	<li class=""><a href="/index/member/logins">登陆日志</a></li>
                	<li class=""><a href="/index/member/vipup">开通记录</a></li>
                	<!-- <li class=""><a href="/member/account/oauth">快捷登录</a></li> -->
              	</ul>
      	<div class="layui-tab-content" style="padding: 20px 0;">
				       		<div class="fly-msg fly-mb20"><a> 一个星期内补差价升级，半年内可优惠部分升级：</a> 钻石会员已优惠69元。</div>
        	<table class="layui-table" lay-skin="line">
				<colgroup><col width="150"><col width="200"><col></colgroup>
				<thead>
     				<tr><th>名称</th><th>费用</th><th>操作</th></tr>
     			</thead>
     			<tbody>
     				    
     				 <tr>
     					<td>钻石会员</td>
     					<td>199.00RMB/年</td>
     					<td>     					
                <?php if($user['members']==1): ?>
                 <a  id="button" class="layui-btn layui-btn-sm layui-btn-danger">立即开通</a>
                <?php else: ?>
                 <a  id="button1" class="layui-btn layui-btn-sm layui-btn-danger">立即续费</a>
                <?php endif; ?>
     					<a href="/index/member/balance" class="layui-btn layui-btn-sm">充值余额</a>
     					    					</td>
     				</tr>
     				     			</tbody>
     		</table>
      	</div>
    	</div>
  	</div>
</div>
<script>
  $("#button").click(function(){
         layer.confirm('确认要开通吗？',function(index){

      $.ajax({
                  url: "<?php echo url('/Index/Member/level'); ?>",
                  type: "post",
                  async : true,
                  data: {},
                  dataType:'json',
                  success:function(data){
                        switch(data['return']){
                         case 1:
                             layer.msg("余额不足,请充值",{icon:2,time:1000});
                           break;
                         case 2:
                             layer.msg("开通成功",{icon:1,time:1000});
                         break;
                         case 3:
                             layer.msg("扣款失败~稍后再试",{icon:2,time:1000});
                         break;
                         case 4:
                             layer.msg("系统错误",{icon:2,time:1000});
                         break;
                         case 5:
                             layer.msg("续费成功",{icon:1,time:1000});
                         break;
                      }
                 
                 }
            });
  });
    });
</script>

<script>
  $("#button1").click(function(){
         layer.confirm('确认要续费吗？',function(index){
      $.ajax({
                  url: "<?php echo url('/Index/Member/level'); ?>",
                  type: "post",
                  async : true,
                  data: {},
                  dataType:'json',
                  success:function(data){
                        switch(data['return']){
                         case 1:
                             layer.msg("余额不足,请充值",{icon:2,time:1000});
                           break;
                         case 2:
                             layer.msg("开通成功",{icon:1,time:1000});
                         break;
                         case 3:
                             layer.msg("扣款失败~稍后再试",{icon:2,time:1000});
                         break;
                         case 4:
                             layer.msg("系统错误",{icon:2,time:1000});
                         break;
                         case 5:
                             layer.msg("续费成功",{icon:1,time:1000});
                         break;
                      }
                 
                 }
            });
  });
    });
</script>
<?php echo widget("Last/mfooter"); ?>
