<?php
include("connection.php");

if (isset($id)) {
    $sql = "SELECT * FROM `solar_technologies` where `id` = '{$id}'";
    try {
        $result = $pdo->prepare($sql);
        if ($result->execute()) {
        } else {
            echo "<script> alert('提取太阳能技术内容失败！！');</script>";
            echo $pdo->errorInfo();
        }
    } catch (PDOException $e) {
        die("错误!!: " . $e->getMessage() . "<br>");
    }
} else
    echo "没有接收到太阳能技术id！";
?>