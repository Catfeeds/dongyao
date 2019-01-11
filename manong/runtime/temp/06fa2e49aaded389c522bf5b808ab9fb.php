<?php /*a:1:{s:70:"/www/wwwroot/manong.yaho.cc/application/index/view/technology/all.html";i:1546914689;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
</div><div class="page-wb page-topic layui-clear">
    <div class="article-list">
        <div class="layui-tab">
            <ul class="layui-tab-title">
            	 <li ><a href="/index/technology/all">全部教程</a></li>
                  <?php foreach($cate as $value): ?>
            	 <li><a href="/index/technology/all?id=<?php echo htmlentities($value['id']); ?>" ><?php echo htmlentities($value['cate_title']); ?></a></li>
                <?php endforeach; ?>

                <!-- <?php foreach($cate as $value): ?>
                 <li><a href="<?php echo htmlentities($value['url']); ?>?id=<?php echo htmlentities($value['id']); ?>" ><?php echo htmlentities($value['cate_title']); ?></a></li>
                <?php endforeach; ?> -->
            	            </ul>
        </div>
        <div class="layui-article">
           

     <?php foreach($list as $value): ?>
        
            <div class="artlist layui-clear">
                <div class="artlist-pic">
                    <a title="<?php echo htmlentities($value['goods_title']); ?>?id=<?php echo htmlentities($value['id']); ?>" href="/index/technology/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><img lay-src="<?php echo htmlentities($value['goods_logo']); ?>" alt="<?php echo htmlentities($value['goods_title']); ?>"/></a>
                </div>
                <div class="artlist-info">
                    <h4 class="layui-elip"><a title="<?php echo htmlentities($value['goods_title']); ?>" href="/index/technology/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><?php echo htmlentities($value['goods_title']); ?></a></h4>
                    <p><?php echo htmlentities($value['goods_desc']); ?></p>
                  
                </div>
            </div>
        <?php endforeach; ?>
         



                    </div>
      <?php if(isset($page)): ?><p><?php echo $page; ?></p><?php endif; ?>
     
    </div>
    <div class="page-more">
       	<div class="right-list" id="startTop">
            <h2><span>推荐文章</span></h2>
            <ul>
                                <?php foreach($tui as $key=>$value): ?>
                                <li><em class="hoticon hot7"><?php echo htmlentities($i++); ?></em><a class="layui-elip" href="/index/technology/detail?id=<?php echo htmlentities($value['id']); ?>"><?php echo htmlentities($value['goods_title']); ?></a></li>
                                <?php endforeach; ?>
                             
                               
                            </ul>
        </div>
        <div class="right-list layui-mt20">
            <h2><span>推荐标签</span></h2>
            <div class="tag-list">
            	            <?php foreach($cloud as $value): ?>
                                <a href="/index/lists/label?label=<?php echo htmlentities($value['label']); ?>" target="_blank" title="模板商城" ><?php echo htmlentities($value['label']); ?></a>
                              <?php endforeach; ?>
            	            </div>
        </div>
    </div>
</div>
<?php echo widget("Last/footer"); ?>
