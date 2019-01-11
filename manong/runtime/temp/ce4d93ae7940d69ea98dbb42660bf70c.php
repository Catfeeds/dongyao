<?php /*a:1:{s:73:"C:\Users\Dongyao001\Desktop\manong\application\index\view\member\add.html";i:1545140905;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
   <?php echo widget("Last/left"); ?>

<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div><div class="fly-panel fly-panel-user" pad20>
	<div class="layui-tab layui-tab-brief" lay-filter="user">
      	<ul class="layui-tab-title" id="LAY_mine">
        	<li class="layui-this"><a href="/member/qiandao/">发布网站源码</a></li>
      	</ul>
      	<div class="layui-tab-content" style="padding: 20px 0;">
        	<form action="" method="post" class="layui-form" novalidate>
			<input name="action" id="dr_action" type="hidden" value="" />
			<input name="dr_id" id="dr_id" type="hidden" value="" />
			<input name="dr_module" id="dr_module" type="hidden" value="code" />
		  <div class="layui-form-item">
						<label class="layui-form-label">栏目分类：</label>
						<div class="layui-input-inline">
            <select class='form-control' class="form-control" id='dr_catid' name='catid' onChange="show_category_field(this.value)">
                <option value='0' >选择分类</option>
              <?php foreach($cates as $value): ?>
                <option value="<?php echo htmlentities($value['id']); ?>" ><?php echo htmlentities($value['cate_title']); ?></option>
              <?php endforeach; ?>
            </select></div>
			</div>
			


  

    <div class="layui-form-item form-group" id="dr_row_pp">
    <label class="layui-form-label control-label col-md-2">系统品牌：</label>
    <div class="col-md-9 layui-input-block"><div class="layui-input-inline"><label>
    <select  class="form-control" name="data[pp]" id="dr_pp"  >
       <option value="0" >选择品牌</option>
       <?php foreach($brand as $value): ?>
          <option value="<?php echo htmlentities($value['id']); ?>" ><?php echo htmlentities($value['brand_title']); ?></option>
       <?php endforeach; ?>
    </select></label></div></div>
    </div>


<div class="layui-form-item form-group" id="dr_row_yy">
    <label class="layui-form-label control-label col-md-2">开发语言：</label>
    <div class="col-md-9 layui-input-block"><div class="layui-input-inline"><label>
    <select  class="form-control" name="data[yy]" id="dr_yy"  >
    <option value="0" >开发语言</option>
       <?php foreach($language as $value): ?>
          <option value="<?php echo htmlentities($value['language']); ?>" ><?php echo htmlentities($value['language']); ?></option>
       <?php endforeach; ?>
    </select></label></div></div>
</div>


<div class="layui-form-item form-group" id="dr_row_ku">
    <label class="layui-form-label control-label col-md-2">数据库类：</label>
    <div class="col-md-9 layui-input-block"><div class="layui-input-inline"><label>
    <select  class="form-control" name="data[ku]" id="dr_ku"  >
     <option value="0" >选择数据库</option>
       <?php foreach($database as $value): ?>
          <option value="<?php echo htmlentities($value['database']); ?>" ><?php echo htmlentities($value['database']); ?></option>
       <?php endforeach; ?>
    </select></label></div></div>
</div>


<div class="layui-form-item form-group" id="dr_row_title">
    <label class="layui-form-label control-label col-md-2"><font color="red">*</font>标题：</label>
    <div class="col-md-9 layui-input-block"><input class="form-control layui-input" type="text" name="data[title]" id="dr_title" value="" style="width:90%;" required="required" onblur="check_title();get_keywords('keywords');" /></div>
</div>


<div class="layui-form-item form-group" id="dr_row_keywords">
    <label class="layui-form-label control-label col-md-2">关键字：</label>
    <div class="col-md-9 layui-input-block"><div class="layui-input-inline"><input class="form-control layui-input" type="text" name="data[keywords]" id="dr_keywords" value="" style="width:400px;"  data-role="tagsinput" /></div><span class="help-block layui-form-mid layui-word-aux" id="dr_keywords_tips">用【,】符号隔开，增加曝光率</span></div>
</div>


<div class="layui-form-item form-group" id="dr_row_demo">
    <label class="layui-form-label control-label col-md-2">演示地址：</label>
    <div class="col-md-9 layui-input-block"><input class="form-control layui-input" type="text" name="data[demo]" id="dr_demo" value="" style="width:400px;"  /></div>
</div>


 <div class="layui-form-item">
    <label class="layui-form-label">上传封面</label>
    <div class="layui-input-block">
    <button type="button" class="layui-btn" id="test3"><i class="layui-icon"></i>上传log</button>
        <input type="hidden" id="files" value="">
    </div>
  </div>


<div class="layui-form-item form-group" id="dr_row_price">
    <label class="layui-form-label control-label col-md-2">售价：</label>
    <div class="col-md-9 layui-input-block"><div class="layui-input-inline"><input type="text" class="form-control layui-input" id="dr_div_price" style="width:100%;" name="data[price]" value="" /></div><span class="help-block layui-form-mid layui-word-aux" id="dr_price_tips">积分 ，不填写或者0为免费</span></div>
</div>


</div>
			<div class="layui-form-item layui-input-block">
					<button type="submit" class="layui-btn" id="button" lay-submit><i class="layui-icon">&#xe609;</i>立即发布</button>
				</div>
			</form>
    	</div>
	</div>
</div>
</div>
<script type="text/javascript" src="/static/index/Scripts/layui.all.js"></script>
<script type="text/javascript">
  $("#button").click(function(){
     layer.msg("更新成功",{icon:1});
  });
</script>
  <script>

layui.use('upload', function(){
  var $ = layui.jquery
  ,upload = layui.upload;
  //指定允许上传的文件类型
  upload.render({ //允许上传的文件后缀
    elem: '#test3'
    ,url: "<?php echo url('/Admin/Address/file_upload'); ?>"
    ,accept: 'file' //普通文件
    ,exts: 'jpeg|png|jpg' //只允许上传压缩文件
    ,done: function(res){
      // alert(res);
      if(res.code){
 $('#files').val(res.file);

        layer.msg('上传成功');

       }else{
             layer.msg('上传失败,请重新上传');
       }
   }
});
});


</script>


</body>
</html>