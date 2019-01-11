<?php

// +----------------------------------------------------------------------
// | Think.Admin
// +----------------------------------------------------------------------
// | 版权所有 2014~2017 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 官方网站: http://think.ctolog.com
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zoujingli/Think.Admin
// +----------------------------------------------------------------------

namespace app\store\controller;

use controller\BasicAdmin;
use service\DataService;
use service\ToolsService;
use think\Db;

/**
 * 商店品牌管理
 * Class Brand
 * @package app\store\controller
 * @author Anyon <zoujingli@qq.com>
 * @date 2017/03/27 14:43
 */
class Toup extends BasicAdmin
{

    /**
     * 定义当前操作表名
     * @var string
     */
    public $table = 'DyUp';


    //积分充值记录
    public function price()
    {
        $this->title = '积分充值记录';
        $get = $this->request->get();
        $db = Db::name($this->table);
        if (isset($get['username']) && $get['username'] !== '') {
            $db->whereLike('username', "%{$get['username']}%");
        }
        if (isset($get['addtime']) && $get['addtime'] !== '') {
            list($start, $end) = explode(' - ', $get['addtime']);
            $db->whereBetween('addtime', ["{$start} 00:00:00", "{$end} 23:59:59"]);
        }
        return parent::_list($db->order('id desc'));
    }

   
    public function del()
    {
        if (DataService::update($this->table)) {
            $this->success("记录删除成功！", '');
        }
        $this->error("记录删除失败，请稍候再试！");
    }


    //会员开通记录
    public function up()
    {
        $this->title = '会员开通记录';
        $get = $this->request->get();
        $db = Db::name('dy_notice');
        if (isset($get['username']) && $get['username'] !== '') {
            $db->whereLike('username', "%{$get['username']}%");
        }
        if (isset($get['addtime']) && $get['addtime'] !== '') {
            list($start, $end) = explode(' - ', $get['addtime']);
            $db->whereBetween('addtime', ["{$start} 00:00:00", "{$end} 23:59:59"]);
        }
        return parent::_list($db->order('id desc'));
    }


     public function delete()
    {
    	$id=input('id');
     	$delete=Db::table('dy_notice')->where('id',$id)->delete();
     	if($delete){
            $this->success("记录删除成功！", '');
     	}else{
       		 $this->error("记录删除失败，请稍候再试！");
     	}
    }


}
