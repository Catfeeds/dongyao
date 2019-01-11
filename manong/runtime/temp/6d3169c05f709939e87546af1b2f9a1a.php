<?php /*a:2:{s:66:"/www/wwwroot/manong.yaho.cc/application/store/view/user/index.html";i:1545983332;s:70:"/www/wwwroot/manong.yaho.cc/application/admin/view/public/content.html";i:1534329860;}*/ ?>
<!-- 右则内容区域 开始 -->

<div class="layui-card">
    <!--<?php if(!(empty($title) || (($title instanceof \think\Collection || $title instanceof \think\Paginator ) && $title->isEmpty()))): ?>-->
    <div class="layui-header notselect">
        <div class="pull-left"><span><?php echo htmlentities($title); ?></span></div>
        <div class="pull-right margin-right-15 nowrap">



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
        <label class="layui-form-label">用户昵称</label>
        <div class="layui-input-inline">
            <input name="username" value="<?php echo htmlentities(app('request')->get('username')); ?>" placeholder="请输入用户昵称" class="layui-input">
        </div>
    </div>




    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">注册时间</label>
        <div class="layui-input-inline">
            <input name="addtime" id="addtime" value="<?php echo htmlentities(app('request')->get('addtime')); ?>" placeholder="请选择注册时间" class="layui-input">
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
          <!--   <th class='list-table-sort-td'>
            </th> -->
            <th class="nowrap">用户昵称</th>
            <th class="nowrap">用户头像</th>
            <th class="nowrap">QQ | 邮箱</th>
            <th class="nowrap">电话 | 性别</th>
            <th class="nowrap">积分 | 余额</th>
            <th class="nowrap">个性签名</th>
            <th class="text-left">注册时间</th>
            <th class='text-center'>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($list as $value): ?>
        <tr>
            <td class='list-table-check-td text-top think-checkbox'>
                <input class="list-check-box" value='' type='checkbox'>
            </td>
            <!-- <td class='list-table-sort-td text-top'>
                <input name="" value="" class="list-sort-input">
            </td>
 -->
             <td class="text-left nowrap text-top">
             名称：<?php echo htmlentities($value['username']); ?>
            </td>


            <td class="text-left nowrap text-top">
               <img src="<?php echo htmlentities($value['userpic']); ?>" style="width:60px;height:40px;">
            </td>

               <td class="text-left nowrap text-top">
                Q&nbsp;&nbsp;Q：<?php echo htmlentities($value['qq']); ?><br>
                邮 箱：<?php echo htmlentities($value['email']); ?>
              
            </td>
             
                 <td class="text-left nowrap text-top">
                电话：<?php echo htmlentities($value['phone']); ?><br>
                性别：<?php if($value['gender']=="1"): ?>
                       男
                       <?php else: ?>
                       女
                       <?php endif; ?>
              
            </td>
             
            

            <td class="text-left nowrap text-top">
              积分：<?php echo htmlentities($value['price']); ?><br>
               余额：<?php echo htmlentities($value['money']); ?>
            </td>
            <td class='text-left nowrap text-top'>
               <?php echo htmlentities($value['descr']); ?>
            </td>


            <td class='text-left nowrap text-top'>
               <?php echo htmlentities($value['addtime']); ?>
            </td>

           

            <td class='text-center nowrap text-top'>

                <!--<?php if(auth("$classuri/edit")): ?>-->
               <!--  <span class="text-explode">|</span>
                <a data-open='<?php echo url("$classuri/edit"); ?>?id='>编辑</a> -->
                <!--<?php endif; ?>-->

<!-- 
                <span class="text-explode">|</span>
                <a data-update="" data-field='status' data-value='0' data-action='<?php echo url("$classuri/forbid"); ?>'>下架</a>
                <span class="text-explode">|</span>
                <a data-update="" data-field='status' data-value='1' data-action='<?php echo url("$classuri/resume"); ?>'>上架</a> -->

                <!--<?php if(auth("$classuri/del")): ?>-->
                <span class="text-explode">|</span>
                <a data-update="" data-field='delete' data-action='<?php echo url("$classuri/del"); ?>'>删除</a>
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