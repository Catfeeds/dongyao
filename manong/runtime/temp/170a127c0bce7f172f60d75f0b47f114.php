<?php /*a:1:{s:70:"/www/wwwroot/manong.yaho.cc/application/index/view/login/register.html";i:1545469341;}*/ ?>
﻿<?php echo widget("Last/header"); ?>
</div><div class="page-wb">
    <div class="member-box">
     <div class="member-nav">
        <a href="/index/Login/login">会员登陆</a><a href="javascript:;" class="on">新人注册</a>
     </div>
     <div class="member-form">
                <ul>
                   	<li><input type="text"  id="username" class="layui-input" autocomplete="off" placeholder="请输入用户名" />
                    </li>

                    <li><input type="text"  id="emial" class="layui-input" autocomplete="off" placeholder="电子邮箱" />
                    </li>
                    
                    <li><input type="password" id="password" class="layui-input" autocomplete="off" placeholder="请输入密码" />
                    </li>
                    
                    <li><input type="password" id="repassword" class="layui-input" autocomplete="off" placeholder="再次输入密码" />
                    </li>
                    
                    <li><button type="button"  class="layui-btn layui-btn-big" id="button">注&nbsp;&nbsp;册</button>
                    </li>
                    
                    <div class="more-sign">
						<div class="more-sign-title"><span>第三方帐号登录</span></div>
						<div class="more-sign-list">
						<div class="li"><a class="more-sign-qq" href="javascript:;" onclick="window.location.href='https://www.codesceo.com/index.php?s=member&c=api&m=oauth&id=qq'"><i class="iz iz-qq"></i> QQ登陆</a></div>
						<div class="li"><a class="more-sign-sina" href="javascript:;" onclick="window.location.href='https://www.codesceo.com/index.php?s=member&c=api&m=oauth&id=sina'"><i class="iz iz-sina"></i> 新浪微博</a></div>
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
        //电子邮箱
        var email=$("#emial").val();
        //密码
        var password=$("#password").val();
        //重复密码
        var repassword=$("#repassword").val();
        if(username==""){
            layer.msg("请输入用户名",{icon:2,time:1000});
            return false;
        }
        if(email==""){
            layer.msg("请输入电子邮箱",{icon:2,time:1000});
            return false;
        }
        if(password==""){
            layer.msg("请输入密码",{icon:2,time:1000});
            return false;
        }
        if(password.length<8){
            layer.msg("密码最少8位数",{icon:2,time:1000});
            return false;
        }
        if(repassword==""){
            layer.msg("请再次输入密码",{icon:2,time:1000});
            return false;
        }
        if(password!=repassword){
            layer.msg("两次密码不一致",{icon:2,time:1000});
            return false;
        }
        //ajax传递
          $.ajax({
                  url: "<?php echo url('/Index/Login/res'); ?>",
                  type: "post",
                  async : true,
                  data: {username:username,email:email,password:password},
                  dataType:'json',
                  success:function(data){
                   switch(data){
                         case 1:
                              layer.msg("用户名已存在",{icon:2,time:1000});
                         break;
                         case 2:
                              layer.msg("注册成功",{icon:2,time:1000});
                              window.location.href='/index/Login/login';
                         break;
                         case 3:
                              layer.msg("注册失败",{icon:2,time:1000});
                         break;
                         }
                      }
            });

    });
</script>
<?php echo widget("Last/footer"); ?>
