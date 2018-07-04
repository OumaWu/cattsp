<?php
session_start();
define('FILE_UPLOAD_PATH', "../user_files/");
include("connection.php");
$url = "../mytech.php";
$url2 = "../publishtech.php";

if (!empty($_POST["title"]) && !empty($_POST["description"]) && !empty($_POST["location"]) && !empty($_POST["entreprise"])) {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $email = $_POST["email"];
    $location = $_POST["location"];
    $entreprise = $_POST["entreprise"];
    $userid = $_SESSION["userid"];
    $user = $_SESSION["user"];

    $images = array();

    //接收图片
    foreach ($_FILES as $file) {
        //生成基于图片内容的加密图片名
        $img = hash_file('md5', $file["tmp_name"]);
        //将图片名放入数组中
        array_push($images, $img);
    }

    $sql = "INSERT INTO `solar_technologies` (`id`, `title`, `entreprise`, `location`, `email`, `description`, `date`, `image1`, `image2`, `image3`, `image4`, `image5`, `userid`)"
        ." VALUES (NULL, '$title', '$entreprise', '$location', '$email', '$description', now(), '$images[0]', '$images[1]', '$images[2]', '$images[3]', '$images[4]', '$userid')";

    try {
        $pdo->beginTransaction();
        $result = $pdo->prepare($sql);
        //执行插入语句
        if ($result->execute()) {


            $pdo->commit();
            echo "<script> alert('发布太阳能技术成功！！');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";

//            //获取新插入的技术成果id
//            $last_id = $pdo->lastInsertId();
//
//            //如果上传图片成功，则提交事务
//            if(uploadImg($userid, $last_id)) {
//                $pdo->commit();
//                echo "<script> alert('发布太阳能技术成功！！');</script>";
//                echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
//            }
//            //上传失败则回滚
//            else {
//                $pdo->rollBack();
//                echo "<script> alert('发布太阳能技术失败！！');</script>";
//                echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url2\">";
//            }

        } else {
            echo "<script> alert('发布太阳能技术失败！！');</script>";
            echo $pdo->errorInfo();
//            echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url2\">";
        }

    } catch (PDOException $e) {
        die("错误!!: " . $e->getMessage() . "<br>");
    }
} else {
    echo "<script> alert('请填必填信息！！');</script>";
    echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url2\">";
}


function uploadImg($userid, $last_id) {

    $success = false;
    $path = FILE_UPLOAD_PATH;

    //如果文件夹不存在则创建它
    if (!file_exists($path)){
        mkdir ($path,0777,true);
    }

    // 给图片名前添加上传路径，并上传
    foreach ($_FILES as $file) {
        //如果文件名不为空，则加上上传路径
        if($file['name'] != null) {

            $file_path = $path . $file['name'];

            //如果图片不存在，则上传
            if (!file_exists($file_path)) {
                if (move_uploaded_file($file["tmp_name"], $file_path)) {
                    $success = true;
                }
                else {
                    $success = false;
                }
            }
        }
    }

    return $success;
}

?>