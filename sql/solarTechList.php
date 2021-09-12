<?php

session_start();
//require_once ("./sql/Page.class.php");
require_once ("./sql/Language.class.php");
$lang_code = $_SESSION["LANG_CODE"];
$table = "solar_technologies";
$p = empty($_GET["p"]) ? 1 : $_GET["p"];
//$page = new Page("solar_technologies", "id", 10, $p, "`solar_technologies`.`lang_id` = (SELECT `id` FROM `language` WHERE `language`.`code` = '{$lang_code}')");

//include("connection.php");
//$sql = "SELECT * FROM `solar_technologies` AS `st` WHERE `st`.`lang_id` = (SELECT `id` FROM `language` WHERE `language`.`code` = '{$lang_code}')";
//try {
//    $result = $pdo->prepare($page->getOffsetAdded($sql));
//    if ($result->execute()) {
//    } else {
//        echo "<script> alert('提取太阳能技术列表失败！！\\n{$pdo->errorInfo()}');</script>";
//    }
//} catch (PDOException $e) {
//    die("错误!!: " . $e->getMessage() . "<br>");
//}

$resultSet = Language::getListByLang($lang_code, "solar_technologies", "id", 10, $p);


