<?php
/**
 * Created by PhpStorm.
 * User: SONY
 * Date: 2018/4/1
 * Time: 13:37
 */
require_once("connection.php");

$sql = "SELECT `title`, `id`, `date` FROM `news` LIMIT 20";
$sql2 = "SELECT `title`, `id`, `date` FROM `policy`LIMIT 20";
try {
    $result = $pdo->prepare($sql);
    if ($result->execute()) {
    } else {
        echo "提取新闻列表失败！！" . "</br>";
        echo $pdo->errorInfo();
    }

    $result2 = $pdo->prepare($sql2);
    if ($result2->execute()) {
    } else {
        echo "提取政策列表失败！！" . "</br>";
        echo $pdo->errorInfo();
    }
} catch (PDOException $e) {
    die("错误!!: " . $e->getMessage() . "<br>");
}

?>