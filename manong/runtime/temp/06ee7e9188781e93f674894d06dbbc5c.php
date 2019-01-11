<?php /*a:1:{s:72:"C:\Users\Dongyao001\Desktop\manong\application\admin\view\menu\form.html";i:1534329860;}*/ ?>
<form autocomplete="off" class="layui-form layui-box modal-form-box" action="<?php echo request()->url(); ?>" data-auto="true" method="post">

    <div class="layui-form-item">
        <label class="layui-form-label">上级菜单</label>
        <div class="layui-input-block">
            <select name='pid' class='layui-select full-width' lay-ignore>
                <!--<?php foreach($menus as $menu): ?>-->
                <!--<?php if($menu['id'] == (isset($vo['pid']) && ($vo['pid'] !== '')?$vo['pid']:0)): ?>-->
                <option selected value='<?php echo htmlentities($menu['id']); ?>'><?php echo $menu['spl']; ?><?php echo htmlentities($menu['title']); ?></option>
                <!--<?php else: ?>-->
                <option value='<?php echo htmlentities($menu['id']); ?>'><?php echo $menu['spl']; ?><?php echo htmlentities($menu['title']); ?></option>
                <!--<?php endif; ?>-->
                <!--<?php endforeach; ?>-->
            </select>
            <p class="help-block color-desc"><b>必填</b>，请选择上级菜单或顶级菜单（目前最多支持三级菜单）</p>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">菜单名称</label>
        <div class="layui-input-block">
            <input type="text" name="title" value='<?php echo htmlentities((isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:"")); ?>' required="required" title="请输入菜单名称" placeholder="请输入菜单名称" class="layui-input">
            <p class="help-block color-desc"><b>必填</b>，请填写菜单名称（如：系统管理），建议字符不要太长，一般4-6个汉字</p>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">菜单链接</label>
        <div class="layui-input-block">
            <input type="text" onblur="(this.value === '') && (this.value = '#')" name="url" autocomplete="off" required="required" title="请输入菜单链接" placeholder="请输入菜单链接" value="<?php echo htmlentities((isset($vo['url']) && ($vo['url'] !== '')?$vo['url']:'#')); ?>" class="layui-input typeahead">
            <p class="help-block color-desc">
                <b>必填</b>，请填写系统节点（如：admin/user/index），节点加入权限管理时菜单才会自动隐藏，非规则内的不会隐藏；
                <br>正常情况下，在输入的时候会有自动提示。如果是上级菜单时，请填写"#"符号，不要填写地址或节点地址
            </p>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">链接参数</label>
        <div class="layui-input-block">
            <input type="text" name="params" autocomplete="off" title="请输入链接参数" placeholder="请输入链接参数" value="<?php echo htmlentities((isset($vo['params']) && ($vo['params'] !== '')?$vo['params']:'')); ?>" class="layui-input">
            <p class="help-block color-desc"><b>可选</b>，设置菜单链接的GET访问参数（如：name=1&age=3）</p>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">菜单图标</label>
        <div class="layui-input-block">
            <div class="layui-input-inline" style='width:300px'>
                <input placeholder="请输入或选择图标" onchange="$('#icon-preview').get(0).className = this.value" type="text" name="icon" value='<?php echo htmlentities((isset($vo['icon']) && ($vo['icon'] !== '')?$vo['icon']:"")); ?>' class="layui-input">
            </div>
            <span class='layui-btn layui-btn-primary' style='padding:0 12px;min-width:45px'>
            <i id='icon-preview' style='font-size:1.2em' class='<?php echo htmlentities((isset($vo['icon']) && ($vo['icon'] !== '')?$vo['icon']:"")); ?>'></i>
        </span>
            <button data-icon='icon' type='button' class='layui-btn layui-btn-primary'>选择图标</button>
            <p class="help-block color-desc"><b>可选</b>，设置菜单选项前置图标，目前只支持 Font Awesome 4.7.0 字体图标</p>
        </div>
    </div>

    <div class="hr-line-dashed"></div>

    <div class="layui-form-item text-center">
        <?php if(isset($vo['id'])): ?><input type='hidden' value='<?php echo htmlentities($vo['id']); ?>' name='id'><?php endif; ?>
        <button class="layui-btn" type='submit'>保存数据</button>
        <button class="layui-btn layui-btn-danger" type='button' data-confirm="确定要取消编辑吗？" data-close>取消编辑</button>
    </div>
    <script>
        require(['bootstrap.typeahead'], function () {
            var subjects = JSON.parse('<?php echo json_encode($nodes); ?>');
            $('.typeahead').typeahead({source: subjects, items: 5});
        });
    </script>

</form>
