<?php
require_once("connection.php");

if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
    unset($column_id);
} else
    $category_id = $column_id;

$sql = "SELECT * FROM `policy` WHERE category = $category_id";
try {
    $result = $pdo->prepare($sql);
    if ($result->execute()) {
    } else {
        echo "<script> alert('提取政策列表失败！！');</script>";
        echo $pdo->errorInfo();
    }
} catch (PDOException $e) {
    die("错误!!: " . $e->getMessage() . "<br>");
}

?>