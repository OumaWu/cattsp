<?php
session_start();
define('FILE_UPLOAD_PATH', "../user_files/");
include("connection.php");
$url = "../mytech.php";
$id = $_GET["id"];
$user_id = $_SESSION['userid'];

/* 删除数据sql */
if (!empty($id) && !empty($user_id)) {
    try {
        $sql = "delete from `solar_technologies` where `id` like $id";

        $pdo->beginTransaction();
        $result = $pdo->prepare($sql);

        //先执行语句删除数据库中的条目
        if ($result->execute()) {

            $dir = FILE_UPLOAD_PATH . $user_id ."/solartech/" . $id;

            //然后删除用户对应的图片文件目录

            if(is_dir($dir)) {
                $files = array_diff(scandir($dir), array('.','..'));

                foreach ($files as $file) {
                    unlink("$dir/$file");
                }

                //删除成功则提交事务
                if (rmdir($dir)) {
                    $pdo->commit();
                    echo "<script> alert('删除成功！！');</script>";
                    echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
                }

                //删除失败则回滚
                else {
                    $pdo->rollBack();
                    echo "<script> alert('删除失败！！');</script>";
                    echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
                }
            }

        } else {
            echo "<script> alert('删除失败！！');</script>";
            echo $pdo->errorInfo();
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
        }

    } catch (PDOException $e) {
        die("Error!!: " . $e->getMessage() . "<br>");
    }
} else {
    echo "没有接收到ID或用户ID为空！！！" . "<br>";
    echo "user id : " . $user_id . "<br>";
    echo "tech id : " . $id . "<br>";
}

?>