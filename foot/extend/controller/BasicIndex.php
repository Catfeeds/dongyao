<?php

// +----------------------------------------------------------------------
// | ThinkAdmin
// +----------------------------------------------------------------------
// | 版权所有 2014~2017 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 官方网站: http://think.ctolog.com
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zoujingli/ThinkAdmin
// +----------------------------------------------------------------------

namespace controller;

use service\DataService;
use service\SoccerService;
use think\App;
use think\Controller;
use think\Db;
use think\db\Query;
use app\store\service\MemberService;
use service\WechatService;

/**
 * 后台权限基础控制器
 * Class BasicAdmin
 * @package controller
 */
class BasicIndex extends Controller
{

    /**
     * 页面标题
     * @var string
     */
    public $title;

    /**
     * 默认操作数据表
     * @var string
     */
    public $table;

    public function __construct(App $app = null)
    {

        SoccerService::compute();
        $member = session("member");
        $mid = $member['id'];
        if (!empty($member)) {
            $mem = db("soccer_user")->find($mid);

            if (!empty($mem)) {
                $ti = time();
                if ($ti > $mem['tim']) {
                    $dg = [
                        "is_vip" => 1,
                        "tim" => 0,
                        "id" => $mid
                    ];
                    db("soccer_user")->update($dg);
                }
                $order = db("soccer_order")->where("mid", $mid)->select();
                foreach ($order as $k => $v) {
                    $plan = db("soccer_plan")->field("id,is_bid,p_status,eid")->find($v['pid']);

                    if ($plan['p_status'] == 2 && $plan['is_bid'] == 1) {//如果比赛结束，且专家没猜中
                        $two = db("soccer_plan")->where(["eid" => $plan['eid']])->where("id", ">", $v['pid'])->find();
                        if (!empty($two)) {
                            $dd = [
                                "order_id" => time() - 1,
                                "pid" => $two['id'],
                                "mid" => $mid,
                                "ty" => 2,
                            ];
                            if (!db("soccer_order")->where(["pid" => $two['id'], "mid" => $mid])->find()) {
                                db("soccer_order")->insertGetId($dd);
                            }

                        }

                    }
                }
            }
        }


        //die;
        parent::__construct($app);
    }

    /**
     * 获取粉丝用户OPENID
     * @return bool|string
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    protected function getOpenid()
    {
        $url = $this->request->url(true);
        return WechatService::webOauth($url, 0)['openid'];
    }
}
