<?php
@header("Content-Type:text/html;charset=utf-8");
/* read db info from config file into an array */
$path = dirname(__DIR__);
$db = parse_ini_file($path . DIRECTORY_SEPARATOR . "dbconfig.ini", true);
require_once($path . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . "database.php");
$server = SERVER;

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
