<?php

namespace app\index\controller;

use think\Controller;
use think\db\Where;
use controller\BasicIndex;
class Experts extends BasicIndex
{
    public function index()
    {
        $experts = db("soccer_expert")->where(["is_deleted" => 0])->select();
        foreach ($experts as $k => $v) {
            $ex = db("soccer_plan")->where(["eid" => $v['id']])->order("create_at", "desc")->limit(sysconf("lian"))->column("id");
            $ex_count = db("soccer_plan")->where("id", "in", $ex)->where(["is_bid" => 2])->count();//预测中地
            $experts[$k]['zhong'] = $ex_count;
        }
        return $this->fetch("", ["experts" => $experts]);
    }
}