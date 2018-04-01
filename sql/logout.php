<?php
$url_home = "../home.php";
session_start();
/*
 * 登录时间过期自动注销
 */
if(isset($_GET["timeout"])) {
    echo "<script>alert('您已超过10分钟未做任何操作，请重新登录')</script>";
    session_destroy();
    header("Refresh: 0.1; url=$url_home");
}
/*
 * 正常注销
 */
else {
    session_destroy();
    echo "<script>alert('注销成功！！')</script>";
    echo "<meta http-equiv=\"refresh\" content=\"0.1;url=$url_home\">";
}
?>