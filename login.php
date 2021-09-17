<?php
// 获取语言包
require_once(__DIR__ . '/languages/init_lang.php');
session_start();
$HTTP_HEADER = $_SESSION["LANG"]["http_header"];
$LABEL = $_SESSION["LANG"]["common"];
$LOGIN = $_SESSION["LANG"]["login"];
$BANNER = $_SESSION["LANG"]["banner"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <title><?= $HTTP_HEADER["title"] ?></title>

    <!-- 导入新闻展示模块css{ -->
    <link rel="stylesheet" type="text/css" href="./css/index_news.css?p">
    <!-- }导入新闻展示模块css文件 -->

    <!-- 导入版头css文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <!-- }导入版头css文件 -->

    <!-- 导入其他css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css?d" id="theme1">
    <!-- }导入其他css和js文件 -->

</head>
<body>

<!--  版头{  -->

<div class="header clearfix" id="header">
    <!--  登录模块{  -->
    <?php require_once('common/loginbar.php'); ?>
    <!--  }登录模块  -->

    <!--  网站横幅{  -->
    <?php require_once('common/banner.php'); ?>
    <!--  }网站横幅  -->

    <!--  导航栏{  -->
    <?php require_once('common/navbar.php'); ?>
    <!--  }导航栏  -->
</div>
<!--  }版头  -->

<!--  信息板块{  -->
<div class="background">
    <div class="main">
        <div class="wys_loginwrap">
            <div class="wys_layout bg">
                <div class="login_img clearfix">
                    <h1 style="font-size:35px; color:white;"><b><?= $BANNER["header"] ?></b></h1>
                    <?php if ($_SESSION["LANG_CODE"] !== 'en_US') { ?>
                        <h1 style="font-size:20px; color:white;">
                            <b>China-ASEAN Optoelectronic Information Technology Transfer Service Platform</b>
                        </h1>
                    <?php } ?>
                </div>
                <div class="wys_loginbox">
                    <p class="tit" style="padding: 0!important;"><?= $LOGIN["login_box_title"] ?></p>
                    <form id="gform" name="gform" action="sql/signin.php" method="post">

                        <div style="margin-left: 8%; max-width: 320px; font-size: 15px">
                            <input name="type" type="radio" value="company" id="company" checked="checked"/>
                            <label for="company"><?= $LOGIN["company_account_option"] ?></label>&emsp;&emsp;
                            <input name="type" type="radio" value="specialist" id="specialist"/>
                            <label for="specialist"><?= $LOGIN["expert_account_option"] ?></label>
                        </div>

                        <div class="cont">
                            <ul>
                                <li>
                                    <input class="inp" name="accountname" id="accountname" type="text"
                                           placeholder="<?= $LABEL["user_name_input"] ?>">
                                </li>
                                <li>
                                    <input class="inp" name="password" id="password" type="password"
                                           placeholder="<?= $LABEL["password_input"] ?>">
                                </li>
                            </ul>
                            <div class=""><a class="wys_orgbtn" href="javascript:void(0);" id="loginBt"
                                             onClick="Submit();"
                                             style="cursor: pointer;"><?= $LOGIN["login_button"] ?></a></div>
                            <div class="pt20 clearfix" style="max-width: 320px;">
                                <span class="fl fs14"><?= $LOGIN["no_account"] ?></span>
                                <span>
                                    <a class="fr cf08833"
                                       href="register.php"
                                       style="color: #f08833;font-size: 14px;">
                                        <?= $LOGIN["sign_up_url"] ?>
                                    </a>
                                </span>
                            </div>
                            <div class="pt20 clearfix" style="max-width: 320px;"><a class="fr c999 fs14" href="#">
                                    <?= $LOGIN["forget_password"] ?>
                                </a></div>
                            <p class="fs14 error"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function Submit() {
        document.getElementById("gform").submit();
    }

    $("#gform").bind("keydown", function (e) {

        // 兼容FF和IE和Opera

        var theEvent = e || window.event;

        var code = theEvent.keyCode || theEvent.which || theEvent.charCode;

        if (code == 13) {

            //回车执行查询
            $("#loginBt").click();
        }

    });
</script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- }信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>