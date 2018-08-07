<?php
/**
 * Created by PhpStorm.
 * User: Derek
 * Date: 2018/8/3
 * Time: 3:22
 */

if (!empty($id)) {

    //设置cookie
    //每天每台pc对于每个技术成果只能统计一次
    setcookie("tech[{$id}]", $id, time() + 86400);

    include "connection.php";

    $date = date("Y-m-d");
    $sqlGetDate = "SELECT * FROM `visit_statistic`"
        . " WHERE t_id = {$id}"
        . " AND v_date = '{$date}'";

    //提取统计信息
    try {
        $result = $pdo->prepare($sqlGetDate);
        if ($result->execute()) {
            $rows = $result->rowCount();
            if ($rows == 0) {
                //如果此技术成果在此日期没有统计记录，则插入新统计数据
                $sql = "INSERT INTO `visit_statistic` (`t_id`, `v_date`, `v_count`)"
                    . " VALUES ('{$id}', '{$date}', '1')";
            } else {
                //否则更新现有统计数字
                $sql = "UPDATE `visit_statistic`"
                    . " SET `v_count` = `v_count`+ 1"
                    . " WHERE `t_id` = '{$id}'"
                    . " AND `v_date` = '{$date}'";
            }
            $pdo->beginTransaction();
            $result = $pdo->prepare($sql);
            if ($result->execute()) {
                $pdo->commit();
            } else {
                $pdo->rollBack();
            }
        } else {
            echo "<script> alert('提取统计信息失败！！\\n{$pdo->errorInfo()}');</script>";
        }
    } catch (PDOException $e) {
        die("错误!!: " . $e->getMessage() . "<br>");
    }
}
?>