<?php

require_once ("./sql/Page.class.php");

$p = empty($_GET["p"]) ? 1 : $_GET["p"];

include("connection.php");

$userid = $_SESSION['userid'];

$page = new Page("solar_technologies", "id", 10, $p, "WHERE `userid` = {$userid}");

$sql = "SELECT * FROM `solar_technologies` where `userid` = {$userid}";

try {
    $result = $pdo->prepare($page->getOffsetAdded($sql));
    if ($result->execute()) {
    } else {
        echo "<script> alert('提取用户太阳能技术列表失败！！\\n{$pdo->errorInfo()}');</script>";
    }
} catch (PDOException $e) {
    die("错误!!: " . $e->getMessage() . "<br>");
}

?>