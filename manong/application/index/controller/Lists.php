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
class Lists extends BasicWechat
{
    //网站源码列表
    public function index()
    {
        
    	//获取栏目分类
    	$case=Db::table('store_goods_cate')->where('pid',1)->where('is_deleted',0)->where('status',1)->select();
    	$this->assign('case',$case);
    	//系统品牌
    	$brand=Db::table('store_goods_brand')->where('status',1)->where('is_deleted',0)->select();
    	$this->assign('brand',$brand);
    	//开发语言
    	$language=Db::table('store_language')->where('status',1)->where('is_deleted',0)->where('pid',1)->select();
    	$this->assign('language',$language);
        //获取网站源码的产品
        $db=Db::table('store_goods');
	    $websource=$db->where('pid',1)->where('status',1)->where('is_deleted',0)->order('recommend asc')->paginate(4);
        $page = $websource->render();
        $this->assign('websource',$websource);
        $this->assign('page',$page);
        return $this->fetch();
    }



	//游戏源码
    public function game()
    {
    	//获取栏目分类
    	$case=Db::table('store_goods_cate')->where('is_deleted',0)->where('pid',2)->select();
    	$this->assign('case',$case);
    	//开发语言
    	$language=Db::table('store_language')->where('status',1)->where('is_deleted',0)->where('pid',2)->select();
    	$this->assign('language',$language);
        //获取网站源码的产品
	    $gamesource=Db::table('store_goods')->where('pid',2)->where('status',1)->where('is_deleted',0)->order('recommend asc')->paginate(4);
        $this->assign('gamesource',$gamesource);
        $page = $gamesource->render();
        $this->assign('page',$page);
        return $this->fetch();
    }




    //插件模块
    public function plugin()
    {
    	//获取栏目分类
    	$case=Db::table('store_goods_cate')->where('is_deleted',0)->where('pid',3)->select();
    	$this->assign('case',$case);
    	//开发语言
    	$language=Db::table('store_language')->where('status',1)->where('is_deleted',0)->where('pid',3)->select();
    	$this->assign('language',$language);
        //获取网站源码的产品
	    $pluginsource=Db::table('store_goods')->where('pid',3)->where('status',1)->where('is_deleted',0)->order('recommend asc')->paginate(4);
        $this->assign('pluginsource',$pluginsource);
        $page = $pluginsource->render();
        $this->assign('page',$page);
        return $this->fetch();
    }




    //插件模块
    public function video()
    {
        //获取栏目分类
        $case=Db::table('store_goods_cate')->where('is_deleted',0)->where('pid',4)->select();
        $this->assign('case',$case);
        //开发语言
        $language=Db::table('store_language')->where('status',1)->where('is_deleted',0)->where('pid',4)->select();
        $this->assign('language',$language);
        //获取网站源码的产品
        $videosource=Db::table('store_goods')->where('pid',4)->where('status',1)->where('is_deleted',0)->order('recommend asc')->paginate(1);
        $this->assign('videosource',$videosource);
        $page = $videosource->render();
        $this->assign('page',$page);
        return $this->fetch();
    }





    //工具模块
    public function tool()
    {
        //获取栏目分类
        $case=Db::table('store_goods_cate')->where('is_deleted',0)->where('pid',5)->select();
        $this->assign('case',$case);
        //开发语言
        $language=Db::table('store_language')->where('is_deleted',0)->where('pid',5)->where('status',1)->select();
        $this->assign('language',$language);
        //获取网站源码的产品
        $toolsource=Db::table('store_goods')->where('pid',5)->where('status',1)->order('recommend asc')->paginate(1);
        $this->assign('toolsource',$toolsource);
        $page = $toolsource->render();
        $this->assign('page',$page);
        return $this->fetch();
    }



    public function detail()
    {
        //获取session的用户信息
        $userid=session('userid');
        $info=Db::table('dy_users')->where('id',$userid)->find();
        $this->assign('info',$info);
        //产品id
        $id=input('id');

        //定义下载数组
        $up=1;
        if($userid){//是否登录
            //通过用户id和产品id去查找下载记录、是否有过下载
            $order=Db::table('store_orders')->where('userid',$userid)->where('goods_id',$id)->find();
            if($order){
                //有下载记录
                $up=2;
            }
        }
        $this->assign('up',$up);

        
        //更新数据了的点击量
        if($id){
            Db::table('store_goods')->where('id',$id)->setInc('click',1);
        }

        //查找产品信息
        $list=Db::table('store_goods')->where('id',$id)->find();

        //轮播图
        $images=explode('|',$list['goods_image']);
        $this->assign('images',$images);

        //分割关键字
        $label=explode(',',$list['label']);
        $this->assign('label',$label);

        //产品分类
        $cate=Db::table('store_goods_cate')->where('id',$list['cate_id'])->find();
        $list['cate']=$cate['cate_title'];


        //系统品牌
        $brand=Db::table('store_goods_brand')->where('id',$list['brand_id'])->find();
        $list['brand']=$brand['brand_title'];
        $this->assign('list',$list);


        //获取上传产品用户
        $user=Db::table('dy_users')->where('id',$list['user_id'])->find();
        $this->assign('user',$user);

        //获取公告
        $announ=Db::table('store_announ')->where('is_deleted',0)->where('status',1)->select();
        $this->assign('announ',$announ);
        
        //获取推荐的网站源码
        $where['recommend']=1;
        $where['status']=1;
        $where['is_deleted']=0;
        $recomm=Db::table('store_goods')->where($where)->order('addtime desc')->limit(10)->select();
        $this->assign('recomm',$recomm);


        //统计该商品总评论
        $count=Db::table('store_orders_comments')->where('goods_id',$id)->count();
        $this->assign('count',$count);

        //获取评论内容
        $comments=Db::table('store_orders_comments')->where('goods_id',$id)->select();
        $this->assign('comments',$comments);


        //获取标签表的信息
        $cloud=Db::table('store_label')->where('is_deleted',0)->where('status',1)->select();
        $this->assign('cloud',$cloud);

        //获取config网站配置
        $config=Db::table('system_config')->select();
        $this->assign('config',$config);
        return $this->fetch();
    }




    public function label(){
         //获取搜索的结果
        $label=input('label');
        $where=array(
                'is_deleted'=>0,
                'status'=>1,
            );
        //查询数据库(模糊查询)
        $list=Db::name('store_goods')->where('goods_title','like',"%{$label}%")->where($where)->order('id desc')->paginate(2,false,['query' => request()->param()]);
        $page = $list->render();
        $this->assign('list',$list);
        $this->assign('page',$page);

        //获取标签表的信息
        $cloud=Db::table('store_label')->where('is_deleted',0)->where('status',1)->select();
        $this->assign('cloud',$cloud);
      return  $this->fetch();
    }




    //评论检测
    public function comments()
    {

        //获取产品id
        $data['goods_id']=input('goods_id');
        //获取用户id
        $data['userid']=input('userid');
        //获取用户信息
        $user=Db::table('dy_users')->where('id',$data['userid'])->find();
        //获取产品的信息
        $goods=Db::table('store_goods')->where('id',$data['goods_id'])->find();
        //封装信息
        $data['goods_logo']=$goods['goods_logo'];//产品封面
        $data['goods_title']=$goods['goods_title'];//产品名称
        $data['addtime']=date("Y-m-d H:i:s");//评论时间
        $data['username']=$user['username'];//用户姓名
        $data['userpic']=$user['userpic'];//用户头像
        $data['members']=$user['members'];//会员等级
        $data['comments']=input('comments');//评论内容
        $data['userid']=$data['userid'];//用户id
        $data['goods_id']=$data['goods_id'];//产品id
        $data['pid']=$goods['pid'];//产品分类
        //查找用户是否有过购买记录
        $list=Db::table('store_orders')->where("goods_id",$data['goods_id'])->where('userid',$data['userid'])->find();
        if($list){
             //查询这个用户是否有过评论
                $res=Db::table('store_orders_comments')->where('userid',$data['userid'])->where('goods_id',$data['goods_id'])->find();
                if($res){
                    $results=array(
                        'return'=>1,
                        'msg'   =>"该用户对该产品已经有过评论",
                        );
                }else{
                    //插入数据
                    $info=Db::table('store_orders_comments')->insert($data);
                    if($info){
                        $results=array(
                            'return'=>2,
                            'msg'   =>"评论成功",
                        );
                    }else{
                        $results=array(
                            'return'=>3,
                            'msg'   =>"系统错误",
                        );
                    }
                }
        }else{
            //判断是否是文章类
            if($goods['pid']==6){
                //文章类
                 //查询这个用户是否有过评论
                $res=Db::table('store_orders_comments')->where('userid',$data['userid'])->where('goods_id',$data['goods_id'])->find();
                if($res){
                    $results=array(
                        'return'=>1,
                        'msg'   =>"该用户对该产品已经有过评论",
                        );
                }else{
                    //插入数据
                    $info=Db::table('store_orders_comments')->insert($data);
                    if($info){
                        $results=array(
                            'return'=>2,
                            'msg'   =>"评论成功",
                        );
                    }else{
                        $results=array(
                            'return'=>3,
                            'msg'   =>"系统错误",
                        );
                    }
                }
            }else{
                $results=array(
                        'return'=>4,
                        'msg'   =>"您无权评论",
                        ); 
            }
           
        }
        
        echo json_encode($results);
    }









    //搜索
    public function search()
    {
        //获取搜索的结果
        $search=input('keyword');
        $where=array(
                'is_deleted'=>0,
                'status'=>1,
            );
        //查询数据库(模糊查询)
        $list=Db::name('store_goods')->where('goods_title','like',"%{$search}%")->where($where)->order('id desc')->paginate(10);
        $page = $list->render();
        $this->assign('list',$list);
        $this->assign('page',$page);

        
        //获取标签表的信息
        $cloud=Db::table('store_label')->where('is_deleted',0)->where('status',1)->select();
        $this->assign('cloud',$cloud);

        return $this->fetch();
     
    }


    //支付检测
    public function pay()
    {

        $goods_id=input('goods_id');//产品id
        //获取产品的信息
        $goods=Db::table('store_goods')->where('id',$goods_id)->find();
        //下载用户id
        $userid=input('userid');
        //获取下载用户的信息
        $user=Db::table('dy_users')->where('id',$userid)->find();
        //通过用户id和产品id去查找下载记录、是否有过下载
        $list=Db::table('store_orders')->where('userid',$userid)->where('goods_id',$goods_id)->find();
        //下载需要的积分
        $price=input('price');
        //发布者id
        $release=input('release');
        //组合订单数据
        $order['goods_id']=$goods_id;//产品id
        $order['fid']=$release;//发布者id
        $order['userid']=$userid;//下载用户id
        $order['goods_title']=$goods['goods_title'];//产品名称
        $order['goods_logo']=$goods['goods_logo'];
        $order['userpic']=$user['userpic'];//用户头像
        $order['username']=$user['username'];//用户昵称
        $order['addtime']=date('Y-m-d H:i:s');//购买时间
        $order['pid']=$goods['pid'];//产品分类的id
        $order['orderon']=nonceStr();//订单号
        $order['members']=$user['members'];//会员等级
        if($user['members']==1){
            //普通会员下载用积分
                $order['price']=$price;
        }else if($user['members']==2){
            //钻石会员不需要
            $order['price']=0;//使用的积分
        }
       
        if($list){
            //有过下载记录
                        //为免费、积分为0
                        $order['price']=0;
                        $a=array(
                               'a'=>2,
                               'url'=>$goods['file'],
                        );
                        //插入下载记录
                        $res=Db::table('store_orders')->insert($order);
        }else{
            //没有下载记录
                if($price==0){
                    //积分为0、免费下载
                     $a=array(
                               'a'=>2,
                               'url'=>$goods['file'],
                        );
                }else{
                        
                        //判断是否是钻石会员
                        if($user['members']==2){
                            //钻石会员
                            $a=array(
                                        'a'=>2,
                                        'url'=>$goods['file'],
                                        );
                            //插入记录
                            $res=Db::table('store_orders')->insert($order);

                        }else{
                            //普通会员
                            //积分是否足够
                            if($user['price']>=$price){
                                //积分足够
                                $data['price']=$user['price']-$price;//减去积分
                                //更新用户积分
                                Db::table('dy_users')->update(['price' => $data['price'],'id'=>$user['id']]);
                                //更新产品的下载次数
                                Db::table('store_goods')->where('id',$goods_id)->setInc('downloads',1);
                                //更新发布者的积分
                                Db::table('dy_users')->where('id',$release)->setInc('price',$price);
                                //插入订单表
                                $res=Db::table('store_orders')->insert($order);
                                if($res){
                                    //插入成功
                                    $a=array(
                                        'a'=>2,
                                        'url'=>$goods['file'],
                                        );
                                }else{
                                    //系统错误
                                   $a=array(
                                        'a'=>3,
                                        'url'=>"系统错误",
                                        );
                                }
                            }else{
                            //积分不够
                                 $a=array(
                                        'a'=>1,
                                        'url'=>"积分不足,请充值",
                                        );
                            }
                        }
                    }


        }
        
        echo json_encode($a);
    }


    //收藏
    public function  collection()
    {
      //获取用户id
        $data['userid']=input('userid');
      //产品id
        $data['goods_id']=input('goods_id');
      //查询商品信息
        $goods=Db::table('store_goods')->where('id',$data['goods_id'])->find();
      //查找收藏表是否已经收藏
        $info=Db::table('store_orders_collection')->where('goods_id',$data['goods_id'])->where('userid',$data['userid'])->find();
        if($info){
            //该用户已经收藏该产品
            $results=array(
                               'return'=>1,
                               'msg'=>"已经收藏过了",
                        );
        }else{
            //插入时间
            $data['addtime']=date('Y-m-d H:i:s');
            //产品名称
            $data['goods_title']=$goods['goods_title'];
            //产品分类
            $data['pid']=$goods['pid'];
            //执行插入
            $res=Db::table('store_orders_collection')->insert($data);
            if($res){
               $results=array(
                               'return'=>2,
                               'msg'=>"收藏成功",
                        ); 
            }else{
                $results=array(
                               'return'=>1,
                               'msg'=>"系统错误",
                        );
            }
            //更新产品的收藏次数
            Db::table('store_goods')->where('id',$data['goods_id'])->setInc('favorite_num',1);
        }
        echo json_encode($results);
    }

}
