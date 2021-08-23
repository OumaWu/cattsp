<?php
$path = dirname(__DIR__.DIRECTORY_SEPARATOR.'languages');
$lang_file = "chinese";
if (isset($_GET["lang"])) {
    $lang = $_GET["lang"];
    switch ($lang) {
        case "zh_CN" :
            $lang_file = "chinese";
            break;
        case "en_US":
            $lang_file = "english";
            break;
    }
}
session_start();
$_SESSION["LANG"] = parse_ini_file($path . DIRECTORY_SEPARATOR .$lang_file. ".ini", true);