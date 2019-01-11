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

use controller\BasicIndex;

/**
 * 应用入口控制器
 * @author Anyon <zoujingli@qq.com>
 */
class Index extends BasicIndex
{
    /**
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @return mixed
     */
    public function index()
    {
        $p = input("param.");
        if (is_weixin()) {
            $openid = $this->getOpenid();
        }
      
        $w = [];
        $lid = 2;
        $tim = array("t1" => date("Y-m-d", strtotime("-1 day")), "t2" => date("Y-m-d", time()), "t3" => date("Y-m-d", strtotime("+1 day")));
        extract($tim);
        if (isset($p['lid'])) {
            $lid = $p['lid'];
            switch ($lid) {
                case '1':
                    $w['tim2'] = $t1;//昨天记录
                    break;
                case '2':
                    $w['tim2'] = $t2;//今天记录
                    break;
                case '3':
                    $w['tim2'] = $t3;//明天记录
                    break;
                default:
                    $w['tim2'] = $t2;//默认
                    break;
            }

        } else {
            $w['tim2'] = $t2;
        }
        $this->assign("lid", $lid);
        $game = db('soccer_game')
            ->where($w)
            ->fetchSql(false)
            ->select();//今天的记录
        return $this->fetch("", ["game" => $game]);

    }

    public function iframe()
    {
        $p = input("param.");
        $iid = $p['iid'];
        $g = db("soccer_game")->find($iid);
        return $this->fetch("", ["g" => $g]);
    }

    /**
     *
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function get_detail()
    {
        if (request()->isPost()) {
            $p = input("param.");
            $iid = $p['iid'];
            $g = db("soccer_game")->find($iid);
            $main_let = explode(",", $g['main_let']);
            $visit_let = explode(",", $g['visit_let']);
            $score = explode(",", $g['win']);
            $goal = explode(",", $g['goal']);
            $half = explode(",", $g['half']);
            $st = '<div id="goodcover" style="display: block;"></div>
<div class="code" id="discode" style="display: block;">
    <div class="close1">
        <a href="javascript:void(0)" id="closebt"></a>
    </div>
    <div class="goodtxt">
        <p>' . $g['main'] . 'vs.' . $g['visit'] . '</p>
        <p class="em">篮球区域可投单关</p>
    </div>
    <div class="code-img">

        <div class="vstit-fr">
            <div class="topa a">
                <b class="brq">非让球</b>
                <div class="fr">             
                    <div>胜<em>' . $main_let[0] . '</em></div>
                    <div>平<em>' . $main_let[1] . '</em></div>
                    <div>负<em>' . $main_let[2] . '</em></div>
                </div>
            </div>
        </div>
        <div class="vstit-fr">
            <div class="topa a">
                <b class="zhu">主</br>-1</b>
                <div class="fr">
                    <div>胜<em>' . $visit_let[0] . '</em></div>
                    <div>平<em>' . $visit_let[1] . '</em></div>
                    <div>负<em>' . $visit_let[2] . '</em></div>
                </div>
            </div>
        </div>
        <div class="vstit-fr">
            <div class="topa f">
                <div class="zhu">猜比分</div>
                <div class="fr">
                    <div data-score="{$score[0]}">1:0<br/><em>' . $score[0] . '</em></div>
                    <div>2:0<br/><em>' . $score[1] . '</em></div>
                    <div>2:1<br/><em>' . $score[2] . '</em></div>
                    <div>3:0<br/><em>' . $score[3] . '</em></div>
                    <div>3:1<br/><em>' . $score[4] . '</em></div>
                    <div>3:2<br/><em>' . $score[5] . '</em></div>
                    <div>4:0<br/><em>' . $score[6] . '</em></div>
                    <div>4:1<br/><em>' . $score[7] . '</em></div>
                    <div>4:2<br/><em>' . $score[8] . '</em></div>
                    <div>5:0<br/><em>' . $score[9] . '</em></div>
                    <div>5:1<br/><em>' . $score[10] . '</em></div>
                    <div>5:2<br/><em>' . $score[11] . '</em></div>
                    <div class="san">胜其他<br/><em>' . $score[12] . '</em></div>
                    <div>0:0<br/><em>' . $score[13] . '</em></div>
                    <div>1:1<br/><em>' . $score[14] . '</em></div>
                    <div>2:2<br/><em>' . $score[15] . '</em></div>
                    <div>3:3<br/><em>' . $score[16] . '</em></div>
                    <div>平其他<br/><em>' . $score[17] . '</em></div>
                    <div>0:1<br/><em>' . $score[18] . '</em></div>
                    <div>0:2<br/><em>' . $score[19] . '</em></div>
                    <div>1:2<br/><em>' . $score[20] . '</em></div>
                    <div>0:3<br/><em>' . $score[21] . '</em></div>
                    <div>1:3<br/><em>' . $score[22] . '</em></div>
                    <div>2:3<br/><em>' . $score[23] . '</em></div>
                    <div>0:4<br/><em>' . $score[24] . '</em></div>
                    <div>1:4<br/><em>' . $score[25] . '</em></div>
                    <div>2:4<br/><em>' . $score[26] . '</em></div>
                    <div>0:5<br/><em>' . $score[27] . '</em></div>
                    <div>1:5<br/><em>' . $score[28] . '</em></div>
                    <div>2:5<br/><em>' . $score[29] . '</em></div>

                    <div class="san">负其他<br/><em>' . $score[30] . '</em></div>
                </div>
            </div>
        </div>
        <div class="vstit-fr">
            <div class="topa s">
                <div class="zhu">进球数</div>
                <div class="fr">
                    <div>1:0<br/><em>' . $goal[0] . '</em></div>
                    <div>2:0<br/><em>' . $goal[1] . '</em></div>
                    <div>2:1<br/><em>' . $goal[2] . '</em></div>
                    <div>3:0<br/><em>' . $goal[3] . '</em></div>
                    <div>1:0<br/><em>' . $goal[4] . '</em></div>
                    <div>2:0<br/><em>' . $goal[5] . '</em></div>
                    <div>2:1<br/><em>' . $goal[6] . '</em></div>
                    <div>3:0<br/><em>' . $goal[7] . '</em></div>
                </div>
            </div>
        </div>
        <div class="vstit-fr">
            <div class="topa ff">
                <div class="zhu" style="height: 92px;">半全场</div>
                <div class="fr">                 
                    <div>胜胜<br/><em>' . $half[0] . '</em></div>
                    <div>胜平<br/><em>' . $half[1] . '</em></div>
                    <div>胜负<br/><em>' . $half[2] . '</em></div>
                    <div>平胜<br/><em>' . $half[3] . '</em></div>
                    <div>平平<br/><em>' . $half[4] . '</em></div>
                    <div>平负<br/><em>' . $half[5] . '</em></div>
                    <div>负胜<br/><em>' . $half[6] . '</em></div>
                    <div>负平<br/><em>' . $half[7] . '</em></div>
                    <div>负负<br/><em>' . $half[8] . '</em></div>
                </div>
            </div>
        </div>
    </div>
    <div class="butomdiv">
        <div class="butqx" onclick="close1()">取消</div>
        <div class="butqd" onclick="en()">确定</div>
    </div>
</div>';
            echo $st;
        }
    }

    public function read()
    {
        echo 123;
    }
}
