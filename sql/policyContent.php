<?php
include("connection.php");

if (isset($_GET["policy_id"])) {
    $policy_id = $_GET['policy_id'];
}

if (isset($policy_id) && !empty($policy_id)) {
    $sql = "SELECT * FROM `policy` WHERE id = $policy_id";
    try {
        $result = $pdo->prepare($sql);
        if ($result->execute()) {
        } else {
            echo "<script> alert('提取政策内容失败！！');</script>";
            echo $pdo->errorInfo();
        }
    } catch (PDOException $e) {
        die("错误!!: " . $e->getMessage() . "<br>");
    }
} else
    echo "没有接收到政策id！";

?>