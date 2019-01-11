<?php

namespace app\index\controller;

use think\Controller;
use controller\BasicIndex;

class Plan extends BasicIndex
{
    public function index()
    {
        return $this->fetch();
    }


    public function detail()
    {
        $p = input("param.");
        $pid = $p['pid'];
        $one = db("soccer_plan")
            ->alias("sp")
            ->field("sp.*,se.ex_name,se.ex_logo,se.ex_content,se.ex_tag,se.lian,sg.chang,sg.main,sg.visit,sg.tim,sg.abb,sop.p_title,sf.fre")
            ->join("soccer_game sg", "sg.id=sp.gid")
            ->join("soccer_expert se", "se.id=sp.eid")
            ->join("soccer_play sop", "sop.id=sp.pl_id")
            ->join("soccer_fre sf", "sf.id=sp.fe_id")
            ->where("sp.id", $pid)
            ->find();

        return $this->fetch("", ["one" => $one]);
    }

    public function plan_list()
    {
        $p = input("param.");
        $expert = db("soccer_expert")->find($p['eid']);
        $art = db("soccer_plan")
            ->alias("sp")
            ->field("sp.*,sg.chang,sg.abb,sg.main,sg.visit")
            ->join("soccer_game sg", "sg.id=sp.gid")
            ->where(["eid" => $p['eid']])
            ->select();
        $max = db("soccer_lian")->field("times")->where(["eid" => $p['eid']])->order("create_at", "desc")->find();
        return $this->fetch("", ["art" => $art, "expert" => $expert, "max" => $max['times']]);
    }

    public function check_vip()
    {
        if (request()->isPost()) {
            $user = session("member");
            $uid = $user['id'];

            $p = input("param.");
            $plan = db("soccer_plan")->find($p['pid']);
            $bl = db("soccer_order")->where(['mid' => $uid, "pid" => $p['pid'], "status" => 2])->find();
            $info = [];
            if (empty($user)) {
                return @json(["code" => 5, "msg" => "请您先登陆"]);

            }
            if ($plan['p_status'] == 2) {
                return @json(["code" => 6, "msg" => "比赛已结束，无需购买", "pid" => $p['pid']]);
            }
            switch ($user['is_vip']) {
                case 1://非会员
                    if ($bl) {//存在此条记录购买记录
                        switch ($plan['is_bid']) {
                            case 1://未中
                                $info['code'] = 1;
                                $info['msg'] = "本次预测不中，免费可查看下一条";
                                $info["pid"] = $p['pid'];
                                break;
                            case 2://中
                                $info['code'] = 4;
                                $info['msg'] = "此计划预测中了";
                                $info["pid"] = $p['pid'];
                                var_dump($info);
                                die;
                                break;
                            default:
                                $info['code'] = 7;
                                $info['msg'] = "未开奖";
                                $info["pid"] = $p['pid'];
                        }
                    } else {
                        $info['code'] = 2;
                        $info['msg'] = "您需要购买后才可查看";
                        $info['pid'] = $p['pid'];
                    }
                    break;
                case 2://会员
                    $info['code'] = 3;
                    $info['msg'] = "本人为会员，可以免费查看";
                    $info['pid'] = $p['pid'];
                    break;
            }

            return @json($info);
        }
    }
}