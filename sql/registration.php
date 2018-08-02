<?php
include('connection.php');

if (!empty($_POST["accountname"]) && !empty($_POST["password"])
    && !empty($_POST["pswconfirm"]) &&!empty($_POST["email"])) {

    if($_POST["password"] !== $_POST["pswconfirm"]) {
        echo "<script> alert('两次输入的密码不一致！！');</script>";
        echo "<meta http-equiv=\"refresh\" content=\"0.1;url=../register.php\">";
    }
    else {
        $accountname = $_POST["accountname"];
        $email = $_POST["email"];
        //加密输入的密码
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $sql = "INSERT INTO `users` (`id`, `accountname`, `password`, `sex`, `email`)"
            ." VALUES (NULL, '$accountname', '$password', 1, '$email')";

        try {
            $pdo->beginTransaction();
            $result = $pdo->prepare($sql);
            if ($result->execute()) {
                $pdo->commit();
                echo "<script> alert('注册成功！！');</script>";
                echo "<meta http-equiv=\"refresh\" content=\"0.1;url=../login.php\">";
            } else {
                $pdo->rollBack();
                echo "<script> alert('注册失败！！\\n{$pdo->errorInfo()}');</script>";
                echo "<meta http-equiv=\"refresh\" content=\"0.1;url=../register.php\">";
            }

        } catch (PDOException $e) {
            die("错误!!: " . $e->getMessage() . "<br>");
        }
    }


} else {
    echo "<script> alert('请填必填项！！');</script>";
    echo "<meta http-equiv=\"refresh\" content=\"0.1;url=../register.php\">";
}

?>


