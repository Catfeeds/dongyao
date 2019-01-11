<?php /*a:2:{s:82:"C:\Users\Dongyao001\Desktop\manong\application\store\view\goods_language\form.html";i:1544938462;s:77:"C:\Users\Dongyao001\Desktop\manong\application\admin\view\public\content.html";i:1534329860;}*/ ?>
<!-- 右则内容区域 开始 -->

<div class="layui-card">
    <!--<?php if(!(empty($title) || (($title instanceof \think\Collection || $title instanceof \think\Paginator ) && $title->isEmpty()))): ?>-->
    <div class="layui-header notselect">
        <div class="pull-left"><span><?php echo htmlentities($title); ?></span></div>
        <div class="pull-right margin-right-15 nowrap"></div>
    </div>
    <!--<?php endif; ?>-->
    <div class="layui-card-body">
<form autocomplete="off" onsubmit="return false;" action="<?php echo request()->url(); ?>" data-auto="true" method="post" class='form-horizontal layui-form padding-top-20'>

    <div class="form-group">
        <label class="col-sm-2 control-label">语言名称</label>
        <div class='col-sm-8'>
            <input autofocus name="language" value='<?php echo htmlentities((isset($vo['language']) && ($vo['language'] !== '')?$vo['language']:"")); ?>' required="required" title="请输入语言名称" placeholder="请输入语言名称" class="layui-input">
        </div>
    </div>

<!--     <div class="form-group">
        <label class="col-sm-2 control-label label-required">品牌图片</label>
        <div class='col-sm-8'>
            <table class="layui-table background-item margin-none" lay-size="sm" lay-skin="nob">
                <thead>
                <tr>
                    <td>品牌LOGO</td>
                    <td>品牌图片</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-top" style="width:100px">
                        <input type="hidden" name="brand_logo" value="<?php echo htmlentities((isset($vo['brand_logo']) && ($vo['brand_logo'] !== '')?$vo['brand_logo']:'')); ?>">
                        <script>$('[name=brand_logo]').uploadOneImage()</script>
                    </td>
                    <td class="text-top">
                        <input type="hidden" name="brand_cover" value="<?php echo htmlentities((isset($vo['brand_cover']) && ($vo['brand_cover'] !== '')?$vo['brand_cover']:'')); ?>">
                        <script>$('[name=brand_cover]').uploadOneImage()</script>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
 -->
  <!--   <div class="form-group">
        <label class="col-sm-2 control-label">品牌描述</label>
        <div class='col-sm-8'>
            <textarea placeholder="请输入品牌描述" title="请输入品牌描述" class="layui-textarea" name="brand_desc"><?php echo htmlentities((isset($vo['brand_desc']) && ($vo['brand_desc'] !== '')?$vo['brand_desc']:"")); ?></textarea>
        </div>
    </div> -->

  <!--   <div class="form-group">
        <label class="col-sm-2 control-label">品牌内容</label>
        <div class='col-sm-8'>
            <textarea name="brand_detail"><?php echo (isset($vo['brand_detail']) && ($vo['brand_detail'] !== '')?$vo['brand_detail']:''); ?></textarea>
        </div>
    </div> -->

    <div class="hr-line-dashed"></div>

    <div class="col-sm-7 col-sm-offset-2">
        <div class="layui-form-item text-center">
            <?php if(!empty($vo['id'])): ?><input type="hidden" name="id" value="<?php echo htmlentities($vo['id']); ?>"><?php endif; ?>
            <button class="layui-btn" type="submit">保存配置</button>
            <button class="layui-btn layui-btn-danger" type='button' onclick="window.history.back()">取消编辑</button>
        </div>
    </div>

    <script>window.form.render();</script>

    <script>
        /*! 实例富文本编辑器  */
        // require(['ckeditor'], function () {
        //     window.createEditor('[name="brand_detail"]', {height: 500});
        // });
    </script>
    <style>
        .background-item {
            padding: 15px;
            background: #efefef;
        }

        .background-item thead tr {
            background: #e0e0e0
        }
    </style>
</form>
</div>
</div>

<!-- 右则内容区域 结束 -->