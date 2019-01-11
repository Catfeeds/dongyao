<?php
namespace app\index\controller;
use think\Controller;

/**
 * 会员
 * Class Member
 * @package app\index\controller
 */
class Member extends Controller{
    /**
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index()
    {
        $user=session("member");
        $pending_payment=db("store_order")->where(["mid"=>$user['id'],"status"=>1])->count();
        $pending_delivery=db("store_order")->where(["mid"=>$user['id'],"status"=>2])->count();
        $goods_to_be_received=db("store_order")->where(["mid"=>$user['id'],"status"=>3])->count();
        $order=db("store_order")->where(["mid"=>$user['id']])->select();
        foreach ($order as $k=>$v){
            $ol=db("store_order_list")
                ->alias("ol")
                ->field("ol.*,sg.goods_title,sg.goods_logo")
                ->join("store_goods sg","sg.id=ol.gid")
                ->where("order_id",$v['id'])
                ->select();
            $order[$k]['list']=$ol;
        }
        return $this->fetch("",[
            "pending_payment"=>$pending_payment,
            "pending_delivery"=>$pending_delivery,
            "goods_to_be_received"=>$goods_to_be_received,
            "order"=>$order
        ]);
    }

    public function favorite()
    {
        return $this->fetch();
    }

    public function mem_order()
    {
        return $this->fetch();
    }

}