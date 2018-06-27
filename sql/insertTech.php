<?php
include("connection.php");
$url = "../mytech.php";
$url2 = "../publishtech.php";

if (!empty($_POST["title"]) && !empty($_POST["description"]) && !empty($_POST["location"]) && !empty($_POST["entreprise"])) {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $email = $_POST["email"];
    $location = $_POST["location"];
    $entreprise = $_POST["entreprise"];
    $userid = $_GET["userid"];

    //接收图片
    $image1 = $_POST["img1"];
    $image2 = $_POST["img2"];
    $image3 = $_POST["img3"];
    $image4 = $_POST["img4"];
    $image5 = $_POST["img5"];

    $sql = "INSERT INTO `solar_technologies` (`id`, `title`, `entreprise`, `location`, `email`, `description`, `date`, `image1`, `image2`, `image3`, `image4`, `image5`, `userid`)"
        ."VALUES (NULL, '$title', '$entreprise', '$location', '$email', '$description', now(), '$image1', $image2, $image3, $image4, $image5, '$userid')";

    try {
        $pdo->beginTransaction();
        $result = $pdo->prepare($sql);
        if ($result->execute() && uploadImg()) {
            echo "<script> alert('发布太阳能技术成功！！');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
        } else {
            echo "<script> alert('发布太阳能技术失败！！');</script>";
            echo $pdo->errorInfo();
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
        }
        $pdo->commit();
    } catch (PDOException $e) {
        die("错误!!: " . $e->getMessage() . "<br>");
        $pdo->rollBack();
    }
    echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
} else {
    echo "<script> alert('请填必填信息！！');</script>";
    echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url2\">";
}


function uploadImg() {

    $success = false;

    // 给图片名前添加上传路径，并上传
    foreach ($_FILES as $file) {
        //如果文件名不为空，则加上上传路径
        if($file['name'] != null) {
            $file_path = FILE_UPLOAD_PATH . $file['name'];

            echo $file_path . "<br>";

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