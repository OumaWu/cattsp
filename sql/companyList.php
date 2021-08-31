<?php
/**
 * Created by PhpStorm.
 * User: Wjh
 * Date: 2018/3/31
 * Time: 2:26
 */
session_start();
require_once("connection.php");
$sql  = "SELECT * FROM `company_account`, `language` WHERE `company_account`.`lang_id` = `language`.`id` AND `language`.`code` = '{$_SESSION['LANG_CODE']}' LIMIT 3";
try {
    $result = $pdo->prepare($sql);
    if ($result->execute()) {
    } else {
        echo "<script> alert('提取企业列表失败！！\\n{$pdo->errorInfo()}');</script>";
    }
} catch (PDOException $e) {
    die("错误!!: " . $e->getMessage() . "<br>");
}

?>