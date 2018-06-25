<?php
require_once('connection.php');

if (isset($_POST["accountname"]) && isset($_POST["password"]) && isset($_POST["pswconfirm"])) {
    $accountname = $_POST["accountname"];
    //加密输入的密码
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = empty($_POST["email"]) ? $_POST["email"] : NULL;

//    $pdo = connect();
    $sql = "INSERT INTO `users` (`id`, `accountname`, `password`, `sex`, `type`, `email`)"
        ." VALUES (NULL, '$accountname', '$password', 1, NULL, '$email')";

    try {
        $pdo->beginTransaction();
        $result = $pdo->prepare($sql);
        if ($result->execute()) {
            echo "<script> alert('注册成功！！');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0.1;url=../login.php\">";
//            header("location:../login.php");
        } else {
            echo "<script> alert('注册失败！！');</script>";
            echo "<script> alert('".$pdo->errorInfo()."');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0.1;url=../register.php\">";
//            header("location:../register.php");
        }
        $pdo->commit();
    } catch (PDOException $e) {
        die("错误!!: " . $e->getMessage() . "<br>");
        $pdo->rollBack();
    }
} else {
    echo "注册信息不完全！！！";
}

//function connect() {
//    @header("Content-Type:text/html;charset=utf-8");
//    /* read db info from config file into an array */
//    $path =  dirname(__DIR__);
//    $db = parse_ini_file($path . DIRECTORY_SEPARATOR . "dbconfig.ini", true);
//    $server = "local";
//
//    /* assign array values to variables */
//    $type = $db[$server]["type"];
//    $host = $db[$server]["host"];
//    $username = $db[$server]["username"];
//    $pwd = $db[$server]["pwd"];
//    $dbname = $db[$server]["db"];
//    $dsn = "$type:host=$host;dbname=$dbname";
//    $sql = "SET NAMES utf8";
//    try {
//        $pdo = new PDO($dsn, $username, $pwd);
//        $result = $pdo->prepare($sql);
//        $result->execute();
//        return $pdo;
//        //echo "pdo连接mysql成功!";
//    } catch (PDOException $e) {
//        echo "ERROR !!";
//        echo "<pre>";
//        print_r($e);
//        echo "</pre>";
//    }
//}

?>


