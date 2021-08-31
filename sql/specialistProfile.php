<?php
/**
 * Created by PhpStorm.
 * User: Wjh
 * Date: 2018/3/30
 * Time: 19:32
 */
include("connection.php");

if (isset($id)) {
    $sql = "SELECT * FROM `specialists` where id = $id";
    try {
        $result = $pdo->prepare($sql);
        if ($result->execute()) {
        } else {
            echo "<script> alert('提取太阳能专家资料失败！！');</script>";
            echo $pdo->errorInfo();
        }
    } catch (PDOException $e) {
        die("错误!!: " . $e->getMessage() . "<br>");
    }
} else
    echo "没有接收到太阳能专家id！";
?>