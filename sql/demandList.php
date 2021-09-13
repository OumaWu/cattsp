<?php

session_start();
require_once (__DIR__ ."/Language.class.php");
$lang_code = $_SESSION["LANG_CODE"];
$table = "demands";
$p = empty($_GET["p"]) ? 1 : $_GET["p"];
$resultSet = Language::getListByLang($lang_code, $table, "id", 10, $p);