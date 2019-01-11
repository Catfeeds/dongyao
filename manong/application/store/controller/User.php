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

namespace app\store\controller;

use app\store\service\GoodsService;
use controller\BasicAdmin;
use service\DataService;
use service\ToolsService;
use think\Db;
use think\exception\HttpResponseException;

/**
 * 商店商品管理
 * Class Goods
 * @package app\store\controller
 * @author Anyon <zoujingli@qq.com>
 * @date 2017/03/27 14:43
 */
class User extends BasicAdmin
{

    /**
     * 定义当前操作表名
     * @var string
     */
    public $table = 'DyUsers';

    /**
     * 普通商品
     * @return array|string
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index()
    {
        $this->title = '用户管理';
        $get = $this->request->get();
        $db = Db::name($this->table);
        if (isset($get['tags_id']) && $get['tags_id'] !== '') {
            $db->whereLike('tags_id', "%,{$get['tags_id']},%");
        }
        if (isset($get['username']) && $get['username'] !== '') {
            $db->whereLike('username', "%{$get['username']}%");
        }

       
        if (isset($get['addtime']) && $get['addtime'] !== '') {
            list($start, $end) = explode(' - ', $get['addtime']);
            $db->whereBetween('addtime', ["{$start} 00:00:00", "{$end} 23:59:59"]);
        }
        return parent::_list($db->order('id desc'));
    }





}
