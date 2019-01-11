<?php /*a:1:{s:75:"/www/wwwroot/manong.yaho.cc/application/store/view/goods_language/form.html";i:1545874719;}*/ ?>
<form autocomplete="off" class="layui-form layui-box modal-form-box" action="<?php echo request()->url(); ?>" data-auto="true" method="post">
    <div class="layui-form-item">
        <label class="layui-form-label">主分类</label>
        <div class="layui-input-block">
            <select name='pid' class='layui-select full-width block'>
                <!--<?php foreach($cates as $cate): ?>-->
                <option value='<?php echo htmlentities($cate['id']); ?>'><?php echo htmlentities($cate['cate_title']); ?></option>
                <!--<?php endforeach; ?>-->
            </select>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">语言名称</label>
        <div class="layui-input-block">
            <input autofocus name="language" value='<?php echo htmlentities((isset($vo['language']) && ($vo['language'] !== '')?$vo['language']:"")); ?>' required title="请输入语言名称" placeholder="请输入语言名称" class="layui-input">
        </div>
    </div>
    <div class="hr-line-dashed"></div>

    <div class="layui-form-item text-center">
        <?php if(isset($vo['id'])): ?><input type='hidden' value='<?php echo htmlentities($vo['id']); ?>' name='id'/><?php endif; ?>
        <button class="layui-btn" type='submit'>保存数据</button>
        <button class="layui-btn layui-btn-danger" type='button' data-confirm="确定要取消编辑吗？" data-close>取消编辑</button>
    </div>
</form>




