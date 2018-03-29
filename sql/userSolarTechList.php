<?php
include("connection.php");

$userid = $_SESSION['userid'];
$sql = "SELECT * FROM `solar_technologies` where userid = $userid";
try {
    $result = $pdo->prepare($sql);
    if ($result->execute()) {
    } else {
        echo "<script> alert('提取用户太阳能技术列表失败！！');</script>";
        echo $pdo->errorInfo();
    }
} catch (PDOException $e) {
    die("错误!!: " . $e->getMessage() . "<br>");
}

?>