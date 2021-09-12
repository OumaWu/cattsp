<?php

session_start();
require_once ("./sql/Language.class.php");
$lang_code = $_SESSION["LANG_CODE"];
$p = empty($_GET["p"]) ? 1 : $_GET["p"];
$resultSet = Language::getListByLang($lang_code, "demands", "id", 10, $p);