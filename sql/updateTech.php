<?php
/**
 * Created by PhpStorm.
 * User: wlssvr01
 * Date: 2018/7/5
 * Time: 9:54
 */
session_start();
define('FILE_UPLOAD_PATH', "../user_files/");

if (!empty($_POST["title"]) && !empty($_POST["description"]) && !empty($_POST["publisher"]) && !empty($_POST["location"]) && !empty($_POST["entreprise"])) {

    $title = $_POST["title"];
    $description = $_POST["description"];
    $email = $_POST["email"];
    $location = $_POST["location"];
    $entreprise = $_POST["entreprise"];
    $publisher = $_POST["publisher"];
    $userid = $_SESSION["userid"];
    $user = $_SESSION["user"];
    $id = $_GET['id'];
    $url = "../mytech.php";
    $url2 = "../edittech.php?id={$id}";
    include("connection.php");

    $old_images = array($_POST['o_img1'], $_POST['o_img2'], $_POST['o_img3'], $_POST['o_img4'], $_POST['o_img5']);
    $new_images = array($_FILES['img1']['name'], $_FILES['img2']['name'], $_FILES['img3']['name'], $_FILES['img4']['name'], $_FILES['img5']['name']);

    // 给图片名前添加上传路径，并上传
    for ($i = 0; $i < count($new_images); $i++) {
        //如果是空的，则把旧的文件名传给它
        if (!empty($new_images[i])) {

        }
    }

//    if (!empty($_FILES['image']['name'])) {
//        $productArray['image'] = (string)$_FILES['image']['name'];
//        $originalImage = FILE_UPLOAD_PATH . (string)$_POST['imageoriginal'];
//    } else {
//        $productArray['image'] = (string)$_POST['imageoriginal'];
//    }
//    $filePath = FILE_UPLOAD_PATH . $productArray['image'];
//    if (file_exists($originalImage)) {
//        unlink($originalImage);
//    }

    $sql = "UPDATE `solar_technologies`"
        . " SET `title` = '{$title}', `entreprise` = '{$entreprise}', `publisher` = '{$publisher}', `location` = '{$location}', `email` = '{$email}'"
//        ." ,`image1` = '', `image2` = '', `image3` = '', `image4` = '', `image5` = ''"
        . " WHERE `solar_technologies`.`id` = {$id}";
    try {
        $pdo->beginTransaction();
        $result = $pdo->prepare($sql);
        if ($result->execute()) {
            $pdo->commit();
            echo "<script> alert('技术成果修改成功！！');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url={$url}\">";
        } else {
            $pdo->rollBack();
            echo "<script> alert('技术成果修改失败！！');</script>";
            echo $pdo->errorInfo();
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url={$url2}\">";
        }

    } catch (PDOException $e) {
        die("错误!!: " . $e->getMessage() . "<br>");
    }
} else {
    echo "<script> alert('请填必填信息！！');</script>";
    echo "<meta http-equiv=\"refresh\" content=\"0.5;url={$url2}\">";
}