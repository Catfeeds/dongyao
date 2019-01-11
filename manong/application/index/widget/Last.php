<?php
namespace app\Index\widget;
use think\Controller;
use think\session;

use  think\Db;
class Last extends Controller{

	//加载头部
	public function header(){
		//加载公共模板页面头部
		//获取session信息
		$userid=session('userid');
		//没有session信息就跳转登录
		$user=Db::table('dy_users')->where('id',$userid)->find();
		$this->assign('user',$user);
		//获取顶级分类
		$cate=Db::table('store_goods_cate')->where('pid',0)->where('status',1)->where('is_deleted',0)->order('sort asc')->select();
		$this->assign('cate',$cate);

		//获取配置
		$config=Db::table('system_config')->select();
		$this->assign('config',$config);
		return $this->fetch("cate/header");
	}

	//加载个人中心左侧
	public function left(){
		//加载公共模板页面头部
		return $this->fetch("cate/left");
	}


	//加载脚部
	public function footer(){
		//获取配置
		$config=Db::table('system_config')->select();
		$this->assign('config',$config);
		return $this->fetch("cate/footer");
	}



	//加载个人中心脚部
	public function mfooter(){
		//获取配置
		$config=Db::table('system_config')->select();
		$this->assign('config',$config);
		return $this->fetch("cate/mfooter");
	}

	

}
?>