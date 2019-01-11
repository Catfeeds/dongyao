<?php

namespace app\index\controller;
use controller\BasicWechat;
use WeChat\Pay;
class Pays extends BasicWechat
{
    /**
     * 支付页面
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index()
    {
        $p = input("param.");
        $oid = $p["oid"];
        $order = db("tour_reserve")->find($oid);
        return $this->fetch("", ["order" => $order]);
    }

    public function pay_act()
    {
        if (request()->isAjax()) {
            $p = input("param.");
            $oid = $p["oid"];
            $order = db("tour_reserve")->alias("r")->field("r.*,l.title")->join("tour_line l", "l.id=r.lid")->where("r.id", $oid)->find();
            $we = config("wechat.");
            $wechat = new Pay(config('wechat.'));
            $options = [
                'body' => $order["title"],
                'out_trade_no' => time(),
                'total_fee' => '1',
                'trade_type' => 'NATIVE',
                'notify_url' => url('@wx-demo-notify', '', true, true),
                'spbill_create_ip' => request()->ip(),
            ];
            // 生成预支付码
            $result = $wechat->createOrder($options);
            // 创建JSAPI参数签名
            $options = $wechat->createParamsForJsApi($result['prepay_id']);
            $optionJSON = $options;
            // JSSDK 签名配置

            echo json_encode(["optionJSON" => $optionJSON]);
            die;
        }
    }
    /**
     * 支付成功
     * @return mixed
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public function success_act()
    {
        if (isset($_GET["oid"])) {
            $bl = db("tour_reserve")->update(["id" => $_GET['oid'], "status" => 2]);

        }
        if (isset($_GET["rid"])) {
            $uid=$this->get_uid();
            $bl = db("tour_recharge")->update(["id" => $_GET['rid'], "status" => 2]);
            if ($bl) {
                db("wechat_fans")->where("id",$uid)->update(["is_vip"=>2]);
                $order = db("tour_recharge")->find($_GET['rid']);
                $uid = $this->get_uid();
                db("tour_card")->where("uid", $uid)->setInc("residue", $order["num"]);
            }

        }
        return $this->fetch();
    }
    /**
     * 旅游卡支付处理
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public function pay()
    {
        if (request()->isAjax()) {
            $p = input("param.");
            $uid = $this->get_uid();
            $residue = db("tour_card")->where("uid", $uid)->value("residue");

            if ($residue <= 0) {
                $info = [
                    "code" => 4,
                    "msg" => "卡片支付次数为空",
                ];
                echo json_encode($info);
                die;
            }
            $rev = db("tour_reserve")->where("id", $p["oid"])->value("tourist");
            $c = count(explode(",", $rev)) - 1;

            if ($c > $residue) {
                $info = [
                    "code" => 5,
                    "msg" => "卡片使用次数不够了，只能带" . $residue . "人",
                ];
                echo json_encode($info);
                die;
            }

            if ($p["pay"] == 1) {
                $bl = db("tour_reserve")->fetchSql(false)->update(["id" => $p["oid"], "status" => 2]);

                if ($bl) {
                    $info = [
                        "code" => 1,
                        "msg" => "支付成功",
                        "url" => request()->domain() . url('Pays/success_act'),
                    ];

                    if ($c > 1 || $residue<6) { //出行人数大于一人，或者已带人出行过
                        db("tour_card")->where("uid", $uid)->setDec("residue", $c);//卡片使用次数减少
                        $bn = db("tour_card")->where("uid", $uid)->value("residue");
                        if ($bn <= 0) {
                            db("tour_card")->where("uid", $uid)->update(["num" => 0]);//使用次数清零
                            db("wechat_fans")->update(["id"=>$uid,"is_vip"=>1]);
                        } else {
                            db("tour_card")->where("uid", $uid)->setInc("num", $c);//卡片使用次数减少
                        }

                    }
                    $rt = db("tour_reserve")->find($p["oid"]);
                    $cc = (count(explode(",", $rt["tourist"])) - 1);
                    db("tour_line")->where("id", $rt["lid"])->setInc("go_out", $cc);

                } else {
                    $info = [
                        "code" => 2,
                        "msg" => "系统故障",
                    ];
                }

            } else {
                $info = [
                    "code" => 3,
                    "msg" => "支付方式有误",
                ];
            }
            echo json_encode($info);
            die;

        }
    }

    public function ceshi()
    {
        return $this->fetch();
    }

}