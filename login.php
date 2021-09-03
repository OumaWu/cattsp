<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <title>中国-东盟光电子信息技术转移服务平台</title>

    <!-- 导入新闻展示模块css{ -->
    <link rel="stylesheet" type="text/css" href="./css/index_news.css?v">
    <!-- }导入新闻展示模块css文件 -->

    <!-- 导入版头css文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <!-- }导入版头css文件 -->

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
        <div class="wys_loginwrap">
            <div class="wys_layout bg">
                <div class="wys_loginbox">
                    <p class="tit" style="padding-left: 0!important;">欢迎登录网上技术平台</p>
                    <form id="gform" name="gform" action="sql/signin.php" method="post">

                        <div style="margin-left: 30px; width: 200px; font-size: 15px">
                            <input name="type" type="radio" value="company" id="company" checked="checked"/>
                            <label for="company">企业账号</label>&emsp;&emsp;
                            <input name="type" type="radio" value="specialist" id="specialist" />
                            <label for="specialist">专家账号</label>
                        </div>

                        <div class="cont">
                            <ul>
                                <li>
                                    <input class="inp" name="accountname" id="accountname" type="text"
                                           placeholder="用户名">
                                </li>
                                <li>
                                    <input class="inp" name="password" id="password" type="password" placeholder="密码">
                                </li>
                            </ul>
                            <div class=""><a class="wys_orgbtn" href="javascript:void(0);" id="loginBt"
                                             onClick="Submit();" style="cursor: pointer;">登 录</a></div>
                            <div class="pt20 clearfix"><span class="fl fs14">还没有账号？<a class="cf08833"
                                                                                      href="register.php"
                                                                                      style="color: #f08833;font-size: 14px;">立即注册</a></span>
                                <a class="fr c999 fs14" href="#">忘记密码？</a></div>
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
    $("#gform").bind("keydown",function(e){

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