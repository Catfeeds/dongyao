<?php /*a:2:{s:67:"/www/wwwroot/manong.yaho.cc/application/store/view/order/index.html";i:1534329860;s:70:"/www/wwwroot/manong.yaho.cc/application/admin/view/public/content.html";i:1534329860;}*/ ?>
<!-- 右则内容区域 开始 -->

<div class="layui-card">
    <!--<?php if(!(empty($title) || (($title instanceof \think\Collection || $title instanceof \think\Paginator ) && $title->isEmpty()))): ?>-->
    <div class="layui-header notselect">
        <div class="pull-left"><span><?php echo htmlentities($title); ?></span></div>
        <div class="pull-right margin-right-15 nowrap"></div>
    </div>
    <!--<?php endif; ?>-->
    <div class="layui-card-body">
<!-- 表单搜索 开始 -->
<form autocomplete="off" class="layui-form layui-form-pane form-search" action="<?php echo request()->url(); ?>" onsubmit="return false" method="get">

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">会员手机</label>
        <div class="layui-input-inline">
            <input name="phone" value="<?php echo htmlentities(app('request')->get('phone')); ?>" placeholder="请输入会员手机" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">会员昵称</label>
        <div class="layui-input-inline">
            <input name="nickname" value="<?php echo htmlentities(app('request')->get('nickname')); ?>" placeholder="请输入会员昵称" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">订单单号</label>
        <div class="layui-input-inline">
            <input name="order_no" value="<?php echo htmlentities(app('request')->get('order_no')); ?>" placeholder="请输入订单单号" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">订单状态</label>
        <div class="layui-input-inline">
            <select name="status" class="layui-select">
                <option value="">所有订单</option>
                <!--<?php foreach(["已取消","待付款","待发货","已发货","已完成","已退单","退单审核中","退款处理中"] as $k=>$v): ?>-->
                <?php if(app('request')->get('status') == "$k"): ?>
                <option selected="selected" value="<?php echo htmlentities($k); ?>"><?php echo htmlentities($v); ?></option>
                <?php else: ?>
                <option value="<?php echo htmlentities($k); ?>"><?php echo htmlentities($v); ?></option>
                <?php endif; ?>
                <!--<?php endforeach; ?>-->
            </select>
        </div>
    </div>


    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">商品名称</label>
        <div class="layui-input-inline">
            <input name="goods_title" value="<?php echo htmlentities(app('request')->get('goods_title')); ?>" placeholder="请输入商品名称" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">发货状态</label>
        <div class="layui-input-inline">
            <select name="send_status" class="layui-select">
                <option value="">所有订单</option>
                <?php foreach(['未发货','已发货'] as $k=>$v): if(app('request')->get('send_status') == "$k"): ?>
                <option selected="selected" value="<?php echo htmlentities($k); ?>"><?php echo htmlentities($v); ?></option>
                <?php else: ?>
                <option value="<?php echo htmlentities($k); ?>"><?php echo htmlentities($v); ?></option>
                <?php endif; endforeach; ?>
            </select>
        </div>
    </div>

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">是否包邮</label>
        <div class="layui-input-inline">
            <select name="express_zero" class="layui-select">
                <option value="">所有订单</option>
                <?php if(app('request')->get('express_zero') == '0'): ?>
                <option selected="selected" value="0">不包邮</option>
                <?php else: ?>
                <option value="0">不包邮</option>
                <?php endif; if(app('request')->get('express_zero') == 1): ?>
                <option selected="selected" value="1">包邮</option>
                <?php else: ?>
                <option value="1">包邮</option>
                <?php endif; ?>
            </select>
        </div>
    </div>

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">下单时间</label>
        <div class="layui-input-inline">
            <input name="create_at" data-time value="<?php echo htmlentities(app('request')->get('create_at')); ?>" placeholder="请选择下单时间" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">支付时间</label>
        <div class="layui-input-inline">
            <input name="pay_at" data-time value="<?php echo htmlentities(app('request')->get('pay_at')); ?>" placeholder="请选择支付时间间" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">订单描述</label>
        <div class="layui-input-inline">
            <input name="order_desc" value="<?php echo htmlentities(app('request')->get('order_desc')); ?>" placeholder="请输入订单描述" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">物流公司</label>
        <div class="layui-input-inline">
            <input name="company_title" value="<?php echo htmlentities(app('request')->get('company_title')); ?>" placeholder="请输入物流公司" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">快递单号</label>
        <div class="layui-input-inline">
            <input name="send_no" value="<?php echo htmlentities(app('request')->get('send_no')); ?>" placeholder="请输入快递单号" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">收货姓名</label>
        <div class="layui-input-inline">
            <input name="username" value="<?php echo htmlentities(app('request')->get('username')); ?>" placeholder="请输入收货姓名" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">收货手机</label>
        <div class="layui-input-inline">
            <input name="phone" value="<?php echo htmlentities(app('request')->get('phone')); ?>" placeholder="请输入收货手机" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">收货省份</label>
        <div class="layui-input-inline">
            <input name="province" value="<?php echo htmlentities(app('request')->get('province')); ?>" placeholder="请输入收货省份" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">收货城市</label>
        <div class="layui-input-inline">
            <input name="city" value="<?php echo htmlentities(app('request')->get('city')); ?>" placeholder="请输入收货城市" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">收货区域</label>
        <div class="layui-input-inline">
            <input name="area" value="<?php echo htmlentities(app('request')->get('area')); ?>" placeholder="请输入收货区域" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-inline">
        <label class="layui-form-label">详细地址</label>
        <div class="layui-input-inline">
            <input name="address" value="<?php echo htmlentities(app('request')->get('address')); ?>" placeholder="请输入详细地址" class="layui-input">
        </div>
    </div>


    <div class="layui-form-item layui-inline">
        <button class="layui-btn layui-btn-primary"><i class="layui-icon">&#xe615;</i> 搜 索</button>
    </div>

</form>
<script>
    window.form.render();
    $('[data-time]').map(function () {
        window.laydate.render({range: true, elem: this});
    });
</script>
<!-- 表单搜索 结束 -->

<form autocomplete="off" onsubmit="return false;" data-auto="true" method="post">
    <?php if(empty($list)): ?>
    <p class="help-block text-center well">没 有 记 录 哦！</p>
    <?php else: ?>
    <table class="layui-table" lay-size="sm">
        <thead>
        <tr>
            <th class='list-table-check-td think-checkbox'>
                <input data-auto-none="none" data-check-target='.list-check-box' type='checkbox'/>
            </th>
            <th class="text-left">会员信息</th>
            <th class="text-left">订单信息</th>
            <th class="text-left nowrap padding-none">
                <table class="layui-table think-inner-table">
                    <colgroup>
                        <col width="70%">
                    </colgroup>
                    <tr>
                        <td>商品信息</td>
                        <td class="text-right">
                            价格 <span class="layui-icon font-s12">&#x1006;</span> 数量
                        </td>
                    </tr>
                </table>
            </th>
            <th class="text-left">发货信息</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($list as $key=>$vo): ?>
        <tr>
            <td class='list-table-check-td text-top think-checkbox'>
                <input class="list-check-box" value='<?php echo htmlentities($vo['id']); ?>' type='checkbox'/>
            </td>
            <td class="text-left text-top nowrap">
                会员昵称：<?php echo (isset($vo['member']['nickname']) && ($vo['member']['nickname'] !== '')?$vo['member']['nickname']:'<span class="color-desc">未设置会员昵称</span>'); ?><br>
                会员手机：<?php echo (isset($vo['member']['phone']) && ($vo['member']['phone'] !== '')?$vo['member']['phone']:'<span class="color-desc">未设置会员手机</span>'); ?>
            </td>
            <td class="text-left text-top nowrap">
                订单单号：<b><?php echo htmlentities($vo['order_no']); ?></b> <?php if($vo['type'] == 3): ?><span class="layui-badge-rim">套餐</span> <?php endif; switch($vo['status']): case "0": ?><span class="layui-badge layui-bg-gray">已取消</span><?php break; case "1": ?><span class="layui-badge layui-bg-black">待付款</span><?php break; case "2": ?><span class="layui-badge layui-bg-blue">待发货</span><?php break; case "3": ?><span class="layui-badge layui-bg-orange">已发货</span><?php break; case "4": ?><span class="layui-badge layui-bg-green">已完成</span><?php break; case "5": ?><span class="layui-badge layui-bg-gray">已退单</span><?php break; case "6": ?><span class="layui-badge layui-bg-red">退款审核中（<?php if(($vo['refund_type'] == 1)): ?>退款申请<?php endif; if(($vo['refund_type'] == 2)): ?>退货申请<?php endif; ?>）</span>
                <span class="margin-left-5"><a data-title="退款审核" data-modal="<?php echo url('order/checkRefund'); ?>?order_no=<?php echo htmlentities($vo['order_no']); ?>&id=<?php echo htmlentities($vo['id']); ?>">审核</a></span><?php break; case "7": ?><span class="layui-badge layui-bg-rown">退款处理中</span><?php break; endswitch; ?>
                <br>
            </td>
            <td class="text-left text-top nowrap padding-none">
                <table class="layui-table think-inner-table">
                    <colgroup>
                        <col width="70%">
                    </colgroup>
                    <?php foreach($vo['goods'] as $goods): ?>
                    <tr>
                        <td>[<?php echo htmlentities($goods['goods_id']); ?>] <?php echo htmlentities($goods['goods_title']); ?>（<?php echo htmlentities($goods['goods_spec_alias']); ?>）</td>
                        <td class="text-right">
                            <b>
                                <?php if(in_array($vo['type'],['1','3'])): ?>
                                ￥ <?php echo htmlentities($goods[$goods['price_field']]); else: ?>
                                <?php echo htmlentities($goods['selling_integral']); ?> 积分
                                <?php endif; ?>
                                <span class="layui-icon font-s12">&#x1006;</span>
                                <?php echo htmlentities($goods['number']); ?>
                            </b>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </td>
            <td class="text-left text-top nowrap">
                <?php if(empty($vo['express'])): ?>
                <span class="color-desc">无发货信息</span>
                <?php else: ?>
                快递公司：<?php echo htmlentities((isset($vo['express']['real_company_title']) && ($vo['express']['real_company_title'] !== '')?$vo['express']['real_company_title']:$vo['express']['company_title'])); if(!empty($vo['express']['real_company_title'])): ?>
                <!--<span class="color-desc"><?php echo htmlentities((format_datetime($vo['express']['real_express_at']) ?: '未发货')); ?></span>-->
                <?php if($vo['express']['real_company_title'] != $vo['express']['company_title']): ?>
                <s class="color-desc"><?php echo htmlentities($vo['express']['company_title']); ?></s>
                <?php endif; endif; ?>
                <br>
                快递单号：<?php echo (isset($vo['express']['real_express_no']) && ($vo['express']['real_express_no'] !== '')?$vo['express']['real_express_no']:'<span class="layui-badge layui-bg-blue">未发货</span>'); ?>
                <!--<?php if(auth('store/deliver/tracking') and !empty($vo['express']['real_express_no'])): ?>-->
                <a data-modal="<?php echo url('store/deliver/tracking'); ?>?express_code=<?php echo htmlentities($vo['express']['real_express_code']); ?>&express_no=<?php echo htmlentities($vo['express']['real_express_no']); ?>&company_title=<?php echo htmlentities($vo['express']['real_company_title']); ?>" data-title="追踪物流">查看</a>
                <!--<?php elseif(auth('store/deliver/express') and $vo['status'] == 2 and $vo['is_pay'] == 1): ?>-->
                <a data-title="快速发货" data-modal="<?php echo url('store/deliver/express'); ?>?order_no=<?php echo htmlentities($vo['order_no']); ?>">快速发货</a>
                <!--<?php endif; ?>-->
                <br>
                收货信息：<?php echo htmlentities($vo['express']['username']); ?> <?php echo htmlentities($vo['express']['phone']); ?><br>
                收货地址：<?php echo htmlentities($vo['express']['province']); ?><?php echo htmlentities($vo['express']['city']); ?><?php echo htmlentities($vo['express']['area']); ?><?php echo htmlentities($vo['express']['address']); if(auth('store/order/address')): ?><a data-title="修改收货人信息" data-modal="<?php echo url('order/address'); ?>?order_no=<?php echo htmlentities($vo['order_no']); ?>">修改</a><?php endif; endif; if(!empty($vo['express']['real_express_at'])): ?><br>发货时间：<?php echo htmlentities(format_datetime($vo['express']['real_express_at'])); endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php if(isset($page)): ?><p><?php echo $page; ?></p><?php endif; endif; ?>
</form>

</div>
</div>

<!-- 右则内容区域 结束 -->