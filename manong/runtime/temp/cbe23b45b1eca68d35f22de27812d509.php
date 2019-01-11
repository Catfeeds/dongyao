<?php /*a:1:{s:67:"/www/wwwroot/manong.yaho.cc/application/index/view/lists/index.html";i:1547177370;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
<div class="page-wb">

    <div class="type-list">
        <dl class="layui-clear">
            <dt><i class="layui-icon layui-icon-spread-left">&#xe66b;</i> 栏目分类：</dt>
            <dd>
                <?php foreach($case as $value): ?>
                     <span class="c1"><?php echo htmlentities($value['cate_title']); ?></span>
                <?php endforeach; ?>
                     <input type="text" id="cate_id" value="">
            </dd>
        </dl>
        <dl class="layui-clear">
            <dt><i class="layui-icon layui-icon-spread-left">&#xe66b;</i> 系统品牌：</dt>
            <dd>                
                <?php foreach($brand as $value): ?>
                 <span class="c2"><?php echo htmlentities($value['brand_title']); ?></span>
                     <!-- <a href="/index/lists/index?brand_id=<?php echo htmlentities($value['id']); ?>" ><?php echo htmlentities($value['brand_title']); ?></a> -->
                <?php endforeach; ?>
                     <input type="text" id="brand_id" value="">
            </dd>
        </dl>
        <dl class="layui-clear">
            <dt><i class="layui-icon layui-icon-spread-left">&#xe66b;</i> 开发语言：</dt>
            <dd>  
                <?php foreach($language as $value): ?>    
                 <span class="c3"><?php echo htmlentities($value['language']); ?></span>
                    <!-- <a href="/index/lists/index?language_id=<?php echo htmlentities($value['id']); ?>" ><?php echo htmlentities($value['language']); ?></a> -->
                <?php endforeach; ?>    
                     <input type="text" id="language_id" value="">     
            <a id="button" style="float:right">点击搜索</a>

            </dd>
        </dl>

        <dl class="sort">
            <a class="on" href="/index/lists/index?sort=1">最新 <i class="layui-icon layui-icon-top">&#xe604;</i></a>
            <a  href="/index/lists/index?sort=2">人气 <i class="layui-icon layui-icon-top">&#xe604;</i></a>
            <a  href="/index/lists/index?sort=3">收藏 <i class="layui-icon layui-icon-top">&#xe604;</i></a>
            <a  href="/index/lists/index?sort=4">精华 <i class="layui-icon layui-icon-top">&#xe604;</i></a>
        </dl>
    </div>
    <ul class="fly-case-list layui-main">
        <?php foreach($websource as $value): ?>     
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
<script>
 $(".c1").each(function  () {
        $(this).click(function  () {
            var a=$(this).text();
            $("#cate_id").val(a);
        });
    });
 $(".c2").each(function  () {
        $(this).click(function  () {
            var a=$(this).text();
            $("#brand_id").val(a);
        });
    });
  $(".c3").each(function  () {
        $(this).click(function  () {
            var a=$(this).text();
            $("#language_id").val(a);
        });
    });

</script>
<script>
$("#button").click(function(){
    var cate_id=$("#cate_id").val();
    var brand_id=$("#brand_id").val();
    var language_id=$("#language_id").val();
    alert(cate_id);
    alert(brand_id);
    alert(language_id);
});
    
</script>
<?php echo widget("Last/footer"); ?>
