<?php

namespace app\index\controller;

use think\Controller;
use controller\BasicIndex;
use service\WechatService;
class Member extends BasicIndex
{
    public function index()
    {
        /**
         *
         */
        $member = session("member");
        $uid = $member['id'];
        $count = db("soccer_order")->where(["mid" => $uid, "status" => 2])->count();
        $mem = db("soccer_user")->find($uid);
        if ($mem['tim'] > 0) {
            $tim = ceil(($mem['tim'] - time()) / 86400);
        } else {
            $tim = 0;
        }

        return $this->fetch("", ["count" => $count, "mem" => $mem, "tim" => $tim]);
    }

    public function comment()
    {
        if (request()->isPost()) {
            $p = input("param.");
            $member = session("member");
            $mid = $member['id'];
            if (empty($member)) {
                return json(["code" => 3, "msg" => "请先登录", "url" => "/login"]);

            }
            $data = [
                "mid" => $mid,
                "c_content" => $p['c_content'],
            ];
            $bl = db("soccer_feed_back")->insert($data);
            if ($bl){
                $info=[
                    "code"=>1,
                    "msg"=>"谢谢您的支持，反馈成功",
                ];
            }else{
                $info=[
                    "code"=>2,
                    "msg"=>"系统故障",
                ];
            }
            return json($info);

        }
    }
}