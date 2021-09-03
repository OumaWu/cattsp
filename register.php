<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <title>中国-东盟光电子信息技术转移服务平台</title>

    <!-- 导入版头css文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <!-- }导入版头css文件 -->

    <!-- 导入新闻展示模块css{ -->
    <link rel="stylesheet" type="text/css" href="./css/index_news.css?v">
    <!-- }导入新闻展示模块css文件 -->

    <!-- 导入其他css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css" id="theme1">
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
                    <div class="tit">
                        <h2><b>会员注册</b></h2>
                    </div>
                    <div class="left">
                        <ul class="register">
                            <li>
                                <label for="accountname"><span class="cf50">*</span><b>用户名：</b></label>
                                <input class="reginp" type="text" name="accountname" id="accountname"
                                       maxlength="15" placeholder="请输入用户名"
                                       onblur="checkLogin();"/>
                            </li>
                            <li>
                                <label for="password"><span class="cf50">*</span><b>密码：</b></label>
                                <input class="reginp" type="password" name="password" id="password"
                                       maxlength="20" placeholder="请输入密码"
                                       onblur="checkPwd();">
                            </li>
                            <li>
                                <label for="pswconfirm"><span class="cf50">*</span><b>确认密码：</b></label>
                                <input class="reginp" type="password" name="pswconfirm" id="pswconfirm"
                                       maxlength="20"
                                       onblur="checkPwdConfirm();">
                            </li>
                            <li>
                                <label for="email"><span class="cf50">*</span><b>电子邮箱：</b></label>
                                <input class="reginp" type="text" name="email" id="email" maxlength="30"
                                       onblur="checkEmail();">
                            </li>
                        </ul>
                        <div class="regbtn">
                            <label for="btn-submit"></label>
                            <button type="button" id="btn-submit" class="wys_bluebtn saveClass"
                                    onclick="checkForm();">立即注册
                            </button>
                        </div>
                        <div class="agree" style="height: 40px;"></div>
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
        }
        else {
            checkList.loginCheck = true;
            checkDuplicate(login);
        }
    }

    //检查密码
    function checkPwd() {
        if ($("#password").val() === "") {
            alert("密码不能为空！");
            checkList.checkPsw = false;
        }
        else {
            checkList.checkPsw = true;
        }
    }

    //检查确认密码
    function checkPwdConfirm() {

        if ($("#password").val() !== $("#pswconfirm").val()) {
            alert("两次输入的密码不一致！");
            checkList.checkPswConfirm = false;
        }
        else {
            checkList.checkPswConfirm = true;
        }
    }

    //检查email
    function checkEmail() {
        if ($("#email").val() === "") {
            alert("请填邮箱！！");
            checkList.checkEmail = false;
        }
        else {
            checkList.checkEmail = true;
        }
    }

    //检查表单
    function checkForm() {
        if (checkList.loginCheck === false
            || checkList.checkDuplicate === false
            || checkList.checkPsw === false
            || checkList.checkPswConfirm === false
            || checkList.checkEmail === false) {
            alert("请填必填信息！");
            return false;
        }
        else {
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
                    }
                    else if (result === 0) {
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