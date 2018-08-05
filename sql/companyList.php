<?php
/**
 * Created by PhpStorm.
 * User: SONY
 * Date: 2018/3/31
 * Time: 2:26
 */
include_once("connection.php");

$sql = "SELECT * FROM `company_account`,`users` WHERE `company_account`.id = `users`.id";
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