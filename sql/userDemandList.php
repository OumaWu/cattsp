<?php

require_once ("./sql/Page.class.php");

$p = empty($_GET["p"]) ? 1 : $_GET["p"];

include("connection.php");

$userid = $_SESSION['userid'];

$page = new Page("demands", "id", 10, $p, "WHERE `userid` = {$userid}");

$sql = "SELECT * FROM `demands` where `userid` = {$userid}";
try {
    $result = $pdo->prepare($page->getOffsetAdded($sql));
    if ($result->execute()) {
    } else {
        echo "<script> alert('提取用户需求列表失败！！\\n{$pdo->errorInfo()}');</script>";
    }
} catch (PDOException $e) {
    die("错误!!: " . $e->getMessage() . "<br>");
}

?>