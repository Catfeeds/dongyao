<?php /*a:1:{s:70:"/www/wwwroot/manong.yaho.cc/application/index/view/member/comment.html";i:1547091112;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
   <?php echo widget("Last/left"); ?>
<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div><div class="fly-panel fly-panel-user" pad20>
	<div class="layui-tab layui-tab-brief" lay-filter="user">
      	<ul class="layui-tab-title" id="LAY_mine">
       	        	<li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/comment?cateid=1'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/comment?cateid=1">网站源码</a></li>
            <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/comment?cateid=2'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/comment?cateid=2">游戏源码</a></li>
            <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/comment?cateid=3'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/comment?cateid=3">插件模块</a></li>
            <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/comment?cateid=4'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/comment?cateid=4">视频教程</a></li>
            <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/comment?cateid=5'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/comment?cateid=5">精品工具</a></li>
            <li  <?php if($_SERVER["REQUEST_URI"]=='/index/member/comment?cateid=6'): ?>class=" layui-this"<?php endif; ?>><a href="/index/member/comment?cateid=6">技术文章</a></li>
              	</ul>
      	<div class="layui-tab-content" style="padding: 20px 0;">
			<table class="layui-table" lay-skin="line">
				<thead>
					<tr>
						<th>主题</th><th>评论内容</th><th>评论时间</th><!-- <th>操作</th> -->
					</tr>
				</thead>
				<tbody>
					<?php foreach($list as $value): ?>
			            <tr>
			              <th><?php echo htmlentities($value['goods_title']); ?></th>
			              <th><?php echo htmlentities($value['comments']); ?></th>
			              <th><?php echo htmlentities($value['addtime']); ?></th>
			            <!--   <th><a title="删除" onclick="member_del(this,'<?php echo htmlentities($value['id']); ?>')" href="javascript:;">删除评论</a></th> -->
			            </tr>
      			    <?php endforeach; ?>
				</tbody>
			</table>
      	</div>
      	<div style="text-align: center;">
    		<div class="laypage-main" >
    			    			<!-- <li><a href="javascript:;">共0条</a></li> -->
    		</div>
    	</div>
    </div>
</div>
</div>
<script>
	function member_del(obj,id){
		     layer.confirm('确认要删除吗？',function(index){
            
                  $.ajax({
                        url: "<?php echo url('/index/member/comdelete'); ?>",
                        type: "get",
                        async : true,
                        data: {id:id},
                        dataType:'json',
                        success:function(data){
                        	if(data['return']==1){
                        		 $(obj).parents("tr").remove();
                            	 layer.msg("删除成功",{icon:1,time:1000});
                        	}else{
                                 layer.msg("删除失败",{icon:2,time:1000});
                        	}
                 }
            });
          });
	}
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#left_69').parent().parent().addClass('layui-nav-itemed');
    });
</script>
<?php echo widget("Last/mfooter"); ?>