<?php
session_start();
include("connection.php");

$sql = "SELECT `st`.`id`, `st`.`title`, `st`.`entreprise` FROM `solar_technologies` AS `st`, `language` WHERE `st`.`lang_id` = `language`.`id` AND `language`.`code` = '{$_SESSION['LANG_CODE']}' LIMIT 10";
try {
    $result = $pdo->prepare($sql);
    if ($result->execute()) {
    } else {
        echo "<script> alert('提取太阳能技术列表失败！！\\n{$pdo->errorInfo()}');</script>";
    }
} catch (PDOException $e) {
    die("错误!!: " . $e->getMessage() . "<br>");
}