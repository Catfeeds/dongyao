<?php /*a:1:{s:69:"/www/wwwroot/manong.yaho.cc/application/index/view/member/mindex.html";i:1547089882;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
   <?php echo widget("Last/left"); ?>
<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div><div class="fly-panel fly-panel-user" pad20>
	<div class="layui-tab layui-tab-brief layui-index" lay-filter="user">
      	<ul class="layui-tab-title" id="LAY_mine">
      	
       	    <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/mindex?cateid=1'): ?>class=" layui-this"<?php endif; ?> style="float:left;"><a href="/index/member/mindex?cateid=1">网站源码</a></li>
       	    <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/mindex?cateid=2'): ?>class=" layui-this"<?php endif; ?> style="float:left;"><a href="/index/member/mindex?cateid=2">游戏源码</a></li>
       	    <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/mindex?cateid=3'): ?>class=" layui-this"<?php endif; ?> style="float:left;"><a href="/index/member/mindex?cateid=3">插件模块</a></li>
       	    <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/mindex?cateid=4'): ?>class=" layui-this"<?php endif; ?> style="float:left;"><a href="/index/member/mindex?cateid=4">视频教程</a></li>
       	    <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/mindex?cateid=5'): ?>class=" layui-this"<?php endif; ?> style="float:left;"><a href="/index/member/mindex?cateid=5">精品工具</a></li>
       	    <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/mindex?cateid=6'): ?>class=" layui-this"<?php endif; ?> style="float:left;"><a href="/index/member/mindex?cateid=6">技术文章</a></li>
			
                
            <h2>
          <!--网站源码发布地址-->
            <?php if($cateid == ''): ?>
            <a style="width:120px;" class="layui-btn layui-btn-sm layui-btn-danger" href="/index/member/add">发布网站源码</a>
          <!--网站源码发布地址-->
            <?php elseif($cateid == 1): ?>
  			<a style="width:120px;" class="layui-btn layui-btn-sm layui-btn-danger" href="/index/member/add">发布网站源码</a>
          <!--游戏源码发布地址-->
            <?php elseif($cateid == 2): ?>
            <a style="width:120px;" class="layui-btn layui-btn-sm layui-btn-danger" href="/index/member/gameadd">发布网站源码</a>
          <!--插件源码发布地址-->
            <?php elseif($cateid == 3): ?>
            <a style="width:120px;" class="layui-btn layui-btn-sm layui-btn-danger" href="/index/member/pluginadd">发布网站源码</a>
          <!--视频源码发布地址-->
            <?php elseif($cateid == 4): ?>
            <a style="width:120px;" class="layui-btn layui-btn-sm layui-btn-danger" href="/index/member/videoadd">发布网站源码</a>
          <!--精品工具源码发布地址-->
            <?php elseif($cateid == 5): ?>
            <a style="width:120px;" class="layui-btn layui-btn-sm layui-btn-danger" href="/index/member/tooladd">发布网站源码</a>
          <!--文章发布地址-->
            <?php elseif($cateid == 6): ?>
            <a style="width:120px;" class="layui-btn layui-btn-sm layui-btn-danger" href="/index/member/technologyadd">发布网站源码</a>
			<?php endif; ?>
            </h2>
              	</ul>
		
      	<div class="layui-tab-content" style="padding: 20px 0;">
			<table class="layui-table" lay-skin="line">
				<thead>
					<tr>
						<th>主题</th><th>发布时间</th>
					</tr>
				</thead>
				<?php foreach($list as $value): ?>
				<tbody>
						<th><?php echo htmlentities($value['goods_title']); ?></th>
						<th><?php echo htmlentities($value['create_at']); ?></th>
				</tbody>
				<?php endforeach; ?>
			</table>
      	</div>
      	<style>

				.this_li
				{
					float: left;
				}

      	</style>
     
    </div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#left_69').parent().parent().addClass('layui-nav-itemed');
    });
</script>
   <?php echo widget("Last/mfooter"); ?>
