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

namespace app\soccer\controller;

use controller\BasicAdmin;
use service\DataService;
use service\ToolsService;
use think\Db;
use service\NodeService;
use think\exception\HttpResponseException;

/**
 * 计划管理
 * Class Goods
 * @package app\store\controller
 * @author Anyon <zoujingli@qq.com>
 * @date 2017/03/27 14:43
 */
class Plan extends BasicAdmin
{

    /**
     * 定义当前操作表名
     * @var string
     */
    public $table = 'SoccerPlan';

    /**
     * 计划管理
     * @return array|string
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index()
    {
        $this->title = '计划管理';
        $get = $this->request->get();
        $this->_form_assign();
        $db = Db::name($this->table)
            ->alias("p")
            ->field("p.*,e.ex_name,g.g_name,sp.p_title,sf.fre")
            ->join("soccer_expert e", "e.id=p.eid")
            ->join("soccer_game g", "g.id=p.gid")
            ->join("soccer_play sp", "sp.id=p.pl_id")
            ->join("soccer_fre sf", "sf.id=p.fe_id")
            ->where(['p.is_deleted' => '0']);
        if (isset($get['title']) && $get['title'] !== '') {
            $db->whereLike('p.title', "%{$get['title']}%");
        }
        if (isset($get['create_at']) && $get['create_at'] !== '') {
            // var_dump($get['create_at']);die;
            list($start, $end) = explode(' - ', $get['create_at']);
            $db->whereBetween('p.create_at', ["{$start} 00:00:00", "{$end} 23:59:59"]);

        }

        return parent::_list($db->order('p.create_at desc,p.id desc'));
    }


    /**
     * 添加计划
     * @return array|string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\Exception
     */

    public function add()
    {
        $this->_form_assign();
        return $this->_form($this->table, 'form');

    }

    /**
     * 编辑计划
     * @return array|string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\Exception
     */
    public function edit()
    {
        $this->_form_assign();
        return $this->_form($this->table, 'form');
    }

    /**
     * 删除商品
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function del()
    {
        if (DataService::update($this->table)) {
            $this->success("计划删除成功！", '');
        }
        $this->error("计划删除失败，请稍候再试！");
    }

    public function _form_assign()
    {
        $t1 = date("Y-m-d", time());
        $t2 = date("Y-m-d", strtotime("+1 day"));
        $games = db("soccer_game")->field("id,g_name,tim")->where(["is_deleted" => 0])->where("tim2", $t1)->where("tim", ">", date("Y-m-d H:i:s", time()))->whereOr("tim2", $t2)->fetchSql(false)->select();//比赛
//        foreach ($games as $k => $v) {
//            $tt = time();
//            $tt1 = strtotime($v['tim']);
//            if ($tt1 > $tt) {
//                unset($games[$k]);
//            }
//        }
        $plays = db("soccer_play")->field("id,p_title")->where(["is_deleted" => 0])->select();//玩法
        $experts = db("soccer_expert")->field("id,ex_name")->where(["is_deleted" => 0])->select();//专家
        $fres = db("soccer_fre")->field("id,fre")->where(["is_deleted" => 0])->select();//选项
        $this->assign(["plays" => $plays, "experts" => $experts, "fres" => $fres, "games" => $games]);
    }

}
