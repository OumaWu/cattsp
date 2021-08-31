<?php
session_start();
$lang_file = "chinese";
$_SESSION["LANG_CODE"] = "zh_CN";
if (isset($_GET["lang"])) {
    $lang = $_GET["lang"];
    $_SESSION["LANG_CODE"] = $lang;
    switch ($lang) {
        case "zh_CN" :
            $lang_file = "chinese";
            break;
        case "en_US":
            $lang_file = "english";
            break;
        case "vn_VI":
            $lang_file = "vietnamese";
            break;
        case "th_TH":
            $lang_file = "thai";
    }
}
$_SESSION["LANG"] =  parse_ini_file(__DIR__.'/'.$lang_file. ".ini", true);