<?php /*a:1:{s:68:"/www/wwwroot/manong.yaho.cc/application/index/view/member/topup.html";i:1547170249;}*/ ?>
﻿   <?php echo widget("Last/header"); ?>
   <?php echo widget("Last/left"); ?>

<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div><script type="text/javascript">
	function dr_set_price(value) {
        $("#dr_price").html(parseFloat(value/1));
    }
</script>
<div class="fly-panel fly-panel-user" pad20>
	<div class="layui-tab layui-tab-brief" lay-filter="user">
      	<ul class="layui-tab-title">
       	        	<li class="layui-this"><a href="/index/member/topup">充值积分</a></li>
                	<li class=""><a href="/index/member/balance">充值余额</a></li>
              	</ul>
      	<div class="layui-tab-content" style="padding: 20px 0;">
        	<div class="layui-form layui-form-pane">
        		<input type="hidden" name="pay" value="mqpay" title="免签支付"/>
        		<div class="fly-msg fly-mb20"><a> 充值比例： 1元 = 1积分，积分不能购买会员组！</a> 即时到帐，无需联系客服。</div>
        			<div class="layui-form-item" pane>
        				<label class="layui-form-label">支付方式</label>
        				<div class="layui-input-inline">
             					<input name="type" type="radio" value="alipay" title="余额" checked="checked" id=""/>
              				<!-- <input name="type" type="radio" value="wechat" title="微信支付"/> -->
              			</div>
              		</div>
        			<div class="layui-form-item">
        				<label class="layui-form-label">积分数量</label>
        						<div class="layui-input-inline">
                			<input type="text" value="10" name="money" id="price" lay-verify="required|number|money" class="layui-input" onkeyup="dr_set_price(this.value)" placeholder="充值积分">
              			</div>
              			<div class="layui-form-mid layui-word-aux">积分&nbsp;&nbsp;需要&nbsp;
              				<span class="fly-red" id="dr_price">10</span>&nbsp;元
              			</div>
              		</div>
              		<div class="layui-form-item">
              			<div class="layui-input-block">
              				<button class="layui-btn" type="submit" id="button" lay-submit>充值付款</button>
              			</div>
            		</div>
        	</div>
      	</div>
      	<!-- <div class="fly-msg" style="text-align:center;"> 充值系统采用：<a href="http://pay.codesceo.com" target="_blank">免签支付系统</a> 如需购买联系客服</div> -->
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

<script>
      $("#button").click(function(){
         layer.confirm('确认要充值吗？',function(index){
              var price=$("#price").val();
                  $.ajax({
                        url: "<?php echo url('/index/member/up'); ?>",
                        type: "get",
                        async : true,
                        data: {price:price},
                        dataType:'json',
                        success:function(data){
                          switch(data['return']){
                         case 1:
                             layer.msg(data['msg'],{icon:2,time:1000});
                           break;
                         case 2:
                             layer.msg(data['msg'],{icon:1,time:1000});
                         break;
                         case 3:
                             layer.msg(data['msg'],{icon:2,time:1000});
                         break;
                      }
                 }
            });
          });
      });

</script>
</body>
</html>