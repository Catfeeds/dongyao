<?php /*a:1:{s:67:"/www/wwwroot/manong.yaho.cc/application/index/view/index/index.html";i:1547012944;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
  
</div><div class="layui-banner">
    <div class="rainbow">
        <div class="red"></div><div class="orange"></div><div class="yellow"></div><div class="green"></div><div class="cyan"></div><div class="blue"></div><div class="purple"></div>
    </div>
    <div class="banner-img">
    	<canvas id="canvas">嗨帅哥！您的浏览器不支持canvas赶紧去升级吧</canvas>
    </div>
    <div class="searchBox">
        <i class="layui-icon layui-icon-search">&#xe615;</i>
        <input type="text" id="search" autocomplete="off" placeholder="请输入搜索内容" />
        <input type="button" value="搜 索" class="layui-btn layui-btn-danger searchBtn" id="button">
        <div><a href="/index/member/add" target="_blank" class="layui-btn layui-btn-warm" >上传资源</a></div>
    </div>
	</div>
<div class="layui-tab layui-tab-brief layui-hot">
    <ul class="layui-tab-title">
        <li class="layui-this">最新上传</li>
        <li>最新下载</li>
    </ul>


    <!--上传-->
    <div class="layui-tab-content page-wb">
    	<div class="layui-tab-item layui-show index-gun">
    		<ul class="index-down" style="overflow: hidden;height: 204px;">

                <?php foreach($audit as $value): ?>
      			<li class="layui-col-md6 layui-col-xs12">
            	<div class="down-list">
                	<div class="layui-col-md3 down-user">
                    	<a target="_blank"><img class="img-rounded img-responsive" src="<?php if($value['userpic']): ?> <?php echo htmlentities($value['userpic']); else: ?> /static/index/Images/user.png <?php endif; ?>" alt="yimiyike" title="yimiyike" style="width:30%"></a>
                    	<span>上传了</span>
                    </div>
                	<div class="layui-col-md7 down-title">
                    <?php if($value['pid']==6): ?>
                		<a href="/index/technology/detail?id=<?php echo htmlentities($value['goods_id']); ?>" target="_blank"><?php echo htmlentities($value['title']); ?></a>
                    <?php else: ?>
                        <a href="/index/lists/detail?id=<?php echo htmlentities($value['goods_id']); ?>" target="_blank"><?php echo htmlentities($value['title']); ?></a>
                    <?php endif; ?>
                	</div>
                	<div class="layui-col-md2 down-time"><i class="layui-icon layui-icon-log">&#xe60e;</i>审核通过</div>
            	</div>
        		</li>
                <?php endforeach; ?>
            </ul>
    	</div>



        <!--下载-->
    	<div class="layui-tab-item index-gun">
    		<ul class="index-down" style="overflow: hidden;height: 204px;">
      			<?php foreach($record as $value): ?>
                <li class="layui-col-md6 layui-col-xs12">
                <div class="down-list">
                    <div class="layui-col-md3 down-user">
                        <a target="_blank"><img class="img-rounded img-responsive" src="<?php if($value['userpic']): ?> <?php echo htmlentities($value['userpic']); else: ?> /static/index/Images/user.png <?php endif; ?>" alt="yimiyike" title="yimiyike" style="width:30%"></a>
                        <span>下载了</span>
                    </div>
                    <div class="layui-col-md7 down-title">
                    <?php if($value['pid']==6): ?>
                        <a href="/index/technology/detail?id=<?php echo htmlentities($value['goods_id']); ?>" target="_blank"><?php echo htmlentities($value['goods_title']); ?></a>
                    <?php else: ?>
                        <a href="/index/lists/detail?id=<?php echo htmlentities($value['goods_id']); ?>" target="_blank"><?php echo htmlentities($value['goods_title']); ?></a>
                    <?php endif; ?>
                    </div>
                    <div class="layui-col-md2 down-time"><i class="layui-icon layui-icon-log">&#xe60e;</i>下载成功</div>
                </div>
                </li>
                <?php endforeach; ?>
        	</ul>
    	</div>
	</div>
</div>
<div class="layui-tab layui-tab-brief layui-index page-wb">
    <h2>热门推荐</h2>
    <ul class="layui-tab-title">
        <!-- <li class="layui-this">网站源码</li> -->
        <?php foreach($case as $value): ?>
        <li ><?php echo htmlentities($value['cate_title']); ?></li>
        <?php endforeach; ?>
    </ul>
    <div class="layui-tab-content">







    <!--网站源码-->
        <div class="layui-tab-item layui-show">
            <ul class="fly-case-list layui-main">
               <?php foreach($websource as $value): ?>            
                <li>
                      <a class="fly-case-img" href="/index/lists/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><img lay-src="<?php echo htmlentities($value['goods_logo']); ?>" alt="<?php echo htmlentities($value['goods_title']); ?>"><i class="layui-icon layui-icon-search">&#xe615;</i></a>
                        <h2 class="layui-elip"><a href="/index/lists/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><?php echo htmlentities($value['goods_title']); ?></a></h2>
                        <p class="fly-case-desc"><?php echo htmlentities($value['goods_desc']); ?></p>
                        <div class="fly-case-info">
                            <p class="layui-elip">
                			<span style="color:#ff5722;font-weight:bold;">
                                              
                			<i class="layui-icon layui-icon-radio">&#xe643;</i> <?php echo htmlentities($value['click']); ?> &nbsp;
                            <i class="layui-icon layui-icon-reply-fill">&#xe611;</i><span class="cy_cmt_count" >0</span>
                            <?php if($value['recommend']==1): ?>
                            <i class="layui-icon">&#xe756;</i>精华</span>
                            <?php else: ?>
                                <?php echo htmlentities($value['addtime']); endif; ?>
                            </p>
                        </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        





        <!--游戏源码-->
        <div class="layui-tab-item ">
            <ul class="fly-case-list layui-main">
               	 <?php foreach($gamesource as $value): ?>            
                <li>
                      <a class="fly-case-img" href="/index/lists/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><img lay-src="<?php echo htmlentities($value['goods_logo']); ?>" alt="企业级发卡平台源码，界面友好，支付通道齐全，运营级自动发卡源码"><i class="iz iz-search"></i></a>
                        <h2 class="layui-elip"><a href="/index/lists/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><?php echo htmlentities($value['goods_title']); ?></a></h2>
                        <p class="fly-case-desc"><?php echo htmlentities($value['goods_desc']); ?></p>
                        <div class="fly-case-info">
                            <p class="layui-elip">
                            <span style="color:#ff5722;font-weight:bold;">
                                              
                            <i class="iz iz-chakan"></i> <?php echo htmlentities($value['click']); ?> &nbsp;
                            <i class="iz iz-pinglun"></i><span class="cy_cmt_count" >0</span>
                            <?php if($value['recommend']==1): ?>
                            <i class="layui-icon">&#xe756;</i>精华</span>
                            <?php else: ?>
                                <?php echo htmlentities($value['addtime']); endif; ?>
                            </p>
                        </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>












    <!--插件源码-->
        <div class="layui-tab-item ">
            <ul class="fly-case-list layui-main">
               	<?php foreach($plugsource as $value): ?>            
                <li>
                      <a class="fly-case-img" href="/index/lists/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><img lay-src="<?php echo htmlentities($value['goods_logo']); ?>" alt="企业级发卡平台源码，界面友好，支付通道齐全，运营级自动发卡源码"><i class="iz iz-search"></i></a>
                        <h2 class="layui-elip"><a href="/index/lists/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><?php echo htmlentities($value['goods_title']); ?></a></h2>
                        <p class="fly-case-desc"><?php echo htmlentities($value['goods_desc']); ?></p>
                        <div class="fly-case-info">
                            <p class="layui-elip">
                            <span style="color:#ff5722;font-weight:bold;">
                                              
                            <i class="iz iz-chakan"></i> <?php echo htmlentities($value['click']); ?> &nbsp;
                            <i class="iz iz-pinglun"></i><span class="cy_cmt_count" >0</span>
                            <?php if($value['recommend']==1): ?>
                            <i class="layui-icon">&#xe756;</i>精华</span>
                            <?php else: ?>
                                <?php echo htmlentities($value['addtime']); endif; ?>
                            </p>
                        </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>



    <!--视频源码-->
        <div class="layui-tab-item ">
            <ul class="fly-case-list layui-main">
                <?php foreach($videosource as $value): ?>            
                <li>
                      <a class="fly-case-img" href="/index/lists/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><img lay-src="<?php echo htmlentities($value['goods_logo']); ?>" alt="企业级发卡平台源码，界面友好，支付通道齐全，运营级自动发卡源码"><i class="iz iz-search"></i></a>
                        <h2 class="layui-elip"><a href="/index/lists/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><?php echo htmlentities($value['goods_title']); ?></a></h2>
                        <p class="fly-case-desc"><?php echo htmlentities($value['goods_desc']); ?></p>
                        <div class="fly-case-info">
                            <p class="layui-elip">
                            <span style="color:#ff5722;font-weight:bold;">
                                              
                            <i class="iz iz-chakan"></i> <?php echo htmlentities($value['click']); ?> &nbsp;
                            <i class="iz iz-pinglun"></i><span class="cy_cmt_count" >0</span>
                            <?php if($value['recommend']==1): ?>
                            <i class="layui-icon">&#xe756;</i>精华</span>
                            <?php else: ?>
                                <?php echo htmlentities($value['addtime']); endif; ?>
                            </p>
                        </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>





        <!--工具源码-->
        <div class="layui-tab-item ">
          <ul class="fly-case-list layui-main">
                <?php foreach($toolsource as $value): ?>            
                <li>
                      <a class="fly-case-img" href="/index/lists/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><img lay-src="<?php echo htmlentities($value['goods_logo']); ?>" alt="企业级发卡平台源码，界面友好，支付通道齐全，运营级自动发卡源码"><i class="iz iz-search"></i></a>
                        <h2 class="layui-elip"><a href="/index/lists/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><?php echo htmlentities($value['goods_title']); ?></a></h2>
                        <p class="fly-case-desc"><?php echo htmlentities($value['goods_desc']); ?></p>
                        <div class="fly-case-info">
                            <p class="layui-elip">
                            <span style="color:#ff5722;font-weight:bold;">
                                              
                            <i class="iz iz-chakan"></i> <?php echo htmlentities($value['click']); ?> &nbsp;
                            <i class="iz iz-pinglun"></i><span class="cy_cmt_count" >0</span>
                            <?php if($value['recommend']==1): ?>
                            <i class="layui-icon">&#xe756;</i>精华</span>
                            <?php else: ?>
                                <?php echo htmlentities($value['addtime']); endif; ?>
                            </p>
                        </div>
                </li>
                <?php endforeach; ?>	               
          </ul>
        </div>



<!--技术文章-->
        <div class="layui-tab-item ">
            <ul class="fly-case-list layui-main">
               	<?php foreach($techsource as $value): ?>            
                <li>
                      <a class="fly-case-img" href="/index/lists/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><img lay-src="<?php echo htmlentities($value['goods_logo']); ?>" alt="企业级发卡平台源码，界面友好，支付通道齐全，运营级自动发卡源码"><i class="iz iz-search"></i></a>
                        <h2 class="layui-elip"><a href="/index/lists/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><?php echo htmlentities($value['goods_title']); ?></a></h2>
                        <p class="fly-case-desc"><?php echo htmlentities($value['goods_desc']); ?></p>
                        <div class="fly-case-info">
                            <p class="layui-elip">
                            <span style="color:#ff5722;font-weight:bold;">
                                              
                            <i class="iz iz-chakan"></i> <?php echo htmlentities($value['click']); ?> &nbsp;
                            <i class="iz iz-pinglun"></i><span class="cy_cmt_count" >0</span>
                            <?php if($value['recommend']==1): ?>
                            <i class="layui-icon">&#xe756;</i>精华</span>
                            <?php else: ?>
                                <?php echo htmlentities($value['addtime']); endif; ?>
                            </p>
                        </div>
                </li>
                <?php endforeach; ?>    
            </ul>
        </div>
     </div>
</div>
<div class="page-wb layui-link">
    <h2><span>友情链接</span></h2>
    <?php foreach($link as $value): ?>
    <a href="<?php echo htmlentities($value['url']); ?>" target="_blank"><?php echo htmlentities($value['title']); ?></a>
    <?php endforeach; ?>
  </div>

    <script>
        $("#button").click(function(){
           //搜索内容
            var search=$("#search").val();
           
            if(search==""){
               layer.msg("请输入搜索内容",{icon:2,time:1000});
               return false;
            }else{
               window.location.href = "index/lists/search?keyword="+search;
            }


        });
    </script>
  <?php echo widget("Last/footer"); ?>
