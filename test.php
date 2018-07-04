<?php

//定义图片上传路径
define('FILE_UPLOAD_PATH', "./user_files/solartech/example/");

//$dir = FILE_UPLOAD_PATH;
//
//if(is_dir($dir)) {
//    $files = array_diff(scandir($dir), array('.','..'));
//
//    foreach ($files as $file) {
//        unlink("$dir/$file");
//    }
//
//    if (rmdir($dir)) {
//        echo "删除文件夹成功！！";
//    }
//}

session_start();

$user = $_SESSION['user'];

if (!empty($_POST)) {

    // 从$_FILES数组里提取图片信息
    $image = [
        (string)$_FILES['img1']['name'],
        (string)$_FILES['img2']['name'],
        (string)$_FILES['img3']['name'],
        (string)$_FILES['img4']['name'],
        (string)$_FILES['img5']['name']
    ];

    echo "User : " .$user . "<br>";

    // 给图片名前添加上传路径，并上传
    foreach ($_FILES as $file) {

        //如果文件名不为空，则加上上传路径
        if($file['name'] != null) {
            $file_path = FILE_UPLOAD_PATH . $file['name'];

            $file_hash_name = $user .hash_file('md5', $file_path);

            echo $file['name'] ." : " . $file_hash_name . "<br>";

            //如果图片不存在，则上传
//            if (!file_exists($file_path)) {
//                if (move_uploaded_file($file["tmp_name"], $file_path)) {
//                    echo "图片".$file_path."上传成功！！". "<br>";
//                }
//            }
        }
    }

}

?>