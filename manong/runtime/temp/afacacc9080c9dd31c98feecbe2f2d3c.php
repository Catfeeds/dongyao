<?php /*a:1:{s:70:"/www/wwwroot/manong.yaho.cc/application/index/view/member/balance.html";i:1546422335;}*/ ?>
﻿   <?php echo widget("Last/header"); ?>
   <?php echo widget("Last/left"); ?>


<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div>	<div class="fly-panel fly-panel-user" pad20>
	<div class="layui-tab layui-tab-brief" lay-filter="user">
      	<ul class="layui-tab-title">
       	        	<li class=""><a href="/index/member/topup">充值积分</a></li>
                	<li class="layui-this"><a href="/index/member/balance">充值余额</a></li>
              	</ul>
      	<div class="layui-tab-content" style="padding: 20px 0;">
        	<div class="layui-form layui-form-pane">
        		<form action="" method="post" novalidate target="_blank">
        		<input type="hidden" name="pay" value="mqpay" title="聚合支付"/>
        		<div class="fly-msg fly-mb20"><a> 本次充值为账户人民币余额，可用于购买会员组！</a> 即时到帐，无需联系客服。【支付宝可先扫码领红包→→屏幕右侧】</div>
        			<div class="layui-form-item" pane>
        				<label class="layui-form-label">支付方式</label>
        				<div class="layui-input-inline">
            			<input name="type" type="radio" value="alipay" title="支付宝" checked="checked"/>
             			<input name="type" type="radio" value="wechat" title="微信支付"/>
              	</div>
              </div>
        			<div class="layui-form-item">
        				<label class="layui-form-label">充值金额</label>
        				<div class="layui-input-inline">
                			<input type="text" value="10" name="money" id="money" lay-verify="required|number" class="layui-input" onkeyup="dr_set_price(this.value)">
              			</div>
              			<div class="layui-form-mid layui-word-aux fly-red">元</div>
              		</div>
              		<div class="layui-form-item">
              			<div class="layui-input-block">
              				<button class="layui-btn" type="submit" lay-submit>充值付款</button>
              			</div>
            		</div>
             </form>
        	</div>
      	</div>
      	<div class="fly-msg" style="text-align:center;"> 充值系统采用：<a href="http://pay.codesceo.com" target="_blank">免签支付系统</a> 如需购买联系客服</div>
    	</div>
  	</div>
</div>
<div class="fly-footer">
	<p><a href="/">码农网</a>2017 &copy;<a href="/">codesceo.com</a></p>
</div>
<script type="text/javascript" src="/static/index/Scripts/layui.all.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#left_16').parent().parent().addClass('layui-nav-itemed');
    });
</script>
<script type="text/javascript">
    //手机设备的简单适配
var treeMobile = $('.site-tree-mobile'),
	shadeMobile = $('.site-mobile-shade')

treeMobile.on('click', function(){
	$('body').addClass('site-mobile');
});

shadeMobile.on('click', function(){
	$('body').removeClass('site-mobile');
});
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?ab05efc706718e3c3c1a66d1a3b0d70f";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script><script type="text/javascript">
	function dr_set_price(value) {
    	$("#dr_score").html(parseFloat(value*1));
    };							   
</script>
</body>
</html>