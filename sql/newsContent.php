<?php
include("connection.php");

if (isset($_GET["news_id"])) {
    $news_id = $_GET['news_id'];
}

if (isset($news_id) && !empty($news_id)) {
    $sql = "SELECT * FROM `news` WHERE id = $news_id";
    try {
        $result = $pdo->prepare($sql);
        if ($result->execute()) {
        } else {
            echo "<script> alert('提取新闻内容失败！！');</script>";
            echo $pdo->errorInfo();
        }
    } catch (PDOException $e) {
        die("错误!!: " . $e->getMessage() . "<br>");
    }
} else
    echo "没有接收到新闻id！";
?>