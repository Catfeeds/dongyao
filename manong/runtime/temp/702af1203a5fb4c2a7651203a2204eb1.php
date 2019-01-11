<?php /*a:1:{s:77:"C:\Users\Dongyao001\Desktop\manong\application\index\view\member\account.html";i:1545122292;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
   <?php echo widget("Last/left"); ?>
<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div>	<div class="fly-panel fly-panel-user" pad20>
		<div class="layui-tab layui-tab-brief" lay-filter="user">
      	<ul class="layui-tab-title" id="LAY_mine">
       	        	<li class="layui-this"><a href="/member/account/index">基本资料</a></li>
                	<li class=""><a href="/index/member/password">修改密码</a></li>
                	<li class=""><a href="/index/member/avatar">上传头像</a></li>
              	</ul>
      	<div class="layui-tab-content" style="padding: 20px 0;">
        <div class="layui-form layui-form-pane">
          	<form action="" method="post" novalidate >
           	<input type="hidden" name="data[uid]" value="6915">
           	            <div class="layui-form-item">
              <label class="layui-form-label">邮箱</label>
              <div class="layui-input-inline">
                <input type="text" name="data[email]" autocomplete="off" value="2473538184@qq.com"  lay-verify="email" class="layui-input" disabled>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">姓名</label>
              <div class="layui-input-inline">
                <input type="text" name="data[name]" autocomplete="off" value="" required  lay-verify="required" class="layui-input">
              </div>
              <div class="layui-inline">
                <div class="layui-input-inline">
                  <input type="radio" name="data[gender]" value="nan"  title="男">
                  <input type="radio" name="data[gender]" value="nv"  title="女">
                </div>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">手机号码</label>
              <div class="layui-input-inline">
                <input type="text" name="data[phone]" autocomplete="off" value="" lay-verify="phone" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">QQ号</label>
              <div class="layui-input-inline">
                <input type="text" name="data[qq]" autocomplete="off" value="" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item layui-form-text">
              <label class="layui-form-label">签名 【请勿填写AD以及联系方式】</label>
              <div class="layui-input-block">
                <textarea placeholder="随便写些什么刷下存在感" name="data[ming]" autocomplete="off" class="layui-textarea" style="height: 80px;"></textarea>
              </div>
            </div>
                        <div class="layui-form-item">
              <button class="layui-btn" type="submit" lay-submit>确认修改</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <div class="dr_poster_fixed" id="dr_poster_7" style="z-index:9999999;position:fixed;right:20px;top:80px;width:150px;height:px"><div><a href="https://www.codesceo.com/index.php?c=api&m=poster_show&id=21" target="_blank"><img src="/static/index/Picture/b3b18eece5.png"  width="150" height="" /></a></div><div style="text-align:right;padding-top:5px"><a href="#;" onclick="$('#dr_poster_7').hide()">关闭</a></div></div> --><div class="fly-footer">
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
</script></body>
</html>