<?php /*a:2:{s:80:"C:\Users\Administrator\Desktop\toupiao\application\vote\view\goods\setupthe.html";i:1537931757;s:81:"C:\Users\Administrator\Desktop\toupiao\application\admin\view\public\content.html";i:1534329860;}*/ ?>
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


    <!--<?php if(!empty($brands)): ?>-->

    <!--<?php endif; ?>-->

    <!--<?php if(!empty($cates)): ?>-->

    <!--<?php endif; ?>-->
    <h3>报名设置</h3>
    <br/>
   <hr style="border:0.5px solid gray">
    <br/>
    <div class="form-group">
        <label class="col-sm-2 control-label">报名时间(开始)</label>
       <div class="layui-form-item layui-inline">
        <div class="layui-input-inline">
            <input name="bktime" id="create_at" value="<?php echo htmlentities($info[0]['bktime']); ?>" placeholder="请选择发布时间" class="layui-input">
        </div>
    </div>
    </div>


     <div class="form-group">
        <label class="col-sm-2 control-label">报名时间(结束)</label>
       <div class="layui-form-item layui-inline">
        <div class="layui-input-inline">
            <input name="bjtime" id="create_at1" value="<?php echo htmlentities($info[0]['bjtime']); ?>" placeholder="请选择发布时间" class="layui-input">
        </div>
    </div>
    </div>


     <div class="form-group">
        <label class="col-sm-2 control-label">投票时间(开始)</label>
       <div class="layui-form-item layui-inline">
        <div class="layui-input-inline">
            <input name="tktime" id="create_at2" value="<?php echo htmlentities($info[0]['tktime']); ?>" placeholder="请选择发布时间" class="layui-input">
        </div>
    </div>
    </div>


     <div class="form-group">
        <label class="col-sm-2 control-label">投票时间(结束)</label>
       <div class="layui-form-item layui-inline">
        <div class="layui-input-inline">
            <input name="tjtime" id="create_at3" value="<?php echo htmlentities($info[0]['tjtime']); ?>" placeholder="请选择发布时间" class="layui-input">
        </div>
    </div>
    </div>




     <div class="form-group">
        <label class="col-sm-2 control-label">公布时间(获奖)</label>
       <div class="layui-form-item layui-inline">
        <div class="layui-input-inline">
            <input name="tjtime" id="create_at4" value="<?php echo htmlentities($info[0]['gbtime']); ?>" placeholder="请选择发布时间" class="layui-input">
            
        </div>
    </div>
    </div>


     <div class="form-group">
        <label class="col-sm-2 control-label">公布时间(提示)</label>
       <div class="layui-form-item layui-inline">
        <div class="layui-input-inline">
            <input name="gongtime" style="width:300px" id="create_at5" value="<?php echo htmlentities($info[0]['gongtime']); ?>" placeholder="请选择发布时间" class="layui-input">
            
        </div>
    </div>
    </div>






    <div class="hr-line-dashed"></div>

    <div class="col-sm-7 col-sm-offset-2">
        <div class="layui-form-item text-center">
           <a title="审核" class="layui-btn" onclick="member_statusedit(this,'<?php echo htmlentities($info[0]['id']); ?>')" href="javascript:;">提交</a>
            <!-- <button class="layui-btn" id="submit">保存配置</button> -->
        </div>
    </div>


<script>
    (function () {
        window.form.render();
        window.laydate.render({range: false, type: 'datetime',elem: '#create_at'});
    })();

      (function () {
        window.form.render();
        window.laydate.render({range: false, type: 'datetime',elem: '#create_at1'});
    })();

      (function () {
        window.form.render();
        window.laydate.render({range: false, type: 'datetime',elem: '#create_at2'});
    })();

      (function () {
        window.form.render();
        window.laydate.render({range: false, type: 'datetime',elem: '#create_at3'});
    })();

      (function () {
        window.form.render();
        window.laydate.render({range: false, type: 'datetime',elem: '#create_at4'});
    })();
      (function () {
        window.form.render();
        window.laydate.render({range: true,elem: '#create_at5'});
    })();
</script>


 <script>
      //删除的方法
         function member_statusedit(obj,id){
            var bktime=$('#create_at').val();
            var bjtime=$('#create_at1').val();
            var tktime=$('#create_at2').val();
            var tjtime=$('#create_at3').val();
            var gbtime=$('#create_at4').val();
            var gongtime=$('#create_at5').val();
                  $.ajax({
                        url: "<?php echo url('/vote/Goods/setuptheupdate'); ?>",
                        type: "get",
                        async : true,
                        data: {id:id,bktime:bktime,bjtime:bjtime,tktime:tktime,tjtime:tjtime,gbtime:gbtime,gongtime:gongtime},
                        dataType:'json',
                        success:function(data){
                            if(data==1)
                            { 
                             layer.msg("修改成功",{icon:1,time:1000});

                            }else
                            {
                             layer.msg("修改失败",{icon:2,time:1000});
                            }
                    
                 }
            });
         
        }
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