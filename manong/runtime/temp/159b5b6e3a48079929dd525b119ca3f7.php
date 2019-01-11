<?php /*a:1:{s:73:"/www/wwwroot/manong.yaho.cc/application/index/view/technology/detail.html";i:1547167860;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>

</div><div class="page-wb">
   <div class="layui-breadcrumb"></div>
   <div class="page-content">
        <div class="page-show">
            <div class="show-title">
                <h1><i class="layui-icon icon-cy"><a class="show-cy"><?php echo htmlentities($config[30]['value']); ?></a></i><?php echo htmlentities($list[0]['goods_title']); ?> <a class="page-right layui-btn layui-btn-small layui-icon" id="dr_favorite" href="javascript:;"><i class="layui-icon icon-cang1"></i>收藏</a></h1>

            </div>
        
            <div class="show-body">
                <div id="wrap" style="min-height: 290px;">
                	<div><?php echo $list[0]['goods_content']; ?></div>

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
            	<div class="page-left"><div id="dr_poster_1" style="width:405px;height:50px"><a href="https://www.codesceo.com/index.php?c=api&m=poster_show&id=22" target="_blank"><img src="/static/index/Picture/8a391dd6d6.jpg"  width="405" height="50" /></a></div></div>
            	<div class="page-right"><div id="dr_poster_2" style="width:405px;height:50px"><a href="https://www.codesceo.com/index.php?c=api&m=poster_show&id=19" target="_blank"><img src="/static/index/Picture/5b81126d9f.jpg"  width="405" height="50" /></a></div></div>
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
              <!--产品id-->
              <input type="hidden" id="goods_id" value="<?php echo htmlentities($list[0]['id']); ?>">
              <!--用户id-->
              <input type="hidden" id="userid" value="<?php echo htmlentities($info['id']); ?>">

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
     <div class="right-list fix-startBottom">        <div class="fly-home"> <a class="uimg"><img src="<?php echo htmlentities($user['userpic']); ?>" alt="<?php echo htmlentities($user['username']); ?>"></a>
				<h1><a><?php echo htmlentities($user['username']); ?></a>				</h1>
				<div class="fly-home-info layui-clear"> 
					<!--该产品的点击量-->
          <p class="page-left"><i class="layui-icon layui-icon-fire">&#xe756;</i><span><span id="dr_show_hits_871"><?php echo htmlentities($list[0]['click']); ?></span></span></p>
          <!--改产品的评论总数-->
					<p class="page-left"><i class="layui-icon layui-icon-dialogue">&#xe63a;</i><span><?php echo htmlentities($count); ?></span></p>
          <!--收藏次数-->
					<p class="page-left"><i class="layui-icon icon-cang"></i><span><?php echo htmlentities($list[0]['favorite_num']); ?></span></p>
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
            <h2><span>推荐文章</span></h2>
            <ul>
              
                                <?php foreach($recomm as $key=>$value): ?>
                               <li><span><?php echo htmlentities($value['addtime']); ?></span><a href="/index/technology/detail?id=<?php echo htmlentities($value['id']); ?>" title="" class="layui-elip"><?php echo htmlentities($value['goods_title']); ?></a></li>
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
