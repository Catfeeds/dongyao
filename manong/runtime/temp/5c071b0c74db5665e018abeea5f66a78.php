<?php /*a:1:{s:71:"/www/wwwroot/manong.yaho.cc/application/index/view/member/password.html";i:1547168882;}*/ ?>
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
          	            <div class="layui-form-item" id="err_oldPwd_group">
				<label class="layui-form-label">当前密码</label>
              <div class="layui-input-inline">
                <input type="password" id="password"     class="layui-input" >
              </div>
              <div class="layui-form-mid fly-red" id="err_oldPwd"></div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">新的密码</label>
              <div class="layui-input-inline">
                <input type="password" id="password1"   class="layui-input" >
              </div>
            </div>
            <div class="layui-form-item" id="err_checkPwd_group">
              <label class="layui-form-label">确认密码</label>
              <div class="layui-input-inline">
                <input type="password" id="repassword"   class="layui-input">
              </div>
              <div class="layui-form-mid fly-red" id="err_checkPwd"></div>
            </div>
            <!--用户id-->
            <div class="layui-form-item">
              <button class="layui-btn" type="submit" lay-submit id="button">确认修改</button>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
 $("#button").click(function(){
    var id=$("#id").val();
    var password=$("#password").val();
    var password1=$("#password1").val();
    var repassword=$("#repassword").val();
    if(password==""){
        layer.msg("原密码不能为空",{icon:2,time:1000});
        return false;
    }
    if(password1==""){
        layer.msg("新密码不能为空",{icon:2,time:1000});
        return false;
    }
    if(password1.length<8){
        layer.msg("新密码不能少于8位",{icon:2,time:1000});
        return false;
    }
    if(repassword!=password1){
        layer.msg("两次密码不一致",{icon:2,time:1000});
        return false;
    }
    //ajax
          $.ajax({
                  url: "<?php echo url('/Index/Member/editpass'); ?>",
                  type: "post",
                  async : true,
                  data: {id:id,password:password,password1:password1},
                  dataType:'json',
                  success:function(data){
                    if(data==1){
                          layer.alert("修改成功", {icon:1},function () {
                          window.location.href='/index/Member/password';});
                    }else if(data==2){
                          layer.alert("修改失败", {icon:2,time:1000});
                    }else{
                          layer.alert("原密码错误", {icon:2,time:1000});
                    }
                  }
               });
            });
</script>

  <?php echo widget("Last/mfooter"); ?>

