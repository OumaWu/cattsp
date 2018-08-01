<?php

require_once ("./sql/Page.class.php");

$p = empty($_GET["p"]) ? 1 : $_GET["p"];

include("connection.php");

$url = $_SERVER["HTTP_REFERER"];

if (isset($_SESSION['mode']) && $_SESSION['mode'] == "expert") {

    $spe_id = $_SESSION['userid'];

    $sql = "SELECT * FROM `question_view` WHERE `spe_id` = {$spe_id}";

    $page = new Page("question_view", "q_id", 10, $p, "WHERE `spe_id` = {$spe_id}");


} else if (!isset($_SESSION['mode']) && !empty($_SESSION['userid'])) {
    $u_id = $_SESSION['userid'];

    $sql = "SELECT * FROM `question_view` WHERE `u_id` = {$u_id}";

    $page = new Page("question_view", "q_id", 10, $p, "WHERE `u_id` = {$u_id}");

} else {
    echo "<script> alert('用户不存在！！');</script>";
    echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
}

try {
    $result = $pdo->prepare($page->getOffsetAdded($sql));
    if ($result->execute()) {
    } else {
        echo "<script> alert('提取问题列表失败！！\\n{$pdo->errorInfo()}');</script>";
//        echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
    }
} catch (PDOException $e) {
    die("错误!!: " . $e->getMessage() . "<br>");
}
?>