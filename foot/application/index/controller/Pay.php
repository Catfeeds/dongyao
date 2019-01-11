<?php

namespace app\index\controller;

use think\Controller;
use controller\BasicIndex;
use service\HttpService;
use Endroid\QrCode\QrCode;
use think\facade\Hook;

class Pay extends BasicIndex
{
    public $app_id = "wx24adfdf45ced7ab1";//微信支付app_id
    public $app_secret = "40dbace8efbeb53d2930556875086302";//
    public $mch_id = "1491523292";//微信商户号
    public $key = "DhSRZz3L4jh5qNItVmLxkpVcIvx574hy";//支付密钥

    /**
     *
     * @return mixed
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function index()
    {
        $p = input("param.");

        $one = db("soccer_order")->alias("so")->field("so.*,sp.title,sp.price")->join("soccer_plan sp", "sp.id=so.pid")->where("so.id", $p['pyid'])->find();
        return $this->fetch("", ["one" => $one]);
    }

    public function reg_pay()
    {
        $uid = session("member.id");
        $p = input("param.");
        $reg_order = db("soccer_recharge")->alias("sr")->field("sr.*,srg.title,srg.num")->join("soccer_recharge_goods srg", "srg.id=sr.rid")->where("sr.id", $p['rid'])->find();

        return $this->fetch("", ["order" => $reg_order, "weixin" => is_weixin()]);
    }

    public function pay_do()
    {
        if (request()->isPost()) {
            $p = input("param.");
            $ord = [];
            $notify_url = "";
            switch ($p['ajax']) {
                case 'buy'://购买计划
                    $ord = db("soccer_order")->alias("so")->field("so.*,sp.price,sp.title")->join("soccer_plan sp", "sp.id=so.pid")->where("so.id", $p['oid'])->find();
                    break;
                case 'reg'://充值
                    $ord = db("soccer_recharge")->alias("sr")->field("sr.*,sp.money as price,sp.title")->join("soccer_recharge_goods sp", "sp.id=sr.rid")->where("sr.id", $p['oid'])->find();


                    break;
                default:
            }
            $notify_url = request()->domain() . "/return.php"; //回调地址
            $subject = $ord['title']; //商品描述
            $total_amount = $ord['price'] * 100; //金额
            $additional = ""; ////附加数据
            $order_id = $ord['order_id']; ////订单号
            $nonce_str = MD5($order_id);//随机字符串
            $spbill_create_ip = request()->ip(); //终端ip
            //以上参数接收不必纠结，按照正常接收就行，相信大家都看得懂

            //$spbill_create_ip = '118.144.37.98'; //终端ip测试
            $trade_type = 'MWEB';//交易类型 具体看API 里面有详细介绍


            $scene_info = '{"h5_info":{"type":"Wap","wap_url":"' . request()->domain() . '","wap_name":"足球预测"}}'; //场景信息
            //对参数按照key=value的格式，并按照参数名ASCII字典序排序生成字符串
            $signA = "appid=$this->app_id&body=$subject&mch_id=$this->mch_id&nonce_str=$nonce_str&notify_url=$notify_url&out_trade_no=$order_id&scene_info=$scene_info&spbill_create_ip=$spbill_create_ip&total_fee=$total_amount&trade_type=$trade_type";
            $strSignTmp = $signA . "&key=" . $this->key; //拼接字符串
            $sign = strtoupper(MD5($strSignTmp)); // MD5 后转换成大写
            $post_data = "<xml><appid>$this->app_id</appid><body>$subject</body><mch_id>$this->mch_id</mch_id><nonce_str>$nonce_str</nonce_str><notify_url>$notify_url</notify_url><out_trade_no>$order_id</out_trade_no><scene_info>$scene_info</scene_info><spbill_create_ip>$spbill_create_ip</spbill_create_ip><total_fee>$total_amount</total_fee><trade_type>$trade_type</trade_type><sign>$sign</sign></xml>";//拼接成XML 格式
            $url = "https://api.mch.weixin.qq.com/pay/unifiedorder";//微信传参地址
            $dataxml = HttpService::post($url, $post_data); //后台POST微信传参地址  同时取得微信返回的参数，http_post方法请看下文

            $objectxml = (array)simplexml_load_string($dataxml, 'SimpleXMLElement', LIBXML_NOCDATA); //将微信返回的XML
            // 转换成数组
            $info = [];
            switch ($objectxml['return_code']) {
                case 'SUCCESS':
                    switch ($objectxml['result_code']) {
                        case 'SUCCESS':
                            $info = ["code" => 1, "msg" => "发起支付成功", "url" => $objectxml['mweb_url']];
                            break;
                        case 'FAIL':
                            $info = ["code" => 2, "msg" => $objectxml['err_code_des']];
                            break;
                        default:
                    }
                    break;
                case 'FAIL':
                    $info = ["code" => 3, "msg" => $objectxml['return_msg']];
                    break;
                default:
            }
            return @json($info, "201");


        }
    }

    public function notify()
    {
        $testxml = file_get_contents("php://input");

        $jsonxml = json_encode(simplexml_load_string($testxml, 'SimpleXMLElement', LIBXML_NOCDATA));

        $result = json_decode($jsonxml, true);//转成数组，
        file_put_contents("01.txt", $jsonxml);
        if ($result) {
            //如果成功返回了
            $out_trade_no = $result['out_trade_no'];
            if ($result['return_code'] == 'SUCCESS' && $result['result_code'] == 'SUCCESS') {
                $rr = substr($out_trade_no, 0, 1);
                switch ($rr) {
                    case "r"://充值
                        $ord = db("soccer_recharge")->where("order_id", $out_trade_no)->find();
                        if ($ord) {
                            db("soccer_recharge")->where("order_id", $out_trade_no)->update(["status" => 2]);
                            $mem = db("soccer_user")->find($ord['uid']);
                            if ($mem['tim'] > 0) {
                                $tim = strtotime('+' . $ord['num'] . ' days', $mem['tim']);
                            } else {
                                $tim = strtotime('+' . $ord['num'] . ' days');
                            }

                            db("soccer_user")->update(["is_vip" => 2, "id" => $ord['uid'], "tim" => $tim]);
                        }
                        break;
                    case "o"://购买
                        $ord = db("soccer_order")->where("order_id", $out_trade_no)->find();
                        if ($ord) {
                            db("soccer_order")->where("order_id", $out_trade_no)->update(["status" => 2]);
                        }
                        break;
                    default:
                }
            }
            echo "SUCCESS";
        }
        return $this->fetch();

    }

    public function check_status()
    {
        if (request()->isPost()) {
            $p = input("param.");
            switch ($p['ajax']) {
                case "buy":
                    $ord = db("soccer_order")->where(["id" => $p['order_id'], "status" => 2])->find();
                    if ($ord) {
                        return json(["code" => 1, "msg" => "订单支付成功", "url" => "/detail/" . $ord['pid']]);
                    } else {
                        return json(["code" => 2]);
                    }

                    break;
                case "reg":
                    $ord = db("soccer_recharge")->where(["id" => $p['order_id'], "status" => 2])->find();
                    if ($ord) {
                        return json(["code" => 1, "msg" => "会员充值成功", "url" => "/member"]);
                    } else {
                        return json(["code" => 2]);
                    }
                    break;
                default:
            }
        }
    }

}