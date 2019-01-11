<?php /*a:1:{s:67:"/www/wwwroot/manong.yaho.cc/application/index/view/lists/label.html";i:1547167433;}*/ ?>
  <?php echo widget("Last/header"); ?>
     <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
  
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


<div class="page-wb search layui-mt20 layui-clear">
    <div class="article-list">
        <div class="layui-tab">
            <ul class="layui-tab-title" style="text-align:center;">
                                <li class="layui-this" style="margin-left: -710px;">
                    <a href="/search/keyword-%E6%BA%90%E7%A0%81-module-code">搜索结果<span style="color: red;"></span></a>
                </li>
              
                            </ul>
        </div>
        <div class="layui-article">
            <?php foreach($list as $value): ?>
                    <!--文章跳转到详情页面-->
                   <div class="artlist layui-clear">
                        <div class="artlist-pic" style="height: 105px;">
                            <?php if($value['pid']==6): ?>
                            <a title="<?php echo htmlentities($value['goods_logo']); ?>" href="/index/technology/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><img src="<?php echo htmlentities($value['goods_logo']); ?>" alt="<?php echo htmlentities($value['goods_logo']); ?>" /></a>
                            <?php else: ?>
                            <a title="<?php echo htmlentities($value['goods_logo']); ?>" href="/index/lists/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><img src="<?php echo htmlentities($value['goods_logo']); ?>" alt="<?php echo htmlentities($value['goods_logo']); ?>" /></a>
                            <?php endif; ?>
                            
                        </div>
                        <div class="artlist-info">
                            <h4 class="layui-elip">
                            <?php if($value['pid']==6): ?>
                                <a title="<?php echo htmlentities($value['goods_logo']); ?>" href="/index/technology/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><?php echo htmlentities($value['goods_title']); ?></a>
                            <?php else: ?>
                                <a title="<?php echo htmlentities($value['goods_logo']); ?>" href="/index/lists/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><?php echo htmlentities($value['goods_title']); ?></a>
                            <?php endif; ?>
                            </h4>
                            <p><?php echo htmlentities($value['goods_desc']); ?></p>
                        </div>
                   </div>
            <?php endforeach; ?>
                                </div>
      <?php if(isset($page)): ?><p><?php echo $page; ?></p><?php endif; ?>
      
    </div>
    <div class="page-more">
        <div class="right-list">
            <h2><span>推荐标签</span></h2>
            <div class="tag-list">
                                 <?php foreach($cloud as $value): ?>
                                 <a class="hot-label" href="/index/lists/label?label=<?php echo htmlentities($value['label']); ?>"><?php echo htmlentities($value['label']); ?></a>
                                 <?php endforeach; ?>
                                            </div>
        </div>
    </div>
</div>
<script>
        $("#button").click(function(){
           //搜索内容
            var search=$("#search").val();
           
            if(search==""){
               layer.msg("请输入搜索内容",{icon:2,time:1000});
               return false;
            }else{
               window.location.href = "./search?keyword="+search;
            }


        });
    </script>
  <?php echo widget("Last/footer"); ?>
