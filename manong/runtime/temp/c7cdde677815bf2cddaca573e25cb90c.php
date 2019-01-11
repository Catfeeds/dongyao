<?php /*a:1:{s:66:"/www/wwwroot/toupiao.yaho.cc/application/home/view/index/list.html";i:1537952916;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' http://*.okii.com 'unsafe-inline'; script-src 'self' 'unsafe-inline' 'unsafe-eval' http://*.okii.com http://*.cnzz.com http://*.eebbk.net http://res.wx.qq.com; img-src * 'self' 'unsafe-inline' data:;">
	<link rel="stylesheet" href="/static/home/css/bbkbrand_df2d668.css">
	<title>获奖名单</title>
	<style>
	body,
	html {
		margin: 0;
		padding: 0;
		background: #f89b20;
	}

	table {
		margin: 0 auto;
		width: 90%;
		background: #fff;
		margin-bottom: 1rem;
		border-radius: 0 0 .3rem .3rem;
	}

	.need-bottom{
		border-bottom: 1px solid #ffe6b8
	}
	th{
		height: 2rem;
		font-weight: 500;
		color: #646464;
	}
	td{	color: #646464;
		height: 1.2rem;
	}
	.other{
		background: rgba(248,248,248,.8);
	}

	.thead {
		width: 90%;
		line-height: 2.4rem;
		color: #fff;
		font-weight: 600;
		font-size: 1rem;
		text-align: center;
		height: 2.4rem;
		background: #ff7800;
		border-radius: .3rem .3rem 0 0;
		margin: 0 auto;
	}
	tr>td:last-child{
		font-size: .55rem;
	}

	.type {
		width: 24%;
		letter-spacing: 1px;

		text-align: center;

	}


	.nickname {
		width: 25%;
		text-align: center;
		border-left:1px solid #ffe6b8 ;
		border-right:1px solid #ffe6b8 ;

	}

	.prize {
		text-align: center;
		width: 38%;


	}
	.img{
		display: block;
		width: 100%;
	}
	.table-box{
		position: absolute;
		top: 12rem;
	}
	@media screen and (max-width: 320px) {
		.table-box{
		position: absolute;
		top: 10.5rem;
	}
		
	}
	</style>
</head>

<body style="background-color:#fccb24">
	<!-- <?php if(empty($a)): ?>
	<div class="container">
	<h1>时间未到</h1>
	</div>
	<?php else: ?> -->	<!-- <?php endif; ?> -->
	<div class="container">
	<img src="/static/home/picture/nvshen.png" class="img" alt="">
		<!-- <img src="/static/home/picture/sign-top_0827a89.jpg" class="img" alt=""> -->
		<div class="table-box" style="background-color:#fccb24">
		<div class="thead">《智灵通-我是女神》获奖名单</div>
		<table>
			<tr class="need-bottom">
				<th class="type"></td>
				<th class="nickname">编号</td>
				<th class="prize">奖品</td>
			</tr>
			<tr>
				<td class="type need-bottom" rowspan="6" valign="middle" >一等奖</td>
			</tr>
			<?php if(is_array($one) || $one instanceof \think\Collection || $one instanceof \think\Paginator): if( count($one)==0 ) : echo "" ;else: foreach($one as $key=>$v1): ?>
			<tr class="need-bottom">
				<td class="nickname other"><?php echo htmlentities($v1['id']); ?>号</td>
				<td class="prize other">进入音乐训练营+小天才电话手表z2一台+湖南金鹰卡通荣誉证书</td>
			</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			
			

		</table>
	</div>
	</div>

	
</body>

</html>