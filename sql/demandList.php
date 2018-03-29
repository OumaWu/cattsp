<?php
include("connection.php");

$sql = "SELECT * FROM `demands`";
try {
    $result = $pdo->prepare($sql);
    if ($result->execute()) {
    } else {
        echo "<script> alert('提取需求列表失败！！');</script>";
        echo $pdo->errorInfo();
    }
} catch (PDOException $e) {
    die("错误!!: " . $e->getMessage() . "<br>");
}

?>