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
use think\Db;

/**
 * 充值管理
 * Class Goods
 * @package app\store\controller
 * @author Anyon <zoujingli@qq.com>
 * @date 2017/03/27 14:43
 */
class Recharge extends BasicAdmin
{

    /**
     * 定义当前操作表名
     * @var string
     */
    public $table = 'SoccerRecharge';

    /**
     * 充值商品
     * @return array|string
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index()
    {
        $this->title = '充值管理';
        $get = $this->request->get();
        $db = Db::name($this->table)
            ->alias("r")
            ->field("r.*,f.tel")
            ->join("soccer_user f", "f.id=r.uid");
        if (isset($get['tel']) && $get['tel'] !== '') {
            $db->whereLike('f.tel', "%{$get['tel']}%");
        }
        if (isset($get['create_at']) && $get['create_at'] !== '') {
            list($start, $end) = explode(' - ', $get['create_at']);
            $db->whereBetween('r.create_dt', ["{$start} 00:00:00", "{$end} 23:59:59"]);

        }
        return parent::_list($db->order('r.create_at desc,r.id desc'));
    }


    /**
     * 添加商品
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
     * 编辑商品
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
     * 删除商品
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function del()
    {
        if (DataService::update($this->table)) {
            $this->success("充值删除成功！", '');
        }
        $this->error("充值删除失败，请稍候再试！");
    }


}
