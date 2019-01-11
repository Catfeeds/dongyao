<?php /*a:2:{s:76:"C:\Users\Administrator\Desktop\toupiao\application\vote\view\user\index.html";i:1537946046;s:81:"C:\Users\Administrator\Desktop\toupiao\application\admin\view\public\content.html";i:1534329860;}*/ ?>
<!-- 右则内容区域 开始 -->

<div class="layui-card">
    <!--<?php if(!(empty($title) || (($title instanceof \think\Collection || $title instanceof \think\Paginator ) && $title->isEmpty()))): ?>-->
    <div class="layui-header notselect">
        <div class="pull-left"><span><?php echo htmlentities($title); ?></span></div>
        <div class="pull-right margin-right-15 nowrap">

<!--<?php if(auth("$classuri/add")): ?>-->
<!-- <button data-open='<?php echo url("$classuri/add"); ?>' data-title="添加商品" class='layui-btn layui-btn-sm layui-btn-primary'>添加商品</button> -->
<!--<?php endif; ?>-->

<!--<?php if(auth("$classuri/forbid")): ?>-->
<!-- <button data-update data-field='status' data-value='0' data-action='<?php echo url("$classuri/forbid"); ?>' class='layui-btn layui-btn-sm layui-btn-primary'>批量下架</button> -->
<!--<?php endif; ?>-->

<!--<?php if(auth("$classuri/resume")): ?>-->
<!-- <button data-update data-field='status' data-value='1' data-action='<?php echo url("$classuri/resume"); ?>' class='layui-btn layui-btn-sm layui-btn-primary'>批量上架</button> -->
<!--<?php endif; ?>-->

<!--<?php if(auth("$classuri/del")): ?>-->
<!-- <button data-update data-field='delete' data-action='<?php echo url("$classuri/del"); ?>' class='layui-btn layui-btn-sm layui-btn-primary'>批量删除</button> -->
<!--<?php endif; ?>-->

</div>
    </div>
    <!--<?php endif; ?>-->
    <div class="layui-card-body">
<h3>用户列表</h3>
<hr/ style="border:0.5px solid gray">
<!-- 表单搜索 开始 -->
<form autocomplete="off" class="layui-form layui-form-pane form-search" action="<?php echo request()->url(); ?>" onsubmit="return false" method="get">

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">用户名</label>
        <div class="layui-input-inline">
            <input name="username" value="<?php echo htmlentities(app('request')->get('username')); ?>" placeholder="请输入姓名" class="layui-input">
        </div>
    </div>

  

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">发布时间</label>
        <div class="layui-input-inline">
            <input name="addtime" id="create_at" value="<?php echo htmlentities(app('request')->get('addtime')); ?>" placeholder="请选择发布时间" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-inline">
        <button class="layui-btn layui-btn-primary"><i class="layui-icon">&#xe615;</i> 搜 索</button>
    </div>

</form>
<!-- 表单搜索 结束 -->

<form onsubmit="return false;" data-auto="true" method="post">
    <?php if(empty($list)): ?>
    <p class="help-block text-center well">没 有 记 录 哦！</p>
    <?php else: ?>
    <input type="hidden" value="resort" name="action">
    <table class="layui-table notevent" lay-skin="line">
        <thead>
        <tr>
            <th class='list-table-check-td think-checkbox'>
                <input data-auto-none="none" data-check-target='.list-check-box' type='checkbox'>
            </th>
          <!--   <th class='list-table-sort-td'>
                <button type="submit" class="layui-btn layui-btn-normal layui-btn-xs">排 序</button>
            </th> -->
            <!-- <th class='text-left nowrap'>姓名</th> -->
            <th class='text-left nowrap'>用户名</th>
            <th class='text-left nowrap'>头像</th>
            <th class='text-left nowrap'>添加时间</th>
            <!-- <th class='text-left nowrap'>操作</th> -->
           
           
        </tr>
        </thead>
     <tbody>
     <?php foreach($list as $key=>$value): ?>
        <tr>
            <td class='list-table-check-td think-checkbox'>
                <input class="list-check-box" value='' type='checkbox'/>
            </td>
            <!-- <td class='list-table-sort-td'>
                <input name="" value="" class="list-sort-input"/>
            </td> -->
           
            <td class='text-left nowrap'><?php echo htmlentities($value['username']); ?></td>
            <td class='text-left nowrap'><img src="<?php echo htmlentities($value['userpic']); ?>" style="width:50px;height:50px"></td>
            <td class='text-left nowrap'><?php echo htmlentities($value['addtime']); ?></td>
          <!--   <td class='text-left nowrap'>

            
                <span class="text-explode">|</span> -->
                <!-- <a data-title="查看" data-open='<?php echo url("$classuri/select"); ?>?id=<?php echo htmlentities($value['id']); ?>'>查看</a> -->
                <!--  <a data-title="修改" data-modal='<?php echo url("$classuri/update"); ?>?id=<?php echo htmlentities($value['id']); ?>'>修改</a>
                <span class="text-explode">|</span>
                 -->
               <!--   <span class="text-explode">|</span>
                <a title="删除" onclick="member_del(this,'<?php echo htmlentities($value['id']); ?>')" href="javascript:;">删除</a> -->
                

         <!--    </td> -->
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php if(isset($page)): ?><p><?php echo $page; ?></p><?php endif; endif; ?>
</form>
<script>
    (function () {
        window.form.render();
        window.laydate.render({range: true, elem: '#create_at'});
    })();
</script>
 <script>
      //删除的方法
         function member_del(obj,id){
          layer.confirm('确认要删除吗？',function(index){
            
                  $.ajax({
                        url: "<?php echo url('/vote/User/delete'); ?>",
                        type: "get",
                        async : true,
                        data: {id:id},
                        dataType:'json',
                        success:function(data){
                            if(data==1)
                            { 
                                $(obj).parents("tr").remove();
                             layer.msg("删除成功",{icon:1,time:1000});

                            }else
                            {
                             layer.msg("删除失败",{icon:2,time:1000});
                            }
                    
                 }
            });
          });
        }

    </script> 




 <script>
      //删除的方法
         function member_statusedit(obj,id){
          layer.confirm('确认要通过审核吗吗？',function(index){
            
                  $.ajax({
                        url: "<?php echo url('/vote/User/statusedit'); ?>",
                        type: "get",
                        async : true,
                        data: {id:id},
                        dataType:'json',
                        success:function(data){
                            if(data==1)
                            { 
                                $(obj).parents("tr").remove();
                             layer.msg("审核成功",{icon:1,time:1000});

                            }else
                            {
                             layer.msg("审核失败",{icon:2,time:1000});
                            }
                    
                 }
            });
          });
        }
    </script> 




</div>
</div>

<!-- 右则内容区域 结束 -->