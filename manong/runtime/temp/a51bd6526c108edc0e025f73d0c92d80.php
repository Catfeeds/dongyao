<?php /*a:1:{s:71:"/www/wwwroot/manong.yaho.cc/application/store/view/goods_cate/form.html";i:1545880015;}*/ ?>
<form autocomplete="off" class="layui-form layui-box modal-form-box" action="<?php echo request()->url(); ?>" data-auto="true" method="post">
    <div class="layui-form-item">
        <label class="layui-form-label">商品主分类</label>
        <div class="layui-input-block">
            <select name='pid' class='layui-select full-width block'>
                <!--<?php foreach($cates as $cate): ?>-->
                <!--<?php if($cate['id'] == (isset($vo['pid']) && ($vo['pid'] !== '')?$vo['pid']:0)): ?>-->
                <option selected value='<?php echo htmlentities($cate['id']); ?>'><?php echo $cate['spl']; ?><?php echo htmlentities((isset($cate['cate_title']) && ($cate['cate_title'] !== '')?$cate['cate_title']:'')); ?></option>
                <!--<?php else: ?>-->
                <option value='<?php echo htmlentities($cate['id']); ?>'><?php echo $cate['spl']; ?><?php echo htmlentities($cate['cate_title']); ?></option>
                <!--<?php endif; ?>-->
                <!--<?php endforeach; ?>-->
            </select>
        </div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">商品分类</label>
        <div class="layui-input-block">
            <input autofocus name="cate_title" value='<?php echo htmlentities((isset($vo['cate_title']) && ($vo['cate_title'] !== '')?$vo['cate_title']:"")); ?>' required title="请输入商品分类" placeholder="请输入商品分类" class="layui-input">
        </div>
    </div>

     <div class="layui-form-item">
        <label class="layui-form-label">跳转链接</label>
        <div class="layui-input-block">
            <input autofocus name="url" value='<?php echo htmlentities((isset($vo['url']) && ($vo['url'] !== '')?$vo['url']:"")); ?>' required title="请输入跳转链接" placeholder="例 : /index/index/index" class="layui-input">
        </div>
    </div>


    <div class="layui-form-item">
        <label class="layui-form-label">分类描述</label>
        <div class="layui-input-block">
            <textarea placeholder="请输入分类描述" title="请输入分类描述" class="layui-textarea" name="cate_desc"><?php echo htmlentities((isset($vo['cate_desc']) && ($vo['cate_desc'] !== '')?$vo['cate_desc']:"")); ?></textarea>
        </div>
    </div>

    <div class="hr-line-dashed"></div>

    <div class="layui-form-item text-center">
        <?php if(isset($vo['id'])): ?><input type='hidden' value='<?php echo htmlentities($vo['id']); ?>' name='id'/><?php endif; ?>
        <button class="layui-btn" type='submit'>保存数据</button>
        <button class="layui-btn layui-btn-danger" type='button' data-confirm="确定要取消编辑吗？" data-close>取消编辑</button>
    </div>
</form>
