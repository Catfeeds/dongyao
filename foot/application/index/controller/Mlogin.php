<?php

namespace app\index\controller;

use think\Controller;
use think\Db;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use think\facade\Validate;
use controller\BasicIndex;

/**
 * 登录
 * Class Mlogin
 * @package app\index\controller
 */
class Mlogin extends BasicIndex
{
    public $tb = "soccer_user";

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->fetch("login");
    }

    /**
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function log_go()
    {
        if (request()->isPost()) {
            $p = input("param.");
            unset($p['/index/mlogin/log_go.html']);
            $validate = Validate::make([
                'tel' => 'require|max:11',
                "pwd" => 'require|min:8'
            ], [
                'tel.require' => '手机号不能为空',
                'tel.max' => '手机号不得多于11位',
                'pwd.require' => '登录密码不能为空！',
                'pwd.min' => '登录密码长度不能少于8位有效字符！',
            ]);
            $data = [
                'tel' => $p['tel'],
                "pwd" => $p['pwd']
            ];
            $in = "";
            $inf = "";
            $validate->check($data) || $in = ["code" => 2, "msg" => $validate->getError()];
            if ($in) {
                return @json($in);

            }
            $user = db($this->tb)->where("tel", $p['tel'])->find();
            empty($user) && $inf = ["code" => 3, "msg" => "会员不存在"];
            md5($p['pwd']) != $user['md5'] && $inf = ["code" => 4, "msg" => "登陆密码不正确"];
            if ($inf) {
                return @json($inf);
            }
            session("member", $user);

            return @json(["code" => 1, "msg" => "登陆成功"]);
        }
    }

    /**
     * @return mixed
     */

    public function register()
    {
        return $this->fetch();
    }

    /**
     *
     */
    public function register_do()
    {
        if (request()->isPost()) {
            $p = input("param.");
            unset($p['index/Mlogin/register_do']);
            $validate = Validate::make([
                'tel' => 'require|max:11',
                "pwd" => 'require|min:8'
            ], [
                'tel.require' => '手机号不能为空',
                'tel.max' => '手机号不得多于11位',
                'pwd.require' => '登录密码不能为空！',
                'pwd.min' => '登录密码长度不能少于8位有效字符！',
            ]);
            $data = [
                'tel' => $p['tel'],
                "pwd" => $p['pwd']
            ];
            $in = "";
            $inf = "";
            $validate->check($data) || $in = ["code" => "4", "msg" => $validate->getError()];
            if ($in) {
                return @json($in);
            }
            $b = db($this->tb)->where("tel", $p['tel'])->find();
            isset($b['tel']) && $inf = ["code" => 3, "msg" => "会员已存在"];
            if ($inf) {
                return @json($inf);
            }
            $data['md5'] = md5($p['pwd']);
            $bb = db("soccer_user")->insertGetId($data);
            if ($bb) {
                $info = [
                    "code" => 1,
                    "msg" => "会员注册成功",
                ];
            } else {
                $info = [
                    "code" => 2,
                    "msg" => "系统故障",
                ];
            }

            return @json($info);
        }
    }

    public function log_out()
    {
        if (request()->isGet()) {
            $p = input("param.");
            session("member", null);

            return @json(["code" => 1, "msg" => "退出登录成功"]);
        }
    }

    public function forget()
    {
        return $this->fetch();
    }

    public function forget_pwd()
    {
        if (request()->isPost()) {
            $p = input("param.");
            $member = db("soccer_user")->where("tel", $p['tel'])->find();
            if ($member && session("code") == $p['pwd']) {
                return json(["code" => 1, "msg" => "验证成功，跳转密码修改页面", "url" => "/edit_pwd/" . $member['id']]);
            } else {
                return json(["code" => 2, "msg" => "系统故障"]);
            }

        }
    }

    public function edit_pwd()
    {
        $p = input("param.");
        $member = db("soccer_user")->find($p['mid']);
        return $this->fetch("", ["member" => $member]);
    }

    public function edit_do()
    {
        if (request()->isPost()) {
            $p = input("param.");
            unset($p['index/Mlogin/edit_do']);
            $member = db("soccer_user")->find($p['mid']);
            if (empty($member)) {
                return json(["code" => 3, "msg" => "会员不存在"]);
            }
            $validate = Validate::make([
                "pwd" => 'require|min:8'
            ], [
                'pwd.require' => '登录密码不能为空！',
                'pwd.min' => '登录密码长度不能少于8位有效字符！',
            ]);
            $data = [
                "pwd" => $p['pwd']
            ];
            $in = "";
            $inf = "";
            $validate->check($data) || $in = ["code" => "4", "msg" => $validate->getError()];
            if ($in) {
                return @json($in);
            }
            $ppd = [
                "pwd" => $data['pwd'],
                "md5" => md5($data['pwd']),
                "id" => $p['mid']
            ];
            $bl = db("soccer_user")->update($ppd);
            if ($bl) {
                return json(["code" => 1, "msg" => "会员密码修改成功"]);
            } else {
                return json(["code" => 2, "msg" => "系统故障"]);
            }
        }

    }

}