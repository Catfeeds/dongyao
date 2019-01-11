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

namespace app\vote\controller;

use app\vote\service\GoodsService;
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

    //未审核
    public function index()
    {
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

  

    //已审核
      public function nolist()
    {
        $get = $this->request->get();
        $db = Db::name($this->table)->where('status',2);
       
        if (isset($get['babyname']) && $get['babyname'] !== '') {
            $db->whereLike('babyname', "%{$get['babyname']}%");
        }
      
        if (isset($get['addtime']) && $get['addtime'] !== '') {
            list($start, $end) = explode(' - ', $get['addtime']);
            $db->whereBetween('addtime', ["{$start} 00:00:00", "{$end} 23:59:59"]);
        }
        return parent::_list($db->order('status desc,id desc'));
    }

  





  public function add()
    {
        if ($this->request->isGet()) {
            $this->title = '添加商品';
            $this->_form_assign();
            return $this->_form($this->table, 'form');
        }
        try {
            $data = $this->_form_build_data();
            Db::transaction(function () use ($data) {
                $goodsID = Db::name($this->table)->insertGetId($data['main']);
                foreach ($data['list'] as &$vo) {
                    $vo['goods_id'] = $goodsID;
                }
                Db::name('StoreGoodsList')->insertAll($data['list']);
            });
        } catch (HttpResponseException $exception) {
            return $exception->getResponse();
        } catch (\Exception $e) {
            $this->error('商品添加失败，请稍候再试！');
        }
        list($base, $spm, $url) = [url('@admin'), $this->request->get('spm'), url('store/goods/index')];
        $this->success('添加商品成功！', "{$base}#{$url}?spm={$spm}");
    }


  


 public function delete(){
        //获取传递的id
        $id=input('id');
        $list=Db::table('dy_users')->where('id',$id)->delete();
        if($list){
            $a=1;
        }else{
            $a=0;
        }
        echo json_encode($a);
    }






}
