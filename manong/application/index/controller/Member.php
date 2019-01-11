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

/**
 * 商店商品管理
 * Class Goods
 * @package app\store\controller
 * @author Anyon <zoujingli@qq.com>
 * @date 2017/03/27 14:43
 */
class Member extends Com
{
    //个人中心首页
    public function index()
    {
        //获取用户登录信息
        $userid=session('userid');
        $users=Db::table('dy_users')->where('id',$userid)->find();
        $this->assign('users',$users);

        //获取通知(获取时间最近的10条)
        $notice=Db::table('dy_notice')->where('userid',$userid)->order('addtime desc')->limit(10)->select();
        $this->assign('notice',$notice);

        //获取config
        $config=Db::table('system_config')->select();
        $this->assign('config',$config);

        //获取登录记录
        $info=Db::table('dy_login')->where('userid',$userid)->order('addlogin desc')->limit(10)->select();
        $this->assign('info',$info);
        return $this->fetch();
    }
    











    //个人中心账号设置
    public function account()
    {
        //获取用户信息
        $id=session('userid');
        $user=Db::table('dy_users')->where('id',$id)->find();
        $this->assign('user',$user);
        return $this->fetch();
    }

    //执行修改资料
    public function accountedit()
    {
            //获取传递的信息
            $userid=session('userid');
            //qq
            $data['qq']=input('qq');
            //电话
            $data['phone']=input('phone');
            //性别
            $data['gender']=input('gender');
            //修改时间
            $data['addtime']=date('Y-m-d H:i:s');
            //签名
            $data['descr']=input('descr');
            $list=Db::table('dy_users')->where('id',$userid)->update(['qq'=>$data['qq'],'phone'=>$data['phone'],'gender'=>$data['gender'],'descr'=>$data['descr'],'addtime'=>$data['addtime']]);
            if($list){
                $a=2;//成功
            }else{
                $a=3;//失败
            }
            echo json_decode($a);
    }





    //个人中心修改密码
    public function password()
    {
        return $this->fetch();
    }





    //个人中心执行修改密码
    public function editpass()
    {
        //获取传递的信息
        $id=session('userid');
        $pass=input('password');
        $pass=md5($pass);
        $info=Db::table('dy_users')->where('password',$pass)->where('id',$id)->find();
        if($info){
            //加密新密码
            $password=input('password1');
            $password=md5($password);
            $list=Db::table('dy_users')->where('id',$id)->setField('password', $password);
            if($list){
                $a=1;//修改成功
            }else{
                $a=2;//修改失败
            }
        }else{
            $a=3;//原密码错误
        }
        echo json_decode($a);

    }

    //个人中心上传头像
    public function avatar()
    {
        //获取用户信息
        $id=session('userid');
        $user=Db::table('dy_users')->where('id',$id)->find();
        $this->assign('user',$user);
        return $this->fetch();
    }

    //个人中心执行上传头像
    public function avataredit()
    {
       //获取传递信息
       //用户id
       $id=input('id');
       //用户头像
       $userpic=input('userpic');
       $list=Db::table('dy_users')->where('id',$id)->setField('userpic', $userpic);
       if($list){
        $a=1;
       }else{
        $a=2;
       }
       echo json_decode($a);

    }















    //个人中心会员升级
    public function upgrade()
    {
        //获取用户信息
        $userid=session('userid');
        $user=Db::table('dy_users')->where('id',$userid)->find();
        $this->assign('user',$user);
        return $this->fetch();
    }

    public function level()
    {
        //获取审计用户id
        $userid=session('userid');
        $user=Db::table('dy_users')->where('id',$userid)->find();
        //获取config配置内容
        $config=Db::table('dy_config')->where('id',1)->select();
        //判断升级会员余额是否足够
        if($user['money']<$config[0]['member']){
            $results=array(
                               'return'=>1,
                               'msg'=>"余额不足,请充值",
                        );
        }else{
             //减掉用户余额
            $data['money']=$user['money']-$config[0]['member'];
            $res=Db::table('dy_users')->update(['money' => $data['money'],'id'=>$user['id']]);
            if($user['members']==2){
                    //执行续费会员
                    if($res){
                        //获取未到期的时间
                            if($user['duetotime']>time()){
                                //未到期、开始续费操作
                                //到期时间
                                $data['duetotime']=date($user['duetotime'], strtotime("+1 year"));//添加一年时间
                                //开通时间
                                $data['opentime']=time();//续费时间
                                //会员等级
                                $data['members']=2;//等级
                                //通知消息
                                $notice['userid']=$userid;//用户id
                                $notice['money']=$config[0]['member'];//花费金额
                                $notice['addtime']=date('m-d');//当前时间
                                $notice['username']=$user['username'];//用户姓名
                                $notice['userpic']=$user['userpic'];//用户头像
                                $update=Db::table('dy_users')->update(['opentime' => $data['opentime'],'members'=>$data['members'],'duetotime'=>$data['duetotime'],'id'=>$user['id']]);
                                if($update){
                                    $notice['desc']="您的会员组续费成功";
                                    Db::table('dy_notice')->insert($notice);
                                    $results=array(
                                       'return'=>5,
                                       'msg'=>"续费成功",
                                     );
                                  }else{
                                    //扣费成功   更新出错误
                                    $notice['desc']="续费有误,请联系客服";
                                    Db::table('dy_notice')->insert($notice);
                                    $results=array(
                                       'return'=>4,
                                       'msg'=>"系统错误",
                                     );
                                  }
                            }else{
                                //会员刚好到期
                                       //更新用户信息
                                    $data['opentime']=time();//开通的时间
                                    $time = date('Y',$data['opentime']) + 1 . '-' . date('m-d H:i:s');//一年后日期
                                    $time = strtotime($time);//转换时间戳
                                    $data['duetotime']=$time;//到期时间
                                    $data['members']=2;//等级
                                    //通知消息
                                    $notice['userid']=$userid;//用户id
                                    $notice['addtime']=date('m-d');//当前时间
                                    $notice['money']=$config[0]['member'];
                                     $notice['username']=$user['username'];//用户姓名
                                     $notice['userpic']=$user['userpic'];//用户头像
                                    $update=Db::table('dy_users')->update(['opentime' => $data['opentime'],'members'=>$data['members'],'duetotime'=>$data['duetotime'],'id'=>$user['id']]);
                                    if($update){
                                        $notice['desc']="您的会员开通成功";
                                        Db::table('dy_notice')->insert($notice);
                                        $results=array(
                                                   'return'=>2,
                                                   'msg'=>"开通成功",
                                            );
                                    }else{
                                                //扣费成功   更新出错误
                                                $notice['desc']="开通有误,请联系客服";
                                    Db::table('dy_notice')->insert($notice);
                                    $results=array(
                                       'return'=>4,
                                       'msg'=>"系统错误",
                                     );
                                  }
                            }
                    }else{
                        //扣款失败
                        $results=array(
                                       'return'=>3,
                                       'msg'=>"扣款失败,稍后再试",
                                );
                    }

            }else{
                    //执行开通会员   年制
                    if($res){
                        //扣款成功
                        //更新用户信息
                        $data['opentime']=time();//开通的时间
                        $time = date('Y',$data['opentime']) + 1 . '-' . date('m-d H:i:s');//一年后日期
                        $time = strtotime($time);//转换时间戳
                        $data['duetotime']=$time;//到期时间
                        $data['members']=2;//等级
                        //通知消息
                        $notice['userid']=$userid;//用户id
                        $notice['addtime']=date('m-d');//当前时间
                        $notice['money']=$config[0]['member'];//花费金额
                        $notice['username']=$user['username'];//用户姓名
                        $notice['userpic']=$user['userpic'];//用户头像
                        $update=Db::table('dy_users')->update(['opentime' => $data['opentime'],'members'=>$data['members'],'duetotime'=>$data['duetotime'],'id'=>$user['id']]);
                        if($update){
                            $notice['desc']="您的会员开通成功";
                            Db::table('dy_notice')->insert($notice);
                            $results=array(
                                       'return'=>2,
                                       'msg'=>"开通成功",
                                );
                        }else{
                                    //扣费成功   更新出错误
                                    $notice['desc']="开通有误,请联系客服";
                                    Db::table('dy_notice')->insert($notice);
                                    $results=array(
                                       'return'=>4,
                                       'msg'=>"系统错误",
                                     );
                                  }
                    }else{
                        //扣款失败
                        $results=array(
                                       'return'=>3,
                                       'msg'=>"扣款失败,稍后再试",
                                );
                    }

                } 
     }

        echo json_encode($results);       
    }






    //个人中心登录日志
    public function logins()
    {
        $userid=session('userid');
        //显示登录时间最新10条
        $info=Db::table('dy_login')->where('userid',$userid)->order('addlogin desc')->limit(10)->select();
        $this->assign('info',$info);
        return $this->fetch();
    }















    //个人中心发布中心
    public function mindex()
    {
        //获取网站顶级栏目
        $cate=Db::table('store_goods_cate')->where('pid',0)->where('status',1)->where('is_deleted',0)->select();
        $this->assign('cate',$cate);
        //用户id
        $id=session('userid');
        //是否有栏目分类id
        $cateid=input('cateid');
        if($cateid){
            //获取用户信息、查找发布过的对应的分类源码
            $list=Db::table('store_goods')->where('pid',$cateid)->where('status',1)->where('is_deleted',0)->where('user_id',$id)->select();
        }else{
            //获取用户信息、查找发布过的网站源码
            $list=Db::table('store_goods')->where('pid',1)->where('status',1)->where('is_deleted',0)->where('user_id',$id)->select();
        }
        //顶级分类id
        $this->assign('cateid',$cateid);
        $this->assign('list',$list);
        return $this->fetch();
    }



     //个人中心网站源码内容发布
    public function add()
    {
        //获取栏目分类
        $cates=Db::table('store_goods_cate')->where('pid',1)->where('status',1)->where('is_deleted',0)->select();
        $this->assign('cates',$cates);
        //获取系统品牌类
        $brand=Db::table('store_goods_brand')->where('status',1)->where('is_deleted',0)->select();
        $this->assign('brand',$brand);
        //获取开发语言类
        $language=Db::table('store_language')->where('status',1)->where('is_deleted',0)->where('pid',1)->select();
        $this->assign('language',$language);
        //获取开发语言类
        $database=Db::table('store_database')->where('status',1)->where('is_deleted',0)->select();
        $this->assign('database',$database);
        return $this->fetch();
    }

    //执行网站源码发布
    public function insert()
    {
        //获取传递的信息
        //顶级栏目id
        $data['pid']=1;
        //标题
        $data['goods_title']=input("goods_title");
        //用户id
        $data['user_id']=session('userid');
        //关键字
        $data['label']=input("label");
        //栏目分类
        $data['cate_id']=input("cate_id");
        //系统品牌
        $data['brand_id']=input("brand_id");
        //语言类
        $data['language_id']=input("language_id");
        //数据库类
        $data['database_id']=input("database_id");
        //演示地址
        $data['goods_video']=input("goods_video");
        //演示图片
        $file1=input('file1');
        $file2=input('file2');
        $file3=input('file3');
        $data['goods_image']=$file1."|".$file2."|".$file3;
        //详细内容
        $data['goods_content']=input("content");
        //上传源码地址
        $data['file']=input("files2");
        //封面主图
        $data['goods_logo']=input("files");
        //内容简介
        $data['goods_desc']=input('desc');
        //售价
        $data['price']=input("price");
        //添加时间
        $data['create_at']=date('Y-m-d H:i:s');
        //添加时间
        $data['addtime']=date('m-d');

        //分割关键字
        $explode=explode(',',$data['label']);
        //循环添加到关键字表中
        foreach($explode as $value){
        	//查询是否有这个关键字
        	$label=Db::table('store_label')->where('label',$value)->select();
        	if(!$label){
        		//不存在就插入
        		$da['label']=$value;
        		Db::table('store_label')->insert($da);
        	}
        }
        $info=Db::table('store_goods')->insert($data);
        if($info)
        {
            $a=1;
        }else
        {
            $a=0;
        }
        echo json_decode($a);

    }




    //个人中心游戏源码内容发布
    public function gameadd()
    {
        //获取栏目分类
        $cates=Db::table('store_goods_cate')->where('pid',2)->where('status',1)->where('is_deleted',0)->select();
        $this->assign('cates',$cates);
       
        //获取开发语言类
        $language=Db::table('store_language')->where('pid',2)->where('status',1)->where('pid',2)->where('is_deleted',0)->select();
        $this->assign('language',$language);
       
        //获取开发语言类
        $database=Db::table('store_database')->where('status',1)->where('is_deleted',0)->select();
        $this->assign('database',$database);
        return $this->fetch();
    }

    //执行游戏源码发布
    public function gameinsert()
    {
        //获取传递的信息
        //y用户id
        $data['user_id']=session('userid');
        //顶级分类的id
        $data['pid']=2;
        //标题
        $data['goods_title']=input("goods_title");
        //关键字
        $data['label']=input("label");
        //栏目分类
        $data['cate_id']=input("cate_id");
        //语言类
        $data['language_id']=input("language_id");
        //数据库类
        $data['database_id']=input("database_id");
        //演示地址
        $data['goods_video']=input("goods_video");
        //演示图片
        $file1=input('file1');
        $file2=input('file2');
        $file3=input('file3');
        $data['goods_image']=$file1."|".$file2."|".$file3;
        //内容简介
        $data['goods_desc']=input('desc');
        //详细内容
        $data['goods_content']=input("content");
        //上传源码地址
        $data['file']=input("files2");
        //封面主图
        $data['goods_logo']=input("files");
        //售价
        $data['price']=input("price");
        //添加时间
        $data['create_at']=date('Y-m-d H:i:s');
        //添加时间
        $data['addtime']=date('m-d');
        
        //分割关键字
        $explode=explode(',',$data['label']);
        //循环添加到关键字表中
        foreach($explode as $value){
        	//查询是否有这个关键字
        	$label=Db::table('store_label')->where('label',$value)->select();
        	if(!$label){
        		//不存在就插入
        		$da['label']=$value;
        		Db::table('store_label')->insert($da);
        	}
        }

        $info=Db::table('store_goods')->insert($data);
        if($info)
        {
            $a=1;
        }else
        {
            $a=0;
        }
        echo json_decode($a);

    }






    //个人中心插件源码内容发布
    public function pluginadd()
    {
        //获取栏目分类
        $cates=Db::table('store_goods_cate')->where('pid',3)->where('status',1)->where('is_deleted',0)->select();
        $this->assign('cates',$cates);
       
        //获取开发语言类
        $language=Db::table('store_language')->where('pid',3)->where('status',1)->where('is_deleted',0)->select();
        $this->assign('language',$language);
        return $this->fetch();
    }





   //执行插件源码发布
    public function plugininsert()
    {
        //获取传递的信息
        //用户id
        $data['user_id']=session('userid');
        //顶级分类的id
        $data['pid']=3;
         //用户id
        $data['user_id']=session('userid');
        //标题
        $data['goods_title']=input("goods_title");
        //关键字
        $data['label']=input("label");
        //栏目分类
        $data['cate_id']=input("cate_id");
        //语言类
        $data['language_id']=input("language_id");
        //演示地址
        $data['goods_video']=input("goods_video");
        //内容简介
        $data['goods_desc']=input('desc');
        //详细内容
        $data['goods_content']=input("content");
        //上传源码地址
        $data['file']=input("files2");
        //封面主图
        $data['goods_logo']=input("files");
        //售价
        $data['price']=input("price");
        //添加时间
        $data['create_at']=date('Y-m-d H:i:s');
        //添加时间
        $data['addtime']=date('m-d');
         //演示图片
        $file1=input('file1');
        $file2=input('file2');
        $file3=input('file3');
        $data['goods_image']=$file1."|".$file2."|".$file3;

        //分割关键字
        $explode=explode(',',$data['label']);
        //循环添加到关键字表中
        foreach($explode as $value){
        	//查询是否有这个关键字
        	$label=Db::table('store_label')->where('label',$value)->select();
        	if(!$label){
        		//不存在就插入
        		$da['label']=$value;
        		Db::table('store_label')->insert($da);
        	}
        }
        $info=Db::table('store_goods')->insert($data);
        if($info)
        {
            $a=1;
        }else
        {
            $a=0;
        }
        echo json_decode($a);

    }





    //个人中心视频教程源码内容发布
    public function videoadd()
    {
        //获取栏目分类
        $cates=Db::table('store_goods_cate')->where('pid',4)->where('status',1)->where('is_deleted',0)->select();
        $this->assign('cates',$cates);
        
        //获取开发语言类
        $language=Db::table('store_language')->where('pid',4)->where('status',1)->where('is_deleted',0)->select();
        $this->assign('language',$language);
        return $this->fetch();
    }


   //执行视频源码发布
    public function videoinsert()
    {
        //获取传递的信息
        //用户id
        $data['user_id']=session('userid');
        //顶级分类的id
        $data['pid']=4;
        //标题
        $data['goods_title']=input("goods_title");
        //关键字
        $data['label']=input("label");
        //栏目分类
        $data['cate_id']=input("cate_id");
        //语言类
        $data['language_id']=input("language_id");
        //演示地址
        $data['goods_image']=input("goods_image");
        //内容简介
        $data['goods_desc']=input('desc');
        //详细内容
        $data['goods_content']=input("content");
        //上传源码地址
        $data['file']=input("files2");
        //封面主图
        $data['goods_logo']=input("files");
        //售价
        $data['price']=input("price");
        //添加时间
        $data['create_at']=date('Y-m-d H:i:s');
        //添加时间
        $data['addtime']=date('m-d');
         //演示图片
        $file1=input('file1');
        $file2=input('file2');
        $file3=input('file3');
        $data['goods_image']=$file1."|".$file2."|".$file3;

         //分割关键字
        $explode=explode(',',$data['label']);
        //循环添加到关键字表中
        foreach($explode as $value){
        	//查询是否有这个关键字
        	$label=Db::table('store_label')->where('label',$value)->select();
        	if(!$label){
        		//不存在就插入
        		$da['label']=$value;
        		Db::table('store_label')->insert($da);
        	}
        }

        $info=Db::table('store_goods')->insert($data);
        if($info)
        {
            $a=1;
        }else
        {
            $a=0;
        }
        echo json_decode($a);

    }


 //个人中心精品工具源码内容发布
    public function tooladd()
    {
        //获取栏目分类
        $cates=Db::table('store_goods_cate')->where('pid',5)->where('is_deleted',0)->where('status',1)->select();
        $this->assign('cates',$cates);
       
        //获取开发语言类
        $language=Db::table('store_language')->where('pid',5)->where('is_deleted',0)->where('status',1)->select();
        $this->assign('language',$language);
        return $this->fetch();
    }
    //执行精品工具发布
    public function toolinsert()
    {
        //获取传递的信息
        //用户id
        $data['user_id']=session('userid');
        //顶级分类的id
        $data['pid']=5;
        //标题
        $data['goods_title']=input("goods_title");
        //关键字
        $data['label']=input("label");
        //栏目分类
        $data['cate_id']=input("cate_id");
        //语言类
        $data['language_id']=input("language_id");
        //演示地址
        $data['goods_video']=input("goods_video");
        //内容简介
        $data['goods_desc']=input('desc');
        //详细内容
        $data['goods_content']=input("content");
        //上传源码地址
        $data['file']=input("files2");
        //封面主图
        $data['goods_logo']=input("files");
        //售价
        $data['price']=input("price");
        //演示图片
        $file1=input('file1');
        $file2=input('file2');
        $file3=input('file3');
        $data['goods_image']=$file1."|".$file2."|".$file3;
        //添加时间
        $data['create_at']=date('Y-m-d H:i:s');
        //添加时间
        $data['addtime']=date('m-d');

        //分割关键字
        $explode=explode(',',$data['label']);
        //循环添加到关键字表中
        foreach($explode as $value){
        	//查询是否有这个关键字
        	$label=Db::table('store_label')->where('label',$value)->select();
        	if(!$label){
        		//不存在就插入
        		$da['label']=$value;
        		Db::table('store_label')->insert($da);
        	}
        }
        $info=Db::table('store_goods')->insert($data);
        if($info)
        {
            $a=1;
        }else
        {
            $a=0;
        }
        echo json_decode($a);

    }




       
       
       
       


     //个人中心文章内容发布
    public function technologyadd()
    {
        //获取栏目分类
        $cates=Db::table('store_goods_cate')->where('pid',6)->where('status',1)->where('is_deleted',0)->select();
        $this->assign('cates',$cates);
        return $this->fetch();
    }




    //执行文章源码发布
    public function technologyinsert()
    {
        //获取传递的信息
        //用户id
        $data['user_id']=session('userid');
        //顶级分类的id
        $data['pid']=6;
        //标题
        $data['goods_title']=input("goods_title");
        //关键字
        $data['label']=input("label");
        //栏目分类
        $data['cate_id']=input("cate_id");
        //详细内容
        $data['goods_content']=input("content");
        //封面主图
        $data['goods_logo']=input("files");
        //添加时间
        $data['create_at']=date('Y-m-d H:i:s');
        //添加时间
        $data['addtime']=date('m-d');
        //分割关键字
        $explode=explode(',',$data['label']);
        //循环添加到关键字表中
        foreach($explode as $value){
        	//查询是否有这个关键字
        	$label=Db::table('store_label')->where('label',$value)->select();
        	if(!$label){
        		//不存在就插入
        		$da['label']=$value;
        		Db::table('store_label')->insert($da);
        	}
        }
        $info=Db::table('store_goods')->insert($data);
        if($info)
        {
            $a=1;
        }else
        {
            $a=0;
        }
        echo json_decode($a);

    }











    //个人中心待审核内容
    public function verify()
    {
       //获取网站顶级栏目
        $cate=Db::table('store_goods_cate')->where('pid',0)->where('status',1)->where('is_deleted',0)->select();
        $this->assign('cate',$cate);
        //用户id
        $id=session('userid');
        //是否有栏目分类id
        $cateid=input('cateid');
        if($cateid){
            //获取用户信息、查找发布过的对应的分类源码
            $list=Db::table('store_goods')->where('pid',$cateid)->where('status',0)->where('is_deleted',0)->select();
        }
       
        $this->assign('list',$list);
        return $this->fetch();
    }




    //个人中心我的购买
    public function buy()
    {
        //用户id
        $userid=session('userid');
        //分类id
        $pid=input('cateid');
        $list=Db::table('store_orders')->where('userid',$userid)->where('pid',$pid)->select();
        $this->assign('list',$list);
        return $this->fetch();
    }


    //个人中心我的收藏
    public function favorite()
    {
        //用户id
        $userid=session('userid');
        //分类id
        $pid=input('cateid');
        $list=Db::table('store_orders_collection')->where('userid',$userid)->where('pid',$pid)->select();
        $this->assign('list',$list);
        return $this->fetch();
    }



    //个人中心我的收藏删除
    public function fadelete()
    {
        $id=input('id');
        $res=Db::table('store_orders_collection')->where('id',$id)->delete();
        if($res){
             $results=array(
                               'return'=>1,
                               'msg'=>"删除成功",
                        );
        }else{
             $results=array(
                               'return'=>2,
                               'msg'=>"删除失败",
                        );
        }
        echo json_encode($results);
    }


    //个人中心我的评论
    public function comment()
    {
    	 //用户id
        $userid=session('userid');
        //分类id
        $pid=input('cateid');
        $list=Db::table('store_orders_comments')->where('userid',$userid)->where('pid',$pid)->select();
        $this->assign('list',$list);
        return $this->fetch();
    }


    //个人中心我的评论删除
    public function comdelete()
    {
        $id=input('id');
        $res=Db::table('store_orders_comments')->where('id',$id)->delete();
        if($res){
             $results=array(
                               'return'=>1,
                               'msg'=>"删除成功",
                        );
        }else{
             $results=array(
                               'return'=>2,
                               'msg'=>"删除失败",
                        );
        }
        echo json_encode($results);
    }




    //个人中心在线充值
    public function topup()
    {
        return $this->fetch();
    }
    //执行积分充值
    public function up()
    {
        //充值的金额
        $price=input('price');
        //获取用户信息
        $userid=session('userid');
        $user=Db::table('dy_users')->where('id',$userid)->find();
        if($user['money']<$price){
            //余额不足
             $results=array(
                               'return'=>1,
                               'msg'=>"余额不足,请充值",
                        );
        }else{
            //扣除余额
            $data['money']=$user['money']-$price;//减余额
            $data['price']=$user['price']+$price;//加积分
            $update=Db::table('dy_users')->update(['money' => $data['money'],'price'=>$data['price'],'id'=>$user['id']]);
            if($update){
                $da['addtime']=date('Y-m-d H:i:s');//充值时间
                $da['userid']=$userid;//用户id
                $da['price']=$price;//充值积分
                $da['username']=$user['username'];//用户姓名
                $da['userpic']=$user['userpic'];//用户头像
                $info=Db::table('dy_up')->insert($da);//插入充值记录
                 $results=array(
                                   'return'=>2,
                                   'msg'=>"积分充值成功",
                            );  
            }else{
               $results=array(
                                   'return'=>3,
                                   'msg'=>"余额扣除有误,请联系客服",
                            );   
            }
           
        }

      echo json_encode($results);
    }



    //个人中心充值余额
    public function  balance()
    {
        return $this->fetch();
    }



    //个人中心充值记录
    public function  payment()
    {
        return $this->fetch();
    }



    //个人中心消费记录
    public function  eliminate()
    {
        $userid=session('userid');
        $up=Db::table('dy_up')->where('userid',$userid)->select();
        $this->assign('up',$up);
        return $this->fetch();
    }



  //会员开通记录
    public function vipup()
    {
        $userid=session('userid');
        $notice=Db::table('dy_notice')->where('userid',$userid)->select();
        $this->assign('notice',$notice);
        return $this->fetch();
    }


    //文件上传
    public function file_upload2(){
        //文件上传
        if($_FILES){
            $file = request()->file('file');
            if($file){
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->validate(['size'=>156780000,])->move('public' . '/' . 'uploads');
                if($file->getError()){
                    // 上传失败获取错误信息
                    $this->error($file->getError());
                }
                $str= 'http://'.$_SERVER['SERVER_NAME'].'/public/uploads/'.$info->getSaveName();
                $data['code']=1;
                $data['file']=$str;
                $userid=session('userid');
                Db::table('dy_users')->where('id',$userid)->setField('userpic', $str);
                exit(json_encode($data));
            }
        }
    }




    //文件上传
    public function file_upload(){
        //文件上传
        if($_FILES){
            $file = request()->file('file');
            if($file){
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->validate(['size'=>156780000,])->move('public' . '/' . 'uploads');
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
