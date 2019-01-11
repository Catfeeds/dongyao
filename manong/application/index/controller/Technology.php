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

namespace app\index\controller;


use app\index\service\GoodsService;
use controller\BasicWechat;
use service\DataService;
use service\ToolsService;
use think\Db;
use think\exception\HttpResponseException;
//获取网页用户信息
use service\WechatService;
use \page\Pages;
/**
 * 商店商品管理
 * Class Goods
 * @package app\store\controller
 * @author Anyon <zoujingli@qq.com>
 * @date 2017/03/27 14:43
 */
class Technology extends BasicWechat
{
    //全部文章
    public function all()
    {
    	//获取技术文章分类名字
    	$cate=Db::table('store_goods_cate')->where('status',1)->where('is_deleted',0)->where('pid',6)->select();
    	$this->assign('cate',$cate);
        $id=input('id');
        if($id){
         //根据id获取文章
         $list=Db::table('store_goods')->where('cate_id',$id)->where('status',1)->where('is_deleted',0)->paginate(1,false,['query' => request()->param()]);

         }else{
         //无id  全部文章
         $list=Db::table('store_goods')->where('pid',6)->where('status',1)->where('is_deleted',0)->paginate(5,false,['query' => request()->param()]);
         }
    	$this->assign('list',$list);
        $page = $list->render();
        $this->assign('page',$page);
    	$i=1;
		$this->assign('i',$i);



		//获取推荐文章
		$tui=Db::table('store_goods')->where('status',1)->where('is_deleted',0)->where('pid',6)->where('recommend',1)->select();   	
		$this->assign('tui',$tui);

        //获取标签表的信息
        $cloud=Db::table('store_label')->where('is_deleted',0)->where('status',1)->select();
        $this->assign('cloud',$cloud);


        return $this->fetch();
    }





    //技术文章详情页面
    public function detail()
    {   //获取用户信息
        $userid=session('userid');
        $info=Db::table('dy_users')->where('id',$userid)->find();
        $this->assign('info',$info);

        //获取产品id
        $id=input('id');
        if($id){
            //更新产品的访问量
            Db::table('store_goods')->where('id',$id)->setInc('click',1);
        }
        //通过id查找数据
        $list=Db::table('store_goods')->where('id',$id)->where('status',1)->where('is_deleted',0)->select();
       	$this->Assign('list',$list);
        //查找发布产品的用户信息
        $user=Db::table('dy_users')->where('id',$list[0]['user_id'])->find();
        //分配数据
        $this->assign('user',$user);
        
        //获取推荐的网站源码
        $where['pid']=6;
        $where['recommend']=1;
        $where['status']=1;
        $recomm=Db::table('store_goods')->where($where)->select();
        $this->assign('recomm',$recomm);


        //获取评论内容
        $comments=Db::table('store_orders_comments')->where('goods_id',$id)->select();
        $this->assign('comments',$comments);
        //统计总数
        $count=count($comments);
        $this->assign('count',$count);

        //获取标签表的信息
        $cloud=Db::table('store_label')->where('is_deleted',0)->where('status',1)->select();
        $this->assign('cloud',$cloud);
 		//分割关键字
        $label=explode(',',$list[0]['label']);
        $this->assign('label',$label);

        //获取config网站配置信息
        $config=Db::table('system_config')->select();
        $this->assign('config',$config);
        return $this->fetch();

    }



 //    //第一个
 //    public function first()
 //    {
 //    	//获取技术文章分类名字
 //    	$cate=Db::table('store_goods_cate')->where('status',1)->where('is_deleted',0)->where('pid',6)->select();
 //    	$this->assign('cate',$cate);
	// 	//获取分类的id
	// 	$id=input('id');
	// 	$list=Db::table('store_goods')->where('cate_id',$id)->where('status',1)->where('is_deleted',0)->paginate(1,false,['query' => request()->param()]);
		
	// 	$this->assign('list',$list);
 //        $page = $list->render();
 //        $this->assign('page',$page);

	// 	$i=1;
	// 	$this->assign('i',$i);


	// 	//获取推荐文章
	// 	$tui=Db::table('store_goods')->where('status',1)->where('is_deleted',0)->where('pid',6)->where('recommend',1)->select();   	
	// 	$this->assign('tui',$tui);

 //        //获取标签表的信息
 //        $cloud=Db::table('store_label')->where('is_deleted',0)->where('status',1)->select();
 //        $this->assign('cloud',$cloud);


 //    	//获取
 //        return $this->fetch();
 //    }






 //    //第二个
 //    public function second()
 //    {
 //    	//获取技术文章分类名字
 //    	$cate=Db::table('store_goods_cate')->where('status',1)->where('is_deleted',0)->where('pid',6)->select();
 //    	$this->assign('cate',$cate);
	// 	//获取分类的id
	// 	$id=input('id');
	// 	$list=Db::table('store_goods')->where('cate_id',$id)->where('status',1)->where('is_deleted',0)->paginate(1,false,['query' => request()->param()]);
		
	// 	$this->assign('list',$list);
 //        $page = $list->render();
 //        $this->assign('page',$page);

	// 	$i=1;
	// 	$this->assign('i',$i);
	// 	//获取推荐文章
	// 	$tui=Db::table('store_goods')->where('status',1)->where('is_deleted',0)->where('pid',6)->where('recommend',1)->select();   	
	// 	$this->assign('tui',$tui);
    	
 //        //获取标签表的信息
 //        $cloud=Db::table('store_label')->where('is_deleted',0)->where('status',1)->select();
 //        $this->assign('cloud',$cloud);


 //        return $this->fetch();
 //    }





 //    //第三个
 //    public function third()
 //    {
 //    	//获取技术文章分类名字
 //    	$cate=Db::table('store_goods_cate')->where('status',1)->where('is_deleted',0)->where('pid',6)->select();
 //    	$this->assign('cate',$cate);
	// 	//获取分类的id
	// 	$id=input('id');
	// 	$list=Db::table('store_goods')->where('cate_id',$id)->where('status',1)->where('is_deleted',0)->paginate(1,false,['query' => request()->param()]);
		
	// 	$this->assign('list',$list);
 //        $page = $list->render();
 //        $this->assign('page',$page);


	// 	$i=1;
	// 	$this->assign('i',$i);
	// 	//获取推荐文章
	// 	$tui=Db::table('store_goods')->where('status',1)->where('is_deleted',0)->where('pid',6)->where('recommend',1)->select();   	
	// 	$this->assign('tui',$tui);
    	
 //         //获取标签表的信息
 //        $cloud=Db::table('store_label')->where('is_deleted',0)->where('status',1)->select();
 //        $this->assign('cloud',$cloud);
 //        return $this->fetch();
 //    }



 //    //第四个
 //    public function fourth()
 //    {
 //    	//获取技术文章分类名字
 //    	$cate=Db::table('store_goods_cate')->where('status',1)->where('is_deleted',0)->where('pid',6)->select();
 //    	$this->assign('cate',$cate);
	// 	//获取分类的id
	// 	$id=input('id');
	// 	$list=Db::table('store_goods')->where('cate_id',$id)->where('status',1)->where('is_deleted',0)->paginate(1,false,['query' => request()->param()]);
		
	// 	$this->assign('list',$list);
 //        $page = $list->render();
 //        $this->assign('page',$page);

	// 	$i=1;
	// 	$this->assign('i',$i);

	// 	//获取推荐文章
	// 	$tui=Db::table('store_goods')->where('status',1)->where('is_deleted',0)->where('pid',6)->where('recommend',1)->select();   	
	// 	$this->assign('tui',$tui);


 //        //获取标签表的信息
 //        $cloud=Db::table('store_label')->where('is_deleted',0)->where('status',1)->select();
 //        $this->assign('cloud',$cloud);
 //        return $this->fetch();
 //    }




 // //第五个
 //    public function fifth()
 //    {
 //    	//获取技术文章分类名字
 //    	$cate=Db::table('store_goods_cate')->where('status',1)->where('is_deleted',0)->where('pid',6)->select();
 //    	$this->assign('cate',$cate);
	// 	//获取分类的id
	// 	$id=input('id');
	// 	$list=Db::table('store_goods')->where('cate_id',$id)->where('status',1)->where('is_deleted',0)->paginate(1,false,['query' => request()->param()]);
		
	// 	$this->assign('list',$list);
 //        $page = $list->render();
 //        $this->assign('page',$page);

	// 	$i=1;
	// 	$this->assign('i',$i);

	// 	//获取推荐文章
	// 	$tui=Db::table('store_goods')->where('status',1)->where('is_deleted',0)->where('pid',6)->where('recommend',1)->select();   	
	// 	$this->assign('tui',$tui);
    	
 //        //获取标签表的信息
 //        $cloud=Db::table('store_label')->where('is_deleted',0)->where('status',1)->select();
 //        $this->assign('cloud',$cloud);
 //        return $this->fetch();
 //    }



 //   //第六个
 //    public function sixth()
 //    {
 //    	//获取技术文章分类名字
 //    	$cate=Db::table('store_goods_cate')->where('status',1)->where('is_deleted',0)->where('pid',6)->select();
 //    	$this->assign('cate',$cate);
	// 	//获取分类的id
	// 	$id=input('id');
	// 	$list=Db::table('store_goods')->where('cate_id',$id)->where('status',1)->where('is_deleted',0)->paginate(1);
	// 	// foreach($list as $key=>$value){
 //  //      		 $list[$key]['labelss']=explode(',',$value['label']);
 //  //   	}
	// 	$this->assign('list',$list);
 //        $page = $list->render();
 //        $this->assign('page',$page);

	// 	$i=1;
	// 	$this->assign('i',$i);

	// 	//获取推荐文章
	// 	$tui=Db::table('store_goods')->where('status',1)->where('is_deleted',0)->where('pid',6)->where('recommend',1)->select();   	
	// 	$this->assign('tui',$tui);
 //    	//获取
 //        return $this->fetch();
 //    }



 //    //第七个
 //    public function seventh()
 //    {
 //    	//获取技术文章分类名字
 //    	$cate=Db::table('store_goods_cate')->where('status',1)->where('is_deleted',0)->where('pid',6)->select();
 //    	$this->assign('cate',$cate);
	// 	//获取分类的id
	// 	$id=input('id');
	// 	$list=Db::table('store_goods')->where('cate_id',$id)->where('status',1)->where('is_deleted',0)->paginate(1);
	// 	// foreach($list as $key=>$value){
 //  //      		 $list[$key]['labelss']=explode(',',$value['label']);
 //  //   	}
	// 	$this->assign('list',$list);
 //        $page = $list->render();
 //        $this->assign('page',$page);

	// 	$i=1;
	// 	$this->assign('i',$i);

	// 	//获取推荐文章
	// 	$tui=Db::table('store_goods')->where('status',1)->where('is_deleted',0)->where('pid',6)->where('recommend',1)->select();   	
	// 	$this->assign('tui',$tui);
 //    	//获取
 //        return $this->fetch();
 //    }





 //    //第八个
 //    public function eighth()
 //    {
 //    	//获取技术文章分类名字
 //    	$cate=Db::table('store_goods_cate')->where('status',1)->where('is_deleted',0)->where('pid',6)->select();
 //    	$this->assign('cate',$cate);
	// 	//获取分类的id
	// 	$id=input('id');
	// 	$list=Db::table('store_goods')->where('cate_id',$id)->where('status',1)->where('is_deleted',0)->paginate(1);
	// 	// foreach($list as $key=>$value){
 //  //      		 $list[$key]['labelss']=explode(',',$value['label']);
 //  //   	}
	// 	$this->assign('list',$list);
 //        $page = $list->render();
 //        $this->assign('page',$page);

	// 	$i=1;
	// 	$this->assign('i',$i);

	// 	//获取推荐文章
	// 	$tui=Db::table('store_goods')->where('status',1)->where('is_deleted',0)->where('pid',6)->where('recommend',1)->select();   	
	// 	$this->assign('tui',$tui);
 //    	//获取
 //        return $this->fetch();
 //    }


    


}
