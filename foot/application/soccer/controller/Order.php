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
 * 订单管理
 * Class Goods
 * @package app\store\controller
 * @author Anyon <zoujingli@qq.com>
 * @date 2017/03/27 14:43
 */
class Order extends BasicAdmin
{

    /**
     * 定义当前操作表名
     * @var string
     */
    public $table = 'SoccerOrder';

    /**
     * 订单管理
     * @return array|string
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index()
    {
        $this->title = '轮播管理';
        $get = $this->request->get();
        $db = Db::name($this->table)->alias("so")->field("so.*,sp.title,su.name")->join("soccer_plan sp","sp.id=so.pid")->join("soccer_user su","su.id=so.mid")->where(['so.is_deleted' => '0']);
        if (isset($get['create_at']) && $get['create_at'] !== '') {
            // var_dump($get['create_at']);die;
            list($start, $end) = explode(' - ', $get['create_at']);
            $db->whereBetween('so.create_at', ["{$start} 00:00:00", "{$end} 23:59:59"]);

        }
        return parent::_list($db->order('create_at desc,id desc'));
    }


    /**
     * 添加订单
     * @return array|string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\Exception
     */
    public function add()
    {
        return $this->_form($this->table, 'form');

    }

    /**
     * 编辑订单
     * @return array|string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\Exception
     */
    public function edit()
    {
        return $this->_form($this->table, 'form');
    }

    /**
     * 删除订单
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function del()
    {
        if (DataService::update($this->table)) {
            $this->success("订单删除成功！", '');
        }
        $this->error("订单删除失败，请稍候再试！");
    }





}
