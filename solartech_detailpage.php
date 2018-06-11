<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0021)http://www.vtitt.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>中国-东盟太阳能技术转移中心</title>
    <!-- 导入新闻展示模块css{ -->
    <link rel="stylesheet" type="text/css" href="./css/index_news.css">
    <!-- }导入新闻展示模块css文件 -->

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
    <script type="text/javascript" src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/wap.js"></script>
    <script type="text/javascript" src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/1633-domain.js"></script>
    <script type="text/javascript" src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/yun-plugins.js"></script>
    <script type="text/javascript" src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/login.js"></script>
    <script type="text/javascript" src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/common.js"></script>
    <script type="text/javascript" src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/posconfig.js"></script>
    <script type="text/javascript" src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/jquery.qrcode.min.js"></script>
    <script type="text/javascript" src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/dialog1633.js"></script>
    <!--jjky/common/header.htm-->
    <script src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/jquery.superslide.2.1.1.js" type="text/javascript"></script>
    <!-- }导入钒钛通css和js文件 -->

</head>
<body>
<div class="ie7_ts"><em onclick="$(&#39;.ie7_ts&#39;).hide();">X</em>为了获得更好的用户体验，请使用火狐、谷歌、360浏览器极速模式或IE8及以上版本的浏览器</div>
<script type="text/javascript">
    if (navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.split(";")[1].replace(/[ ]/g, "") == "MSIE6.0") {
        $('.ie7_ts').show();
    }
    else if (navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.split(";")[1].replace(/[ ]/g, "") == "MSIE7.0") {
        $('.ie7_ts').show();
    }
</script>

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
<div class="main">
    <div class="xa_bread"> 当前位置： <a href="home.php">首页</a>&nbsp;&gt;&nbsp; <a href="solartech.php">科技成果</a> &nbsp;&gt;&nbsp;详细页
    </div>
    <?php
    $id = $_GET['id'];
    include("sql/solarTechContent.php");
    $res = $result->fetch(PDO::FETCH_OBJ);
    ?>
    <div class="xb_ga clearfix">
        <div id="preview">
            <div class="jqzoom" id="spec-n1"><img alt="专利申请书图片"
                                                  src="./（技术页面）一种单手操作伸缩式杆杖的锁紧机构_四川钒钛产业技术交易平台_钒钛通_files/20170315192430117523.jpg-800"
                                                  jqimg="http://upload.1633.com/upload/users/8594931/tec/20170315192430117523.jpg-800"
                                                  onerror="this.src=&#39;http://image.1633.com/images/common/default.jpg_180x120.jpg&#39;">
            </div>
            <div id="spec-n5">
                <div id="spec-left"><img src="./（技术页面）一种单手操作伸缩式杆杖的锁紧机构_四川钒钛产业技术交易平台_钒钛通_files/left.gif"></div>
                <div id="spec-list">
                    <ul style="width: 120px; overflow: hidden;">
                        <li class="on"><img alt="专利申请书图片"
                                            src="./（技术页面）一种单手操作伸缩式杆杖的锁紧机构_四川钒钛产业技术交易平台_钒钛通_files/20170315192414102846.jpg-800"
                                            onerror="this.src=&#39;http://image.1633.com/images/common/default.jpg_180x120.jpg&#39;">
                        </li>
                        <li class=""><img alt="技术图纸"
                                          src="./（技术页面）一种单手操作伸缩式杆杖的锁紧机构_四川钒钛产业技术交易平台_钒钛通_files/20170315192430117523.jpg-800"
                                          onerror="this.src=&#39;http://image.1633.com/images/common/default.jpg_180x120.jpg&#39;">
                        </li>
                    </ul>
                </div>
                <div id="spec-right"><img src="./（技术页面）一种单手操作伸缩式杆杖的锁紧机构_四川钒钛产业技术交易平台_钒钛通_files/right.gif"></div>
            </div>
        </div>
        <script src="./（技术页面）一种单手操作伸缩式杆杖的锁紧机构_四川钒钛产业技术交易平台_钒钛通_files/switch_1.js" type="text/javascript"></script>
        <script src="./（技术页面）一种单手操作伸缩式杆杖的锁紧机构_四川钒钛产业技术交易平台_钒钛通_files/switch_2.js" type="text/javascript"></script>
        <script src="./（技术页面）一种单手操作伸缩式杆杖的锁紧机构_四川钒钛产业技术交易平台_钒钛通_files/switch_3.js" type="text/javascript"></script>
    </div>
    <div class="xb_gb clearfix">
        <div class="xb_gaa">
            <h1 class="dx_Dla"><span>[<?php echo $res->id; ?>]</span><?php echo $res->title; ?></h1>
            <div class="dx_DlbR">
                <p><b>企业名称：</b> <?php echo $res->entreprise; ?> </p>
                <p><b>专利所属地：</b><?php echo $res->location; ?></p>
                <p><b>专利号：</b>201720065898X</p>
                <p><b>技术持有人：</b>XXX先生</p>
                <p><b>联系邮箱：</b><?php echo $res->email; ?></p>
            </div>
        </div>
    </div>
    <span class="blank10"></span>
    <div class="dx_Dlak">
        <div class="xb_ae">
            <h2>技术详细介绍</h2>
        </div>
        <div class="dx_Dlc" style="word-break:break-all;word-wrap:break-word;">
            <p><?php echo $res->description; ?></p>
        </div>
    </div>
</div>
</div>
<!-- }信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>