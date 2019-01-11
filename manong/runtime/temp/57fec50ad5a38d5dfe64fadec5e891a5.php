<?php /*a:1:{s:67:"/www/wwwroot/manong.yaho.cc/application/index/view/cate/header.html";i:1547087137;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php echo htmlentities($config[1]['value']); ?></title>
	<!-- <link rel="shortcut icon" href="https://www.codesceo.com/statics/skin/images/favicon.ico" type="image/x-icon" /> -->
	<link rel="stylesheet" href="/static/index/Css/layui.css">
	<link rel="stylesheet" href="/static/index/Css/layer.css">
	<link rel="stylesheet" href="/static/index/Css/global.css">
	<link rel="stylesheet" href="/static/index/Css/style.css">
   <script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
	 <script type="text/javascript">var memberpath = "/";</script>
	 <script type="text/javascript" src="/static/index/Scripts/zh-cn.js"></script>
	 <script type="text/javascript" src="/static/index/Scripts/jquery.min.js"></script>
</head>
<body>
<div class="layui-layout">
    <div class="layui-header">
        <div class="page-wb page-header">
            <div class="logo page-left"><a href=""><img src="<?php echo htmlentities($config[4]['value']); ?>"></a></div>
            <ul class="layui-nav page-left">
                              
                                <li <?php if($_SERVER["REQUEST_URI"]=='/'): ?> class="layui-nav-item layui-this" <?php else: ?> class="layui-nav-item " <?php endif; ?>><a href="/">首页</a></li>

                                <?php foreach($cate as $value): ?>
                                <li <?php if($_SERVER["REQUEST_URI"]==$value['url']): ?> class="layui-nav-item layui-this" <?php else: ?> class="layui-nav-item " <?php endif; ?>><a href="<?php echo htmlentities($value['url']); ?>"><?php echo htmlentities($value['cate_title']); ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                             <a href="/index/index/vip" style="padding: 0;"><img src="/static/index/Picture/vip.png" alt="VIP会员" height="23" style="margin:18px 6px;"></a>
            <ul class="layui-nav page-right top-user">
<?php if($user): ?>
     		 <li class="layui-nav-item">
					<a class="top-avatar" href="/index/member/index">
   <!--判断用户头像-->
   <?php if($user['userpic']==""): ?>
          <img src="https://www.codesceo.com/statics/admin/images/avatar_45.png">
   <?php else: ?>
          <img src="<?php echo htmlentities($user['userpic']); ?>">
   <?php endif; ?>
        <cite class="layui-hide-xs"><?php echo htmlentities($user['username']); ?></cite><span class="layui-nav-more" ></span></a>
					<dl class="layui-nav-child layui-anim layui-anim-upbit">
				        <dd><a href="/index/member/mindex"><i class="layui-icon"></i>发布资源</a></dd>
				        <dd><a href="/index/member/topup"><i class="layui-icon"></i>充值积分</a></dd>
				        <dd><a href="/index/member/account"><i class="layui-icon"></i>基本设置</a></dd>
				        <!-- <dd><a href="/member/qiandao"><i class="layui-icon"></i>每日签到</a></dd> -->
				        <hr style="margin: 5px 0;">
				        <dd><a href="javascript:;" onclick="dr_loginout" style="text-align: center;" id="unset">退出</a></dd>
					</dl>
        </li>
<?php else: ?>
                <div style="margin-top:16px;float:left;"><i class="layui-icon layui-icon-username" style="font-size:24px;">&#xe66f;</i></div>
                <li class="layui-nav-item"><a class="login" href="/index/login/login">

                登陆</a></li>
                <li class="layui-nav-item"><a class="reg" href="/index/login/register">注册</a></li>
<?php endif; ?>
      </ul>
    </div>
  </div>


<script>
$("#unset").click(function(){
 $.ajax({
                  url: "<?php echo url('/index/Index/unset'); ?>",
                  type: "post",
                  async : true,
                  data: {},
                  dataType:'json',
                  success:function(data){
                   if(data==1)
                   { 
                      layer.alert("退出成功", {icon: 6},function () {
                             window.location.href='';
                      });
                   }else{
                     layer.msg("退出失败",{icon:2,time:1000});
                      }
                 }
            });
}); 
</script>


