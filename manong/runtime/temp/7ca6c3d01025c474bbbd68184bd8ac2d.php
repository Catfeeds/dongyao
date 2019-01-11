<?php /*a:1:{s:76:"/www/wwwroot/manong.yaho.cc/application/index/view/member/technologyadd.html";i:1547090931;}*/ ?>
﻿  <?php echo widget("Last/header"); ?>
   <?php echo widget("Last/left"); ?>
   <!--百度编辑器-->
    <script type="text/javascript" charset="utf-8" src="/static/index/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/static/index/ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/static/index/ueditor/lang/zh-cn/zh-cn.js"></script>


<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
<div class="site-mobile-shade"></div><div class="fly-panel fly-panel-user" pad20>
  <div class="layui-tab layui-tab-brief" lay-filter="user">
        <ul class="layui-tab-title" id="LAY_mine">
          <li class="layui-this"><a href="/member/qiandao/">发布文章源码</a></li>
        </ul>
        <div class="layui-tab-content" style="padding: 20px 0;">
      <div class="layui-form-item">
            <label class="layui-form-label">栏目分类：</label>
            <div class="layui-input-inline">
            <select class='form-control layui-input' class="form-control layui-input" id='cate_id'>
                <option value='0' >选择分类</option>
              <?php foreach($cates as $value): ?>
                <option value="<?php echo htmlentities($value['id']); ?>" ><?php echo htmlentities($value['cate_title']); ?></option>
              <?php endforeach; ?>
            </select></div>
      </div>
      

  



<div class="layui-form-item form-group" id="dr_row_title">
    <label class="layui-form-label control-label col-md-2"><font color="red">*</font>标题：</label>
    <div class="col-md-9 layui-input-block"><input class="form-control layui-input" type="text" id="goods_title" style="width:190px;" required="required" onblur="check_title();get_keywords('keywords');" /></div>
</div>


<div class="layui-form-item form-group" id="dr_row_keywords">
    <label class="layui-form-label control-label col-md-2">关键字：</label>
    <div class="col-md-9 layui-input-block"><div class="layui-input-inline"><input class="form-control layui-input" type="text"  id="label"  style="width:190px;"  data-role="tagsinput" /></div><span class="help-block layui-form-mid layui-word-aux" id="dr_keywords_tips">用【,】符号隔开，增加曝光率</span></div>
</div>






<div class="layui-form-item">
    <label class="layui-form-label">封面主图</label>
    <div class="layui-input-block">
    <button type="button" class="layui-btn" id="test3" style="width: 127px;"><i class="layui-icon"></i>上传封面</button>
        <input type="hidden" id="files">
    </div>
</div>







   <div class="layui-form-item">
    <label class="layui-form-label">详细介绍</label>
    <div class="layui-input-block">
          <script id="editor" type="text/plain"  name="editors" style="width:723px;height:200px;"></script>
    </div>
  </div>




</div>
      <div class="layui-form-item layui-input-block">
          <button type="submit" class="layui-btn" id="button" lay-submit style="width: 127px;"><i class="layui-icon">&#xe609;</i>立即发布</button>
        </div>
      </div>
  </div>
</div>
</div>
<script type="text/javascript" src="/static/index/Scripts/layui.all.js"></script>
<script>
   $("#button").click(function(){
          //标题
          var goods_title=$("#goods_title").val();
          //关键字
          var label=$("#label").val();
          //栏目分类
          var cate_id=$("#cate_id").val();
          //详细内容
          var content = ue.getContent();
          //封面主图
          var files=$("#files").val();
          if(cate_id==0){
               layer.msg("请选择栏目分类",{icon:2,time:1000});
               return false;
          }
          if(goods_title==0){
               layer.msg("请填写标题",{icon:2,time:1000});
               return false;
          }
          if(files==0){
               layer.msg("请上传封面图片",{icon:2,time:1000});
               return false;
          }
          //ajax
          $.ajax({
                  url: "<?php echo url('/Index/Member/technologyinsert'); ?>",
                  type: "post",
                  async : true,
                  data: {goods_title:goods_title,label:label,cate_id:cate_id,content:content,files:files,},
                  dataType:'json',
                  success:function(data){
                   if(data==1)
                   { 
                      layer.alert("发布成功,等待审核", {icon: 6},function () {
                             window.location.href='/index/Member/mindex';
                      });
                   }else{
                     layer.msg("发布失败,重新发布",{icon:2,time:1000});
                      }
                 }
            });
        });
</script>
<!--建立编辑齐-->
<script type="text/javascript">
    var ue = UE.getEditor('editor');
</script>
<!--封面上传-->
<script>
      layui.use('upload', function(){
        var $ = layui.jquery
        ,upload = layui.upload;
        //指定允许上传的文件类型
        upload.render({ //允许上传的文件后缀
          elem: '#test3'
          ,url: "<?php echo url('/index/Member/file_upload'); ?>"
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

<script type="text/javascript">
    $(document).ready(function() {
        $('#left_69').parent().parent().addClass('layui-nav-itemed');
    });
</script>
<?php echo widget("Last/mfooter"); ?>