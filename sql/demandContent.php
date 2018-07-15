<?php
include("connection.php");

if (isset($id)) {
    $sql = "SELECT * FROM `demands` where id = $id";
    try {
        $result = $pdo->prepare($sql);
        if ($result->execute()) {
        } else {
            echo "<script> alert('提取需求内容失败！！');</script>";
            echo $pdo->errorInfo();
        }
    } catch (PDOException $e) {
        die("错误!!: " . $e->getMessage() . "<br>");
    }
} else
    echo "没有接收到需求id！";
?>