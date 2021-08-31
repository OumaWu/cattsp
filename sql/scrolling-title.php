<?php
/**
 * Created by PhpStorm.
 * User: Wjh
 * Date: 2018/4/1
 * Time: 13:37
 */
session_start();
require_once("connection.php");
$sql = "SELECT `news`.`title`, `news`.`id`, `news`.`date` FROM `news`, `language` WHERE `news`.`lang_id` = `language`.`id` AND `language`.`code` = '{$_SESSION['LANG_CODE']}' LIMIT 20";
$sql2 = "SELECT `policy`.`title`, `policy`.`id`, `policy`.`date` FROM `policy`, `language` WHERE `policy`.`lang_id` = `language`.`id` AND `language`.`code` = '{$_SESSION['LANG_CODE']}' LIMIT 20";
try {
    $result = $pdo->prepare($sql);
    if ($result->execute()) {
    } else {
        echo "<script>alert('提取新闻列表失败！！\\n{$pdo->errorInfo()}')";
    }

    $result2 = $pdo->prepare($sql2);
    if ($result2->execute()) {
    } else {
        echo "<script>alert('提取新闻列表失败！！\\n{$pdo->errorInfo()}')";
    }
} catch (PDOException $e) {
    die("错误!!: " . $e->getMessage() . "<br>");
}

?>