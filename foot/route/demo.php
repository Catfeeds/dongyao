<?php

// +----------------------------------------------------------------------
// | ThinkAdmin
// +----------------------------------------------------------------------
// | 版权所有 2014~2017 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 官方网站: http://think.ctolog.com
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zoujingli/ThinkAdmin
// +----------------------------------------------------------------------

use think\facade\Route;

Route::get("game_list/:lid", "index/Index/index");
Route::get("iframe/:iid", "index/Index/iframe");
Route::post("get_detail", "index/Index/get_detail");

Route::get("member", "index/Member/index");

Route::get("/log_out", "index/Mlogin/log_out");
Route::get("/login", "index/Mlogin/index");
Route::get("/register", "index/Mlogin/register");

Route::post("/check_vip", "index/Plan/check_vip");
Route::get("/detail/:pid", "index/Plan/detail");

Route::post("/add_order", "index/Order/add_order");

Route::get("/pay/:pyid", "index/Pay/index");
Route::post("/pay_do", "index/Pay/pay_do");
Route::get("/reg_pay/:rid", "index/Pay/reg_pay");
Route::get("/wx_pay/:oid/:ty", "index/Wxpay/jsapi");
Route::get("recharge", "index/Recharge/index");
Route::get("recharge_log", "index/Recharge/recharge_log");
Route::post("/reg_do", "index/Recharge/reg_do");
Route::post("/send_msg","index/Sendmsg/index");

Route::get("/forget","index/Mlogin/forget");
Route::post("/forgets","index/Mlogin/forget_pwd");
Route::post("/forget_pwd","index/Sendmsg/forget_pwd");
Route::get("/edit_pwd/:mid","index/Mlogin/edit_pwd");
Route::post("/return.php","index/Pay/notify");
// 不执行下面的路由
return [];

/*  测试环境禁止操作路由绑定 */
Route::post('admin/user/pass', function () {
    return json(['code' => 0, 'msg' => '测试环境禁修改用户密码！']);
});
Route::post('admin/index/pass', function () {
    return json(['code' => 0, 'msg' => '测试环境禁修改用户密码！']);
});
Route::post('admin/config/index', function () {
    return json(['code' => 0, 'msg' => '测试环境禁修改系统配置操作！']);
});
Route::post('admin/config/file', function () {
    return json(['code' => 0, 'msg' => '测试环境禁修改文件配置操作！']);
});
Route::post('admin/menu/index', function () {
    return json(['code' => 0, 'msg' => '测试环境禁排序菜单操作！']);
});
Route::post('admin/menu/add', function () {
    return json(['code' => 0, 'msg' => '测试环境禁添加菜单操作！']);
});
Route::post('admin/menu/edit', function () {
    return json(['code' => 0, 'msg' => '测试环境禁编辑菜单操作！']);
});
Route::post('admin/menu/forbid', function () {
    return json(['code' => 0, 'msg' => '测试环境禁止禁用菜单操作！']);
});
Route::post('admin/menu/del', function () {
    return json(['code' => 0, 'msg' => '测试环境禁止删除菜单操作！']);
});
Route::post('wechat/config/index', function () {
    return json(['code' => 0, 'msg' => '测试环境禁止修改微信配置操作！']);
});
Route::post('admin/node/save', function () {
    return json(['code' => 0, 'msg' => '测试环境禁止修改节点数据操作！']);
});
Route::post('wechat/menu/edit', function () {
    return json(['code' => 0, 'msg' => '测试环境禁止修改微信菜单操作！']);
});
Route::get('wechat/menu/cancel', function () {
    return json(['code' => 0, 'msg' => '测试环境禁止删除微信菜单操作！']);
});
