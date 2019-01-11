<?php /*a:1:{s:72:"/www/wwwroot/manong.yaho.cc/application/index/view/member/eliminate.html";i:1547170985;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
  <?php echo widget("Last/left"); ?>
<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div><div class="fly-panel fly-panel-user" pad20>
	<div class="layui-tab layui-tab-brief" lay-filter="user">
      	<ul class="layui-tab-title" id="LAY_mine">
       	        	<li class=""><a href="/index/member/payment">充值记录</a></li>
                	<li class="layui-this"><a href="/index/member/eliminate">消费记录</a></li>
              	</ul>
      	<div class="layui-tab-content" style="padding: 20px 0;">
        	<table class="layui-table" lay-skin="line">
				<thead>
     				<tr>
            <th>用户</th>
            <th>时间</th>
            <th>充值积分</th>
            <th>充值余额</th>
           <!--  <th>状态</th>
            <th>备注</th> -->
            </tr>
     			</thead>
     			<tbody>
     			    <?php foreach($up as $value): ?>
                <tr>
                   <th><img src="<?php echo htmlentities($value['userpic']); ?>" width="69" height="40px"></th>
                   <th><?php echo htmlentities($value['addtime']); ?></th>
                   <th><?php echo htmlentities($value['price']); ?></th>
                   <th><?php echo htmlentities($value['money']); ?></th>
                </tr>
              <?php endforeach; ?>
          </tbody>
     		</table>
      	</div>
      
    </div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#left_17').parent().parent().addClass('layui-nav-itemed');
    });
</script>
  <?php echo widget("Last/footer"); ?>
