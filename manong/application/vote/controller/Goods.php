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
class Goods extends BasicAdmin
{

    /**
     * 定义当前操作表名
     * @var string
     */
    public $table = 'DySignup';

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
        $db = Db::name($this->table)->where('status',1);
        if (isset($get['babyname']) && $get['babyname'] !== '') {
            $db->whereLike('babyname', "%{$get['babyname']}%");
        }
        if (isset($get['addtime']) && $get['addtime'] !== '') {
            list($start, $end) = explode(' - ', $get['addtime']);
            $db->whereBetween('addtime', ["{$start} 00:00:00", "{$end} 23:59:59"]);
        }
        return parent::_list($db->order('status desc,id desc'));
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
            $this->title = '添加报名';
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
        list($base, $spm, $url) = [url('@admin'), $this->request->get('spm'), url('vote/goods/index')];
        $this->success('报名添加成功！', "{$base}#{$url}?spm={$spm}");
    }




    protected function _form_assign()
    {
        list($where, $order) = [['status' => '1', 'is_deleted' => '0'], 'sort asc,id desc'];
        $specs = (array)Db::name('StoreGoodsSpec')->where($where)->order($order)->select();
        $brands = (array)Db::name('StoreGoodsBrand')->where($where)->order($order)->select();
        $cates = (array)Db::name('StoreGoodsCate')->where($where)->order($order)->select();
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
        ]);
    }




    protected function _form_build_data()
    {
        list($main, $list, $post, $verify) = [[], [], $this->request->post(), false];
        empty($post['goods_logo']) && $this->error('用户头像不能为空，请上传后再提交数据！');
        // 报名信息封装
        // $main['username'] = $this->request->post('username', '0');//用户姓名
        $main['userpic'] = $this->request->post('goods_logo', '0');//用户头像
        $main['babyname'] = $this->request->post('babyname', '0');//孩子名称
        // $main['phone'] = $this->request->post('phone', '');//联系电话
        // $main['age'] = $this->request->post('age', '');//年龄
        // $main['song'] = $this->request->post('song', '');//歌曲
        $main['votes'] = $this->request->post('votes', '');//票数
        $main['address'] = $this->request->post('address', '');//地址
        $main['detailed'] = $this->request->post('detailed', '');//参赛宣言
        $main['video'] = $this->request->post('goods_video', '');//视频
        // $main['city'] = $this->request->post('city', '');//地址-市
        $main['addtime'] = date('Y-m-d H:i:s');//报名时间
        $main['status'] = 1;//状态  待审核
        // 商品从数据组装
        return ['main' => $main, 'list' => $list];
    }


    //修改的方法
    public function edit()
    {
        $id=input('id');
        $vo=Db::table('dy_signup')->where('id',$id)->find();
        $this->assign('vo',$vo);
        return $this->fetch();
    }

 


    //执行修改
    public function doedit()
    {
          list($main, $list, $post, $verify) = [[], [], $this->request->post(), false];
        empty($post['goods_logo']) && $this->error('用户头像不能为空，请上传后再提交数据！');
        // 报名信息封装
        $main['username'] = $this->request->post('username', '0');//用户姓名
        $main['userpic'] = $this->request->post('goods_logo', '0');//用户头像
        $main['babyname'] = $this->request->post('babyname', '0');//孩子名称
        $main['phone'] = $this->request->post('phone', '');//联系电话
        $main['age'] = $this->request->post('age', '');//年龄
        $main['song'] = $this->request->post('song', '');//歌曲
        $main['votes'] = $this->request->post('votes', '');//票数
        $main['address'] = $this->request->post('address', '');//地址省
        $main['detailed'] = $this->request->post('detailed', '');///参赛宣言
        $main['addtime'] = date('Y-m-d H:i:s');//修改时间
        $main['video'] = $this->request->post('goods_video', '');//视频
        $main['city'] = $this->request->post('city', '');//详细地址市
        $main['status'] = $this->request->post('status','0');//状态  待审核
        $id=$this->request->post('id');//id
        $info=Db::table('dy_signup')->where('id',$id)->update($main);//执行更新
        if($info){
             $this->success('资料修改成功','');
                    }else{
             $this->error('资料修改失败','');
        }
    }


    public function statusedit(){
        //获取传递的id
        $id=input('id');
        $data['status']=2;
        $list=Db::table('dy_signup')->where('id',$id)->update($data);
        if($list){
            $a=1;
        }else{
            $a=0;
        }
        echo json_encode($a);
    }





 public function delete(){
        //获取传递的id
        $id=input('id');
        $list=Db::table('dy_signup')->where('id',$id)->delete();
        if($list){
            $a=1;
        }else{
            $a=0;
        }
        echo json_encode($a);
    }




//查看作品的方法
    public function selectworks()
    {
        $id=input('id');
        $info=Db::table('dy_signup')->where('id',$id)->find();
        $video=$info['video'];//视频链接
        $this->assign('video',$video);
        return $this->fetch();
    }




//投票查看
    public function friendselect()
    {
        //获取用户id
        $id=input('id');
        $get = $this->request->get();
        $db = Db::name('dy_friend')->where('uid',$id);
       
        if (isset($get['friendname']) && $get['friendname'] !== '') {
            $db->whereLike('friendname', "%{$get['friendname']}%");
        }
      
        if (isset($get['addtime']) && $get['addtime'] !== '') {
            list($start, $end) = explode(' - ', $get['addtime']);
            $db->whereBetween('addtime', ["{$start} 00:00:00", "{$end} 23:59:59"]);
        }
        return parent::_list($db->order('id desc'));

 }




 //添加精彩的方法
 public function video(){
 	//获取传递的id
 	$id=input('id');
 	$list=Db::table('dy_video')->where('uid',$id)->find();
 	if($list){
 		$a=3;
 	}else{
 		$info=Db::table('dy_signup')->where('id',$id)->find();
 	$data['video']=$info['video'];
 	$data['uid']=$info['id'];
 	$data['status']=1;//未发布
 	$info=Db::table('dy_video')->insert($data);
 	if($info){
 		$a=1;
 	}else{
 		$a=0;
 	}
 	}
 	echo json_decode($a);
 }



 //精彩视频
 public function wonderful(){
 	$get = $this->request->get();
        $db = Db::name('dy_video');
       
        if (isset($get['total']) && $get['total'] !== '') {
            $db->whereLike('total', "%{$get['total']}%");
        }
      
        if (isset($get['addtime']) && $get['addtime'] !== '') {
            list($start, $end) = explode(' - ', $get['addtime']);
            $db->whereBetween('addtime', ["{$start} 00:00:00", "{$end} 23:59:59"]);
        }
        return parent::_list($db->order('id desc'));
 	$this->assign('list',$list);
 	return $this->fetch();
}


//发布的精彩视频方法
public function fabu(){
	$id=input('id');
	$info=Db::table('dy_video')->where('id',$id)->find();
	if($info['total']==""){
		$a=1;
	}else if($info['pic']==""){
		$a=2;
	}else{
		$data['status']=2;
		$data['addtime']=date('Y-m-d H:i:s');
		$list=Db::table('dy_video')->where('id',$id)->update($data);
		if($list){
			$a=3;
		}else{
			$a=4;
		}
		
	}
echo json_decode($a);
}


	//修改精彩视频的方法
	public function total(){
		$id=input('id');
		$info=Db::table('dy_video')->where('id',$id)->find();
		$this->assign('list',$info);
		$this->assign('id',$id);
		return $this->fetch();
	}


	//执行添加的方法
	public function dototal(){
		$id = $this->request->post('id');
		$main['total'] = $this->request->post('total', '0');//用户姓名
        $main['pic'] = $this->request->post('goods_logo', '0');//用户头像
        $info=Db::table('dy_video')->where('id',$id)->update($main);
        if($info){
        	$this->success('修改成功','');
        }else{
        	$this->error('修改失败','');
        }
        echo json_decode($a);
	}


	//删除精彩视频
	public function videlete(){
		$id=input('id');
		$info=Db::table('dy_video')->where('id',$id)->delete();
		if($info){
			$a=1;
		}else{
			$a=0;
		}
		echo json_decode($a);
	}


	//查看作品
	public  function viselect(){
		$id=input('id');
		$info=Db::table('dy_video')->where('id',$id)->find();
		$video=$info['video'];
		$this->assign('video',$video);
		return $this->fetch();
	}


    //报名设置
    public function setupthe()
    {
        $info=Db::table('dy_config')->select();
        $this->assign('info',$info);
        return $this->fetch();
    }


    //报名修改
    public function setuptheupdate()
    {
       //获取传递的信息
        $data['bktime']=input('bktime');
        $data['bjtime']=input('bjtime');
        $data['tktime']=input('tktime');
        $data['tjtime']=input('tjtime');
        $data['gbtime']=input('gbtime');
        $data['gongtime']=input('gongtime');
        $data['addtime']=date('Y-m-d H:i:s');
        $id=input('id');
        $list=Db::table('dy_config')->where('id',$id)->update($data);
        if($list){
            $a=1;
        }else{
            $a=2;
        }
        echo json_decode($a);
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
