<?php /*a:2:{s:67:"/www/wwwroot/manong.yaho.cc/application/index/view/cate/header.html";i:1547087137;s:65:"/www/wwwroot/manong.yaho.cc/application/index/view/cate/left.html";i:1547089065;}*/ ?>
<div class="layui-container fly-marginTop fly-user-main" >
<ul class="layui-nav layui-nav-tree layui-nav-side layui-inline" lay-filter="user" style="z-index:0;">
	<li class="layui-nav-item layui-this"><a href="/index/member/index"><i class="layui-icon">&#xe68e;</i> 用户中心</a></li>
		<li class="layui-nav-item layui-nav-itemed">
		<a href="javascript:;"><i class="layui-icon">&#xe612;</i> 账号管理<span class="layui-nav-more"></span></a>
		<dl class="layui-nav-child">
           	            <dd id="left_5" <?php if($_SERVER["REQUEST_URI"]=='/index/member/account'): ?>class="layui-this"<?php endif; ?>><a href="/index/member/account">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;账号设置</a></dd>
                        <dd id="left_10" <?php if($_SERVER["REQUEST_URI"]=='/index/member/upgrade'): ?>class="layui-this"<?php endif; ?>><a href="/index/member/upgrade">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;会员相关</a></dd>
                    </dl>
	</li>
		<li class="layui-nav-item ">
		<a href="javascript:;"><i class="layui-icon">&#xe62d;</i> 内容管理<span class="layui-nav-more"></span></a>
		<dl class="layui-nav-child">
           	            <dd id="left_69" <?php if($_SERVER["REQUEST_URI"]=='/index/member/mindex?cateid=1'): ?>class="layui-this"<?php endif; ?>><a href="/index/member/mindex?cateid=1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发布内容</a></dd>
                        <dd id="left_77" <?php if($_SERVER["REQUEST_URI"]=='/index/member/verify?cateid=1'): ?>class="layui-this"<?php endif; ?>><a href="/index/member/verify?cateid=1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;待审核内容</a></dd>
                        <dd id="left_65" <?php if($_SERVER["REQUEST_URI"]=='/index/member/buy?cateid=1'): ?>class="layui-this"<?php endif; ?>><a href="/index/member/buy?cateid=1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我的购买</a></dd>
                        <dd id="left_68" <?php if($_SERVER["REQUEST_URI"]=='/index/member/favorite?cateid=1'): ?>class="layui-this"<?php endif; ?>><a href="/index/member/favorite?cateid=1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我的收藏</a></dd>
                        <dd id="left_66" <?php if($_SERVER["REQUEST_URI"]=='/index/member/comment?cateid=1'): ?>class="layui-this"<?php endif; ?>><a href="/index/member/comment?cateid=1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我的评论</a></dd>
                    </dl>
	</li>
		<li class="layui-nav-item ">
		<a href="javascript:;"><i class="layui-icon">&#xe65e;</i> 财务中心<span class="layui-nav-more"></span></a>
		<dl class="layui-nav-child">
           	            <dd id="left_16" <?php if($_SERVER["REQUEST_URI"]=='/index/member/topup?cateid=1'): ?>class="layui-this"<?php endif; ?>><a href="/index/member/topup?cateid=1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在线充值</a></dd>
                        <dd id="left_17" <?php if($_SERVER["REQUEST_URI"]=='/index/member/payment?cateid=1'): ?>class="layui-this"<?php endif; ?>><a href="/index/member/payment?cateid=1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;财务记录</a></dd>
                    </dl>
	</li>
	</ul>
