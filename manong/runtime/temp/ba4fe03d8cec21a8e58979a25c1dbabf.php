<?php /*a:2:{s:68:"/www/wwwroot/manong.yaho.cc/application/store/view/config/index.html";i:1546997068;s:70:"/www/wwwroot/manong.yaho.cc/application/admin/view/public/content.html";i:1534329860;}*/ ?>
<!-- 右则内容区域 开始 -->

<style>

    .background-item {
        padding: 15px;
        background: #efefef;
    }

    .background-item thead tr {
        background: #e0e0e0
    }

    .price-input-td {
        padding: 0 !important;
    }

    .price-input-td:before {
        margin: 4px;
        width: 35px;
        height: 22px;
        content: "金额";
        line-height: 20px;
        text-align: center;
        position: absolute;
        background: #e2e2e2;
    }

    .price-input-td input {
        height: 30px;
        padding-left: 50px;
        border: none !important;
    }
</style>

<div class="layui-card">
    <!--<?php if(!(empty($title) || (($title instanceof \think\Collection || $title instanceof \think\Paginator ) && $title->isEmpty()))): ?>-->
    <div class="layui-header notselect">
        <div class="pull-left"><span><?php echo htmlentities($title); ?></span></div>
        <div class="pull-right margin-right-15 nowrap"></div>
    </div>
    <!--<?php endif; ?>-->
    <div class="layui-card-body">
<form autocomplete="off" onsubmit="return false;" action="<?php echo request()->url(); ?>" data-auto="true" method="post" id="ProductForm" class='form-horizontal layui-form padding-top-20'>




    <div class="form-group">
        <label class="col-sm-2 control-label">产品名称</label>
        <div class='col-sm-8'>
            <input name="goods_title" required value="<?php echo htmlentities((isset($vo['goods_title']) && ($vo['goods_title'] !== '')?$vo['goods_title']:'')); ?>" class="layui-input" title="请输入产品名称" placeholder="请输入产品名称">
        </div>
    </div>

<input type="hidden" name="status" value="<?php echo htmlentities((isset($vo['status']) && ($vo['status'] !== '')?$vo['status']:"")); ?>">



  <div class="form-group">
        <label class="col-sm-2 control-label">下载次数</label>
        <div class='col-sm-8'>
            <input name="downloads" required value="<?php echo htmlentities((isset($vo['downloads']) && ($vo['downloads'] !== '')?$vo['downloads']:'')); ?>" class="layui-input" title="请输入下载次数" placeholder="默认0次">
        </div>
    </div>


<div class="form-group">
        <label class="col-sm-2 control-label">售价(积分)</label>
        <div class='col-sm-8'>
            <input name="price" required value="<?php echo htmlentities((isset($vo['price']) && ($vo['price'] !== '')?$vo['price']:'')); ?>" class="layui-input" title="请输入售价" placeholder="不填则视为免费">
        </div>
    </div>


<div class="form-group">
        <label class="col-sm-2 control-label">点击量</label>
        <div class='col-sm-8'>
            <input name="click" required value="<?php echo htmlentities((isset($vo['click']) && ($vo['click'] !== '')?$vo['click']:'')); ?>" class="layui-input" title="请输入点击量" placeholder="默认为0">
        </div>
    </div>


  <div class="form-group">
        <label class="col-sm-2 control-label">是否推荐</label>
        <div class='col-sm-8 text-top'>
            <select required class="layui-select full-width" name="recommend">
                <option selected value="2">否</option>
                <option value="1">是</option>
            </select>
        </div>
    </div>


   <div class="form-group">
        <label class="col-sm-2 control-label">上传源码</label>
        <div class='col-sm-8'>
            <!-- <input name="goods_video" required value="<?php echo htmlentities((isset($vo['goods_video']) && ($vo['goods_video'] !== '')?$vo['goods_video']:'')); ?>" class="layui-input" title="请输入视频链接" placeholder="请输入视频链接"> -->
           <!--   <button type="button" class="layui-btn" id="test4"><i class="layui-icon"></i>上传视频</button> -->
            <button type="button" class="layui-btn layui-btn-primary" id="test4"><i class="layui-icon"></i>只允许压缩文件</button>
        <input type="text"  id="video" name="file" value="<?php echo htmlentities((isset($vo['video']) && ($vo['video'] !== '')?$vo['video']:'')); ?>">&nbsp;<b>提示:限制100M内</b>
        
    </div>

</div>



   <!--  <?php if(!empty($tags)): ?>
    <div class="form-group">
        <label class="col-sm-2 control-label">关键字</label>
        <div class='col-sm-8'>
            <div class="background-item">
                <?php foreach($tags as $tag): ?>
                <label class="nowrap margin-right-10 line-height-18"> -->
                    <!--<?php if(isset($vo['tags_id']) && in_array($tag['id'],$vo['tags_id'])): ?>-->
                    <!-- <input type="checkbox" value="<?php echo htmlentities($tag['id']); ?>" name="tags_id[]" checked="checked" lay-ignore> -->
                    <!--<?php else: ?>-->
                    <!-- <input type="checkbox" value="<?php echo htmlentities($tag['id']); ?>" name="tags_id[]" lay-ignore> -->
                    <!--<?php endif; ?>-->
   <!--                  <?php echo htmlentities($tag['tags_title']); ?>
                </label>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
 -->
    <div class="form-group">
        <label class="col-sm-2 control-label label-required">产品封面</label>
        <div class='col-sm-8'>
            <table class="layui-table background-item margin-none" lay-size="sm" lay-skin="nob">
                <thead>
                <tr>
                    <td>产品封面</td>
                    <td>演示图片</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-top" style="width:100px">
                        <input type="hidden" name="goods_logo" value="<?php echo htmlentities((isset($vo['goods_logo']) && ($vo['goods_logo'] !== '')?$vo['goods_logo']:'')); ?>">
                    </td>
                    <td class="text-top">
                        <input type="hidden" name="goods_image" value="<?php echo htmlentities((isset($vo['goods_image']) && ($vo['goods_image'] !== '')?$vo['goods_image']:'')); ?>">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">产品描述</label>
        <div class='col-sm-8'>
            <textarea class="layui-textarea" name="goods_desc" placeholder="请输入产品描述"><?php echo htmlentities((isset($vo['goods_desc']) && ($vo['goods_desc'] !== '')?$vo['goods_desc']:'')); ?></textarea>
        </div>
    </div>

    <div class="hr-line-dashed"></div>

    <div class="col-sm-7 col-sm-offset-2">
        <div class="layui-form-item text-center">
            <?php if(!empty($vo['id'])): ?><input type="hidden" name="id" value="<?php echo htmlentities($vo['id']); ?>"><?php endif; ?>
            <button class="layui-btn" type="submit">保存配置</button>
            <button class="layui-btn layui-btn-danger" type='button' onclick="window.history.back()">取消编辑</button>
        </div>
    </div>

</form>

<script>
    layui.use('upload', function(){
  var $ = layui.jquery
  ,upload = layui.upload;
  //指定允许上传的文件类型


    upload.render({ //允许上传的文件后缀
    elem: '#test4'
    ,url: "<?php echo url('/store/Goods/file_upload1'); ?>"
    ,accept: 'file' //普通文件
    ,exts: 'zip|rar|7z' //只允许上传压缩文件
    ,done: function(res){
      if(res.code){
 $('#video').val(res.file);

        layer.msg('上传成功');

       }else{
             layer.msg('上传失败,请重新上传');
       }
    }
  });


//   upload.render({ //允许上传的文件后缀
//     elem: '#test4'
//     ,url: "<?php echo url('/vote/Goods/file_upload1'); ?>"
//     ,accept: 'video' //普通文件
//     ,done: function(res){
//       if(res.code){
//  $('#video').val(res.file);

//         layer.msg('上传成功');

//        }else{
//              layer.msg('上传失败,请重新上传');
//        }
//    }
// });
 
});

</script>
<script>
    require(['jquery', 'ckeditor', 'angular'], function () {
        window.form.render();
        window.createEditor('[name="goods_content"]', {height: 500});
        var app = angular.module("ProductForm", []).run(callback);
        angular.bootstrap(document.getElementById(app.name), [app.name]);

        function callback($rootScope) {
            // 绑定规格列表
            $rootScope.specs = [];
            // 规格默认数据
            var specdata = JSON.parse('<?php echo json_encode((isset($vo['list']) && ($vo['list'] !== '')?$vo['list']:[]),256); ?>');
            // 单图片上传处理
            $('#ProductForm [name="goods_logo"]').uploadOneImage();
            // 多图片上传处理
            $('#ProductForm [name="goods_image"]').uploadMultipleImage();
            // 规格显示切换
            $('#ProductForm').on('click', '[data-spec]', applySpecData);
            // 商品规格切换
            $('#ProductForm').on('change', '[name="spec_id"]', function () {
                var specs = eval(this.options[this.selectedIndex].getAttribute('data-param'));
                for (var i in specs) {
                    specs[i].param = [];
                    var values = specs[i].value.split(' ');
                    for (var j in values) {
                        specs[i].param.push({
                            name: specs[i].name, value: values[j],
                            checked: getSpecStatus(specs[i].name, values[j])
                        });
                    }
                }
                $rootScope.$apply(function () {
                    $rootScope.specs = specs;
                    setTimeout(applySpecData, 10);
                });
            }).find('[name="spec_id"]').trigger('change');

            // 规格属性切换
            function applySpecData() {
                var params = {};
                for (var i in $rootScope.specs) {
                    var isChecked = false;
                    for (var j in $rootScope.specs[i].param) {
                        if ($rootScope.specs[i].param[j].checked) {
                            isChecked = true;
                            var name = $rootScope.specs[i].param[j].name;
                            var value = $rootScope.specs[i].param[j].value;
                            (params[name] || (params[name] = [])).push({name: name, value: value});
                        }
                    }
                    if (!isChecked) {
                        $rootScope.specs[i].param[0].checked = true;
                        var name = $rootScope.specs[i].param[0].name;
                        var value = $rootScope.specs[i].param[0].value;
                        (params[name] || (params[name] = [])).push({name: name, value: value});
                    }
                }
                $rootScope.$apply(function () {
                    $rootScope.specdata = DataArray.render(params);
                });
            }


        }
    });
</script>
</div>
</div>

<!-- 右则内容区域 结束 -->