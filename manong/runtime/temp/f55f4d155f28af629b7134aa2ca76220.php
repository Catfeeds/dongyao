<?php /*a:1:{s:70:"/www/wwwroot/manong.yaho.cc/application/index/view/member/payment.html";i:1547171009;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
  <?php echo widget("Last/left"); ?>

<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div><div class="fly-panel fly-panel-user" pad20>
	<div class="layui-tab layui-tab-brief" lay-filter="user">
      	<ul class="layui-tab-title" id="LAY_mine">
       	        	<li class="layui-this"><a href="/member/pay/index">充值记录</a></li>
                	<li class=""><a href="/index/member/eliminate">消费记录</a></li>
              	</ul>
      	<div class="layui-tab-content" style="padding: 20px 0;">
        	<table class="layui-table" lay-skin="line">
				<thead>
     				<tr><th>Id</th><th>时间</th><th>金额</th><th>类型</th><th>状态</th><th>备注</th></tr>
     			</thead>
     			<tbody>
     				     				<tr>
     					<td>15478</td>
     					<td><font color="red">2019-01-02 16:06</font></td>
     					<td><font color="#009933">+10.00</font></td>
     					<td>在线支付</td>
     					<td><font color="#FF0000">未付款</font></td>
     					<td><a href="https://www.codesceo.com/index.php?s=member&c=pay&m=go&id=15478" class="layui-btn layui-btn-xs">付款</a></td>
     				</tr>
     				     				<tr>
     					<td>15477</td>
     					<td><font color="red">2019-01-02 16:06</font></td>
     					<td><font color="#009933">+10.00</font></td>
     					<td>在线支付</td>
     					<td><font color="#FF0000">未付款</font></td>
     					<td><a href="https://www.codesceo.com/index.php?s=member&c=pay&m=go&id=15477" class="layui-btn layui-btn-xs">付款</a></td>
     				</tr>
     				     				<tr>
     					<td>15177</td>
     					<td>2018-12-18 09:22</td>
     					<td><font color="#009933">+10.00</font></td>
     					<td>在线支付</td>
     					<td><font color="#FF0000">未付款</font></td>
     					<td><a href="https://www.codesceo.com/index.php?s=member&c=pay&m=go&id=15177" class="layui-btn layui-btn-xs">付款</a></td>
     				</tr>
     				     			</tbody>
     		</table>
      	</div>
    </div>
</div>
</div>
<script type="text/javascript" src="/static/index/Scripts/layui.all.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#left_17').parent().parent().addClass('layui-nav-itemed');
    });
</script>
  <?php echo widget("Last/footer"); ?>
