<?php
include("connection.php");

$url = "../mydemands.php";
$id = $_GET["id"];

/* 删除数据sql */
if (!empty($id)) {
    try {
        $sql = "delete from `demands` where `id` like $id";

        $pdo->beginTransaction();
        $result = $pdo->prepare($sql);
        if ($result->execute()) {
            echo "<script> alert('删除成功！！');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
        } else {
            echo "<script> alert('删除失败！！');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
        }
        $pdo->commit();
    } catch (PDOException $e) {
        die("Error!!: " . $e->getMessage() . "<br>");
        $pdo->rollBack();
    }
} else {
    echo "没有接收到ID！！！";
}

?>