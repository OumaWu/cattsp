<?php
session_start();

// 刚进入网站初始化语言编号为中文
if (!isset($_SESSION["LANG_CODE"])) {
    $_SESSION["LANG_CODE"] = "zh_CN";
}

// 如果有语言编号传参且与当前语言不相等则变换语言包
if (isset($_GET["lang"]) && $_GET["lang"] != $_SESSION["LANG_CODE"]) {
    $_SESSION["LANG_CODE"] = $_GET["lang"];
}
$_SESSION["LANG"] = parse_ini_file(__DIR__ . '/' . $_SESSION["LANG_CODE"] . ".ini", true);

