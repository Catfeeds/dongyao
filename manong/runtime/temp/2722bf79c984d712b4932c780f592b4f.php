<?php /*a:2:{s:66:"/www/wwwroot/toupiao.yaho.cc/application/vote/view/goods/form.html";i:1537951288;s:71:"/www/wwwroot/toupiao.yaho.cc/application/admin/view/public/content.html";i:1534329860;}*/ ?>
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

    <!--<?php if(!empty($brands)): ?>-->

    <!--<?php endif; ?>-->

    <!--<?php if(!empty($cates)): ?>-->

    <!--<?php endif; ?>-->

   <!--  <div class="form-group">
        <label class="col-sm-2 control-langbel">用户名</label>
        <div class='col-sm-8'>
            <input name="username" required value="<?php echo htmlentities((isset($vo['username']) && ($vo['username'] !== '')?$vo['username']:'')); ?>" class="layui-input" title="请输入用户名" placeholder="请输入用户名">
        </div>
    </div>
 -->



    <div class="form-group">
        <label class="col-sm-2 control-label label-required">用户头像</label>
        <div class='col-sm-8'>
            <table class="layui-table background-item margin-none" lay-size="sm" lay-skin="nob">
                <thead>
                <tr>
                    <td>头像</td>
                    <!-- <td>头像</td> -->
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-top" style="width:100px">
                        <input type="hidden" name="goods_logo" value="<?php echo htmlentities((isset($vo['goods_logo']) && ($vo['goods_logo'] !== '')?$vo['goods_logo']:'')); ?>">
                    </td>
                   <!--  <td class="text-top">
                        <input type="hidden" name="goods_image" value="<?php echo htmlentities((isset($vo['goods_image']) && ($vo['goods_image'] !== '')?$vo['goods_image']:'')); ?>">
                    </td> -->
                </tr>
                </tbody>
            </table>
        </div>
    </div>



    <div class="form-group">
        <label class="col-sm-2 control-label">名称</label>
        <div class='col-sm-8'>
            <input name="babyname" required value="<?php echo htmlentities((isset($vo['babyname']) && ($vo['babyname'] !== '')?$vo['babyname']:'')); ?>" class="layui-input" title="请输入妈咪名称" placeholder="请输入妈咪名称">
        </div>
    </div>


   <!--  <div class="form-group">
        <label class="col-sm-2 control-label">电话</label>
        <div class='col-sm-8'>
            <input name="phone" required value="<?php echo htmlentities((isset($vo['phone']) && ($vo['phone'] !== '')?$vo['phone']:'')); ?>" class="layui-input" title="请输入电话号码" placeholder="请输入电话号码">
        </div>
    </div>

 -->
   <!--  <div class="form-group">
        <label class="col-sm-2 control-label">年龄</label>
        <div class='col-sm-8'>
            <input name="age" required value="<?php echo htmlentities((isset($vo['age']) && ($vo['age'] !== '')?$vo['age']:'')); ?>" class="layui-input" title="请输入年龄" placeholder="请输入年龄">
        </div>
    </div>
 -->



    <div class="form-group">
        <label class="col-sm-2 control-label">项目</label>
        <div class='col-sm-8'>
            <input name="song" required value="<?php echo htmlentities((isset($vo['song']) && ($vo['song'] !== '')?$vo['song']:'')); ?>" class="layui-input" title="请输入歌曲" placeholder="请输入歌曲">
        </div>
    </div>


    

     <div class="form-group">
        <label class="col-sm-2 control-label">票数</label>
        <div class='col-sm-8'>
            <input name="votes" required value="<?php echo htmlentities((isset($vo['votes']) && ($vo['votes'] !== '')?$vo['votes']:'')); ?>" class="layui-input" title="请输入票数" placeholder="请输入票数">
        </div>
    </div>




    <div class="form-group">
        <label class="col-sm-2 control-label">区域</label>
        <div class='col-sm-8'>
            <input name="address" required value="<?php echo htmlentities((isset($vo['address']) && ($vo['address'] !== '')?$vo['address']:'')); ?>" class="layui-input" title="请输入地区" placeholder="请输入省">
        </div>
    </div>
   <!--   <div class="form-group">
        <label class="col-sm-2 control-label">地址(市)</label>
        <div class='col-sm-8'>
            <input name="city" required value="<?php echo htmlentities((isset($vo['city']) && ($vo['city'] !== '')?$vo['city']:'')); ?>" class="layui-input" title="请输入市" placeholder="请输入市">
        </div>
    </div>
 -->



    <div class="form-group">
        <label class="col-sm-2 control-label">参赛宣言</label>
        <div class='col-sm-8'>
            <input name="detailed" required value="<?php echo htmlentities((isset($vo['detailed']) && ($vo['detailed'] !== '')?$vo['detailed']:'')); ?>" class="layui-input" title="请输入参赛宣言" placeholder="请输入参赛宣言">
        </div>
    </div>







    <!-- 普通商品及积分商品 开始 -->

    <!-- 普通商品及积分商品 结束 -->

    <div class="form-group">
        <label class="col-sm-2 control-label">视频展示</label>
        <div class='col-sm-8'>
            <!-- <input name="goods_video" required value="<?php echo htmlentities((isset($vo['goods_video']) && ($vo['goods_video'] !== '')?$vo['goods_video']:'')); ?>" class="layui-input" title="请输入视频链接" placeholder="请输入视频链接"> -->
             <button type="button" class="layui-btn" id="test4"><i class="layui-icon"></i>上传视频</button>
        <input type="hidden"  id="video" name="goods_video" value="<?php echo htmlentities((isset($vo['video']) && ($vo['video'] !== '')?$vo['video']:'')); ?>">&nbsp;<b>提示:限制100M内</b>
        
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
    ,url: "<?php echo url('/vote/Goods/file_upload1'); ?>"
    ,accept: 'video' //普通文件
    ,done: function(res){
      if(res.code){
 $('#video').val(res.file);

        layer.msg('上传成功');

       }else{
             layer.msg('上传失败,请重新上传');
       }
   }
});
 
});

</script>
<script>
    require(['jquery', 'ckeditor', 'angular'], function () {
        window.form.render();
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

            // 获取规格选择状态
            function getSpecStatus(name, spec) {
                for (var i in specdata) {
                    if (specdata[i].goods_spec.indexOf(name + ':' + spec) > -1) {
                        return true;
                    }
                }
                return false;
            }

            // 数据处理
            var DataArray = new function () {
                // 编译生成规格数据
                this.render = function (data) {
                    var specs = [], list = [];
                    for (var i in data) {
                        specs = this.joinArray(data[i], specs, i);
                    }
                    (specs.length < 1) && (specs = ['default:default']);
                    for (var i in specs) {
                        var specName = specs[i];
                        var specTitle = (specName === 'default:default') ? '默认规格' : specName.replace(/,/ig, ';').replace(/:/ig, ':');
                        var specAttrs = [], lines = specTitle.split(';');
                        for (var j in lines) {
                            var line = lines[j].split(':');
                            specAttrs.push({name: line[0], value: (line[1] || '').split(',')});
                        }
                        list.push({
                            spec_name: specName, spec_title: specTitle, spec_attrs: specAttrs,
                            market_price: parseFloat(this.getData(specs[i], 'market_price') || '0').toFixed(2),
                            selling_price: parseFloat(this.getData(specs[i], 'selling_price') || '0').toFixed(2),
                            status: this.getData(specName, 'status') !== '0'
                        });
                    }
                    return list;
                };
                // 读取规格默认数据
                this.getData = function (spec, field) {
                    for (var i in specdata) {
                        if (specdata[i].goods_spec === spec) {
                            return specdata[i][field] || '0';
                        }
                    }
                    return '1';
                };
                // 数组交叉计算
                this.joinArray = function (item, list, pk) {
                    var _list = [];
                    for (var i in item) {
                        if (list.length > 0) {
                            for (var j in list) {
                                _list.push(list[j] + ',' + pk + ':' + item[i].value);
                            }
                        } else {
                            _list.push(pk + ':' + item[i].value);
                        }
                    }
                    return _list;
                }
            };
        }
    });
</script>
</div>
</div>

<!-- 右则内容区域 结束 -->