<?php /*a:1:{s:67:"/www/wwwroot/toupiao.yaho.cc/application/home/view/index/index.html";i:1537950670;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes" /> 
		<meta name="apple-mobile-web-app-status-bar-style" content="black" /> <meta name="format-detection" content="telephone=no" />
		<meta name="format-detection" content="telephone=no">
		<script type="text/javascript" src="/static/home/js/ajax.js" ></script>
		<script src="/static/home/js/jquery-1.9.1.min.js"></script>
		<!--<meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' http://*.okii.com 'unsafe-inline'; script-src 'self' 'unsafe-inline' 'unsafe-eval' http://*.okii.com http://*.cnzz.com http://*.eebbk.net http://res.wx.qq.com; img-src * 'self' 'unsafe-inline' data:;">-->
		<title>智灵通-我是女神才艺秀</title>
		<link rel="stylesheet" href="/static/home/css/bbkbrand_df2d668.css">
		<link rel="stylesheet" href="/static/home/css/container.css">
		<script type="text/javascript" src="/static/home/lib/layui/layui.js" charset="utf-8"></script>
		<script src="/static/home/js/jquery1.min.js"></script>
		<script src="/static/home/layer/layer.js"></script>
    	<script type="text/javascript" src="/static/home/lib/layui/css/layui.css" charset="utf-8"></script>
		<style>

			@font-face {
				font-weight: 400;
				font-style: normal
			}
			
			html,
			body {
				padding: 0
			}
			
			.page,
			.page-group {
				background: #f89c20
			}
			
			.img {
				width: 100%;
				display: block
			}
			
			ol,
			ul,
			li {
				padding: 0;
				margin: 0;
				list-style: none
			}
			
			a:active {
				opacity: .8
			}
			
			.hide {
				display: none!important
			}
			
			.btn {
				display: block;
				background-repeat: no-repeat;
				background-size: 100% 100%;
				text-align: center;
				color: #fff;
				margin: 0 auto
			}
			
			.icon {
				display: block
			}
			
			.icon-play {
				position: absolute;
				width: 3rem;
				height: 3.3rem;
				left: 50%;
				top: 50%;
				-webkit-transform: translate(-50%, -50%);
				transform: translate(-50%, -50%);
				background: url(/static/home/images/icon-play_5016053.png) no-repeat;
				background-size: 100% 100%
			}
			
			.nav-top {
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				padding: .5rem
			}
			
			.nav-top .back {
				color: #fff;
				display: block;
				padding-bottom: .25rem;
				position: relative;
				padding-left: 1.2rem;
				border-bottom: 1px solid #6a99b8
			}
			
			.nav-top .back:before {
				content: "";
				position: absolute;
				left: 0;
				top: 0;
				display: block;
				width: 1.2rem;
				height: 1.2rem;
				background: url(/static/home/images/icon-back_0baa2ab.png) no-repeat center center;
				background-size: auto 100%
			}
			
			.nav-top .back:active {
				color: #fff
			}
			
			.voteModal {
				width: 80%;
				left: 10%;
				margin-left: 0
			}
			
			.icon-alert-close {
				position: absolute;
				right: -.5rem;
				top: -.5rem;
				display: block;
				width: 2rem;
				height: 2rem;
				background: url('/static/home/images/icon-alert-close_ad01258.png') no-repeat 0 center;
				background-size: 100% auto;
				z-index: 2
			}
			
			.modal-inner {
				background: #fff;
				padding: .5rem
			}
			
			.modal-inner .modal-alert {
				background: #fff;
				border-radius: .2rem;
				padding: 1rem
			}
			
			.modal-inner .modal-txt {
				color: #5e5e5e;
				margin: .5rem 0 1rem
			}
			
			.modal-inner .modal-txt span {
				vertical-align: middle
			}
			
			.alert-button {
				display: block;
				height: 2.6rem;
				background: #fe7d00;
				border-radius: .3rem;
				line-height: 2.6rem;
				font-size: 1rem;
				font-weight: 700
			}
			
			.alert-button:active {
				color: #fff
			}
			#time{
				display: none;
			}
			.search_btn{
			    border: none;
			    width: 2.5rem;
			    height: 1.7rem;
			    font-size: 0.9em;
			    color: #fff;
			    background: #ff7800;
			    float: left;
			    margin-top: 0.1rem;
			     margin-left: 0.1rem;
			}

			.place{font-size: 14px}
			.project{font-size: 1em}
			.sign{width: 100%;margin:0 auto;}
			.sign h3{width:100%;background: #FF9E05; color: #FFF6E8;padding:0.2rem 0;text-indent: 0.6rem;font-size: 1em;letter-spacing: 0.05rem}
			.sign div{overflow: hidden;margin-top:-1.5rem;font-size: 1em}
			.sign div h4{float: left;width: 27%;font-size: 1em;font-size:0.9em;padding-left: 0.8rem}
			.sign div p{float: left;width: 70%;padding-top: 0.4rem;font-size: 0.8em;}

			.intoduce img{width:100%;}
		</style>
		<link rel="stylesheet" href="/static/home/css/index_76abf3a.css">

	</head>

	<body>
		<div class="page-group">
			<div class="page" id="my-page">
				<div class="content">
					<img src="/static/home/picture/my-top_d98b25b.jpg" alt="我的报名" class="img" style="position: absolute;z-index: -1;">
					<div id="my-list" class="list-block media-list">
						<ul class="list-container"></ul>
					</div>
					<div class="link-box">
						<a href="javascript:;" class="link" data-href="sign.html">我还有更多的孩子报名</a>
					</div>
				</div>
			</div>
			<div class="page page-current" id="index-page">
				<div class="content">
					<img id="go-top" class="go-top hide" src="/static/home/picture/icon-top_45ada42.png">
					<div id="index-top" style="background-color:#FCC800">
						<div class="content-top">
							<div class="xtc-header">
								<img class="img" src="/static/home/picture/nvshen.png" />
							</div>
						</div>
						<div class="video-box">
							<div class="video-tip">
								<div style="height:30px;"></div>
								<video src="http://toupiao.yaho.cc/public/uploads/nvshen.mp4" controls="true"  id="mv" style="width:320px;display:block;margin:0 auto;height:180px;background:#000">
									<div id="output" style="width:320px;height:150px;position:relative;top:-200px;z-index:-9999;background:#000;"></div>
								</video>
								
								<!-- <video id="mv" controls="controls" style="width:100%;height:228px;">
									<source src="http://toupiao.yaho.cc/public/uploads/20180911\ef7bd7e6f17b77106734aba339c2adc6.mp4" controls="true">
								</video> -->
								

								<!-- <video controls="true"  id="mv" style="width:100%;height:228px;">
									<source src="http://toupiao.yaho.cc/public/uploads/20180911\ef7bd7e6f17b77106734aba339c2adc6.mp4" type="video/mp4">
									<object data="movie.mp4" width="320" height="240">
										<embed width="320" height="240" src="http://toupiao.yaho.cc/public/uploads/20180911\ef7bd7e6f17b77106734aba339c2adc6.mp4">
									</object>
								</video> -->
								<!-- <i class="icon icon-play"></i> -->
							</div>
							<div class="video-load hide">
								<div class="preloader"></div>
							</div>
							<div class="video-outer hide">
								<video id="video" class="hide" src="http://toupiao.yaho.cc/public/uploads/nvshen.mp4" controls playsinline="isiPhoneShowPlaysinline" webkit-playsinline="isiPhoneShowPlaysinline" preload="metadata"></video>
							</div>
						</div>
						<div class="" style="position: relative;margin-top: -.5rem;">
							<a id="want-button" class="btn vote-btn link" href="/home/index/add" > 我要报名</a>
							<a id="myinfo-button" class="btn vote-btn link hide" href="javascript:;" data-href="#my-page">我的报名</a>
							<a id="btnLuck"  class="btn vote-btn" >获奖名单</a>
						<!--"href="/home/index/list"-->
						</div>
					
						<div class="text-center user-num">
							<img src="/static/home/images/logo.png" style="width: 13%; position: relative; top: 7px;" >
							<span style="color:#fff">报名人数:</span>
							<?php if(is_array($counts) || $counts instanceof \think\Collection || $counts instanceof \think\Paginator): if( count($counts)==0 ) : echo "" ;else: foreach($counts as $key=>$val): ?>
							<span class="num-box" style="width:1.2rem;font-size:1.2em"><?php echo htmlentities($val); ?></span>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						


						<marquee behavior="scroll" scrolldelay="10" scrollamount="3.3" direction="left" width="100%;">
						<?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): if( count($arr)==0 ) : echo "" ;else: foreach($arr as $key=>$a): ?>
						<b>恭喜 "<?php echo htmlentities($a); ?>" 报名成功了&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</b>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</marquee>


						<div class="marquee-box hide">
							<div class="marquee">
								<span class="marquee-txt">正在加载中...</span>
							</div>
						</div>
					</div>

					<div class="content-main">
						<div class="buttons-tab">
							<a href="#tab4" class="tab-link button active">
								<span class="tab-txt">网络排名</span>
								<img src="/static/home/picture/tab-nav-4_8014fe2.png" alt="网络排名" class="img">
							</a>
							<a href="#tab3" class="tab-link button ">
								<span class="tab-txt">精彩视频</span>
								<img src="/static/home/picture/tab-nav-1_239a402.png" alt="精彩视频" class="img">
							</a>
							<a href="#tab2" class="tab-link button">
								<span class="tab-txt">现场招募</span>
								<img src="/static/home/picture/tab-nav-2_bacbb49.png" alt="现场招募" class="img">
							</a>
							<a href="#tab1" class="tab-link button">
								<span class="tab-txt">网络招募</span>
								<img src="/static/home/picture/tab-nav-3_0c8d690.png" alt="网络招募" class="img">
							</a>

						</div>
						<div class="tabs">
							<div id="tab1" class="tab ">
								<div class="sign" style="margin-top:-0.8rem">
									<h3>品牌简介</h3>
								</div>
								<div class="intoduce">
									<img src="/static/home/picture/com_a.png" alt="">
									<video src="http://toupiao.yaho.cc/public/uploads/xuan.mp4" controls="true" style="width:100%;display:block;margin:0 auto;height:180px;background:#000">
										<div id="output" style="width:100%;height:150px;position:relative;top:-200px;z-index:-9999;background:#000;"></div>
									</video>
									<img src="/static/home/picture/com_b.jpg" alt="">
									<img src="/static/home/picture/com_c.jpg" alt="" style="margin-top: -7px;">
									<img src="/static/home/picture/com_d.jpg" alt="" >
									<img src="/static/home/picture/com_f.jpg" alt="">
									<img src="/static/home/picture/com_g.jpg" alt="">
									<img src="/static/home/picture/com_h.jpg" alt="" style="margin-top: -7px;">
								</div>
								<!-- <img src="/static/home/picture/before_f9046af.png" class="before" alt=""> -->
								
								<!-- <p style="margin: 0px 5px 10px 0px !important; font-size: 14px; text-indent: 2em;">
									 智灵通由世界500强企业长江和记实业   集团（由长江实业与和记黄埔集团合并）旗下和黄建宝保健品有限公司
									出品，国药控股和记黄埔药(上海)有限公司为全国总经销。秉承江药业研发的严谨态度，投入到为孕产婴幼人群提供
									优质的保健品和食品，是备受孕产妈咪和婴幼宝宝信赖的孕婴营养品牌。
								</p> -->
								
								
								<!--第四期 -->
								<img src="/static/home/picture/before_f9046fa.png" class="before" alt="">
								<!-- <img src="/static/home/picture/before_f9046af.png" class="before" alt=""> -->
								<!--视频-->
							<!-- 	<div class="row">
							 <?php if(is_array($video) || $video instanceof \think\Collection || $video instanceof \think\Paginator): if( count($video)==0 ) : echo "" ;else: foreach($video as $key=>$vo): ?>
									<div class="col-50">
										<div class="md" onclick="service.showAlertVideo('<?php echo htmlentities($vo['video']); ?>')">
											<div class="m-img">
												<img src="<?php echo htmlentities($vo['pic']); ?>" class="img">
											
											</div>
											<div class="m-title"><?php echo htmlentities($vo['total']); ?></div>
										</div>
									</div>
								<?php endforeach; endif; else: echo "" ;endif; ?> 
									
									</div>
								 -->
							
								<!--第二期 -->

							<!-- 	<div class="md">
									<div class="m-title" style="font-size: .7rem;">更多精彩内容，敬请期待<br></div>
								</div> -->

							</div>
							<div id="tab2" class="tab" >
								<!-- <div class="desc" style="margin-bottom: 0rem;">
									
								</div> -->
								<div class="img-box" style="margin-top:-0.5rem;">
								<img src="/static/home/picture/jiangpin.png" alt="jiangpin" class="img">
									
									<!-- <img src="picture/tab2-2.png" alt="现场看点" class="img"> -->
								</div>

							</div>
							<div id="tab3" class="tab ">
								<div class="desc" style="margin-bottom: 1rem;">
									《我是女神》由世界五百强智灵通集团携手安徽丰启联合打造的一档健康时尚、积极乐观、  热爱生活的平凡妈味才艺秀，全省火热招募中，活动旨在展示当代妈妈对生活对健康的理念和态度，如果你有一技之长，无论唱歌、跳舞、瑜伽还是健身,都可以尽情展示，做自己，真女神，秀出最美的你，欢迎加入!
								</span>
								</div>
								<!-- <div class="desc" style="margin-bottom: 1rem;text-indent: 0">
	<div style="color:#ef3333;">节目及报名时间调整通知</div>
	<div>各位网友大家好！接节目组通知，《歌声的翅膀》节目播出时间现已确认延期至2017年4月23日，由于节目档期调整，故网络报名活动的截止时间由原来的2017年4月20日（00:00）顺延至2017年5月20日（00:00），给您带来的不便，我们深感歉意。感谢大家对活动的支持！</div>
</div> -->
								<div class="img-box">
									<img src="/static/home/picture/baoming_time.png" alt="活动日程" class="img">
									<div class="sign">
										<h3>报名要求</h3>
										<div>
											<h4 >报名项目:</h4>
											<p>体育健身类，才艺表演类等其他</p>
										</div>
										<div >
											<h4>报名要求:</h4>
											<p>参赛者需填写报名申请表，然后需上传一段60s的才艺展示视频</p>
										</div>
										<div>
											  <h4>视频要求:</h4>
											  <p>女神宣言+作品表演</p>
										</div>

									</div>
									<img src="/static/home/picture/tab3-2_71a28c4.png" alt="现场看点" class="img">
									<p style="font-size: 0.7rem; color: #FF1000">
										*本活动和记黄埔智灵通冠名赞助，由安徽丰启承办。活动最终解释权归安徽丰启所有。
									</p>
								</div>
								<br><br><br><br>
							</div>
							<div id="tab4" class="tab infinite-scroll active">
								<div class="notic-box hide">
									<div class="notic-title">
										公 告
									</div>
									<div class="notic-desc">
										近日，发现个别用户存在恶意刷票的行为，按照规则取消此类用户的报名资格。感谢大家对活动的支持，为了保证活动的公平性，也请大家文明投票，共同营造公平、公正的活动环境。
									</div>
								</div>
								<div class="tools-box">
							    <form action="" method="post" >
									<div class="row">
										<div class="col-60">
											<div class="row">
												<div class="col-50">
													<a href="javascript:;" class="choose-btn active" data-type="voteNum" onclick="renqi2()" id="renqi1">按人气排行</a>
												</div>
												<div class="col-50">
													<a href="javascript:;" class="choose-btn" data-type="addTime" onclick="time2()" id="time1">按时间排行</a>
												</div>
											</div>
										</div>
											
										<div class="col-40" style="position: relative;overflow:hidden">
											<input  class="input place" type="text" name="username" value="<?php echo htmlentities($username); ?>" placeholder="编号/昵称"  style="width:74px;height:37px;float:left;margin-top:0.1rem">
											<input type="submit" value="搜索" class="search_btn" style="padding-top:0.05rem">
											<!-- <a id="search-btn" class="search-btn" href="javascript:;"></a> -->
										</div>
										
									</div>
									</form>
								</div>
								<!-- 人气 -->
								<div id="list-box" class="list-block media-list rank">
									<ul class="list-container">
									<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$value): ?>
										<li class="list-container-li" style="background-color:#EFEFEC" >

											<div class="float icon1"  style="background-color:#E3E3E1"><?php echo htmlentities($i++); ?></div>

											<div class="float icon2">
												<img src="<?php echo htmlentities($value['userpic']); ?>"/>
											</div>
											<div class="float icon3">
												<ul>
													<li style="overflow:hidden">
														<b>昵称 : </b><i><?php echo htmlentities($value['babyname']); ?></i><br />
															<b>区域 : </b ><?php echo htmlentities($value['song']); ?><br />
														<b>票数 : </b> <i class="pro"><?php echo htmlentities($value['votes']); ?></i>
													</li>
													
												</ul>
											</div>
											<div class="float icon4">
											<!-- onclick="javascrtpt:window.location.href='/home/index/add?id=$v" -->
												<a href="/home/index/vote?id=<?php echo htmlentities($value['id']); ?>"><button type="submit" >支持Ta</button></a>
											</div>
										</li><br/>
									<?php endforeach; endif; else: echo "" ;endif; ?>
									</ul>
									
									<div class="nomore hide">
							
									</div>
								</div>
								<!-- 时间 -->
								<div id="time" class="list-block media-list rank">
									<ul class="list-container">
									<?php if(is_array($list1) || $list1 instanceof \think\Collection || $list1 instanceof \think\Paginator): if( count($list1)==0 ) : echo "" ;else: foreach($list1 as $key=>$value): ?>
										<li class="list-container-li" style="background-color:#EFEFEC" >
											<div class="float icon1"  style="background-color:#E3E3E1"><?php echo htmlentities($s
											++); ?></div>
											<div class="float icon2">
												<img src="<?php echo htmlentities($value['userpic']); ?>"/>
											</div>
											<div class="float icon3">
												<ul>
													<li>
														<b>昵称 : </b><i><?php echo htmlentities($value['babyname']); ?></i><br />
															<b>区域 : </b><?php echo htmlentities($value['song']); ?><br />
														<b>票数 : </b> <i class="pro"><?php echo htmlentities($value['votes']); ?></i>
													</li>
													
												</ul>
											</div>
											<div class="float icon4">
											<!-- onclick="javascrtpt:window.location.href='/home/index/add?id=$v" -->
												<a href="/home/index/vote?id=<?php echo htmlentities($value['id']); ?>"><button type="submit" >支持Ta</button></a>
											</div>
										</li><br/>
									<?php endforeach; endif; else: echo "" ;endif; ?>
									</ul>
									
									<div class="nomore hide">
							
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 手机横屏显示 -->
		<div id="stop-landscape" class="stop-landscape hide">
			<div class="stop-txt">
				亲，请竖屏观看哦！O(∩_∩)O
			</div>
		</div>
		<!--视频播放 -->
		<div class="alert-video-box hide">
			<div class="alert-box">
				<video id="alert-video" class="hide" width="100%" controls playsinline="isiPhoneShowPlaysinline" webkit-playsinline="isiPhoneShowPlaysinline" preload="metadata" src="xiandaopian.mp4"></video>
				<div class="huaxu-close" onclick="service.initAlertVideo()">×</div>
				<div class="alert-load">
					<div class="preloader"></div>
				</div>
			</div>
		</div>
		 <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>

		<!-- 确认投票 -->
		<script type="text/template" id="confirm-vote">
			<a href="javascript:;" class="icon-alert-close close-modal"></a>
			<div id="vote-alert" class="modal-alert">
				<div class="modal-img">
					<img src="<%=user.videoPicUrl%>" alt="用户图片" class="img">
				</div>
				<div id="modal-confirm" class="modal-txt"><span id="vote-id"><%=user.id%>号</span><span id="vote-nick"><%=user.nickName%></span></div>
				<div id="modal-success" class="modal-txt modal-success hide"><span class="icon-success"></span><span>投票成功</span></div>
				<a href="javascript:;" class="btn alert-button" data-id="<%=user.id%>" onclick="service.sendVote($(this))">确认投票</a>
			</div>
		</script>
		<!-- 列表展现用户模板 -->
		<script type="text/template" id="list-temp">
			<%_.each(list,function(item){%>
			<li>
				<div data-type="list" data-id="<%=item.id%>" class="item-content open-user <%= item.rank == 1 ? 'first' : (item.rank == 2 ? 'second' : (item.rank == 3 ? 'third':'' ))%>">
					<div class="item-num">
						<span class="num-txt"><%=item.rank%></span>

					</div>
					<div class="item-media best" style="position: relative;">
						<img src="<%=item.videoPicUrl%>" class="item-img">
					</div>
					<div class="item-inner">
						<div class="item-title-row">
							<div class="item-title">昵称：
								<%=item.wxName%>
							</div>
						</div>
						<div class="item-subtitle">
							<div class="item-sing">歌曲：
								<%=item.description%>
							</div>
							票数：<span id="voteNum<%=item.id%>" class="votenum"><%=item.voteNum%></span>
						</div>
						<a id="listvotebtn<%=item.id%>" class="support" href="javascript:;" data-id="<%=item.id%>" data-json="<%=window.escape(JSON.stringify(item))%>" data-type="list" class="btn vote-button <%=item.isVote == 1 ?'btn-disable' : ''%>">
						</a>
					</div>
				</div>
			</li>
			<%})%>

		</script>
		<script src='/static/home/js/bbkbrand_75a21d2.js' charset='utf-8'></script>
		<script src='/static/home/js/underscore-min_c99e2b6.js'></script>
		<script src='/static/home/js/jweixin-1.2.0.js'></script>
		<script src='/static/home/js/index_216afe5.js'></script>
	
		<script>
			var renqi=document.getElementById('list-box')
			var time=document.getElementById('time')
			var renqi1=document.getElementById('renqi1')
			var time1=document.getElementById('time1')
			function renqi2(){
				renqi1.style.backgroundColor ="#ff7800"
				renqi1.style.color ="#fff"
				time1.style.backgroundColor ="#fff"
				time1.style.color ="#ff7800"
				renqi.style.display="block"
				time.style.display="none"
			}
			function time2(){
				time1.style.backgroundColor ="#ff7800"
				time1.style.color ="#fff"
				renqi1.style.backgroundColor ="#fff"
				renqi1.style.color ="#ff7800"
				renqi.style.display="none"
				time.style.display="block"
			}

 
			(function(){
				var mv, output;
				var scale =1;
				video = document.getElementById("mv");
				output = document.getElementById("output");
				var initialize = function() {
					output = document.getElementById("output");
					video = document.getElementById("mv");
					video.addEventListener('loadeddata',captureImage);
				};
				var captureImage = function() {
							console.log('222222222')
				            var canvas = document.createElement("canvas");
				           canvas.width = 320 * scale;
				            canvas.height = 228 * scale;
				            canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
				 			 console.log(canvas.toDataURL("image/png"));
				            var img = document.createElement("img");
				            img.style="width:100px;height:190px;"
				            img.src = canvas.toDataURL("image/png");
				            output.appendChild(img);
				            console.log(canvas.toDataURL("image/png"))
				};
				 
				initialize();
				video.addEventListener('play',function(){
					output.style.display="none"
				});
			})();
			</script>
				<script>
						$("#btnLuck").click(function(){
							    $.ajax({
						            url: "<?php echo url('/home/index/winning'); ?>",
						            type: "post",
						            async: true,
						            data: {},
						            dataType: 'json',
						            success: function (data) {
						               if(data==1){
						               	   layer.msg("投票进行中,获奖公布日期<br/><?php echo htmlentities($config[0]['gongtime']); ?>", {icon: 2,time:1500});
						               }else if(data==2){
						               	    window.location.href = '/home/Index/list';
						               }
            }
        });
						});
						</script>

	</body>

</html>