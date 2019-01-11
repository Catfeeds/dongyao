<?php /*a:1:{s:78:"C:\Users\Dongyao001\Desktop\manong\application\store\view\goods_spec\form.html";i:1544935091;}*/ ?>
<form autocomplete="off" class="layui-form layui-box" style='padding:25px 30px 20px 0' method="post" id="spec-form">

    <div class="layui-form-item">
        <label class="layui-form-label">规格名称</label>
        <div class="layui-input-block">
            <input name="spec_title" ng-model="spec_title" required title="请输入规格名称" placeholder="请输入规格名称" class="layui-input">
        </div>
    </div>
<!-- 
    <div class="layui-form-item">
        <label class="layui-form-label label-required">规格参数</label>
        <div class="layui-input-block">
            <textarea class="hide" ng-model="spec_param"></textarea>
            <div class="param-table-list">
                <table class="layui-table margin-none">
                    <tbody class="param-table-list">
                    <tr ng-repeat="x in paramList" class="transition">
                        <td class="param-input-td one nowrap">
                            <input required placeholder="分组" title="请输入属性分组" ng-model="x.name" class="layui-input">
                        </td>
                        <td class="param-input-td two nowrap">
                            <input required placeholder="名称" title="请输入属性名称" ng-model="x.value" class="layui-input">
                        </td>
                        <td class="param-input-td thr nowrap">
                            <a ng-if="$index<1" class="color-desc">删除</a>
                            <a ng-if="$index>0" ng-click="delParam($index)">删除</a>
                            <a ng-if="$index<1" class="color-desc">上移</a>
                            <a ng-if="$index>0" ng-click="moveToUp($index)">上移</a>
                            <a ng-if="$index+1<paramList.length" ng-click="moveToDn($index)">下移</a>
                            <a ng-if="$index+1>=paramList.length" class="color-desc">下移</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <table class="layui-table">
                <tr>
                    <td class="text-center notselect padding-none border-none">
                        <button type="button" class="layui-btn full-width layui-btn-primary" ng-click="addParam()">添加属性</button>
                    </td>
                </tr>
            </table>
            <p class="help-block">设置多个内容值时请使用空格键或英文逗号隔开。</p>
        </div>
    </div> -->

<!--     <div class="layui-form-item">
        <label class="layui-form-label">规格描述</label>
        <div class="layui-input-block">
            <textarea placeholder="请输入规格描述" title="请输入规格描述" class="layui-textarea" ng-model="spec_desc" name="spec_desc"></textarea>
        </div>
    </div> -->

    <!-- <div class="hr-line-dashed"></div> -->

    <div class="layui-form-item text-center">
        <?php if(isset($vo['id'])): ?><input type='hidden' value='<?php echo htmlentities($vo['id']); ?>' name='id'/><?php endif; ?>
        <button class="layui-btn" type='submit'>保存数据</button>
        <button class="layui-btn layui-btn-danger" type='button' data-confirm="确定要取消编辑吗？" data-close>取消编辑</button>
    </div>

    <script>
        require(['angular'], function () {
            // 应用创建与初始化
            var app = angular.module("SpecForm", []).run(callback);
            angular.bootstrap(document.getElementById('spec-form'), [app.name]);

            // 应用事件处理
            function callback($rootScope) {
                // 属性参数
                $rootScope.paramList = filterParamList(JSON.parse('<?php echo (isset($vo['spec_param']) && ($vo['spec_param'] !== '')?$vo['spec_param']:"[]"); ?>') || []);
                $rootScope.spec_title = '<?php echo htmlentities((isset($vo['spec_title']) && ($vo['spec_title'] !== '')?$vo['spec_title']:"")); ?>';
                $rootScope.spec_desc = '<?php echo htmlentities((isset($vo['spec_desc']) && ($vo['spec_desc'] !== '')?$vo['spec_desc']:"")); ?>';

                // 删除菜单
                $rootScope.delParam = function (x) {
                    var dialogIndex = $.msg.confirm('确定移除参数吗？', function () {
                        $rootScope.$apply(function () {
                            var tmp = [];
                            for (var i in $rootScope.paramList) {
                                (parseInt(i) !== parseInt(x)) && tmp.push($rootScope.paramList[i]);
                            }
                            $rootScope.paramList = filterParamList(tmp);
                            $.msg.close(dialogIndex);
                        });
                    });
                };

                // 添加参数
                $rootScope.addParam = function () {
                    $rootScope.paramList.push({name: '', value: ''});
                    setTimeout(function () {
                        $('.param-table-list').scrollTop('10000')
                    }, 10);
                };

                // 属性参数下移
                $rootScope.moveToDn = function (index) {
                    var tmp = [], cur = $rootScope.paramList[index];
                    if (index > $rootScope.paramList.length - 2) {
                        return false;
                    }
                    for (var i in $rootScope.paramList) {
                        (parseInt(i) !== parseInt(index)) && tmp.push($rootScope.paramList[i]);
                        (parseInt(i) === parseInt(index) + 1) && tmp.push(cur);
                    }
                    $rootScope.paramList = tmp;
                };

                // 属性参数上移
                $rootScope.moveToUp = function (index) {
                    var tmp = [], cur = $rootScope.paramList[index];
                    if (index < 1) {
                        return false;
                    }
                    for (var i in $rootScope.paramList) {
                        (parseInt(i) === parseInt(index) - 1) && tmp.push(cur);
                        (parseInt(i) !== parseInt(index)) && tmp.push($rootScope.paramList[i]);
                    }
                    $rootScope.paramList = tmp;
                };

                // 表单验证
                $('#spec-form').vali(function (ret) {
                    try {
                        var spect_param = [];
                        for (var i in $rootScope.paramList) {
                            spect_param.push({
                                name: $rootScope.paramList[i].name,
                                value: $rootScope.paramList[i].value
                            });
                        }
                        var data = {
                            spec_title: $rootScope.spec_title || '',
                            spec_desc: $rootScope.spec_desc || '',
                            spec_param: JSON.stringify(spect_param)
                        };
                        var id = '<?php echo htmlentities((isset($vo['id']) && ($vo['id'] !== '')?$vo['id']:0)); ?>';
                        id > 0 && (data.id = id);
                        $.form.load('<?php echo request()->url(); ?>', data, 'post');
                    } catch ($e) {
                        console.log($e);
                    }
                    return false;
                });
            }

            // 过滤规格参数列表
            function filterParamList(list) {
                return list.length < 1 ? [{name: '', value: ''}] : list;
            }
        });
    </script>

    <style>
        .param-table-list {
            overflow: auto;
            max-height: 200px;
            position: relative;
            overflow-y: scroll;
        }

        .param-input-td {
            position: relative;
            padding: 0 !important;
        }

        .param-input-td.one {
            width: 30%;
        }

        .param-input-td.thr {
            width: 20%;
            text-align: center;
        }

        .param-input-td.one:before {
            content: '分组'
        }

        .param-input-td.two:before {
            content: '规格'
        }

        .param-input-td:before {
            margin: 4px;
            width: 40px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            position: absolute;
            background: #e2e2e2;
        }

        .param-input-td input {
            padding-left: 50px;
            border: none !important;
        }
    </style>
</form>
