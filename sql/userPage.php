<?php
/**
 * Created by PhpStorm.
 * User: SONY
 * Date: 2018/3/29
 * Time: 2:05
 */
include("connection.php");

if (isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
    $user_id = $_SESSION['userid'];
    $sql = "SELECT * FROM `users` WHERE id = $user_id";
    try {
        $result = $pdo->prepare($sql);
        if ($result->execute()) {
        } else {
            echo "<script> alert('提取用户信息失败！！');</script>";
            echo $pdo->errorInfo();
        }
    } catch (PDOException $e) {
        die("错误!!: " . $e->getMessage() . "<br>");
    }
} else
    echo "没有接收到用户id！";
?>