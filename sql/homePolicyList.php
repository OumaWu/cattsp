<?php
/**
 * Created by PhpStorm.
 * User: SONY
 * Date: 2018/4/1
 * Time: 13:37
 */
require_once("connection.php");

$sql = "SELECT `title`, `id` FROM `policy` LIMIT 11";
try {
    $result = $pdo->prepare($sql);
    if ($result->execute()) {
    } else {
        echo "<script>alert('提取政策法规列表失败！！\\n{$pdo->errorInfo()}')";
    }

} catch (PDOException $e) {
    die("错误!!: " . $e->getMessage() . "<br>");
}

?>