<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="pragma" content="no-cache"/>
    <meta http-equiv="Cache-Control" content="no-cache,must-revalidate"/>
    <meta http-equiv="expires" content="Wed,26 Feb 1997 08:21:57 GMT"/>
    <title>中国-东盟太阳能技术转移中心</title>
    <!-- 导入新闻展示模块css{ -->
    <link rel="stylesheet" type="text/css" href="./css/index_news.css">
    <!-- }导入新闻展示模块css文件 -->

    <!-- 导入检输入信息查js{ -->
    <script type="text/javascript" src="js/registrationcheck.js?v=1234"></script>
    <!-- }导入检查输入信息js -->


    <!-- 导入版头css文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <!-- }导入版头css文件 -->

    <!-- 导入中国-东盟技术转移中心css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./中国-东盟技术转移中心CATTC官方网站_files/jquery-ui.css">
    <link href="./中国-东盟技术转移中心CATTC官方网站_files/base.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./中国-东盟技术转移中心CATTC官方网站_files/global.css" type="text/css">
    <link href="./中国-东盟技术转移中心CATTC官方网站_files/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./中国-东盟技术转移中心CATTC官方网站_files/recet.css">
    <link rel="stylesheet" type="text/css" href="./中国-东盟技术转移中心CATTC官方网站_files/common.css">
    <!-- }导入中国-东盟技术转移中心css和js文件 -->

    <!-- 导入钒钛通css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/common.css" id="theme1">
    <link rel="stylesheet" type="text/css" href="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/this.css" id="theme2">
    <!-- }导入钒钛通css和js文件 -->

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
                                       maxlength="15" onfocus="resetDiv();" onblur="checkLogin(this.value);"
                                       placeholder="请输入用户名，应为6-15位的英文或数字"/>
                            </li>
                            <li>
                                <label><span class="cf50">*</span><b>密码：</b></label>
                                <input class="reginp" type="password" name="password" id="password" value=""
                                       maxlength="20" placeholder="请输入密码，应为6-20位的英文或数字">
                            </li>
                            <li>
                                <label><span class="cf50">*</span><b>确认密码：</b></label>
                                <input class="reginp" type="password" name="pswconfirm" id="pswconfirm" value=""
                                       maxlength="20" onblur="checkPsw(this.value);" onfocus="resetDiv2();">
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
                        <div class="regbtn"><a class="wys_bluebtn saveClass" href="javascript:void(0);"
                                               onclick="checkAll()">立即注册</a></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- }信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>