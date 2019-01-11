<?php

namespace app\index\controller;

use controller\BasicWechat;
use Endroid\QrCode\QrCode;
use service\WechatService;
use WeChat\Pay;

class Wxpay extends BasicWechat
{

    /**
     * 微信扫码支付模式一二维码显示
     * @return \think\Response
     * @throws \Endroid\QrCode\Exceptions\ImageFunctionFailedException
     * @throws \Endroid\QrCode\Exceptions\ImageFunctionUnknownException
     * @throws \Endroid\QrCode\Exceptions\ImageTypeInvalidException
     */
    public function scanOneQrc()
    {
        $wechat = new Pay(config('wechat.'));
        $result = $wechat->createParamsForRuleQrc('8888888');
        return $this->createQrc($result);
    }

    /**
     * 显示二维码
     * @param string $url
     * @return \think\Response
     * @throws \Endroid\QrCode\Exceptions\ImageFunctionFailedException
     * @throws \Endroid\QrCode\Exceptions\ImageFunctionUnknownException
     * @throws \Endroid\QrCode\Exceptions\ImageTypeInvalidException
     */
    protected function createQrc($url)
    {
        $qrCode = new QrCode();
        $qrCode->setText($url)->setSize(300)->setPadding(20)->setImageType(QrCode::IMAGE_TYPE_PNG);
        return \think\facade\Response::header('Content-Type', 'image/png')->data($qrCode->get());
    }

    /**
     * 微信扫码支付模式一通知处理
     * @return string
     * @throws \WeChat\Exceptions\InvalidResponseException
     */
    public function scanOneNotify()
    {
        $wechat = new Pay(config('wechat.'));
        $notify = $wechat->getNotify();
        p('======= 来自扫码支付1的数据 ======');
        p($notify);
        // 产品ID @todo 你的业务，并实现下面的统一下单操作
        $product_id = $notify['product_id'];
        // 微信统一下单处理
        $options = [
            'body' => '测试商品，产品ID：' . $product_id,
            'out_trade_no' => time(),
            'total_fee' => '1',
            'trade_type' => 'NATIVE',
            'notify_url' => url('@wx-demo-notify', '', true, true),
            'spbill_create_ip' => request()->ip(),
        ];
        $order = $wechat->createOrder($options);
        p('======= 来自扫码支付1统一下单结果 ======');
        p($order);
        // 回复XML文本
        $result = [
            'return_code' => 'SUCCESS',
            'return_msg' => '处理成功',
            'appid' => $notify['appid'],
            'mch_id' => $notify['mch_id'],
            'nonce_str' => \WeChat\Contracts\Tools::createNoncestr(),
            'prepay_id' => $order['prepay_id'],
            'result_code' => 'SUCCESS',
        ];
        $result['sign'] = $wechat->getPaySign($result);
        p('======= 来自扫码支付1返回的结果 ======');
        p($result);
        return \WeChat\Contracts\Tools::arr2xml($result);
    }

    /**
     * 扫码支付模式二测试二维码
     * @return \think\Response
     * @throws \Endroid\QrCode\Exceptions\ImageFunctionFailedException
     * @throws \Endroid\QrCode\Exceptions\ImageFunctionUnknownException
     * @throws \Endroid\QrCode\Exceptions\ImageTypeInvalidException
     * @throws \WeChat\Exceptions\InvalidResponseException
     */
    public function scanQrc()
    {

        $wechat = new Pay(config('wechat.'));
        $options = [
            'body' => '测试商品',
            'out_trade_no' => time(),
            'total_fee' => '1',
            'trade_type' => 'NATIVE',
            'notify_url' => url('@wx-demo-notify', '', true, true),
            'spbill_create_ip' => request()->ip(),
        ];
        // 生成预支付码
        $result = $wechat->createOrder($options);
        return $this->createQrc($result['code_url']);
    }

    /**
     * 公众号JSAPI支付二维码
     * @return \think\Response
     * @throws \Endroid\QrCode\Exceptions\ImageFunctionFailedException
     * @throws \Endroid\QrCode\Exceptions\ImageFunctionUnknownException
     * @throws \Endroid\QrCode\Exceptions\ImageTypeInvalidException
     */
    public function jsapiQrc()
    {
        $url = url('@wx-demo-jsapi', '', true, true);
        return $this->createQrc($url);
    }

    /**
     * 公众号JSAPI支付测试
     * @link wx-demo-jsapi
     * @throws \WeChat\Exceptions\InvalidResponseException
     * @throws \WeChat\Exceptions\LocalCacheException
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function jsapi()
    {
        $p = input("param.");
        $oid = input("param.oid");
        $order = [];
        $url = "";
        $pay = "";
        switch ($p['ty']) {
            case 1://充值
                $order = db("soccer_recharge")->alias("sr")->field("sr.*,sp.money as price,sp.title")->join("soccer_recharge_goods sp", "sp.id=sr.rid")->where("sr.id", $p['oid'])->find();
                $url = "/member";
                $pay = "会员充值";
                break;
            case 2://购买
                $order = db("soccer_order")->alias("so")->field("so.*,sp.price,sp.title,so.pid")->join("soccer_plan sp", "sp.id=so.pid")->where("so.id", $p['oid'])->find();
                $url = "/detail/" . $order['pid'];
                $pay = "购买计划";
                break;
            default:
        }
        if ($order["status"] == 2) {
            echo " <script>alert('订单已支付');</script>";
        }
        $wechat = new Pay(config('wechat.'));
        $openid = WechatService::webOauth(request()->url(true), 0)['openid'];
        $options = [
            'body' => $order['title'],
            'out_trade_no' => $order['order_id'],
            'total_fee' => $order['price'] * 100,
            //  'total_fee'=>1,
            'openid' => $openid,
            'trade_type' => 'JSAPI',
            'notify_url' => request()->domain() . "/return.php",
            'spbill_create_ip' => request()->ip(),
        ];
        // 生成预支付码
        $result = $wechat->createOrder($options);
        // 创建JSAPI参数签名
        $options = $wechat->createParamsForJsApi($result['prepay_id']);
        $optionJSON = json_encode($options, JSON_UNESCAPED_UNICODE);
        // JSSDK 签名配置
        $configJSON = json_encode(WechatService::webJsSDK(), JSON_UNESCAPED_UNICODE);
        return $this->fetch("", ["order" => $order, "optionJSON" => $optionJSON, "configJSON" => $configJSON, "url" => $url, "pay" => $pay, "ty" => $p['ty']]);
    }

}