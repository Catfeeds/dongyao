<?php

namespace service;
class SoccerService
{

    /**
     * 采集比赛数据
     * @return array
     */
    public static function grab()
    {
        $url = "http://info.sporttery.cn/interface/interface_mixed.php?action=fb_list&pke=0.8283585370195998&_=1542849886279";
        $data = HttpService::get($url, "", ["header" => array("Content-Type:application/json;charset=utf-8")]);
        $curl_result = mb_convert_encoding($data, 'utf-8', 'GBK,UTF-8,ASCII');
        $l1 = explode("var data=", $curl_result);
        $l2 = explode(";getData();", $l1[1]);
        $game = json_decode($l2[0], 1);
        $log = self::assemble_game($game);
        // $log = assemble_game($game);//执行方法拼装数据
        return $log;
    }

    /**
     * 拼装比赛数据
     * @param $game
     * @return array
     */
    public static function assemble_game($game)
    {
        $log = [];
        $aa = 0;
        $bb = 0;
        foreach ($game as $k => $v) {
            $visit_let = implode(",", $v[1]);//客场让球胜负
            $win = implode(",", $v[2]);//胜平负
            $goal = implode(",", $v[3]);//进球胜负
            $half = implode(",", $v[4]);//半场胜负
            $main_let = implode(",", $v[5]);//主场让球
            $f = explode("$", $v[0][2]);
            $game = db("soccer_game")->field("id")->where("issue", $v[0][4])->find();
            if (!empty($game)) {//如果存在记录
                $a = [
                    "id" => $game['id'],
                    "color" => $v[0][5],//颜色
                    "m1" => $v[0][9],//待定1
                    "m2" => $v[0][10],//待定2
                    "tim2" => $v[0][11],//时间2
                    "num1" => $v[0][12],//待定数目1
                    "num2" => $v[0][13],//待定数目1
                    "visit_let" => $visit_let,//客队让球胜负
                    "win" => $win,//胜负平
                    "goal" => $goal,//进球胜负赔率
                    "half" => $half,//半场胜负赔率
                    "main_let" => $main_let,//主场让球赔率
                    "let" => $f[1],
                ];

                $log[] = $a;
                $aa++;
            } else {
                $b = [
                    "chang" => $v[0][0],//场次
                    "abb" => $v[0][1],//简称
                    "g_name" => $v[0][2],//赛事名
                    "tim" => $v[0][3],//时间
                    "issue" => $v[0][4],//期号
                    "color" => $v[0][5],//颜色
                    "full" => $v[0][6],//全称
                    "main" => $v[0][7],//主队
                    "visit" => $v[0][8],//客队
                    "m1" => $v[0][9],//待定1
                    "m2" => $v[0][10],//待定2
                    "tim2" => $v[0][11],//时间2
                    "num1" => $v[0][12],//待定数目1
                    "num2" => $v[0][13],//待定数目1
                    "visit_let" => $visit_let,//客队让球胜负
                    "win" => $win,//胜负平
                    "goal" => $goal,//进球胜负赔率
                    "half" => $half,//半场胜负赔率
                    "main_let" => $main_let,//主场让球赔率
                    "let" => $f[1],
                    "update_time" => time(),
                ];

                $log[] = $b;
                $bb++;
            }

        }
        return ["log" => $log, "aa" => $aa, "bb" => $bb];
    }

    /**
     * 开奖结果数据处理，拼装数组
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function manage()
    {
        $log = self::get_result();//开奖结果采集
        foreach ($log as $k1 => $v1) {
            $s = "";//上半场
            $res = "";//全场
            $jin = "";//下半场
            $zong = "";
            $s1 = "";
            $s2 = "";
            $f = "";
            //全场比分不为空
            if ($v1["full"] && $v1['full'] != "取消") {
                $f = explode(":", $v1['full']);
                $zong = $f[0] + $f[1];
                $log[$k1]["zong"] = $zong;//全场总进球
                /***比分胜平负 start***/
                $score = self::score_win($f, $v1['full']);
                /***比分胜平负 end***/
                /***总进球 start***/
                $jin = self::goal($zong);
                /***总进球 end***/
            } else {
                $log[$k1]["zong"] = "";//全场总进球
                $score = "";
                $jin = "";
            }

            if (($v1['full'] && $v1['full'] != "取消") && ($v1['half'] && $v1['half'] != "取消")) {
                $q = explode(":", $v1['full']);//全场
                $f = explode(":", $v1['half']);//上半场

                if ($q[0] >= $f[0] && $q[1] >= $f[1]) {
                    $s1 = $q[0] - $f[0];//下半场主场比分
                    $s2 = $q[1] - $f[1];//下半场主可比分
                } else {
                    $s1 = $f[0] - $q[0];//下半场主场比分
                    $s2 = $f[1] - $q[1];//下半场客场比分
                }


                $default_win = self::rtg($q, 1, "");//普通胜平负
                $let_win = self::rtg($q, 2, $v1);//让球胜平负
                $log[$k1]['second_half'] = self::second_ch($s1, $s2);//下半场比分
                $full_win = self::full_ch($f, $s1, $s2);//半全场胜平负，双子
                $log[$k1]["res"] = $full_win . "|" . $let_win . "|" . $default_win . "|" . $jin . "|" . $score;
            }


        }
        //去重处理
        foreach ($log as $kk => $vv) {
            $bool = db("soccer_result")->where(["issue" => $vv['issue']])->find();
            if ($bool) {
                unset($log[$kk]);
            }
        }

        return $log;
    }

    /**
     * 开奖结果采集
     * @return array
     */
    public static function get_result()
    {

        //抓取开启
        $aa = [];
        $url = "http://info.sporttery.cn/football/match_result.php";//抓取地址
        $data = HttpService::get($url);
        $log = [];
        if (!empty($data)) {
            $curl_result = mb_convert_encoding($data, 'utf-8', 'GBK,UTF-8,ASCII');//gbk转utf-8
            //匹配开始
            preg_match_all("/<span class=\"blue\">(.*?)<\/span>/", $curl_result, $out1);//半场积分
            preg_match_all("/<span class=\"u-org\" style=\"font-weight:bold; font-size:13px;\">(.*?)<\/span>/", $curl_result, $out2);//全场比分(90分钟)
            preg_match_all("/<td width=\"55\"><span (.*?)>(.*?)<\/span><\/td>/", $curl_result, $out3);//胜，负，平


            preg_match_all("/<a href=\"http:\/\/info.sporttery.cn\/football\/info\/fb_match_hhad.php\?m=(.*?)\" target=\"_blank\">奖<\/a>/", $curl_result, $out4);//半场积分
            preg_match_all("/<span class=\"zhu\" style=\"width:128px\" title=\"(.*?)\">(.*?)\((.*?)\)<\/span>/", $data, $out5);
            preg_match_all("/<td width=\"86\">(.*?)<\/td>/", $curl_result, $out6);
            $sh = $out3[2];
            $half = $out1[1];
            $full = $out2[1];
            $issue = $out4[1];
            $let = $out5[3];
            $ret = $out6[1];
            $sh1 = array_chunk($sh, 3);
//匹配结束
            //筛选数据开始

            foreach ($half as $k => $v) {
                $log[] = [
                    "issue" => $issue[$k],//期号
                    "half" => $v,//半场比分
                    "full" => $full[$k],//全场比分
                    "win" => $sh1[$k][0],//胜
                    "flat" => $sh1[$k][1],//平
                    "lost" => $sh1[$k][2],//负
                    "let" => $let[$k],
                    "status" => $ret[$k] == "进行中" ? 1 : 2,
                ];
            }
            foreach ($log as $kk => $vv) {
                $bl = db("soccer_result")->where("issue", $vv['issue'])->find();
                if ($bl) {
                    unset($log[$kk]);
                }
            }
            //晒寻数据结束
        }

        return $log;
    }


    /**
     * 比分胜平负
     * @param $f
     * @param $v1
     * @return int|string
     */
    public static function score_win($f, $v1)
    {
        $score = "";
        switch ($f) {
            case $f[0] > $f[1]://胜
                switch ($v1) {
                    case "1:0":
                        $score = 21;
                        break;
                    case "2:0":
                        $score = 22;
                        break;
                    case "2:1":
                        $score = 23;
                        break;
                    case "3:0":
                        $score = 24;
                        break;
                    case "3:1":
                        $score = 25;
                        break;
                    case "3:2":
                        $score = 26;
                        break;
                    case "4:0":
                        $score = 27;
                        break;
                    case "4:1":
                        $score = 28;
                        break;
                    case "4:2":
                        $score = 29;
                        break;
                    case "5:0":
                        $score = 30;
                        break;
                    case "5:1":
                        $score = 31;
                        break;
                    case "5:2":
                        $score = 32;
                        break;
                    default:
                        $score = 33;
                        break;
                }
                break;
            case $f[0] == $f[1]://平
                if ($f[0] == $f[1]) {
                    switch ($v1) {
                        case "0:0":
                            $score = 34;
                            break;
                        case "1:1":
                            $score = 35;
                            break;
                        case "2:2":
                            $score = 36;
                            break;
                        case "3:3":
                            $score = 37;
                            break;
                        default:
                            $score = 38;
                            break;
                    }
                }
                break;
            case $f[0] < $f[1]://负
                if ($f[0] < $f[1]) {
                    switch ($v1) {
                        case "0:1":
                            $score = 39;
                            break;
                        case "0:2":
                            $score = 40;
                            break;
                        case "1:2":
                            $score = 41;
                            break;
                        case "0:3":
                            $score = 42;
                            break;
                        case "1:3":
                            $score = 43;
                            break;
                        case "2:3":
                            $score = 44;
                            break;
                        case "0:4":
                            $score = 45;
                            break;
                        case "1:4":
                            $score = 46;
                            break;
                        case "2:4":
                            $score = 47;
                            break;
                        case "0:5":
                            $score = 48;
                            break;
                        case "1:5":
                            $score = 49;
                            break;
                        case "2:5":
                            $score = 50;
                            break;
                        default:
                            $score = 51;
                            break;
                    }
                }
                break;
            default:
        }
        return $score;
    }

    /**
     * 进球个数
     * @param $zong
     * @return int
     */
    public static function goal($zong)
    {
        switch ($zong) {
            case 0:
                $jin = 13;
                break;
            case 1:
                $jin = 14;
                break;
            case 2:
                $jin = 15;
                break;
            case 3:
                $jin = 16;
                break;
            case 4:
                $jin = 17;
                break;
            case 5:
                $jin = 18;
                break;
            case 6:
                $jin = 19;
                break;
            default:
                $jin = 20;
                break;

        }
        return $jin;
    }

    /**
     * 下半场比分
     * @param $s1
     * @param $s2
     * @return string
     */
    public static function second_ch($s1, $s2)
    {
        $s = '';
        /**下半场比分 start**/
        switch ($s1) {
            case $s1 >= 0 && $s2 >= 0:
                $s = $s1 . ":" . $s2;
                break;
            case $s1 >= 0 && $s2 < 0:
                $s = $s1 . ":" . $s2;
                break;
            case $s1 < 0 && $s2 < 0:
                $s = $s1 . ":" . $s2;
                break;
            case $s1 < 0 && $s2 >= 0:
                $s = $s1 . ":" . $s2;
                break;
        }
        return $s;
        /**下半场比分 end**/
    }

    /**
     *   半全场胜负平
     * @param $f
     * @param $s1
     * @param $s2
     * @return int|string
     */
    public static function full_ch($f, $s1, $s2)
    {
        //$f[0]
        $res = "";
        /**半全场胜平负 start**/
        switch ($f) {
            case $f[0] - $f[1] > 0 && $s1 - $s2 > 0://胜胜
                $res = 4;
                $ref = "胜胜";
                break;
            case $f[0] > $f[1] && $s1 == (int)$s2://胜平
                $res = 5;
                $ref = "胜平";
                break;
            case $f[0] > $f[1] && $s1 < $s2://胜负
                $res = 6;
                $ref = "胜负";
                break;
            case $f[0] == $f[1] && $s1 > $s2://平胜
                $res = 7;
                $ref = "平胜";
                break;
            case $f[0] == $f[1] && $s1 == $s2://平平
                $res = 8;
                $ref = "平平";
                break;
            case $f[0] == $f[1] && $s1 < $s2://平负
                $res = 9;
                $ref = "平负";
                break;
            case $f[0] < $f[1] && $s1 > $s2://负胜
                $res = 10;
                $ref = "负胜";
                break;
            case $f[0] < $f[1] && $s1 == $s2://负平
                $res = 11;
                $ref = "负平";
                break;
            case $f[0] < $f[1] && $s1 < $s2://负负
                $res = 12;
                $ref = "负负";
                break;
        }
        return $res;
        /**半全场胜平负  end**/
    }

    /**
     * 普通胜负平，让球胜负平
     * @param $q
     * @param $ty
     * @param $v1
     * @return int|string
     */
    public static function rtg($q, $ty, $v1)
    {
        $p1 = "";
        if ($ty == 1) {//普通胜平负
            switch ($q) {
                case $q[0] > $q[1]://胜
                    $p1 = 52;

                    break;
                case $q[0] == $q[1]://平
                    $p1 = 53;
                    break;
                case $q[0] < $q[1]://负
                    $p1 = 54;
                    break;
                default:
                    break;

            }
        } else if ($ty == 2) {
            $fp = $q[0] + (int)$v1['let'];
            switch ($fp) {
                case $fp > $q[1]://胜
                    $p1 = 1;
                    break;
                case $fp == $q[1]://平
                    $p1 = 2;
                    break;
                case $fp < $q[1]://负
                    $p1 = 3;
                    break;
                default:
                    break;

            }
        }
        return $p1;

    }

    /**
     * 开奖结果匹配
     * @param $plan
     * @param $uid
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public static function check_result($plan)
    {
        $ii = 0;
        $if = 0;
        if (!empty($plan)) {
            foreach ($plan as $k => $v) {
                $bool = db("soccer_result")->where(["issue" => $v['issue']])->value("res");
                if ($bool != "") {
                    $arr = explode("|", $bool);
                    $bp = in_array($v['fe_id'], $arr);
                    if ($bp) {//中
                        $b1 = db("soccer_plan")->update(["id" => $v['id'], "is_bid" => 2, "p_status" => 2]);
                        if ($b1) {
                            //$bb1 = db("soccer_expert")->where(["id" => $v['eid']])->setInc("ex_zhong", 1);
                            $bb1 = self::expert_add($v['eid'], "ex_zhong");
                            db("soccer_expert")->where(["id" => $v['eid']])->setInc("quadruple_kill", 1);
                            $ccc = db("soccer_expert")->where(["id" => $v['eid']])->value("quadruple_kill");//
                            if ($ccc > 2) {//连中记录
                                $f = [
                                    "times" => $ccc,
                                    "eid" => $v['eid'],
                                ];
                                db("soccer_lian")->insert($f);
                            }
                        }
                        $ii++;
                    } else {//黄
                        $b1 = db("soccer_plan")->update(["id" => $v['id'], "is_bid" => 1, "p_status" => 2]);
                        if ($b1) {
                            // db("soccer_expert")->where(["id" => $v['eid']])->setInc("ex_huang", 1);
                            $bb1 = self::expert_add($v['eid'], "ex_huang");
                            db("soccer_expert")->where(["id" => $v['eid']])->update(["quadruple_kill" => 0]);
                        }
                        $if++;
                    }
                }

            }
            echo "中" . $ii . "条";
            echo "黄" . $if . "条";
        } else {
            echo "没有需要匹配的数据";
        }
    }

    public static function expert_add($eid, $tb)
    {
        $bb1 = db("soccer_expert")->where(["id" => $eid])->setInc($tb, 1);
        return $bb1;
    }

    /**
     * 计算命中率，连中次数
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public static function compute()
    {
        $experts = db("soccer_expert")->select();
        foreach ($experts as $k => $v) {
            $c1 = db("soccer_plan")->where(["eid" => $v['id']])->count();//全部计划
            $c2 = db("soccer_plan")->where(["eid" => $v['id'], "is_bid" => 2])->count();//猜中的计划
            if ($c1 > 0) {
                $pro = sprintf("%.2f", ($c2 / $c1) * 100);
                db("soccer_expert")->update(["id" => $v['id'], "pro" => $pro]);
                $ex = db("soccer_plan")->where(["eid" => $v['id']])->order("create_at", "desc")->limit(sysconf("lian"))->column("id");
                if ($ex) {
                    $ex_count = db("soccer_plan")->where("id", "in", $ex)->where(["is_bid" => 2])->count();//预测中地
                    db("soccer_expert")->update(["id" => $v['id'], "lian" => $ex_count]);
                }
            }
        }

    }


}