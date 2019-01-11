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
use think\Controller;
use think\exception\HttpResponseException;
//获取网页用户信息

/**
 * 商店商品管理
 * Class Goods
 * @package app\store\controller
 * @author Anyon <zoujingli@qq.com>
 * @date 2017/03/27 14:43
 */
class Com extends Controller
{
 

    protected $beforeActionList = [
        'first', //在执行所有方法前都会执行first方法
       // 'second' =-->  ['except'=>'hello'],       //除hello方法外的方法执行前都要先执行second方法
        //'three'  =>  ['only'=>'hello,data'],    //在hello/data方法执行前先执行three方法
    ];


    //检测是否有session信息
    protected  function first(){
              if(!session('userid')){
                //没有session信息、禁止进入个人中心
                  $url = url('index/Login/login');
                  echo "<script> window.location.href='$url' </script>";
                }
            }


}
