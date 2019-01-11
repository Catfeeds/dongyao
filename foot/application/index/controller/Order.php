<?php

namespace app\index\controller;

use think\Controller;
use controller\BasicIndex;

class Order extends BasicIndex
{
    public function index()
    {
        return $this->fetch();
    }

    public function add_order()
    {
        if (request()->isPost()) {
            $p = input("param.");
            $user = session("member");
            $uid = $user['id'];
            $bl = db("soccer_order")->where(["pid" => $p['pid'], "mid" => $uid, "status" => 2])->find();
            if (empty($user)) {
                return @json(["code" => 3, "msg" => "请您先登陆"]);
            }
            if ($bl) {
                $info = [
                    "code" => 3,
                    "msg" => "您已购买此纪录",
                ];
            } else {
                $d = [
                    "order_id" => "o_" . (string)(time() - 1),
                    "pid" => $p['pid'],
                    "mid" => $uid,
                ];
                $bb = db("soccer_order")->insertGetId($d);
                if ($bb) {
                    $info = [
                        "code" => 1,
                        "msg" => "添加订单成功",
                    ];
                    if (is_weixin() == true) {
                        $info["url"] = "/wx_pay/" . $bb . "/2";
                    } else {
                        $info["url"] = "/pay/" . $bb;
                    }
                } else {
                    $info = [
                        "code" => 2,
                        "msg" => "系统故障",
                    ];
                }
            }
            return @json($info);
        }
    }
}