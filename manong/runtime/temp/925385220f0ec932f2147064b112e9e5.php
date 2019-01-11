<?php /*a:1:{s:76:"C:\Users\Dongyao001\Desktop\manong\application\index\view\member\mindex.html";i:1545102912;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
   <?php echo widget("Last/left"); ?>
<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div><div class="fly-panel fly-panel-user" pad20>
	<div class="layui-tab layui-tab-brief layui-index" lay-filter="user">
     	<h2><a class="layui-btn layui-btn-sm layui-btn-danger" href="/index/member/add">发布网站源码</a></h2>
      	<ul class="layui-tab-title" id="LAY_mine">
       	        	<li class="layui-this"><a href="/member/code/home/index">网站源码</a></li>
                	<li class=""><a href="/member/soft/home/index">游戏源码</a></li>
                	<li class=""><a href="/member/plugin/home/index">应用插件</a></li>
                	<li class=""><a href="/member/down/home/index">精品软件</a></li>
                	<li class=""><a href="/member/media/home/index">商业教程</a></li>
                	<li class=""><a href="/member/course/home/index">文章教程</a></li>
              	</ul>
      	<div class="layui-tab-content" style="padding: 20px 0;">
			<table class="layui-table" lay-skin="line">
				<thead>
					<tr>
						<th>主题</th><th>栏目</th><th>更新时间</th><th></th>
					</tr>
				</thead>
				<tbody>
									</tbody>
			</table>
      	</div>
      	<div style="text-align: center;">
    		<div class="laypage-main" >
    			    			<li><a href="javascript:;">共0条</a></li>
    		</div>
    	</div>
    </div>
</div>
</div>
<div class="dr_poster_fixed" id="dr_poster_7" style="z-index:9999999;position:fixed;right:20px;top:80px;width:150px;height:px"><div><a href="https://www.codesceo.com/index.php?c=api&m=poster_show&id=21" target="_blank"><img src="/static/index/Picture/b3b18eece5.png"  width="150" height="" /></a></div><div style="text-align:right;padding-top:5px"><a href="#;" onclick="$('#dr_poster_7').hide()">关闭</a></div></div><div class="fly-footer">
	<p><a href="/">码农网</a>2017 &copy;<a href="/">codesceo.com</a></p>
</div>
<script type="text/javascript" src="/static/index/Scripts/layui.all.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#left_69').parent().parent().addClass('layui-nav-itemed');
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
</script><script type="text/javascript">
	$(function(){
		// 排序操作
		$('.dr_table th').click(function(e) {
			var _class = $(this).attr("class");
			if (_class == undefined) return;
			var _name = $(this).attr("name");
			var _order = '';
			if (_class == "sorting") {
				_order = 'desc';
			} else if (_class == "sorting_desc") {
				_order = 'asc';
			} else {
				_order = 'desc';
			}
			var url = "https://www.codesceo.com/index.php?s=member&app=code&c=home&m=index&catid=0&kw=&order="+_name+" "+_order;
			location.href=url;
		});
	});
	function dr_delete(catid, id) {
		var d = top.dialog({
			title: lang["tips"],
			fixed: true,
			content: '<img src="/static/index/Picture/question.png"> <font color=red><b>你确认要删除吗？</b></font>',
			okValue: lang['ok'],
			ok: function () {
				$.ajax({type: "POST",dataType:"json", url: "https://www.codesceo.com/index.php?s=member&app=code&c=home&m=del",data: {catid:catid,id:id}, success: function(data) {
					if (data.status == 1) {
						dr_tips(data.code, 3, 1);
						$("#dr_row_"+id).hide();
					} else {
						dr_tips(data.code, 3, 0);
					}
					art.dialog.close();
					return false;
				},
					error: function(HttpRequest, ajaxOptions, thrownError) {
						alert(thrownError + "\r\n" + HttpRequest.statusText + "\r\n" + HttpRequest.responseText);
					}
				});
				return true
			},
			cancelValue: lang['cancel'],
			cancel: function () {}
		});
		d.show();
	}
</script>
</body>
</html>