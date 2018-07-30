<?php
/**
 * Created by PhpStorm.
 * User: SONY
 * Date: 2018/3/29
 * Time: 2:43
 */
define('FILE_UPLOAD_PATH', "../user_files/avatar/");
$userid = $_POST["userid"];
$user = $_POST["user"];
$url = "../personalpage.php";
$realname = $_POST["realname"];
$sex = $_POST["sex"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$location = $_POST["location"];
$address = $_POST["address"];
$new_images = (string)$_FILES['photo']['name'];
$old_images = (string)$_POST['o_photo'];

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

if (!empty($realname) && isset($sex) && !empty($tel)
    && !empty($email) && !empty($location) && !empty($address)) {

    include("connection.php");

    // 上传修改的图片
    //如果文件名不为空，则加密文件名
    if ($new_images != null) {

        //获取后缀名
        $img_ext = substr($new_images, strrpos($new_images, '.'));

        // 加密图片名
        $new_images =  $user . hash_file('md5', $_FILES['photo']["tmp_name"]) .$img_ext;

        // 添加上传路径
        $file_path = FILE_UPLOAD_PATH .$new_images;

        // 上传新图片
        if (!file_exists($file_path)) {
            if (move_uploaded_file($_FILES['photo']["tmp_name"],  $file_path)) {

                echo "图片" . $file_path . "上传成功！！" . "<br>";

                // 删除旧图片
                $path = FILE_UPLOAD_PATH . $old_images;
                if (file_exists($path)) {
                    unlink($path);
                }
            }
        }
    }
    else {
        // 如果是空的，则把旧的文件名传给它
        $new_images = $old_images;
    }

    $sql = "UPDATE `users`"
            ." SET `realname` = '$realname', `sex` = '$sex', `tel` = '$tel',"
            ." `email` = '$email', `location` = '$location', `address` = '$address', `photo` = '{$new_images}'"
            ." WHERE `users`.`id` = $userid";
    try {
        $pdo->beginTransaction();
        $result = $pdo->prepare($sql);
        if ($result->execute()) {
            $pdo->commit();
            echo "<script> alert('你的资料更新成功！！');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url={$url}\">";
        } else {
            $pdo->rollBack();
            echo "<script> alert('你的资料更新失败！！\\n{$pdo->errorInfo()}');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url={$url}\">";
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