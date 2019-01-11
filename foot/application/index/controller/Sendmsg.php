<?php

namespace app\index\controller;

use controller\BasicIndex;
use service\AlismsService;

class Sendmsg extends BasicIndex
{
    public function index()
    {
        if (request()->isPost()) {
            $p = input("param.");
            if ($p['tel'] == "") {
                return json(["code" => 3, "msg" => "手机号不能为空"]);
            }
            $code = randomkeys();
            $arr = array("code" => $code, "product" => "sds");
            session("code", $code);
            $bl = AlismsService::send($p['tel'], "SMS_153390329", "林下优品",$arr );
            if ($bl) {
                return json(["code" => 1, "msg" => "短信发送成功"]);
            } else {
                return json(["code" => 2, "msg" => "系统故障"]);
            }
        }
    }
    
}