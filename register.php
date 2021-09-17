<?php
// 获取语言包
require_once(__DIR__ . '/languages/init_lang.php');
session_start();
$HTTP_HEADER = $_SESSION["LANG"]["http_header"];
$LABEL = $_SESSION["LANG"]["common"];
$REGISTER = $_SESSION["LANG"]["register"];
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

    <!-- 导入版头css文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <!-- }导入版头css文件 -->

    <!-- 导入新闻展示模块css{ -->
    <link rel="stylesheet" type="text/css" href="./css/index_news.css?d">
    <!-- }导入新闻展示模块css文件 -->

    <!-- 导入其他css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css?p" id="theme1">
    <script src="./js/jquery-3.3.1.min.js"></script>
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

        <form id="gform" name="gform" action="sql/registration.php" method="post">
            <div class="wys_layout">
                <div class="wys_borderbg wys_regbox clearfix">
                    <div class="login_img">
                        <h1 style="font-size:35px; color:white;"><b><?= $BANNER["header"] ?></b></h1>
                        <?php if ($_SESSION["LANG_CODE"] !== 'en_US') { ?>
                            <h1 style="font-size:20px; color:white;">
                                <b>China-ASEAN Optoelectronic Information Technology Transfer Service Platform</b>
                            </h1>
                        <?php } ?>
                    </div>
                    <div style="float: right; max-width: 500px;">
                        <div class="tit">
                            <h2><b><?= $REGISTER["register_form_title"] ?></b></h2>
                        </div>
                        <div class="left">
                            <ul class="register">
                                <li>
                                    <label for="accountname"><span class="cf50">*</span><b><?= $REGISTER["user_name"] ?></b></label>
                                    <input class="reginp" type="text" name="accountname" id="accountname"
                                           maxlength="15" placeholder=" <?= $LABEL["user_name_input"] ?>"/>
                                </li>
                                <li>
                                    <label for="password"><span
                                                class="cf50">*</span><b><?= $REGISTER["password"] ?></b></label>
                                    <input class="reginp" type="password" name="password" id="password"
                                           maxlength="20" placeholder=" <?= $LABEL["password_input"] ?>">
                                </li>
                                <li>
                                    <label for="pswconfirm"><span
                                                class="cf50">*</span><b><?= $REGISTER["confirm_password"] ?></b></label>
                                    <input class="reginp" type="password" name="pswconfirm" id="pswconfirm"
                                           maxlength="20">
                                </li>
                                <li>
                                    <label for="email"><span class="cf50">*</span><b><?= $REGISTER["email"] ?></b></label>
                                    <input class="reginp" type="text" name="email" id="email" maxlength="30">
                                </li>
                            </ul>
                            <div class="regbtn">
                                <label for="btn-submit"></label>
                                <button type="button" id="btn-submit" class="wys_bluebtn saveClass"
                                        onclick="checkForm();"><?= $REGISTER["register_button"] ?>
                                </button>
                            </div>
                            <div class="agree" style="height: 40px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- }信息板块  -->

<?php require_once('common/footer.php'); ?>
<!-- 检查输入信息js{ -->
<script>
    var checkList = {
        "loginCheck": false,
        "checkDuplicate": false,
        "checkPsw": false,
        "checkPswConfirm": false,
        "checkEmail": false
    };

    //检查用户名
    function checkLogin() {
        var login = $("#accountname").val();
        if (login === "") {
            alert("用户名不能为空！！");
            checkList.loginCheck = false;
        } else {
            checkList.loginCheck = true;
            checkDuplicate(login);
        }
    }

    //检查密码
    function checkPwd() {
        if ($("#password").val() === "") {
            alert("密码不能为空！");
            checkList.checkPsw = false;
        } else {
            checkList.checkPsw = true;
        }
    }

    //检查确认密码
    function checkPwdConfirm() {

        if ($("#password").val() !== $("#pswconfirm").val()) {
            alert("两次输入的密码不一致！");
            checkList.checkPswConfirm = false;
        } else {
            checkList.checkPswConfirm = true;
        }
    }

    //检查email
    function checkEmail() {
        if ($("#email").val() === "") {
            alert("请填邮箱！！");
            checkList.checkEmail = false;
        } else {
            checkList.checkEmail = true;
        }
    }

    //检查表单
    function checkForm() {
        checkLogin();
        checkDuplicate();
        checkPwd();
        checkPwdConfirm();
        checkEmail();
        if (checkList.loginCheck === false
            || checkList.checkDuplicate === false
            || checkList.checkPsw === false
            || checkList.checkPswConfirm === false
            || checkList.checkEmail === false) {
            return false;
        } else {
            $("#gform").submit();
            return true;
        }
    }

    function checkDuplicate(login) {
        $.ajax(
            {
                url: "./sql/checklogin.php",
                data: {"login": login},
                type: "POST",
                dataType: "JSON",
                success: function (result) {
                    if (result === 1) {
                        checkList.checkDuplicate = true;
                    } else if (result === 0) {
                        alert("用户名已被注册！");
                        checkList.checkDuplicate = false;
                    }
                },
            });

        // var xmlhttp;
        // if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        //     xmlhttp = new XMLHttpRequest();
        // }
        // else {// code for IE6, IE5
        //     xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        // }
        //
        // xmlhttp.open("GET", "./sql/checklogin.php?login=" + login, true);
        // xmlhttp.send(null);
        //
        // xmlhttp.onreadystatechange = function () {
        //     if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
        //         if (xmlhttp.responseText === 1) {
        //             this.checkList.checkDuplicate = true;
        //         }
        //         else {
        //             this.checkList.checkDuplicate = false;
        //         }
        //     }
        // }
    }

</script>
<!-- }检查输入信息js -->
</body>
</html>