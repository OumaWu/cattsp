<?php
/**
 * Created by PhpStorm.
 * User: SONY
 * Date: 2018/3/30
 * Time: 18:40
 */
include("connection.php");

$sql = "SELECT * FROM `specialists`";
try {
    $result = $pdo->prepare($sql);
    if ($result->execute()) {
    } else {
        echo "<script> alert('提取专家列表失败！！');</script>";
        echo $pdo->errorInfo();
    }
} catch (PDOException $e) {
    die("错误!!: " . $e->getMessage() . "<br>");
}

?>