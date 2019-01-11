<?php
$testxml = file_get_contents("php://input");

$jsonxml = json_encode(simplexml_load_string($testxml, 'SimpleXMLElement', LIBXML_NOCDATA));

$result = json_decode($jsonxml, true);//转成数组，

$con = mysqli_connect("localhost", "foot_dongyaods_", "w84SrGZCeD6kSMsN", "foot_dongyaods_");
if (mysqli_connect_errno($con)) {
    echo "连接 MySQL 失败: " . mysqli_connect_error();
}

// 修改数据库连接字符集为 utf8
mysqli_set_charset($con, "utf8");
if ($result) {
    //如果成功返回了
    $out_trade_no = $result['out_trade_no'];
    if ($result['return_code'] == 'SUCCESS' && $result['result_code'] == 'SUCCESS') {
        $sql2 = "select order_id,id from soccer_recharge where order_id='' limit 1";
        $result = $con->query($sql2);
        while ($row = mysqli_fetch_assoc($result)) {
            $sql = "UPDATE soccer_recharge SET status = 2 WHERE order_id = '" . $out_trade_no . "'";
            $result1 = $con->query($sql);
            if ($result) {
                $sql2 = "select id,tim,tel from soccer_user where id=".$o." limit 1";
                $result = $con->query($sql2);

                $mem = db("soccer_user")->find($ord['uid']);
                if ($mem['tim'] > 0) {
                    $tim = strtotime('+' . $ord['num'] . ' days', $mem['tim']);
                } else {
                    $tim = strtotime('+' . $ord['num'] . ' days');
                }
                $sql1 = "UPDATE soccer_user SET is_vip = 2,tim = " . $tim . " WHERE order_id = '" . $out_trade_no . "'";
                $result2 = $db->query($sql1);
            }
//        }
            if ($ord) {
                $sql = "UPDATE soccer_recharge SET status = 2 WHERE order_id = '" . $out_trade_no . "'";
                $result1 = $db->query($sql);
                if ($result) {
                    $mem = db("soccer_user")->find($ord['uid']);
                    if ($mem['tim'] > 0) {
                        $tim = strtotime('+' . $ord['num'] . ' days', $mem['tim']);
                    } else {
                        $tim = strtotime('+' . $ord['num'] . ' days');
                    }
                    $sql1 = "UPDATE soccer_user SET is_vip = 2,tim = " . $tim . " WHERE order_id = '" . $out_trade_no . "'";
                    $result2 = $db->query($sql1);
                }
                $str = json_encode($ord) . $result2 . $result1;
                if (file_put_contents('01.txt', $str)) {
                    echo '数据存入成功', '<br />';
                } else {
                    echo '数据存入失败', '<br />';
                }

            }


        }
        echo "SUCCESS";
    }

    ?>