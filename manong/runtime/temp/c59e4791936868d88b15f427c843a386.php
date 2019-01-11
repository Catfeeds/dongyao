<?php /*a:1:{s:67:"/www/wwwroot/manong.yaho.cc/application/index/view/login/login.html";i:1545643271;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
<div class="page-wb">
    <div class="member-box">
        <div class="member-nav">
            <a href="javascript:;" class="on">会员登陆</a><a href="/index/Login/register">新人注册</a>
        </div>
        <div class="member-form">
                <input type="hidden" name="back" value="">
              <ul>
                    <li>
                        <input type="text"  id="username" class="layui-input" autocomplete="off" placeholder="用户名/邮箱">
                    </li>
                    <li>
                        <input type="password" id="password" class="layui-input" autocomplete="off" placeholder="密码">
                    </li>
                    
                    <li>
                        <button type="button" id="button" tabindex="3" class="layui-btn layui-btn-big" >登&nbsp;&nbsp;录</button>
                    </li>
                    <div class="more-sign">
                        <div class="more-sign-title"><span>第三方帐号登录</span></div>
                        <div class="more-sign-list">
                                                        <div class="li"><a class="more-sign-qq" href="javascript:;" onclick="window.location.href='https://www.codesceo.com/index.php?s=member&amp;c=api&amp;m=oauth&amp;id=qq'"><i class="iz iz-qq"></i> QQ登陆</a></div>
                                                        <div class="li"><a class="more-sign-sina" href="javascript:;" onclick="window.location.href='https://www.codesceo.com/index.php?s=member&amp;c=api&amp;m=oauth&amp;id=sina'"><i class="iz iz-sina"></i> 新浪微博</a></div>
                                                    </div>
                    </div>
                </ul>
        </div>
    </div>
</div>
<script>
    $("#button").click(function(){
        //用户名
        var username=$("#username").val();
        //密码
        var password=$("#password").val();
        //判断
        if(username==""){
           layer.msg("用户名不能为空",{icon:2,time:1000});
           return false;
        }
        if(password==""){
           layer.msg("密码不能为空",{icon:2,time:1000});
           return false;
        }
        //ajax
        $.ajax({
              url: "<?php echo url('/Index/Login/logins'); ?>",
              type: "post",
              async : true,
              data: {username:username,password:password},
              dataType:'json',
              success:function(data){
              if(data==1){
                layer.msg("登录成功,正在跳转",{icon:1,time:1000});
                window.location.href='/index/Index/index';
              }else{
                layer.msg("账号或密码错误",{icon:2,time:1000});
              }
           }
        });
    });
</script>
<?php echo widget("Last/footer"); ?>

