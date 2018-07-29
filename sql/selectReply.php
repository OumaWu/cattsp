<?php
require_once("connection.php");

$url = $_SERVER["HTTP_REFERER"];

if (isset($_GET['q_id'])) {
    $q_id = $_GET['q_id'];

    $sql = "SELECT *"
        ." FROM `reply_view`"
        ." WHERE `q_id` = {$q_id}";

    try {
        $result = $pdo->prepare($sql);
        if ($result->execute()) {
        } else {
            echo "<script> alert('提取回复列表失败！！\\n{$pdo->errorInfo()}');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
        }
    } catch (PDOException $e) {
        die("错误!!: " . $e->getMessage() . "<br>");
    }

} else {
    echo "<script> alert('搜索的回复问题不存在！！');</script>";
    echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
}
?>