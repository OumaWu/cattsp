<?php
/**
 * Created by PhpStorm.
 * User: SONY
 * Date: 2018/3/30
 * Time: 18:40
 */

require_once ("./sql/Page.class.php");

$p = empty($_GET["p"]) ? 1 : $_GET["p"];
$page = new Page("specialists", "id", 10, $p);

include_once("connection.php");

$sql = "SELECT * FROM `specialists`";
try {
    $result = $pdo->prepare($page->getOffsetAdded($sql));
    if ($result->execute()) {
    } else {
        echo "<script> alert('提取专家列表失败！！\\n{$pdo->errorInfo()}');</script>";
    }
} catch (PDOException $e) {
    die("错误!!: " . $e->getMessage() . "<br>");
}

?>