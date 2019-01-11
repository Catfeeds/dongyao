<?php

namespace app\index\controller;

use app\index\model\User;
use think\Controller;
use service\HttpService;
use service\SoccerService;
use controller\BasicIndex;
use think\facade\Hook;

class Test extends BasicIndex
{
    /**
     * @throws \Exception
     */
    public function index()
    {
        $result = model("Result");
        $log = SoccerService::manage();//数据采集拼装处理
        if (!empty($log)) {
            $bb = $result->saveAll($log);
            echo "更新" . count($log) . "条数据";
        } else {
            echo "无可更新数据";
        }

    }

    /**
     *
     */
    public function check_experts()
    {
        $plan = db("soccer_plan")
            ->alias("sp")
            ->field("sp.*,sg.issue")
            ->join("soccer_game sg", "sg.id=sp.gid")
            ->where(["is_bid" => 0])
            ->fetchSql(false)
            ->select();
        $user = session("member");
        $uid = $user['id'];
        SoccerService::check_result($plan);//结果处理

    }

    public function fff()
    {
        $str = "o_1546407037";
        $rr = substr($str, 0, 1);
        switch ($rr) {
            case "r":
                echo 123;
                break;
            case "o":
                echo 456;
                break;
            default:
        }
    }

}