<?php
session_start();
include("connection.php");

$sql = "SELECT `d`.`id`, `d`.`title`, `d`.`entreprise`, `d`.`date` FROM `demands`AS `d`, `language` WHERE `d`.`lang_id` = `language`.`id` AND `language`.`code` = '{$_SESSION['LANG_CODE']}' LIMIT 10";
try {
    if (!empty($pdo)) {
        $result = $pdo->prepare($sql);
        if ($result->execute()) {
        } else {
            echo "<script> alert('提取需求列表失败！！\\n{$pdo->errorInfo()}');</script>";
        }
    }
} catch (PDOException $e) {
    die("错误!!: " . $e->getMessage() . "<br>");
}

