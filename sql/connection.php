<?php
/*
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
@header("Content-Type:text/html;charset=utf-8");
/* read db info from config file into an array */
$path =  dirname(__DIR__);
$db = parse_ini_file($path . DIRECTORY_SEPARATOR . "dbconfig.ini", true);
$server = "Aliyun";

/* assign array values to variables */
$type = $db[$server]["type"];
$host = $db[$server]["host"];
$username = $db[$server]["username"];
$pwd = $db[$server]["pwd"];
$dbname = $db[$server]["db"];
$dsn = "$type:host=$host;dbname=$dbname";
$sql = "SET NAMES utf8";
global $pdo;
try {
    $pdo = new PDO($dsn, $username, $pwd);
    $result = $pdo->prepare($sql);
    $result->execute();
    //echo "pdo连接mysql成功!";
} catch (PDOException $e) {
    echo "ERROR !!";
    echo "<pre>";
    print_r($e);
    echo "</pre>";
}
?>