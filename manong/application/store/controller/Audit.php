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
class Audit extends BasicAdmin
{

    /**
     * 定义当前操作表名
     * @var string
     */
    public $table = 'StoreAudit';

    /**
     * 品牌列表
     * @return array|string
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    //上传审核
    public function index()
    {
        $this->title = '上传审核记录';
        $get = $this->request->get();
        $db = Db::name($this->table)->where(['is_deleted' => '0']);
        if (isset($get['title']) && $get['title'] !== '') {
            $db->whereLike('title', "%{$get['title']}%");
        }
        if (isset($get['addtime']) && $get['addtime'] !== '') {
            list($start, $end) = explode(' - ', $get['addtime']);
            $db->whereBetween('addtime', ["{$start} 00:00:00", "{$end} 23:59:59"]);
        }
        return parent::_list($db->order('sort asc,id desc'));
    }

   
    /**
     * 添加品牌
     * @return array|string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\Exception
     */
    public function add()
    {
        $this->title = ' ';

        return $this->_form($this->table, 'form');
    }

    /**
     * 编辑品牌
     * @return array|string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\Exception
     */
    public function edit()
    {

        $this->title = '';
        return $this->_form($this->table, 'form');
    }

    /**
     * 表单提交数据处理
     * @param array $data
     */
      protected function _form_filter(&$vo)
    {
        if ($this->request->isGet()) {
            // 读取上级分类
            $where = ['status' => '1', 'is_deleted' => '0', 'pid'=>'0'];
            $cates = (array)Db::name('store_goods_cate')->where($where)->order('sort desc,id desc')->select();
            $this->assign('cates', $cates);
        }
    }


    /**
     * 添加成功回跳处理
     * @param bool $result
     */
    protected function _form_result($result)
    {
        if ($result !== false) {
            list($base, $spm, $url) = [url('@admin'), $this->request->get('spm'), url('store/link/index')];
            $this->success('数据保存成功！', "{$base}#{$url}?spm={$spm}");
        }
    }

    /**
     * 删除品牌
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function del()
    {
        if (DataService::update($this->table)) {
            $this->success("记录删除成功！", '');
        }
        $this->error("记录删除失败，请稍候再试！");
    }

    /**
     * 品牌禁用
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function forbid()
    {
        if (DataService::update($this->table)) {
            $this->success("记录禁用成功！", '');
        }
        $this->error("记录禁用失败，请稍候再试！");
    }

    /**
     * 品牌签禁用
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function resume()
    {
        if (DataService::update($this->table)) {
            $this->success("记录启用成功！", '');
        }
        $this->error("记录启用失败，请稍候再试！");
    }





 //下载记录
    public function download()
    {
        $this->title = '购买记录';
        $get = $this->request->get();
        $db = Db::name('store_orders')->where(['is_deleted' => '0']);
        if (isset($get['goods_title']) && $get['goods_title'] !== '') {
            $db->whereLike('goods_title', "%{$get['goods_title']}%");
        }
        if (isset($get['addtime']) && $get['addtime'] !== '') {
            list($start, $end) = explode(' - ', $get['addtime']);
            $db->whereBetween('addtime', ["{$start} 00:00:00", "{$end} 23:59:59"]);
        }
        return parent::_list($db->order('sort asc,id desc'));
    }


  //删除下载记录
  public function delete()
    {
        $id=input('id');
        $info=Db::table('store_orders')->where('id',$id)->delete();
        if($info){
            $this->success("记录删除成功！", '');
        }else{
            $this->error("记录删除失败，请稍候再试！");
        }
       
    }




  //评论管理
  public function comments()
    {
        $this->title = '评论管理';
        $get = $this->request->get();
        $db = Db::name('store_orders_comments')->where(['is_deleted' => '0']);
        if (isset($get['goods_title']) && $get['goods_title'] !== '') {
            $db->whereLike('goods_title', "%{$get['goods_title']}%");
        }
        if (isset($get['addtime']) && $get['addtime'] !== '') {
            list($start, $end) = explode(' - ', $get['addtime']);
            $db->whereBetween('addtime', ["{$start} 00:00:00", "{$end} 23:59:59"]);
        }
        return parent::_list($db->order('sort asc,id desc'));
    }   



  //删除下载记录
  public function comdelete()
    {
        $id=input('id');
        $info=Db::table('store_orders_comments')->where('id',$id)->delete();
        if($info){
            $this->success("记录删除成功！", '');
        }else{
            $this->error("记录删除失败，请稍候再试！");
        }
       
    }
}
