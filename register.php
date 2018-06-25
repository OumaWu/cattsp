<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <title>中国-东盟太阳能技术转移中心</title>

    <!-- 导入版头css文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <!-- }导入版头css文件 -->

    <!-- 导入新闻展示模块css{ -->
    <link rel="stylesheet" type="text/css" href="./css/index_news.css?v">
    <!-- }导入新闻展示模块css文件 -->

    <!-- 导入其他css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css" id="theme1">
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
                                <label><span class="cf50">*</span><b>用户名：</b></label>
                                <input class="reginp" type="text" name="accountname" id="accountname" value=""
                                       maxlength="15" onchange="checkLogin(this.value);"
                                       placeholder="请输入用户名，应为3-15位的英文或数字"/>
                            </li>
                            <li>
                                <label><span class="cf50">*</span><b>密码：</b></label>
                                <input class="reginp" type="password" name="password" id="password" value=""
                                       maxlength="20" placeholder="请输入密码">
                            </li>
                            <li>
                                <label><span class="cf50">*</span><b>确认密码：</b></label>
                                <input class="reginp" type="password" name="pswconfirm" id="pswconfirm" value=""
                                       maxlength="20" onchange="checkPsw(document.getElementById('password').value, this.value);">
                            </li>
                            <li>
                                <label><span class="cf50">*</span><b>电子邮箱：</b></label>
                                <input class="reginp" type="text" name="email" id="email" value="" maxlength="30">
                            </li>
                        </ul>
                        <div class="agree">
                            <label>
                                <input id="" type="checkbox" checked="checked">
                                <b>我已阅读并同意</b><a class="c1963c2" href="javascript:void(0);"><b>《用户注册协议》</b></a></label>
                        </div>
                        <div class="regbtn">
                            <button type="button" onclick="checkAll()" class="wys_bluebtn saveClass">立即注册</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- }信息板块  -->

<?php require_once('common/footer.php'); ?>

<!-- 导入检输入信息查js{ -->
<script type="text/javascript" src="js/registrationcheck.js"></script>
<!-- }导入检查输入信息js -->
</body>
</html>