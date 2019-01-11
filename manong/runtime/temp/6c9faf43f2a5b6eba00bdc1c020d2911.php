<?php /*a:1:{s:66:"/www/wwwroot/manong.yaho.cc/application/index/view/member/buy.html";i:1547091006;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
   <?php echo widget("Last/left"); ?>
    <script type="text/javascript" src="https://www.codesceo.com/statics/js/zh-cn.js"></script>
  <script type="text/javascript" src="https://www.codesceo.com/statics/skin/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.codesceo.com/statics/js/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="https://www.codesceo.com/statics/js/ui-dialog.css">
  <script type="text/javascript" src="https://www.codesceo.com/statics/js/dialog-plus.js"></script>
  <script type="text/javascript" src="https://www.codesceo.com/statics/js/jquery.artDialog.js?skin=default"></script>
  <script type="text/javascript" src="https://www.codesceo.com/statics/js/dayrui.js"></script>

<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div><div class="fly-panel fly-panel-user" pad20>
	<div class="layui-tab layui-tab-brief" lay-filter="user">
      	<ul class="layui-tab-title" id="LAY_mine">
       	    <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/buy?cateid=1'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/buy?cateid=1">网站源码</a></li>
            <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/buy?cateid=2'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/buy?cateid=2">游戏源码</a></li>
            <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/buy?cateid=3'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/buy?cateid=3">插件模块</a></li>
            <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/buy?cateid=4'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/buy?cateid=4">视频教程</a></li>
            <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/buy?cateid=5'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/buy?cateid=5">精品工具</a></li>
            <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/buy?cateid=6'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/buy?cateid=6">技术文章</a></li>     	
        </ul>
      	<div class="layui-tab-content" style="padding: 20px 0;">
			<table class="layui-table" lay-skin="line">
				<thead>
					<tr>
						<th>主题</th><th>积分</th><th>购买时间</th>
					</tr>
				</thead>
				<tbody>
			     <?php foreach($list as $value): ?>
            <tr>
              <th><?php echo htmlentities($value['goods_title']); ?></th>
              <th><?php echo htmlentities($value['price']); ?></th>
              <th><?php echo htmlentities($value['addtime']); ?></th>
            </tr>
          <?php endforeach; ?>
        </tbody>
			</table>
      	</div>
      	<div style="text-align: center;">
    	<!-- 	<div class="laypage-main" >
    			    			<li><a href="javascript:;">共0条</a></li>
    		</div> -->
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