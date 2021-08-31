<?php

$config = require_once ('./config/database.php');
print_r($config);
echo '</br>'.$config['database'];

//echo date("Y-m-d");

//parse_url();

//echo "<pre>";
//print_r(VisitorInfo::findCityByIp("114.253.75.164"));
//print_r(VisitorInfo::findCityByIp(VisitorInfo::getIp()));
//echo VisitorInfo::findCurrentCity();

//定义图片上传路径
//define('FILE_UPLOAD_PATH', "./user_files/solartech/");

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

//session_start();
//
//$user = $_SESSION['user'];
//
//if (!empty($_POST)) {

    // 从$_FILES数组里提取图片信息
//    $image = [
//        (string)$_FILES['img1']['name'],
//        (string)$_FILES['img2']['name'],
//        (string)$_FILES['img3']['name'],
//        (string)$_FILES['img4']['name'],
//        (string)$_FILES['img5']['name']
//    ];

//    print_r($_FILES);
//    echo "<pre>";
//    var_dump($_POST);

    // 给图片名前添加上传路径，并上传
//    foreach ($_FILES as $file) {
//
//        //如果文件名不为空，则加密文件名
//        if ($file['name'] != null) {
//
//            //获取后缀名
//            $img_ext = substr($file['name'], strrpos($file['name'], '.'));
//
//            //加密图片名
//            $file_hash_name = hash_file('md5', $file["tmp_name"]);
//
//            echo $file['tmp_name'] . " : " . $file_hash_name . "<br>";
//
//            //加上后缀
//            $file_path = FILE_UPLOAD_PATH . $file_hash_name . $img_ext;
//
//            //如果图片不存在，则上传
//            if (!file_exists($file_path)) {
//                if (move_uploaded_file($file["tmp_name"], $file_path)) {
//                    echo "图片" . $file_path . "上传成功！！" . "<br>";
//                }
//            }
//        }
//    }
//
//}

?>

<!--<!DOCTYPE HTML>-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <title>md5加密</title>-->
<!--    <script type="text/ecmascript" src="js/md5.js"></script>-->
<!--    <script type="text/javascript">-->
<!--        var h1 = hex_md5("heater1.jpg");-->
<!--        var h2 = hex_md5("heater2.jpg");-->
<!--        var h3 = hex_md5("heater3.jpg");-->
<!--        var h4 = hex_md5("heater4.jpg");-->
<!--        var h5 = hex_md5("heater5.jpg");-->
<!--        document.writeln(h1);-->
<!--        document.writeln(h2);-->
<!--        document.writeln(h3);-->
<!--        document.writeln(h4);-->
<!--        document.writeln(h5);-->
<!--    </script>-->
<!--</head>-->
<!---->
<!--<body>-->
<!--</body>-->
<!--</html>-->
