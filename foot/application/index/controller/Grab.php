<?php

namespace app\index\controller;

use think\Controller;
use service\HttpService;
use service\SoccerService;
use controller\BasicIndex;

class Grab extends BasicIndex
{
    /**
     * @throws \Exception
     */
    public function index()
    {
        $log = SoccerService::grab();
        $ga = model("Game");;
        if (!empty($log)) {
            $ga->saveAll($log['log']);
            echo "更新数据" . $log['aa'] . "条数据";
            echo "插入数据" . $log['bb'] . "条数据";
        } else {
            echo "无可更新数据";
        }
    }

    public function get_text()
    {

        $str = 'hello world';
        if (file_put_contents('01.txt', $str)) {
            echo '数据存入成功', '<br />';
        } else {
            echo '数据存入失败', '<br />';
        }
    }
}