<?php /*a:1:{s:68:"/www/wwwroot/manong.yaho.cc/application/index/view/lists/detail.html";i:1547167812;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>

</div><div class="page-wb">
   <div class="layui-breadcrumb"></div>
   <div class="page-content">
        <div class="page-show">
            <div class="show-title">
                <h1><i class="layui-icon icon-cy"><a class="show-cy"><?php echo htmlentities($config[30]['value']); ?></a></i><?php echo htmlentities($list['goods_title']); ?></h1>
            </div>
            <div class="down-demo layui-clear">
              	<div class="down-thumb">
              		<div class="layui-carousel" id="thumb">
              			<div carousel-item>
     
     <!--轮播图-->
     <?php foreach($images as $value): ?> 
     <div><img class="down-img" src="<?php echo htmlentities($value); ?>" src="<?php echo htmlentities($value); ?>" alt="<?php echo htmlentities($list['goods_title']); ?>" title="点击放大"></div>
     <?php endforeach; ?>

    

               		</div>
               		</div>
								</div>
               	<div class="down-info">
               		<div class="price">
               			<em>￥<?php echo htmlentities($list['price']); ?><span> 积分</span> <a href="/page/score" target="_blank">[如何获取积分?]</a></em>
    

          <div class="show-gun">



  <!--公告-->
	<ul class="show-vip">
      <?php foreach($announ as $value): ?>
       <li><a href="/index/index/vip" target="_blank"><span><i class="layui-icon">&#xe650;</i><?php echo htmlentities($value['title']); ?></span>
        <?php echo htmlentities($value['content']); ?></a>
      </li>
      <?php endforeach; ?>
  </ul>




</div>               		
</div>
  <!--网站源码-->
    <?php if($list['pid'] == 1): ?>
      <div class="lei layui-clear">                     
            <li>源码分类：<?php echo htmlentities($list['cate']); ?></li><li>系统品牌：<?php echo htmlentities($list['brand']); ?></li>
            <li>开发语言：<?php echo htmlentities($list['language_id']); ?></li><li>数据库：<?php echo htmlentities($list['database_id']); ?></li>
            <li>下载次数：<?php echo htmlentities($list['downloads']); ?></li>
            <li>发布时间：<?php echo htmlentities($list['create_at']); ?></li>
      </div>
  <!--游戏源码-->
    <?php elseif($list['pid'] == 2): ?>
    <div class="lei layui-clear">                     
            <li>栏目分类：<?php echo htmlentities($list['cate']); ?></li><li>开发语言：<?php echo htmlentities($list['language_id']); ?></li>
            <li>下载次数：<?php echo htmlentities($list['downloads']); ?></li>
            <li>发布时间：<?php echo htmlentities($list['create_at']); ?></li>
    </div>
  <!--插件源码-->
    <?php elseif($list['pid'] == 3): ?>
     <div class="lei layui-clear">                     
            <li>插件类型：<?php echo htmlentities($list['cate']); ?></li><li>功能属性：<?php echo htmlentities($list['language_id']); ?></li>
            <li>下载次数：<?php echo htmlentities($list['downloads']); ?></li>
            <li>发布时间：<?php echo htmlentities($list['create_at']); ?></li>
     </div>
  <!--网站源码-->
    <?php elseif($list['pid'] == 4): ?>
     <div class="lei layui-clear">                     
            <li>栏目分类：<?php echo htmlentities($list['cate']); ?></li><li>教程类型：<?php echo htmlentities($list['language_id']); ?></li>
            <li>下载次数：<?php echo htmlentities($list['downloads']); ?></li>
            <li>发布时间：<?php echo htmlentities($list['create_at']); ?></li>
     </div>
  <!--精品工具源码-->
     <?php elseif($list['pid'] == 5): ?>
     <div class="lei layui-clear">                     
            <li>软件分类：<?php echo htmlentities($list['cate']); ?></li><li>适用环境：<?php echo htmlentities($list['language_id']); ?></li>
            <li>下载次数：<?php echo htmlentities($list['downloads']); ?></li>
            <li>发布时间：<?php echo htmlentities($list['create_at']); ?></li>
     </div>
    <?php endif; ?>

               	
               		<div class="btn">
               			<a class="page-left layui-btn layui-btn-big down" href="javascript:download();">立即下载</a>

                    <?php if($list['goods_video']==""): ?>
                    <a class="page-left layui-btn layui-btn-big demo" target="_blank" rel="nofollow">无演示</a>
                    <?php else: ?>
                    <a class="page-left layui-btn layui-btn-big demo" target="_blank" rel="nofollow"href="<?php echo htmlentities($list['goods_video']); ?>">演示地址</a>
                    <?php endif; ?>
               			
               			<a class="page-right layui-btn layui-btn-small layui-icon" id="dr_favorite" href="javascript:;"><i class="layui-icon icon-cang1"></i>收藏</a>
               		</div>
               	</div>
            </div>
            <div class="show-body">
                <div id="wrap" style="min-height: 290px;">
                	<div><?php echo $list['goods_content']; ?></div>
                	<div id="gradient"></div>
                </div>
                <div id="read-more"></div>
			</div>
            <div class="show-tags">
                <span class="layui-btn layui-btn-mini layui-btn-danger">标签</span>
                <span class="layui-breadcrumb" lay-separator="/">
                    <?php foreach($label as $value): ?>
                	     	<a class="button3 white" href="/index/lists/label?label=<?php echo htmlentities($value); ?>" target="_blank"><?php echo htmlentities($value); ?></a>
                	  <?php endforeach; ?>
                </span>
            
            </div>
            <div class="layui-clear">
            	<div class="page-left"><div id="dr_poster_1" style="width:405px;height:50px"><a target="_blank"><img src="/static/index/Picture/8a391dd6d6.jpg"  width="405" height="50" /></a></div></div>

            	<div class="page-right"><div id="dr_poster_2" style="width:405px;height:50px"><a  target="_blank"><img src="/static/index/Picture/5b81126d9f.jpg"  width="405" height="50" /></a></div></div>
            </div>
        </div>




  <!--评论-->
        <div class="page-commnet layui-mt10" id="comment">
            <h2><span>评论</span>（<?php echo htmlentities($count); ?>条）</h2>
            <div id="ds-reset" class="layui-clear">
          	<div id="dr_post_form" class="comment-respond">
          	<form method="post" id="myform" class="ds_form_post comment-form">
      				<div class="comment-form-comment">
      					<textarea name="content" class="required" placeholder="灌水垃圾评论封号！！" id="comments"></textarea>
      				</div>
      				<div class="form-submit">
              <?php if($info): ?>
      					<div class="page-left form-submit-text">
      					 <?php if($info['userpic']): ?>
                     <img src="<?php echo htmlentities($info['userpic']); ?>" class="avatars">
                  <?php else: ?>
                     <img src="/static/index/Picture/avatar_45.png" class="avatars">
                  <?php endif; ?>
      						<span><?php echo htmlentities($info['username']); ?></span>
      					</div>
                <div class="page-right">
                              <button class="submit page-left" type="button" onclick="dr_post_comment()">评论</button>
                </div>
              <?php else: ?>
                <div class="page-left form-submit-text">
                  <img src="/static/index/Picture/avatar_45.png" class="avatars" alt="" />
                  <span>请登录后评论</span>
                </div>
                <div class="page-right">
                            <a href="/index/login/login"><button class="submit page-left" type="button" >登录</button></a>
                </div>
              <?php endif; ?>
            
      				</div>
      		</form>
      		</div><!-- #respond -->
	       <ul class="comments-list">
          <?php foreach($comments as $value): ?>
            <li class="comment depth-1" id="comment-434">
              <div id="div-comment-6">
                <div class="comment-author">
                  <?php if($value['userpic']): ?>
                     <img src="<?php echo htmlentities($value['userpic']); ?>">
                  <?php else: ?>
                     <img src="/static/index/Picture/avatar_45.png">
                  <?php endif; ?>
                </div>
                <div class="comment-body">            
                      <div class="nickname"><?php echo htmlentities($value['username']); ?>&nbsp;&nbsp;
                      <?php if($value['members']==1): ?>
                      普通会员
                      <?php else: ?>
                      钻石会员
                      <img align="absmiddle" src="https://www.codesceo.com/statics/admin/images/star_level4.gif" alt="Rank: 4">
                      <?php endif; ?>
                      &nbsp;<span class="comment-time"><?php echo htmlentities($value['addtime']); ?></span></div>
                  <div class="comment-text"><?php echo htmlentities($value['comments']); ?></div>
                </div>
              </div>
           </li>
          <?php endforeach; ?>
      <!-- #comment-## -->
          </ul>
        <div class="pagination layui-clear"></div>
</div><!-- .comments-area -->
   </div>






       </div>
	<div class="page-more">
     <div class="right-list fix-startBottom">        
     <div class="fly-home"> <a class="uimg"><img src="<?php echo htmlentities($user['userpic']); ?>" alt="<?php echo htmlentities($user['username']); ?>"></a>
				<h1><a><?php echo htmlentities($user['username']); ?></a>				</h1>
				<div class="fly-home-info layui-clear"> 
					<!--该产品的点击量-->
          <p class="page-left"><i class="layui-icon layui-icon-fire">&#xe756;</i><span><span id="dr_show_hits_871"><?php echo htmlentities($list['click']); ?></span></span></p>
          <!--改产品的评论总数-->
					<p class="page-left"><i class="layui-icon layui-icon-dialogue">&#xe63a;</i><span><?php echo htmlentities($count); ?></span></p>
          <!--收藏次数-->
					<p class="page-left"><i class="layui-icon icon-cang"></i><span><?php echo htmlentities($list['favorite_num']); ?></span></p>
				</div>
				<div class="fly-home-sign">
        <?php if($user['descr']==""): ?>
        ( 此人很懒并没有留下什么~~ )
        <?php else: ?>
        ( <?php echo htmlentities($user['descr']); ?>)
        <?php endif; ?>
        </div>
				</div>
			</div>
       <div class="right-list layui-mt10 ">
            <h2><span>推荐源码</span></h2>
            <ul>
              <?php foreach($recomm as $value): ?>
               	<li><span><?php echo htmlentities($value['addtime']); ?></span>
                  <?php if($value['pid']==6): ?>
                 <a href="/index/technology/detail?id=<?php echo htmlentities($value['id']); ?>" class="layui-elip"><?php echo htmlentities($value['goods_title']); ?></a>
                  <?php else: ?>
                 <a href="/index/lists/detail?id=<?php echo htmlentities($value['id']); ?>"  class="layui-elip"><?php echo htmlentities($value['goods_title']); ?></a>
                  <?php endif; ?>
                </li>
              <?php endforeach; ?>
            </ul>
	   		</div>
        <div class="right-list layui-mt10" id="startBottom">
          <h2><span>标签云</span></h2>
          <div class="tag-list">
                              <?php foreach($cloud as $value): ?>
               	                <a href="/index/lists/label?label=<?php echo htmlentities($value['label']); ?>" target="_blank" title="模板商城" ><?php echo htmlentities($value['label']); ?></a>
                              <?php endforeach; ?>
                          </div>
	   		</div>
    </div>
</div>


<?php if($info==NULL): ?>
<!--购买登录验证-->
<div id="download">
  	<div class="resource_info">
   		<div class="resource_img"><img src="/static/index/Picture/avatar_45.png" alt="img"></div>
   		<div class="resource_title">
   		<h3><?php echo htmlentities($list['goods_title']); ?></h3>
   			<table width="100%">
          	<tbody><tr>
            <td width="50%"><span>下载积分</span></td>
            <td width="50%"><span>钻石会员</span></td>
          	</tr>
          	<tr>
            <td><strong class="mark"><?php if($list['price']==0): ?>免费<?php else: ?><?php echo htmlentities($list['price']); endif; ?></strong></td>
            <td><strong class="markz">免费</strong></td>
          	</tr></tbody>
        	</table>
      	</div>
      					<div class="noC">
    			<span>请您</span><em class="cWrap mark"> 登录后 </em><span>下载 ！</span>
    			<div class="resource_btn">
    				<a class="layui-btn layui-btn-danger" href="/index/login/login">立即登录</a>
    				<a class="layui-btn layui-btn-normal" href="/index/login/register">注册账号</a>
					</div>
				</div>
				      	<div class="space_bar"><span class="tit">说明</span></div>
      	<div class="resource_tips"><p>您下载所消耗的积分将转交上传作者。上传资源，免费获取积分!</p></div>
	</div>
</div>
<?php else: ?>
<!-- <form action="/index/Lists/pay" method=""> -->
<div id="download">
    <div class="resource_info">
      <div class="resource_img">
      <?php if($info['userpic']==""): ?>
       <img src="/static/index/Picture/avatar_45.png" alt="img">
      <?php else: ?>
        <img src="<?php echo htmlentities($info['userpic']); ?>" alt="img">
      <?php endif; ?>
      </div>
      <div class="resource_title">
      <h3><?php echo htmlentities($list['goods_title']); ?></h3>
        <table width="100%">
            <tbody><tr>
            <td width="50%"><span>下载积分</span></td>
            <td width="50%"><span>钻石会员</span></td>
            </tr>
            <tr>
            <td><strong class="mark"><?php if($list['price']==0): ?>免费<?php else: ?><?php echo htmlentities($list['price']); endif; ?></strong></td>
            <!--传递用户id-->
            <input type="hidden" id="userid" value="<?php echo htmlentities($info['id']); ?>">
            <!--传递积分-->
            <input type="hidden" id="price" value="<?php echo htmlentities($list['price']); ?>">
            <!--传递发布者用户的id-->
            <input type="hidden" id="release" value="<?php echo htmlentities($user['id']); ?>">
            <!--产品id-->
            <input type="hidden" id="goods_id" value="<?php echo htmlentities($list['id']); ?>">
            <td><strong class="markz">免费</strong></td>
            </tr></tbody>
          </table>
        </div>
                <div class="noC">
          <span>
        <?php if($up==1): if($info['members']==1): ?>
          【普通会员】 下载将扣除 <?php echo htmlentities($list['price']); ?>积分
          <?php else: ?>
          【钻石会员】 免费下载
          <?php endif; else: ?>
          您已购买或者资源免费
        <?php endif; ?>
          </span>
          <div class="resource_btn">
            <input type="submit"  class="layui-btn layui-btn-danger" id="button" value="确定下载">
          </div>
        </div>
                <div class="space_bar"><span class="tit">说明</span></div>
        <div class="resource_tips"><p>您下载所消耗的积分将转交上传作者。上传资源，免费获取积分!</p></div>
  </div>
</div> 
<!-- </form> -->
<?php endif; ?>

<!--屏蔽f12-->
<script src="/static/index/Scripts/zhifu.js"></script>

<!--购买检测-->
<script>
  $("#button").click(function(){
    //获取用户的id
    var userid=$("#userid").val();
    //获取下载需要积分
    var price=$("#price").val();
    //发布者的id
    var release=$("#release").val();
    //产品id
    var goods_id=$("#goods_id").val();
      $.ajax({
                  url: "<?php echo url('/Index/Lists/pay'); ?>",
                  type: "post",
                  async : true,
                  data: {userid:userid,price:price,release:release,goods_id:goods_id},
                  dataType:'json',
                  success:function(data){
                    // alert(data);
                       switch(data['a']){
                         case 1:
                             layer.msg("积分不足,请充值",{icon:2,time:1000});
                           break;
                         case 2:
                             window.location.href=data["url"];
                         break;
                         case 3:
                             layer.msg("系统错误~稍后再试",{icon:2,time:1000});
                         break;
                         case 4:
                              window.location.href=data["url"];
                         break;
                      }
                 }
            });
  });
</script>

<!--评论检测-->
<script>
  function dr_post_comment(){
     //评论的内容
     var comments=$("#comments").val();
     //获取用户的id
     var userid=$("#userid").val();
     //产品id
     var goods_id=$("#goods_id").val();
      $.ajax({
                  url: "<?php echo url('/Index/Lists/comments'); ?>",
                  type: "post",
                  async : true,
                  data: {userid:userid,goods_id:goods_id,comments:comments},
                  dataType:'json',
                  success:function(data){
                    // alert(data);
                       switch(data['return']){
                         case 1:
                             layer.msg("已经评论过了",{icon:2,time:1000});
                           break;
                         case 2:
                             layer.msg("评论成功",{icon:1,time:1000});
                         break;
                         case 3:
                             layer.msg("系统错误~稍后再试",{icon:2,time:1000});
                         break;
                         case 4:
                             layer.msg("您无权评论",{icon:2,time:1000});
                         break;
                      }
                 }
            });
  }
</script>




<!--收藏-->
<script>
  $("#dr_favorite").click(function(){
     //产品id
     var goods_id=$("#goods_id").val();
     //用户id
     var userid=$("#userid").val();
     if(userid==undefined){
        layer.msg("请先登录",{icon:2,time:1000});
        return false;
     }
        $.ajax({
                  url: "<?php echo url('/Index/Lists/collection'); ?>",
                  type: "post",
                  async : true,
                  data: {userid:userid,goods_id:goods_id},
                  dataType:'json',
                  success:function(data){
                       switch(data['return']){
                         case 1:
                             layer.msg("已经收藏过了",{icon:2,time:1000});
                           break;
                         case 2:
                             layer.msg("收藏成功",{icon:1,time:1000});
                         break;
                         case 3:
                             layer.msg("系统错误",{icon:2,time:1000});
                         break;
                      }
                 }
            });
  });
</script>
 <?php echo widget("Last/footer"); ?>
