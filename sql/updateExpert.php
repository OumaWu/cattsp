<?php

include("connection.php");
$userid = $_POST["userid"];
$url = "../specialist_profile.php";
$name = $_POST["name"];
$title = $_POST["title"];
$career_age = $_POST["career_age"];
$degree = $_POST["degree"];
$institute = $_POST["institute"];
$domain = $_POST["domain"];
$speciality = $_POST["speciality"];
$location = $_POST["location"];
$introduction = $_POST["introduction"];

if (!empty($name) && !empty($title) && isset($career_age) && !empty($degree)
    && !empty($institute) && !empty($domain) && !empty($speciality) && !empty($location) && !empty($introduction)) {

    $sql = "UPDATE `specialists`"
            ."SET `name` = '$name', `title` = '$title', `career_age` = '$career_age', `degree` = '$degree', `institute` = '$institute',"
            ." `domain` = '$domain', `speciality` = '$speciality', `location` = '$location', `introduction` = '$introduction'"
            ." WHERE `specialists`.`id` = $userid";
    try {
        $pdo->beginTransaction();
        $result = $pdo->prepare($sql);
        if ($result->execute()) {
            $pdo->commit();
            echo "<script> alert('你的资料更新成功！！');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url={$url}\">";
        } else {
            $pdo->rollBack();
            echo "<script> alert('你的资料更新失败！！');</script>";
            echo $pdo->errorInfo();
//            echo "<meta http-equiv=\"refresh\" content=\"0.5;url={$url}\">";
        }
    } catch (PDOException $e) {
        die("错误!!: " . $e->getMessage() . "<br>");
    }
    echo "<meta http-equiv=\"refresh\" content=\"0.5;url={$url}\">";
} else {
    echo "<script> alert('请填必填信息！！');</script>";
    echo "<meta http-equiv=\"refresh\" content=\"0.5;url={$url}\">";
}

?>