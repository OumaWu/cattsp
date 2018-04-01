<?php
include("connection.php");
$url_home = "../home.php";
$url = "../login.php";

if (isset($_POST["accountname"]) && isset($_POST["password"])) {

    $accountname = $_POST["accountname"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `users` WHERE `password` = '$password' AND `accountname` = '$accountname'";

    try {
        $result = $pdo->prepare($sql);
        $result->execute();
        $rows = $result->rowCount();
        if ($rows > 0) {
            session_start();
            $res = $res = $result->fetch(PDO::FETCH_OBJ);
            $_SESSION['user'] = $res->accountname;
            $_SESSION['userid'] = $res->id;
            $_SESSION['expiretime'] = time() + 600; // 刷新时间戳，10分钟
            echo "<script>alert('登录成功！')</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0;url=$url_home\">";
        } else {
            echo "<script>alert('用户名或密码错误，请重新输入！')</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0;url=$url\">";
        }

    } catch (PDOException $e) {
        die("错误!!: " . $e->getMessage() . "<br>");
    }
} else {
    echo "<script>alert('请输入用户名或密码！')</script>";
    echo "<meta http-equiv=\"refresh\" content=\"0;url=$url\">";
}
?>