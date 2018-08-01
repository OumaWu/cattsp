<?php

require_once ("./sql/Page.class.php");

$p = empty($_GET["p"]) ? 1 : $_GET["p"];

require_once("connection.php");

if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
}

$page = new Page("policy", "id", 10, $p, "WHERE `category` = {$category_id}");

$sql = "SELECT * FROM `policy` WHERE category = {$category_id}";
try {
    $result = $pdo->prepare($page->getOffsetAdded($sql));
    if ($result->execute()) {
    } else {
        echo "<script> alert('提取政策列表失败！！\\n{$pdo->errorInfo()}');</script>";
    }
} catch (PDOException $e) {
    die("错误!!: " . $e->getMessage() . "<br>");
}

?>