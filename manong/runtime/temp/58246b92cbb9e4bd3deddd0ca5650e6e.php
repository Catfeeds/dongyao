<?php /*a:1:{s:78:"C:\Users\Dongyao001\Desktop\manong\application\index\view\member\password.html";i:1545101790;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
   <?php echo widget("Last/left"); ?>
<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div>	<div class="fly-panel fly-panel-user" pad20>
		<div class="layui-tab layui-tab-brief" lay-filter="user">
      	<ul class="layui-tab-title" id="LAY_mine">
       	        	<li class=""><a href="/index/member/account">基本资料</a></li>
                	<li class="layui-this"><a href="/index/member/password">修改密码</a></li>
                	<li class=""><a href="/index/member/avatar">上传头像</a></li>
              	</ul>
      	<div class="layui-tab-content" style="padding: 20px 0;">
        <div class="layui-form layui-form-pane layui-tab-item layui-show">
          	<form action="" method="post" novalidate >
          	            <div class="layui-form-item" id="err_oldPwd_group">
				<label class="layui-form-label">当前密码</label>
              <div class="layui-input-inline">
                <input type="password" name="password" onblur="javascript:validOldPwd();" id="oldPwd" lay-verify="required" class="layui-input" >
              </div>
              <div class="layui-form-mid fly-red" id="err_oldPwd"></div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">新的密码</label>
              <div class="layui-input-inline">
                <input type="password" name="password1" id="newPwd" lay-verify="required" class="layui-input" >
              </div>
            </div>
            <div class="layui-form-item" id="err_checkPwd_group">
              <label class="layui-form-label">确认密码</label>
              <div class="layui-input-inline">
                <input type="password" name="password2" onblur="javascript:validCheckPwd();" id="checkPwd" lay-verify="required" class="layui-input">
              </div>
              <div class="layui-form-mid fly-red" id="err_checkPwd"></div>
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
</script><script type="text/javascript">
    function validOldPwd() {
        $.post('https://www.codesceo.com/index.php?s=member&c=account&m=cpassword', {password: $("#oldPwd").val()}, function(data){
            if (data) {
                $("#err_oldPwd").html(data);
                $("#err_oldPwd_group").addClass('has-error');
            } else {
                $("#err_oldPwd").html('');
                $("#err_oldPwd_group").removeClass('has-error');
            }
        });
    }
    function validCheckPwd() {
        if ($("#newPwd").val() == "") {
            $("#err_checkPwd").html("密码不能为空");
            $("#err_checkPwd_group").addClass('has-error');
        }else if ($("#newPwd").val() != $("#checkPwd").val()) {
            $("#err_checkPwd").html("两次密码不一致");
            $("#err_checkPwd_group").addClass('has-error');
        } else {
            $("#err_checkPwd").html("");
            $("#err_checkPwd_group").removeClass('has-error');
        }
    }
</script>
</body>
</html>