<?php
session_start();
/*
 * 检查session是否已过期
 */
if (isset($_SESSION['expiretime'])) {
    if ($_SESSION['expiretime'] < time()) {
        unset($_SESSION["expiretime"]);
        //redirect if the page is inactive for 10 minutes
        header("Location: sql/logout.php?timeout");
        exit(0);
    } else {
        $_SESSION['expiretime'] = time() + 6000; // 刷新时间戳，1小时40分钟
    }
}
require_once(dirname(__FILE__, 2) . '/languages/init_lang.php');
$LOGIN_BAR = $_SESSION["LANG"]["loginbar"];
?>
<div class="top clearfix sim">
    <div class="w1220">
        <div class="top-left fl"> <?= $LOGIN_BAR["greeting_msg"]; ?></div>
        <div class="top-right fr">
            <span><?= $LOGIN_BAR["select_lang"]; ?></span>
            <label>
                <select class="mr10" id="lang" name="lang" onchange="changeLanguage(this.value)">
                    <option value="zh_CN">中文</option>
                    <option value="en_US">English</option>
                    <option value="vn_VI">Tiếng Việt</a></option>
                    <option value="th_TH">ภาษาไทย</option>
                </select>
            </label>
            <?php if (!isset($_SESSION['user']) || empty($_SESSION['user'])) { ?>
                <span id="header_header_top_noLogin"> <a href="login.php"
                                                         class="clr mr15"><?= $LOGIN_BAR["login_button"]; ?></a> <a
                            href="register.php"
                            class="mr5"><?= $LOGIN_BAR["reg_option"]; ?></a></span>
            <?php } else {
            if (isset($_SESSION['mode']) && $_SESSION['mode'] == "expert") { ?>

            <span id="header_header_top_Login"> <?= $LOGIN_BAR["welcome_msg"]; ?><?= $_SESSION['user']; ?><?= $LOGIN_BAR["expert_account"]; ?></span>
            <span id="header_header_top_Login">
    	    <a href="specialist_profile.php" class="clr mr15"><?= $LOGIN_BAR["profile"]; ?></a>

                <?php } else { ?>

                <span id="header_header_top_Login"><?= $LOGIN_BAR["welcome_msg"]; ?><?= $_SESSION['user']; ?>&nbsp;&nbsp;</span>
                <span id="header_header_top_Login">
    	        <a href="personalpage.php" class="clr mr15"><?= $LOGIN_BAR["profile"]; ?></a>

                    <?php } ?>
                    <a href="./sql/logout.php" class="clr mr15"><?= $LOGIN_BAR["logout"]; ?></a></span>
                <?php } ?>
        </div>
    </div>
</div>
<script>
    let lang = location.href.split("=").pop(); // 分成两个数组后取最后一个值
    if (lang !== "") {
        document.getElementById("lang").value = lang;
    }

    function changeLanguage(lang) {
        const href = window.location.pathname;
        window.location.href = href + "?lang=" + lang;
    }
</script>