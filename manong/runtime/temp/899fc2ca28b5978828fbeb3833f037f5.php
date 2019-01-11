<?php /*a:1:{s:66:"/www/wwwroot/manong.yaho.cc/application/index/view/lists/game.html";i:1546408145;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
<div class="page-wb">
    <div class="type-list">
        <dl class="layui-clear">
            <dt><i class="layui-icon layui-icon-spread-left">&#xe66b;</i> 栏目分类：<a class="on" href="/code/">不限</a></dt>
            <dd>
                <?php foreach($case as $value): ?>
                     <a class="" ><?php echo htmlentities($value['cate_title']); ?></a>
                <?php endforeach; ?>
            </dd>
        </dl>
       
        <dl class="layui-clear">
            <dt><i class="layui-icon layui-icon-spread-left">&#xe66b;</i> 开发语言：<a class="on" href="/code/">不限</a></dt>
            <dd>  
                <?php foreach($language as $value): ?>            
                    <a class="" href="/code/menu/yy-ASP"><?php echo htmlentities($value['language']); ?></a>
                <?php endforeach; ?>              
            </dd>
        </dl>
        <dl class="sort">
            <a class="on" href="/code/">最新 <i class="layui-icon layui-icon-top">&#xe604;</i></a>
            <a  href="/code/menu/order-hits">人气 <i class="layui-icon layui-icon-top">&#xe604;</i></a>
            <a  href="/code/menu/order-comments">评论 <i class="layui-icon layui-icon-top">&#xe604;</i></a>
            <a  href="/code/menu/order-ding">精华 <i class="layui-icon layui-icon-top">&#xe604;</i></a>
        </dl>
    </div>
    <ul class="fly-case-list layui-main">
        <?php foreach($gamesource as $value): ?>     
        <li>
            <a class="fly-case-img" href="/index/lists/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank">
           <img src="<?php echo htmlentities($value['goods_logo']); ?>" alt="<?php echo htmlentities($value['goods_title']); ?>">
           <i class="layui-icon layui-icon-search">&#xe615;</i></a>
            <h2 class="layui-elip">
            <a href="/index/lists/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><?php echo htmlentities($value['goods_title']); ?></a>
            </h2>
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
      <?php if(isset($page)): ?><p><?php echo $page; ?></p><?php endif; ?>
    
</div>
  <?php echo widget("Last/footer"); ?>
