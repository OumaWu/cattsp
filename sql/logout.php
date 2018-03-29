<?php
$url_home = "../home.php";
session_start();
if (session_destroy()) {
    echo "<script>alert('注销成功！！')</script>";
    echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url_home\">";
} else {
    echo "<script>alert('注销失败！！')</script>";
    echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url_home\">";
}
?>