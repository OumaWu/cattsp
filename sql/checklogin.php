<?php
include('connection.php');

if (isset($_POST['login'])) {

    $login = $_POST['login'];
    $sql = "SELECT * FROM users where `accountname` = '{$login}'";

    try {
        $result = $pdo->prepare($sql);
        $result->execute();
        $rows = $result->rowCount();
        if ($rows == 0) {
            echo 1;
        }
        else {
            echo 0;
        }

    } catch (PDOException $e) {
        die("错误!!: " . $e->getMessage() . "<br>");
    }
} else echo "<script>alert('没有接收到用户名！！！')</script>";

?>