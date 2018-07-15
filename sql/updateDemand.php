<?php

if (!empty($_POST["title"]) && !empty($_POST["description"]) && !empty($_POST["email"])
    && !empty($_POST["location"]) && !empty($_POST["entreprise"])) {

    include("connection.php");

    $title = $_POST["title"];
    $description = $_POST["description"];
    $email = $_POST["email"];
    $location = $_POST["location"];
    $entreprise = $_POST["entreprise"];
    $id = $_POST["id"];
    $url = "../mydemands.php";
    $url2 = "../editdemand.php?id={$id}";

    $sql = "UPDATE `demands`"
        ." SET `title` = '$title', `entreprise` = '$entreprise', `description` = '$description',"
        ." `email` = '$email', `location` = '$location'"
        ." WHERE `demands`.`id` = $id";

    try {
        $pdo->beginTransaction();
        $result = $pdo->prepare($sql);
        if ($result->execute()) {
            $pdo->commit();
            echo "<script> alert('更新需求成功！！');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
        } else {
            $pdo->rollBack();
            echo "<script> alert('更新需求失败！！');</script>";
            echo $pdo->errorInfo();
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
        }
    } catch (PDOException $e) {
        die("错误!!: " . $e->getMessage() . "<br>");
    }
} else {
    echo "<script> alert('请填必填信息！！');</script>";
    echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url2\">";
}
?>