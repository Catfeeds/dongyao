<?php /*a:2:{s:74:"C:\Users\Dongyao001\Desktop\manong\application\store\view\goods\index.html";i:1545028533;s:77:"C:\Users\Dongyao001\Desktop\manong\application\admin\view\public\content.html";i:1534329860;}*/ ?>
<!-- 右则内容区域 开始 -->

<div class="layui-card">
    <!--<?php if(!(empty($title) || (($title instanceof \think\Collection || $title instanceof \think\Paginator ) && $title->isEmpty()))): ?>-->
    <div class="layui-header notselect">
        <div class="pull-left"><span><?php echo htmlentities($title); ?></span></div>
        <div class="pull-right margin-right-15 nowrap">

<!--<?php if(auth("$classuri/add")): ?>-->
<button data-open='<?php echo url("$classuri/add"); ?>' data-title="添加商品" class='layui-btn layui-btn-sm layui-btn-primary'>添加商品</button>
<!--<?php endif; ?>-->

<!--<?php if(auth("$classuri/forbid")): ?>-->
<button data-update data-field='status' data-value='0' data-action='<?php echo url("$classuri/forbid"); ?>' class='layui-btn layui-btn-sm layui-btn-primary'>批量下架</button>
<!--<?php endif; ?>-->

<!--<?php if(auth("$classuri/resume")): ?>-->
<button data-update data-field='status' data-value='1' data-action='<?php echo url("$classuri/resume"); ?>' class='layui-btn layui-btn-sm layui-btn-primary'>批量上架</button>
<!--<?php endif; ?>-->

<!--<?php if(auth("$classuri/del")): ?>-->
<button data-update data-field='delete' data-action='<?php echo url("$classuri/del"); ?>' class='layui-btn layui-btn-sm layui-btn-primary'>批量删除</button>
<!--<?php endif; ?>-->

</div>
    </div>
    <!--<?php endif; ?>-->
    <div class="layui-card-body">

<!-- 表单搜索 开始 -->
<form autocomplete="off" class="layui-form layui-form-pane form-search" action="<?php echo request()->url(); ?>" onsubmit="return false" method="get">

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">商品名称</label>
        <div class="layui-input-inline">
            <input name="goods_title" value="<?php echo htmlentities(app('request')->get('goods_title')); ?>" placeholder="请输入商品名称" class="layui-input">
        </div>
    </div>


    <!--<?php if(!empty($cates)): ?>-->
    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">商品分类</label>
        <div class="layui-input-inline">
            <select name="cate_id" lay-search>
                <option value="">所有分类</option>
                <?php foreach($cates as $cate): ?>
                <!--<?php if(app('request')->get('cate_id') == $cate['id']): ?>-->
                <option selected="selected" value="<?php echo htmlentities($cate['id']); ?>"><?php echo $cate['spl']; ?><?php echo htmlentities($cate['cate_title']); ?></option>
                <!--<?php else: ?>-->
                <option value="<?php echo htmlentities($cate['id']); ?>"><?php echo $cate['spl']; ?><?php echo htmlentities($cate['cate_title']); ?></option>
                <!--<?php endif; ?>-->
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <!--<?php endif; ?>-->



    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">发布时间</label>
        <div class="layui-input-inline">
            <input name="create_at" id="create_at" value="<?php echo htmlentities(app('request')->get('create_at')); ?>" placeholder="请选择发布时间" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-inline">
        <button class="layui-btn layui-btn-primary"><i class="layui-icon">&#xe615;</i> 搜 索</button>
    </div>

</form>
<!-- 表单搜索 结束 -->

<form onsubmit="return false;" data-auto="true" method="post">
    <!--<?php if(empty($list)): ?>-->
    <p class="help-block text-center well">没 有 记 录 哦！</p>
    <!--<?php else: ?>-->
    <input type="hidden" value="resort" name="action">
    <table class="layui-table notevent" lay-skin="line">
        <thead>
        <tr>
            <th class='list-table-check-td think-checkbox'>
                <input data-auto-none="none" data-check-target='.list-check-box' type='checkbox'>
            </th>
            <th class='list-table-sort-td'>
                <button type="submit" class="layui-btn layui-btn-normal layui-btn-xs">排 序</button>
            </th>
            <th class="nowrap">产品名称 | 售价(积分)</th>
            <th class="nowrap">品牌分类</th>
            <th class="nowrap">语言类 | 数据库类</th>
            <th class="nowrap">下载次数 | 推荐</th>
            <th class="nowrap">产品封面</th>
         <!--    <th class="padding-none">
                <table class="think-inner-table layui-table">
                    <thead>
                    <tr>
                        <td>商品信息</td>
                        <td class="text-right nowrap">售价 ( 标价 ) / 库存 ( 剩余, 已售 )</td>
                    </tr>
                    </thead>
                </table>
            </th>
 -->

            <th class="text-left">添加时间 / 状态</th>
            <th class='text-center'>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($list as $key=>$vo): ?>
        <tr>
            <td class='list-table-check-td text-top think-checkbox'>
                <input class="list-check-box" value='<?php echo htmlentities($vo['id']); ?>' type='checkbox'>
            </td>
            <td class='list-table-sort-td text-top'>
                <input name="_<?php echo htmlentities($vo['id']); ?>" value="<?php echo htmlentities($vo['sort']); ?>" class="list-sort-input">
            </td>

             <td class="text-left nowrap text-top">
             名称：<?php echo (isset($vo['goods_title']) && ($vo['goods_title'] !== '')?$vo['goods_title']:'<span class="color-desc">未配置名称</span>'); ?><br>
                售价：<?php if($vo['price'] == '0'): ?><span class="color-red margin-left-10">免费</span><?php else: ?><span class="color-green margin-left-10"><?php echo htmlentities($vo['price']); ?>积分</span><?php endif; ?>
            </td>


            <td class="text-left nowrap text-top">
                品牌：<?php echo (isset($vo['brand']['brand_title']) && ($vo['brand']['brand_title'] !== '')?$vo['brand']['brand_title']:'<span class="color-desc">未配置品牌</span>'); ?><br>
                分类：<?php if(empty($vo['cate'])): ?><span class="color-desc">未配置分类</span><?php else: foreach($vo['cate'] as $k=>$cate): ?><?php echo htmlentities($cate['cate_title']); if($k+1 < count($vo['cate'])): ?><span class="layui-icon font-s12">&#xe602;</span><?php endif; endforeach; endif; ?>
            </td>

               <td class="text-left nowrap text-top">
                语言：<?php echo (isset($vo['language_id']) && ($vo['language_id'] !== '')?$vo['language_id']:'<span class="color-desc">未配置语言</span>'); ?><br>
                数据库：<?php echo (isset($vo['database_id']) && ($vo['database_id'] !== '')?$vo['database_id']:'<span class="color-desc">未配置数据库</span>'); ?><br>
              
            </td>
             
                 <td class="text-left nowrap text-top">
                下载次数：<?php echo (isset($vo['downloads']) && ($vo['downloads'] !== '')?$vo['downloads']:'<span class="color-desc"></span>'); ?>次下载<br>
                是否推荐： <?php if($vo['recommend'] == '2'): ?><span class="color-red margin-left-10">未推荐</span><?php elseif($vo['recommend'] == '1'): ?><span class="color-green margin-left-10">已推荐</span><?php endif; ?>
              
            </td>
             
            

                <td class="text-left nowrap text-top">
               <img src="<?php echo htmlentities($vo['goods_logo']); ?>">
              
            </td>
             



      
            <td class='text-left nowrap text-top'>
                <?php echo str_replace(' ','<br>',format_datetime($vo['create_at'])); if($vo['status'] == '2'): ?><span class="color-red margin-left-10">已下架</span><?php elseif($vo['status'] == '1'): ?><span class="color-green margin-left-10">销售中</span><?php endif; ?>
            </td>

           

            <td class='text-center nowrap text-top'>

                <!--<?php if(auth("$classuri/edit")): ?>-->
                <span class="text-explode">|</span>
                <a data-open='<?php echo url("$classuri/edit"); ?>?id=<?php echo htmlentities($vo['id']); ?>'>编辑</a>
                <!--<?php endif; ?>-->

                <!--<?php if(auth("$classuri/stock")): ?>-->
                <!-- <span class="text-explode">|</span> -->
                <!-- <a data-title="商品入库" data-modal='<?php echo url("$classuri/stock"); ?>?id=<?php echo htmlentities($vo['id']); ?>'>入库</a> -->
                <!--<?php endif; ?>-->

                <!--<?php if($vo['status'] == 1 and auth("$classuri/forbid")): ?>-->
                <span class="text-explode">|</span>
                <a data-update="<?php echo htmlentities($vo['id']); ?>" data-field='status' data-value='0' data-action='<?php echo url("$classuri/forbid"); ?>'>下架</a>
                <!--<?php elseif(auth("$classuri/resume")): ?>-->
                <span class="text-explode">|</span>
                <a data-update="<?php echo htmlentities($vo['id']); ?>" data-field='status' data-value='1' data-action='<?php echo url("$classuri/resume"); ?>'>上架</a>
                <!--<?php endif; ?>-->

                <!--<?php if(auth("$classuri/del")): ?>-->
                <span class="text-explode">|</span>
                <a data-update="<?php echo htmlentities($vo['id']); ?>" data-field='delete' data-action='<?php echo url("$classuri/del"); ?>'>删除</a>
                <!--<?php endif; ?>-->

            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php if(isset($page)): ?><p><?php echo $page; ?></p><?php endif; ?>
    <!--<?php endif; ?>-->
</form>
<script>
    (function () {
        window.form.render();
        window.laydate.render({range: true, elem: '#create_at'});
    })();
</script>
</div>
</div>

<!-- 右则内容区域 结束 -->