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
use think\Session;

/**
 * 商店商品管理
 * Class Goods
 * @package app\store\controller
 * @author Anyon <zoujingli@qq.com>
 * @date 2017/03/27 14:43
 */
class Index extends BasicWechat
{
    //首页数据
    public function index()
    {
        //获取一级分类的信息
        $case=Db::table('store_goods_cate')->where('pid',0)->where('status',1)->where('is_deleted',0)->order('sort asc')->select();
        $this->assign('case',$case);
        //所有上架产品的信息
        //获取网站源码下的子分类
         $yuanma=Db::table('store_goods_cate')->where('pid',1)->select();
        //获取网站源码的产品
         $websource=Db::table('store_goods')->where('pid',1)->where('status',1)->order('recommend asc')->select();
         $this->assign('websource',$websource);
        //获取游戏源码
         $gamesource=Db::table('store_goods')->where('pid',2)->where('status',1)->order('recommend asc')->select();
         $this->assign('gamesource',$gamesource);
        //插件模块
         $plugsource=Db::table('store_goods')->where('pid',3)->where('status',1)->order('recommend asc')->select();
         $this->assign('plugsource',$plugsource);
        //视频模块
         $videosource=Db::table('store_goods')->where('pid',4)->where('status',1)->order('recommend asc')->select();
         $this->assign('videosource',$videosource);
         //工具模块
         $toolsource=Db::table('store_goods')->where('pid',5)->where('status',1)->order('recommend asc')->select();
         $this->assign('toolsource',$toolsource);
         //技术文章
         $techsource=Db::table('store_goods')->where('pid',6)->where('status',1)->order('recommend asc')->select();
         $this->assign('techsource',$techsource);

         //获取友情链接数据
         $link=Db::table('store_link')->where('status',1)->where('is_deleted',0)->order('sort asc')->select();
         $this->assign('link',$link);

         //获取下载记录
         $record=Db::table('store_orders')->where('is_deleted',0)->select();
         $this->assign('record',$record);

         //获取上传审核记录
         $audit=Db::table('store_audit')->where('is_deleted',0)->where('status',1)->select();
         $this->assign('audit',$audit);
         return $this->fetch();
    }

 

    //退出登录
    public function unset(){
      //删除用户信息
        session(null);
        $a=1;
        echo json_decode($a);
    }
   
    //会员相关
    public function vip()
    {
        //加载vip页面
        return $this->fetch();
    }

    //开通检测
    public function open()
    {
        if(session('userid')){
             $results=array(
                        'return'=>1,
                        'msg'   =>"请前往个人中心开通",
                        );
        }else{
             $results=array(
                        'return'=>2,
                        'msg'   =>"请先登录",
                        );
        }
        echo json_encode($results);
    }

    //联系我们
    public function contact()
    {
        return $this->fetch();
    }

    //关于我们
    public function about()
    {
        return $this->fetch();
    }

    //免责声明
    public function copyright()
    {
        return $this->fetch();
    }

    //广告合作
    public function ad()
    {
        return $this->fetch();
    }

    //本站程序
    public function down()
    {
        return $this->fetch();
    }



    //文件上传
    public function file_upload1(){
        //文件上传
        if($_FILES){
            $file = request()->file('file');
                if($file){
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->validate(['size'=>60000000,])->move('public/' . 'uploads');
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
