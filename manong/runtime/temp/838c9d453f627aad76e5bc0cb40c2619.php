<?php /*a:1:{s:72:"/www/wwwroot/manong.yaho.cc/application/index/view/member/pluginadd.html";i:1547091063;}*/ ?>
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
          <li class="layui-this"><a href="/member/qiandao/">发布插件源码</a></li>
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
      


  



<div class="layui-form-item form-group" id="dr_row_yy">
    <label class="layui-form-label control-label col-md-2">功能属性：</label>
    <div class="col-md-9 layui-input-block"><div class="layui-input-inline"><label>
    <select  class="form-control layui-input" id="language_id"  >
    <option value="0" >功能属性</option>
       <?php foreach($language as $value): ?>
          <option value="<?php echo htmlentities($value['language']); ?>" ><?php echo htmlentities($value['language']); ?></option>
       <?php endforeach; ?>
    </select></label></div></div>
</div>



<div class="layui-form-item form-group" id="dr_row_title">
    <label class="layui-form-label control-label col-md-2"><font color="red">*</font>标题：</label>
    <div class="col-md-9 layui-input-block"><input class="form-control layui-input" type="text" id="goods_title" style="width:190px;" required="required" onblur="check_title();get_keywords('keywords');" /></div>
</div>


<div class="layui-form-item form-group" id="dr_row_keywords">
    <label class="layui-form-label control-label col-md-2">关键字：</label>
    <div class="col-md-9 layui-input-block"><div class="layui-input-inline"><input class="form-control layui-input" type="text"  id="label"  style="width:190px;"  data-role="tagsinput" /></div><span class="help-block layui-form-mid layui-word-aux" id="dr_keywords_tips">用【,】符号隔开，增加曝光率</span></div>
</div>


<div class="layui-form-item form-group" id="dr_row_demo">
    <label class="layui-form-label control-label col-md-2">演示地址：</label>
    <div class="col-md-9 layui-input-block"><input class="form-control layui-input" type="text"  id="goods_video" style="width:190px;"  /></div>
</div>




<div class="layui-form-item">
    <label class="layui-form-label">上传源码</label>
    <div class="layui-input-block">
    <button type="button" class="layui-btn layui-btn-primary" id="test4"><i class="layui-icon"></i>只允许压缩文件</button>&nbsp;<i>如附件大于50M，请上传网盘下载地址</i>
    <input type="hidden" id="files2" value="">
    </div>
</div>



<div class="layui-form-item">
    <label class="layui-form-label">封面主图</label>
    <div class="layui-input-block">
    <button type="button" class="layui-btn" id="test3" style="width: 127px;"><i class="layui-icon"></i>上传封面</button>
        <input type="hidden" id="files">
    </div>
</div>




<div class="layui-form-item">
    <label class="layui-form-label">演示图片</label>
  <button type="button" class="layui-btn" id="te1" >上传图片</button>
  <button type="button" class="layui-btn" id="te2" style="margin-left:10px">上传图片</button>
  <button type="button" class="layui-btn" id="te3"  style="margin-left:10px">上传图片</button>
  <div class="layui-upload-list">
    <img class="layui-upload-img" id="img1" style="width:93px;height:93px;margin-left:109px">
    <input type="hidden" id="file1">
    <img class="layui-upload-img" id="img2" style="width:93px;height:93px;margin-left:10px">
    <input type="hidden" id="file2">
    <img class="layui-upload-img" id="img3" style="width:93px;height:93px;margin-left:10px">
    <input type="hidden" id="file3">
    <!-- <p id="demoText"></p> -->
  </div>
</div>   
  



   <div class="layui-form-item">
    <label class="layui-form-label">内容简介</label>
    <div class="layui-input-block">
         <textarea name="content" rows="2" cols="20" id="content" style="height:100px;width:723px;"></textarea>
    </div>
  </div>



   <div class="layui-form-item">
    <label class="layui-form-label">详细介绍</label>
    <div class="layui-input-block">
          <script id="editor" type="text/plain"  name="editors" style="width:723px;height:200px;"></script>
    </div>
  </div>




<div class="layui-form-item form-group" id="dr_row_price">
    <label class="layui-form-label control-label col-md-2">售价：</label>
    <div class="col-md-9 layui-input-block"><div class="layui-input-inline"><input type="text" class="form-control layui-input" id="price" style="width:100%;"/></div><span class="help-block layui-form-mid layui-word-aux" id="dr_price_tips">积分 ，0为免费</span></div>
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
          //系统品牌
          var brand_id=$("#brand_id").val();
          //语言类
          var language_id=$("#language_id").val();
          //数据库类
          var database_id=$("#database_id").val();
          //演示地址
          var goods_video=$("#goods_video").val();
          //内容简介
          var desc=$("#content").val();
          //详细内容
          var content = ue.getContent();
          //上传源码地址
          var files2=$("#files2").val();
          //封面主图
          var files=$("#files").val();
          //演示图片1
          var file1=$("#file1").val();
          //演示图片2
          var file2=$("#file2").val();
          //演示图片3
          var file3=$("#file3").val();
          //售价
          var price=$("#price").val();
          if(cate_id==0){
               layer.msg("请选择栏目分类",{icon:2,time:1000});
               return false;
          }
          if(language_id==0){
               layer.msg("请选择功能属性",{icon:2,time:1000});
               return false;
          }
          if(goods_title==0){
               layer.msg("请填写标题",{icon:2,time:1000});
               return false;
          }
          if(desc==""){
               layer.msg("请输入简述",{icon:2,time:1000});
               return false;
          }
          if(files2==0){
               layer.msg("请上传源码",{icon:2,time:1000});
               return false;
          }
          if(content==""){
               layer.msg("请输入详细介绍",{icon:2,time:1000});
               return false;
          }
          if(files==0){
               layer.msg("请上传封面图片",{icon:2,time:1000});
               return false;
          }
            if(file1==""){
               layer.msg("演示图片不少于3张",{icon:2,time:1000});
               return false;
          }
          if(file2==""){
               layer.msg("演示图片不少于3张",{icon:2,time:1000});
               return false;
          }
          if(file3==""){
               layer.msg("演示图片不少于3张",{icon:2,time:1000});
               return false;
          }
          if(price==""){
               layer.msg("请填写积分",{icon:2,time:1000});
               return false;
          }
          //ajax
          $.ajax({
                  url: "<?php echo url('/Index/Member/plugininsert'); ?>",
                  type: "post",
                  async : true,
                  data: {goods_title:goods_title,label:label,cate_id:cate_id,brand_id:brand_id,language_id:language_id,database_id:database_id,goods_video:goods_video,content:content,files2:files2,files:files,desc:desc,price:price,file1:file1,file2:file2,file3:file3},
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

<!--压缩文件上传-->
<script>
    layui.use('upload', function(){
      var $ = layui.jquery
      ,upload = layui.upload;
      //指定允许上传的文件类型
     upload.render({ //允许上传的文件后缀
        elem: '#test4'
        ,url: "<?php echo url('/index/Member/file_upload'); ?>"
        ,accept: 'file' //普通文件
        ,exts: 'zip|rar|7z' //只允许上传压缩文件
        ,done: function(res){
          if(res.code){
                $('#files2').val(res.file);
                layer.msg('上传成功');
           }else{
                 layer.msg('上传失败,请重新上传');
           }
        }
      });
    });
</script>


<!--多图片上传-->
<script>
    layui.use('upload', function(){
      var $ = layui.jquery
      ,upload = layui.upload;
  //普通图片上传
  var uploadInst = upload.render({
    elem: '#te1'
    ,url: "<?php echo url('/index/Member/file_upload'); ?>"
    ,before: function(obj){
      //预读本地文件示例，不支持ie8
      obj.preview(function(index, file, result){
        $('#img1').attr('src', result); //图片链接（base64）
      });
    }
    ,done: function(res){
      //上传成功
       $('#file1').val(res.file);

    }
    ,error: function(){
      //演示失败状态，并实现重传
      var demoText = $('#demoText');
      demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
      demoText.find('.demo-reload').on('click', function(){
        uploadInst.upload();
      });
    }
  });
  
    });
</script>
<script>
        layui.use('upload', function(){
      var $ = layui.jquery
      ,upload = layui.upload;
  //普通图片上传
  var uploadInst = upload.render({
    elem: '#te2'
    ,url: "<?php echo url('/index/Member/file_upload'); ?>"
    ,before: function(obj){
      //预读本地文件示例，不支持ie8
      obj.preview(function(index, file, result){
        $('#img2').attr('src', result); //图片链接（base64）
      });
    }
    ,done: function(res){
      //上传成功
       $('#file2').val(res.file);
    }
    ,error: function(){
      //演示失败状态，并实现重传
      var demoText = $('#demoText');
      demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
      demoText.find('.demo-reload').on('click', function(){
        uploadInst.upload();
      });
    }
  });
  
    });
</script>
<script>
            layui.use('upload', function(){
      var $ = layui.jquery
      ,upload = layui.upload;
  //普通图片上传
  var uploadInst = upload.render({
    elem: '#te3'
    ,url: "<?php echo url('/index/Member/file_upload'); ?>"
    ,before: function(obj){
      //预读本地文件示例，不支持ie8
      obj.preview(function(index, file, result){
        $('#img3').attr('src', result); //图片链接（base64）
      });
    }
    ,done: function(res){
      console.log(res);
      //上传成功
       $('#file3').val(res.file);
    }
    ,error: function(){
      //演示失败状态，并实现重传
      var demoText = $('#demoText');
      demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
      demoText.find('.demo-reload').on('click', function(){
        uploadInst.upload();
      });
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
