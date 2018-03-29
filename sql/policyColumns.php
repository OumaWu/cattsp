<?php
include("connection.php");

$sql = "SELECT * FROM `policy_category`";
try {
    $result = $pdo->prepare($sql);
    if ($result->execute()) {
    } else {
        echo "<script> alert('提取政策栏目列表失败！！');</script>";
        echo $pdo->errorInfo();
    }
} catch (PDOException $e) {
    die("错误!!: " . $e->getMessage() . "<br>");
}

?>