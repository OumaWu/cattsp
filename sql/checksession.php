<?php
/**
 * Created by PhpStorm.
 * User: wlssvr01
 * Date: 2018/6/25
 * Time: 14:55
 *
 * 检查session是否已过期
 */
session_start();
if(isset($_SESSION['expiretime'])) {
    if($_SESSION['expiretime'] < time()){
        unset($_SESSION["expiretime"]);
        //redirect if the page is inactive for 10 minutes
        header("Location: logout.php?timeout");
        exit(0);
    }
}