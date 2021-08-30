<?php
/**
 * Created by PhpStorm.
 * User: Wjh
 * Date: 2018/4/1
 * Time: 13:37
 */
session_start();
require_once("connection.php");
$sql = "SELECT `policy`.`title`, `policy`.`id` FROM `policy`, `language` WHERE `policy`.`lang_id` = `language`.`id` AND `language`.`code` = '{$_SESSION['LANG_CODE']}' LIMIT 11";
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