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
use think\Session;
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
class Login extends BasicWechat
{
    //登录
    public function login()
    {
        return $this->fetch();
    }


    //执行登录
    public function logins()
    {
      $data['username']=input('username');
      $data['password']=input('password');
      $user=Db::table('dy_users')->where('username',$data['username'])->where('password',md5($data['password']))->select();
      if($user){
        //登录成功
        //存储session信息
        session('userid',$user[0]['id']);
        //插入登录日志
        $arr['username']=$user[0]['username'];
        $arr['userid']=$user[0]['id'];
        $arr['addlogin']=date('Y-m-d H:i:s');
        Db::table('dy_login')->insert($arr);
        $a=1;
      }else{
        $a=2;
      }
      echo json_decode($a);
    }

    //注册
    public function register()
    {
        return $this->fetch();
    }



    //执行注册
    public function res()
    {
       //用户名
        $data['username']=input('username');
        //密码(加密)
        $data['password']=md5(input('password'));
        //邮箱
        $data['email']=input('email');
        //注册时间
        $data['addtime']=date('Y-m-d H:i:s');
        //用户余额
        $data['money']=0;
        //用户积分
        $data['price']=0;
        //用户等级 1普通   2钻石
        $data['members']=1;
        //执行插入
        $info=Db::table('dy_users')->where('username',$data['username'])->find();
        if($info){
          //用户名存在
          $a=1;
        }else{
          //执行插入
          $list=Db::table('dy_users')->insert($data);
          if($list){
            //插入成功
            $a=2;
          }else{
            //插入失败
            $a=3;
          }
        }

        //返回
        echo json_decode($a);
    }





}
