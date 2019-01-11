<?php

namespace app\index\controller;

use think\Controller;
use WeMini\Basic;
use controller\BaicIndex;

class Recharge extends Controller
{
    /**
     * 充值会员
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index()
    {
        $reg = db("soccer_recharge_goods")->select();
        return $this->fetch("", ["reg" => $reg]);
    }

    public function recharge_log()
    {
        $uid = session("member.id");
        $log = db("soccer_recharge")->where(["uid" => $uid])->select();
        return $this->fetch("", ["log" => $log]);
    }

    public function reg_do()
    {
        if (request()->isPost()) {
            $p = input("param.");
            $member = session("member");
            $uid = $member['id'];
            if (empty($member)) {
                return @json(["code" => 3, "msg" => "请您先登陆"]);
            }
            $price = db("soccer_recharge_goods")->field("id,money,num")->find($p['rid']);
            $df = [
                "price" => $price['money'],
                "uid" => $uid,
                "rid" => $price['id'],
                "order_id" => "r_" . (string)(time() - 1),
                "num" => $price['num'],
            ];
            $bb = db("soccer_recharge")->insertGetId($df);
            if ($bb) {
                $info = [
                    "code" => 1,
                    "msg" => "已添加订单",

                ];
                if (is_weixin() == true) {
                    $info["url"] = "/wx_pay/" . $bb."/1";
                } else {
                    $info["url"] = "/reg_pay/" . $bb;
                }
            } else {
                $info = [
                    "code" => 2,
                    "msg" => "系统故障",
                ];
            }
            return @json($info);
        }
    }

    public function reg_order()
    {
        $p = input("param.");
        $reg_order = db("soccer_recharge")->alias("sr")->field("sr.*,srg.title")->join("soccer_recharge_goods srg", "srg.id=sr.rid")->where("sr.id", $p['roid'])->find();
        return $this->fetch("", ["order" => $reg_order]);
    }
}