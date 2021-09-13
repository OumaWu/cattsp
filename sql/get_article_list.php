<?php
session_start();
require_once (__DIR__ ."/Language.class.php");
$lang_code = $_SESSION["LANG_CODE"];
$p = empty($_GET["p"]) ? 1 : $_GET["p"];

if (!empty($category_id) && !empty($category_type)) {
    $resultSet = Language::getListByLang($lang_code, $category_type, "id", 10, $p, ["`category` = {$category_id}"]);
    array_push($resultSet, ["category_id" => $category_id]);
}
