<?php /*a:1:{s:70:"/www/wwwroot/manong.yaho.cc/application/index/view/member/account.html";i:1547168806;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
   <?php echo widget("Last/left"); ?>
<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div>	<div class="fly-panel fly-panel-user" pad20>
		<div class="layui-tab layui-tab-brief" lay-filter="user">
      	<ul class="layui-tab-title" id="LAY_mine">
       	        	<li class="layui-this"><a href="/index/member/account">基本资料</a></li>
                	<li class=""><a href="/index/member/password">修改密码</a></li>
                	<li class=""><a href="/index/member/avatar">上传头像</a></li>
              	</ul>
      	<div class="layui-tab-content" style="padding: 20px 0;">
        <div class="layui-form layui-form-pane">
           	            <div class="layui-form-item">
              <label class="layui-form-label">邮箱</label>
              <div class="layui-input-inline">
                <input type="text"  autocomplete="off"  lay-verify="email" class="layui-input" value="<?php echo htmlentities($user['email']); ?>"  disabled>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">姓名</label>
              <div class="layui-input-inline">
                <input type="text" autocomplete="off" value="<?php echo htmlentities($user['username']); ?>"    class="layui-input" disabled>
                <!--用户头像-->
              </div>
              <div class="layui-inline">
                <div class="layui-input-inline">
                <?php if($user['gender']==2): ?>
                  <input type="radio" name="data[gender]" value="1"  title="男">
                  <input type="radio" name="data[gender]" value="2"  checked title="女">
                <?php else: ?>
                  <input type="radio" name="data[gender]" value="1" checked title="男">
                  <input type="radio" name="data[gender]" value="2"   title="女">
                <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">手机号码</label>
              <div class="layui-input-inline">
                <input type="text"  autocomplete="off" value="<?php echo htmlentities($user['phone']); ?>" id="phone" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">QQ号</label>
              <div class="layui-input-inline">
                <input type="text" name="data[qq]" autocomplete="off" id="qq" value="<?php echo htmlentities($user['qq']); ?>" class="layui-input">
              </div>
            </div>
            <div class="layui-form-item layui-form-text">
              <label class="layui-form-label">签名 【请勿填写AD以及联系方式】</label>
              <div class="layui-input-block">
                <textarea placeholder="随便写些什么刷下存在感" name="data[ming]" autocomplete="off" class="layui-textarea" style="height: 80px;" id="descr"><?php echo htmlentities($user['descr']); ?></textarea>
              </div>
            </div>
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
    //phone
    var phone=$("#phone").val();
    //QQ号
    var qq=$("#qq").val();
    //签名
    var descr=$("#descr").val();
    //性别
    var gender=$('input:radio:checked').val();
         //ajax
          $.ajax({
                  url: "<?php echo url('/Index/Member/accountedit'); ?>",
                  type: "post",
                  async : true,
                  data: {phone:phone,qq:qq,gender:gender,descr:descr},
                  dataType:'json',
                  success:function(data){
                   if(data==2)
                   { 
                      layer.alert("修改成功", {icon: 6},function () {
                             window.location.href='/index/Member/account';
                      });
                   }else{
                     layer.msg("修改失败",{icon:2,time:1000});
                      }
                 }
            });
  });
</script>
   <?php echo widget("Last/mfooter"); ?>
