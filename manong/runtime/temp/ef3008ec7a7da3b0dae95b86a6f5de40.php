<?php /*a:1:{s:76:"C:\Users\Dongyao001\Desktop\manong\application\index\view\member\avatar.html";i:1545101811;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
   <?php echo widget("Last/left"); ?>
<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div>	<div class="fly-panel fly-panel-user" pad20>
		<div class="layui-tab layui-tab-brief" lay-filter="user">
      	<ul class="layui-tab-title" id="LAY_mine">
       	        	<li class=""><a href="/index/member/account">基本资料</a></li>
                	<li class=""><a href="/index/member/password">修改密码</a></li>
                	<li class="layui-this"><a href="/index/member/avatar">上传头像</a></li>
              	</ul>
      	<div class="layui-tab-content" style="padding: 20px 0;">
        	<div class="layui-form layui-form-pane">
				<div class="layui-form-item">
					<div class="avatar-add" id="mytx">
						<p>建议尺寸180*180，支持jpg、png、gif</p>
						<div class="upload-img">
							<a class="layui-btn layui-btn-sm layui-btn-normal" id="test"> <i class="layui-icon">&#xe64a;</i>选择图片</a>
							<a href="javascript:dr_save();" class="layui-btn layui-btn-sm"> <i class="layui-icon">&#xe681;</i>开始上传</a>
						</div>
						<img src="/static/index/Picture/avatar_90.png" id="demo"> <span class="loading"></span>
					</div>
				</div>
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
        $('#left_5').parent().parent().addClass('layui-nav-itemed');
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
</script><script>
var upload = layui.upload;
//普通图片上传
  var uploadInst = upload.render({
    elem: '#test'
    ,url: 'https://www.codesceo.com/index.php?s=member&c=account&m=upload&iajax=1'
	,auto: false
    ,choose: function(obj){
      obj.preview(function(index, file, result){
        $('#demo').attr('src', result); //图片链接（base64）
      });
    }
  });
</script>
<script type="text/javascript">
	function dr_save() {
        var tx = $('#mytx img').attr('src');
        $.post("https://www.codesceo.com/index.php?s=member&c=account&m=upload&iajax=1", {tx: tx}, function(data) {
           if(data == 1) {
              layer.msg('上传成功');
                  window.location.reload();
            } else {
              layer.msg('上传失败：'+data);
            }
        });
	}
</script>
</body>
</html>