<?php /*a:1:{s:72:"/www/wwwroot/manong.yaho.cc/application/index/view/technology/fifth.html";i:1546411610;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
</div><div class="page-wb page-topic layui-clear">
    <div class="article-list">
        <div class="layui-tab">
            <ul class="layui-tab-title">
            	 <li><a href="/index/technology/all">全部教程</a></li>
                  <?php foreach($cate as $value): ?>
            	 <li ><a href="<?php echo htmlentities($value['url']); ?>?id=<?php echo htmlentities($value['id']); ?>"><?php echo htmlentities($value['cate_title']); ?></a></li>
                <?php endforeach; ?>
            	            	<!-- <li><a href="/course/web">网页制作</a></li>
            	            	<li><a href="/course/bc">编程开发</a></li>
            	            	<li><a href="/course/ui">平面设计</a></li>
            	            	<li><a href="/course/os">操作系统</a></li>
            	            	<li><a href="/course/sql">数据库类</a></li>
            	            	<li><a href="/course/news">源码资讯</a></li>
            	            	<li><a href="/course/qita">其他文章</a></li> -->
            	            </ul>
        </div>
        <div class="layui-article">
           

     <?php foreach($list as $value): ?>
        
            <div class="artlist layui-clear">
                <div class="artlist-pic">
                    <a title="<?php echo htmlentities($value['goods_title']); ?>" href="/index/technology/detail?id=<?php echo htmlentities($value['id']); ?>" target="_blank"><img lay-src="<?php echo htmlentities($value['goods_logo']); ?>" alt="<?php echo htmlentities($value['goods_title']); ?>"/></a>
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
            <h2><span>推荐源码</span></h2>
            <ul>
                              
                                <?php foreach($tui as $key=>$value): ?>
                                <li><em class="hoticon hot7"><?php echo htmlentities($i++); ?></em><a class="layui-elip" href="/index/technology/detail?id=<?php echo htmlentities($value['id']); ?>"><?php echo htmlentities($value['goods_title']); ?></a></li>
                                <?php endforeach; ?>
                             
                            </ul>
        </div>
        <div class="right-list layui-mt20">
            <h2><span>推荐标签</span></h2>
            <div class="tag-list">
            	            	<a class="hot-label" href="/search/keyword-模板商城" >模板商城</a>
            	            	<a class="hot-label" href="/search/keyword-注册机" >注册机</a>
            	            	<a class="hot-label" href="/search/keyword-汽车4S店" >汽车4S店</a>
            	            	<a class="hot-label" href="/search/keyword-智力大脑游戏" >智力大脑游戏</a>
            	            	<a class="hot-label" href="/search/keyword-仿我图" >仿我图</a>
            	            	<a class="hot-label" href="/search/keyword-微信互动游戏" >微信互动游戏</a>
            	            	<a class="hot-label" href="/search/keyword-H5鱼虾蟹" >H5鱼虾蟹</a>
            	            	<a class="hot-label" href="/search/keyword-支付宝即时到账" >支付宝即时到账</a>
            	            	<a class="hot-label" href="/search/keyword-淘宝客源码" >淘宝客源码</a>
            	            	<a class="hot-label" href="/search/keyword-H5微信游戏源码" >H5微信游戏源码</a>
            	            	<a class="hot-label" href="/search/keyword-基金" >基金</a>
            	            	<a class="hot-label" href="/search/keyword-Shop7z" >Shop7z</a>
            	            	<a class="hot-label" href="/search/keyword-理财系统" >理财系统</a>
            	            	<a class="hot-label" href="/search/keyword-头条号" >头条号</a>
            	            	<a class="hot-label" href="/search/keyword-H+plus" >H+plus</a>
            	            	<a class="hot-label" href="/search/keyword-爆粉推广" >爆粉推广</a>
            	            	<a class="hot-label" href="/search/keyword-HTML5" >HTML5</a>
            	            	<a class="hot-label" href="/search/keyword-微盘交易源码" >微盘交易源码</a>
            	            	<a class="hot-label" href="/search/keyword-杰奇1.7" >杰奇1.7</a>
            	            	<a class="hot-label" href="/search/keyword-微客农场" >微客农场</a>
            	            	            	<a class="hot-label" href="/search/keyword-龙珠棋牌" >龙珠棋牌</a>
            	            	<a class="hot-label" href="/search/keyword-威漫真钱" >威漫真钱</a>
            	            	<a class="hot-label" href="/search/keyword-龙女传奇" >龙女传奇</a>
            	            	<a class="hot-label" href="/search/keyword-休闲娱乐" >休闲娱乐</a>
            	            	<a class="hot-label" href="/search/keyword-柳州麻将" >柳州麻将</a>
            	            	<a class="hot-label" href="/search/keyword-服务器端" >服务器端</a>
            	            	<a class="hot-label" href="/search/keyword-DG娱乐" >DG娱乐</a>
            	            	<a class="hot-label" href="/search/keyword-H5牛牛源码" >H5牛牛源码</a>
            	            	<a class="hot-label" href="/search/keyword-乐玩棋牌" >乐玩棋牌</a>
            	            	<a class="hot-label" href="/search/keyword-完美控制" >完美控制</a>
            	            	<a class="hot-label" href="/search/keyword-8人牛牛" >8人牛牛</a>
            	            	<a class="hot-label" href="/search/keyword-网络游戏" >网络游戏</a>
            	            	<a class="hot-label" href="/search/keyword-透视上色源码" >透视上色源码</a>
            	            	<a class="hot-label" href="/search/keyword-查询" >查询</a>
            	            	<a class="hot-label" href="/search/keyword-QD旺财" >QD旺财</a>
            	            	<a class="hot-label" href="/search/keyword-悍将传世" >悍将传世</a>
            	            	<a class="hot-label" href="/search/keyword-欢乐十三水" >欢乐十三水</a>
            	            	<a class="hot-label" href="/search/keyword-金芒娱乐" >金芒娱乐</a>
            	            	<a class="hot-label" href="/search/keyword-土豪金麻将" >土豪金麻将</a>
            	            	<a class="hot-label" href="/search/keyword-勇者之塔" >勇者之塔</a>
            	            	<a class="hot-label" href="/search/keyword-基金俱乐部" >基金俱乐部</a>
            	            	<a class="hot-label" href="/search/keyword-淘宝客APP" >淘宝客APP</a>
            	            	<a class="hot-label" href="/search/keyword-python获取" >python获取</a>
            	            	<a class="hot-label" href="/search/keyword-python爬虫" >python爬虫</a>
            	            	<a class="hot-label" href="/search/keyword-渔乐吧" >渔乐吧</a>
            	            	<a class="hot-label" href="/search/keyword-威漫棋牌" >威漫棋牌</a>
            	            	<a class="hot-label" href="/search/keyword-九州互娱" >九州互娱</a>
            	            	<a class="hot-label" href="/search/keyword-3D麻将" >3D麻将</a>
            	            	<a class="hot-label" href="/search/keyword-红鸟棋牌源码" >红鸟棋牌源码</a>
            	            	<a class="hot-label" href="/search/keyword-豪门约战" >豪门约战</a>
            	            	<a class="hot-label" href="/search/keyword-财富岛" >财富岛</a>
            	            	<a class="hot-label" href="/search/keyword-音乐下载" >音乐下载</a>
            	            	<a class="hot-label" href="/search/keyword-亿游乐" >亿游乐</a>
            	            	<a class="hot-label" href="/search/keyword-蓝月" >蓝月</a>
            	            	<a class="hot-label" href="/search/keyword-取色器" >取色器</a>
            	            	<a class="hot-label" href="/search/keyword-Android底部菜单" >Android底部菜单</a>
            	            	<a class="hot-label" href="/search/keyword-卡布奇诺" >卡布奇诺</a>
            	            	<a class="hot-label" href="/search/keyword-俱乐部棋牌" >俱乐部棋牌</a>
            	            	<a class="hot-label" href="/search/keyword-扫雷" >扫雷</a>
            	            	<a class="hot-label" href="/search/keyword-卡五星麻将源码" >卡五星麻将源码</a>
            	            </div>
        </div>
    </div>
</div>
<?php echo widget("Last/footer"); ?>
