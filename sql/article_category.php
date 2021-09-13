<?php
session_start();
require_once (__DIR__ ."/Language.class.php");
$lang_code = $_SESSION["LANG_CODE"];
if (!empty($category_type)) {
    $result = Language::getCategoryIdByLang($lang_code, $category_type.'_category');
}