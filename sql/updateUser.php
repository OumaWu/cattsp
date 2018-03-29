<?php
/**
 * Created by PhpStorm.
 * User: SONY
 * Date: 2018/3/29
 * Time: 2:43
 */
include("connection.php");
$userid = $_POST["userid"];
$url = "../personalpage.php?id={$userid}";
$accountname = $_POST["accountname"];
$realname = $_POST["realname"];
$sex = $_POST["sex"];
$type = $_POST["type"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$location = $_POST["location"];
$address = $_POST["address"];

/*
 *  无法接受用户id，导致无法更新用户信息，to be fixed
 *  - derek, 3:40 March 29
 *
 * （已解决）原因：没有开启会话(session_start())导致session数组为空
 *  方案一：开启session
 *  方案二：用hidden传值用户id
 *  - derek, 15:56 March 29
 *
 * */

/*
 * 无法更新用户信息，to be fixed
 * - derek 16:24 March 29
 *
 * 原因：sex为布尔值，当传过来的值为0时empty为true
 *
 * */

if (!empty($accountname) && !empty($realname) && isset($sex) && !empty($type)
    && !empty($tel) && !empty($email) && !empty($location) && !empty($address)) {

    $sql = "UPDATE `users` 
            SET `accountname` = '$accountname', `realname` = '$realname', `sex` = '$sex', `type` = '$type', `tel` = '$tel', `email` = '$email', `location` = '$location', `address` = '$address'
            WHERE `users`.`id` = $userid";
    try {
        $pdo->beginTransaction();
        $result = $pdo->prepare($sql);
        if ($result->execute()) {
            echo "<script> alert('你的资料更新成功！！');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url={$url}\">";
        } else {
            echo "<script> alert('你的资料更新失败！！');</script>";
            echo $pdo->errorInfo();
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url={$url}\">";
        }
        $pdo->commit();
    } catch (PDOException $e) {
        die("错误!!: " . $e->getMessage() . "<br>");
        $pdo->rollBack();
    }
    echo "<meta http-equiv=\"refresh\" content=\"0.5;url={$url}\">";
} else {
    echo "<script> alert('请填必填信息！！');</script>";
    echo "<meta http-equiv=\"refresh\" content=\"0.5;url={$url}\">";
}

?>