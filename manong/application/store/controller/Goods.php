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
class Goods extends BasicAdmin
{

    /**
     * 定义当前操作表名
     * @var string
     */
    public $table = 'StoreGoods';

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
        $this->title = '商品管理(已审核)';
        $get = $this->request->get();
        $db = Db::name($this->table)->where('is_deleted',0)->where('status',1);
        if (isset($get['tags_id']) && $get['tags_id'] !== '') {
            $db->whereLike('tags_id', "%,{$get['tags_id']},%");
        }
        if (isset($get['goods_title']) && $get['goods_title'] !== '') {
            $db->whereLike('goods_title', "%{$get['goods_title']}%");
        }

        foreach (['cate_id', 'brand_id'] as $field) {
            (isset($get[$field]) && $get[$field] !== '') && $db->where($field, $get[$field]);
        }
        if (isset($get['create_at']) && $get['create_at'] !== '') {
            list($start, $end) = explode(' - ', $get['create_at']);
            $db->whereBetween('create_at', ["{$start} 00:00:00", "{$end} 23:59:59"]);
        }
        return parent::_list($db->order('sort asc,id desc'));
    }



    public function notaudit()
    {
        $this->title = '商品管理(待审核)';
        $get = $this->request->get();
        $db = Db::name($this->table)->where('is_deleted',0)->where('status',0);
        if (isset($get['tags_id']) && $get['tags_id'] !== '') {
            $db->whereLike('tags_id', "%,{$get['tags_id']},%");
        }
        if (isset($get['goods_title']) && $get['goods_title'] !== '') {
            $db->whereLike('goods_title', "%{$get['goods_title']}%");
        }

        foreach (['cate_id', 'brand_id'] as $field) {
            (isset($get[$field]) && $get[$field] !== '') && $db->where($field, $get[$field]);
        }
        if (isset($get['create_at']) && $get['create_at'] !== '') {
            list($start, $end) = explode(' - ', $get['create_at']);
            $db->whereBetween('create_at', ["{$start} 00:00:00", "{$end} 23:59:59"]);
        }
        return parent::_list($db->order('status desc,sort asc,id desc'));
    }





    /**
     * 商城数据处理
     * @param array $data
     */
    protected function _data_filter(&$data)
    {
        $result = GoodsService::buildGoodsList($data);
        // var_dump($result);die;
        $this->assign([
            'brands' => $result['brand'],
            'cates'  => ToolsService::arr2table($result['cate']),
            'language'=>$result['language'],
            // 'database'=>$result['database'],
        ]);
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

    /**
     * 编辑商品
     * @return array|string
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function edit()
    {
        if (!$this->request->isPost()) {
            $goods_id = $this->request->get('id');
            $goods = Db::name($this->table)->where(['id' => $goods_id, 'is_deleted' => '0'])->find();
            empty($goods) && $this->error('需要编辑的商品不存在！');
            $goods['list'] = Db::name('StoreGoodsList')->where(['goods_id' => $goods_id, 'is_deleted' => '0'])->select();
            $this->_form_assign();
            return $this->fetch('form', ['vo' => $goods, 'title' => '编辑商品']);
        }
        try {
            $data = $this->_form_build_data();
            $goods_id = $this->request->post('id');
            $goods = Db::name($this->table)->where(['id' => $goods_id, 'is_deleted' => '0'])->find();
            empty($goods) && $this->error('商品编辑失败，请稍候再试！');
            foreach ($data['list'] as &$vo) {
                $vo['goods_id'] = $goods_id;
            }
            Db::transaction(function () use ($data, $goods_id, $goods) {
                // 更新商品主表
                $where = ['id' => $goods_id, 'is_deleted' => '0'];
                Db::name('StoreGoods')->where($where)->update(array_merge($goods, $data['main']));
                // 更新商品详细
                Db::name('StoreGoodsList')->where(['goods_id' => $goods_id])->delete();
                Db::name('StoreGoodsList')->insertAll($data['list']);
            });
        } catch (HttpResponseException $exception) {
            return $exception->getResponse();
        } catch (\Exception $e) {
            $this->error('商品编辑失败，请稍候再试！' . $e->getMessage());
        }
        list($base, $spm, $url) = [url('@admin'), $this->request->get('spm'), url('store/goods/index')];
        $this->success('商品编辑成功！', "{$base}#{$url}?spm={$spm}");
    }

    /**
     * 表单数据处理
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    protected function _form_assign()
    {
        list($where, $order) = [['status' => '1', 'is_deleted' => '0'], 'sort asc,id desc'];
        $specs = (array)Db::name('StoreGoodsSpec')->where($where)->order($order)->select();
        //品牌
        $brands = (array)Db::name('StoreGoodsBrand')->where($where)->order($order)->select();
        //分类
        $cates = (array)Db::name('StoreGoodsCate')->where($where)->order($order)->select();
        //数据库
        $database = (array)Db::name('StoreDatabase')->where($where)->order($order)->select();
        //语言
        $language = (array)Db::name('StoreLanguage')->where($where)->order($order)->select();
        // 所有的商品信息
        $where = ['is_deleted' => '0', 'status' => '1'];
        $goodsListField = 'goods_id,goods_spec,goods_stock,goods_sale';
        $goods = Db::name('StoreGoods')->field('id,goods_title')->where($where)->select();
        $list = Db::name('StoreGoodsList')->field($goodsListField)->where($where)->select();
        foreach ($goods as $k => $g) {
            $goods[$k]['list'] = [];
            foreach ($list as $v) {
                ($g['id'] === $v['goods_id']) && $goods[$k]['list'][] = $v;
            }
        }
        array_unshift($specs, ['spec_title' => ' - 不使用规格模板 -', 'spec_param' => '[]', 'id' => '0']);
        $this->assign([
            'specs'  => $specs,
            'cates'  => ToolsService::arr2table($cates),
            'brands' => $brands,
            'all'    => $goods,
            'language'=>$language,
            'database'=>$database,
        ]);
    }

    /**
     * 读取POST表单数据
     * @return array
     */
    protected function _form_build_data()
    {
        list($main, $list, $post, $verify) = [[], [], $this->request->post(), false];
        empty($post['goods_logo']) && $this->error('产品封面不能为空，请上传后再提交数据！');
        // 商品主数据组装
            //分类id
            $main['cate_id'] = $this->request->post('cate_id', '0');
            //数据库类id
            $main['database_id'] = $this->request->post('database_id', '0');
            //品牌类id
            $main['brand_id'] = $this->request->post('brand_id', '0');
            //开发语言类id
            $main['language_id'] = $this->request->post('language_id', '0');
            //产品封面
            $main['goods_logo'] = $this->request->post('goods_logo', '');
            //产品名称
            $main['goods_title'] = $this->request->post('goods_title', '');
            // $main['goods_video'] = $this->request->post('goods_video', '');
            //演示图片
            $main['goods_image'] = $this->request->post('goods_image', '');
            //标签
            $main['label'] = $this->request->post('label', '', null);
            //分割关键字
            $explode=explode(',',$main['label']);
                foreach($explode as $value){
                //查询是否有这个关键字
                $label=Db::table('store_label')->where('label',$value)->select();
                if(!$label){
                //不存在就插入
                $da['label']=$value;
                Db::table('store_label')->insert($da);
             }
              }
            //下载次数
            $main['downloads'] = $this->request->post('downloads', '0');
            //售价
            $main['price'] = $this->request->post('price', '0');
            //点击量
            $main['click'] = $this->request->post('click', '0');
            //是否推荐
            $main['recommend'] = $this->request->post('recommend', '0');
            //压缩文件地址
            $main['file'] = $this->request->post('file', '0');
            //状态 1为上架  2下架
            $main['status'] = $this->request->post('status', '');
            //添加时间
            $main['create_at'] = date('Y-m-d H:i:s');
            //收藏次数
            $main['favorite_num'] = $this->request->post('favorite_num', '0');
            //产品详细描述
            $main['goods_content'] = $this->request->post('goods_content', '');
            //产品简述
            $main['goods_desc'] = $this->request->post('goods_desc', '');
            //查找分类id的上级
            $info=Db::table('store_goods_cate')->where('id',$main['cate_id'])->find();
            if($info['pid']==0){
                //说明是顶级分类
                $main['pid']=$main['cate_id'];
            }else{
                $main['pid']=$info['pid'];
            }
            // $main['tags_id'] = ',' . join(',', isset($post['tags_id']) ? $post['tags_id'] : []) . ',';
        // 商品从数据组装
        // if (!empty($post['goods_spec'])) {
        //     foreach ($post['goods_spec'] as $key => $value) {
        //         $goods = [];
        //         $goods['goods_spec'] = $value;
        //         $goods['market_price'] = $post['market_price'][$key];
        //         $goods['selling_price'] = $post['selling_price'][$key];
        //         $goods['status'] = intval(!empty($post['spec_status'][$key]));
        //         !empty($goods['status']) && $verify = true;
        //         $list[] = $goods;
        //     }
        // } else {
        //     $this->error('没有商品规格或套餐信息哦！');
        // }
        // !$verify && $this->error('没有设置有效的商品规格！');
        return ['main' => $main, 'list' => $list];
    }

    /**
     * 商品库存信息更新
     * @return string
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public function stock()
    {
        if (!$this->request->post()) {
            $goods_id = $this->request->get('id');
            $goods = Db::name('StoreGoods')->where(['id' => $goods_id, 'is_deleted' => '0'])->find();
            empty($goods) && $this->error('该商品无法操作入库操作！');
            $where = ['goods_id' => $goods_id, 'status' => '1', 'is_deleted' => '0'];
            $goods['list'] = Db::name('StoreGoodsList')->where($where)->select();
            return $this->fetch('', ['vo' => $goods]);
        }
        // 入库保存
        $goods_id = $this->request->post('id');
        list($post, $data) = [$this->request->post(), []];
        foreach ($post['spec'] as $key => $spec) {
            if ($post['stock'][$key] > 0) {
                $data[] = [
                    'goods_stock' => $post['stock'][$key],
                    'stock_desc'  => $this->request->post('desc'),
                    'goods_spec'  => $spec, 'goods_id' => $goods_id,
                ];
            }
        }
        empty($data) && $this->error('无需入库的数据哦！');
        if (Db::name('StoreGoodsStock')->insertAll($data) !== false) {
            GoodsService::syncGoodsStock($goods_id);
            $this->success('商品入库成功！', '');
        }
        $this->error('商品入库失败，请稍候再试！');
    }

    /**
     * 删除商品
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function del()
    {
        if (DataService::update($this->table)) {
            $this->success("商品删除成功！", '');
        }
        $this->error("商品删除失败，请稍候再试！");
    }

    /**
     * 商品禁用
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function forbid()
    {
        if (DataService::update($this->table)) {
            $this->success("商品下架成功！", '');
        }
        $this->error("商品下架失败，请稍候再试！");
    }

    /**
     * 商品禁用
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function resume()
    {
        if (DataService::update($this->table)) {
            //产品的id
            $id=input('id');
            //获取产品信息
            $list=Db::table('store_goods')->where('id',$id)->find();
            //判断是否是文章、文章不需要
                 //获取用户信息
                $user=Db::table('dy_users')->where('id',$list['user_id'])->find();
                //封装
                $data['userid']=$user['id'];//用户id
                $data['pid']=$list['pid'];//产品顶级分类
                $data['addtime']=date('Y-m-d H:i:s');//添加时间
                $data['title']=$list['goods_title'];//产品
                $data['userpic']=$user['userpic'];//头像
                $data['username']=$user['username'];//用户名称
                $data['goods_id']=$id;//产品的id
                Db::table('store_audit')->insert($data);
            $this->success("商品上架成功！", '');
        }
        $this->error("商品上架失败，请稍候再试！");
    }



    //视频上传
    public function file_upload1(){
        //文件上传
        if($_FILES){
            $file = request()->file('file');
            if($file){
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->validate(['size'=>156780000,])->move('public/uploads');
                if($file->getError()){
                    // 上传失败获取错误信息
                    $this->error($file->getError());
                }
                $str= 'http://'.$_SERVER['SERVER_NAME'].'/public/uploads/'.$info->getSaveName();
                $data['code']=1;
                $data['file']=$str;
                exit(json_encode($data));
            }
        }
    }


}
