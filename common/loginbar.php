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
?>
<div class="top clearfix sim">
    <div class="w1220">
        <div class="top-left fl"> Hi，欢迎来到中国-东盟太阳能技术转移平台！
        </div>
        <div class="top-right fr">
            <span>请选择语言：</span>
            <select class="mr10" onchange="changeLanguage(this.value)">
                <option value="zh_CN">中文</option>
                <option value="en_US">English</a></option>
<!--                <option value="vn_VI">Vietnam</a></option>-->
<!--                <option value="th_TH">泰语</option>-->
            </select>
            <?php if (!isset($_SESSION['user']) || empty($_SESSION['user'])) { ?>
                <span id="header_header_top_noLogin"> <a href="login.php" class="clr mr15">登录</a> <a href="register.php"
                                                                                                     class="mr5">免费注册</a></span>
            <?php } else {
            if (isset($_SESSION['mode']) && $_SESSION['mode'] == "expert") { ?>

            <span id="header_header_top_Login"> 欢迎，<?= $_SESSION['user']; ?>&nbsp;专家&nbsp;&nbsp;</span>
            <span id="header_header_top_Login">
    	    <a href="specialist_profile.php" class="clr mr15">用户中心</a>

                <?php } else { ?>

                <span id="header_header_top_Login"> 欢迎，<?= $_SESSION['user']; ?>&nbsp;&nbsp;</span>
                <span id="header_header_top_Login">
    	        <a href="personalpage.php" class="clr mr15">用户中心</a>

                    <?php } ?>
                    <a href="./sql/logout.php" class="clr mr15">注销</a></span>
                <?php } ?>
        </div>
    </div>
</div>
<script>
    function changeLanguage(lang) {
        alert("语言换为" + lang)
    }
</script>