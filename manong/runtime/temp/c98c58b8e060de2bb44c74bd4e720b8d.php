<?php /*a:1:{s:69:"/www/wwwroot/manong.yaho.cc/application/index/view/member/verify.html";i:1547090968;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
   <?php echo widget("Last/left"); ?>
<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div><div class="fly-panel fly-panel-user" pad20>
	<div class="layui-tab layui-tab-brief" lay-filter="user">
      	<ul class="layui-tab-title" id="LAY_mine">
       	    <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/verify?cateid=1'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/verify?cateid=1">网站源码</a></li>
       	    <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/verify?cateid=2'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/verify?cateid=2">游戏源码</a></li>
       	    <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/verify?cateid=3'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/verify?cateid=3">插件模块</a></li>
       	    <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/verify?cateid=4'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/verify?cateid=4">视频教程</a></li>
       	    <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/verify?cateid=5'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/verify?cateid=5">精品工具</a></li>
       	    <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/verify?cateid=6'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/verify?cateid=6">技术文章</a></li>
         </ul>
      	<div class="layui-tab-content" style="padding: 20px 0;">
			<table class="layui-table" lay-skin="line">
				<thead>
					<tr>
						<th>主题</th><th>提交时间</th><th>审核</th>
					</tr>
					<?php foreach($list as $value): ?>
					<tr>
						<th><?php echo htmlentities($value['goods_title']); ?></th><th><?php echo htmlentities($value['create_at']); ?></th>
						<?php if($value['status']==0): ?>
						<th>待审核</th>
						<?php endif; ?>
					</tr>
					<?php endforeach; ?>
				</thead>
				<tbody>
									</tbody>
			</table>
      	</div>
      	<div style="text-align: center;">
    		<div class="laypage-main" >
    			    			<!-- <li><a href="javascript:;">共条</a></li> -->
    		</div>
    	</div>
    </div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#left_69').parent().parent().addClass('layui-nav-itemed');
    });
</script>
<?php echo widget("Last/mfooter"); ?>