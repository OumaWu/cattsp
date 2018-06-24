<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
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
    <div class="xa_bread"> 当前位置： <a href="home.php">首页</a>&nbsp;&gt;&nbsp; <a href="#">咨询大厅</a></div>
    <div class="xb_l clearfix">
        <?php
        $type = "news";
        require_once('common/sidebar.php');
        ?>
        <div class="xb_lb">
            <ul>
                <?php
                $column_id = 1;
                include("sql/selectNewsList.php");
                while ($res = $result->fetch(PDO::FETCH_OBJ)) {
                    ?>
                    <li><span><?php echo $res->date; ?></span> <a
                                href="information_detailpage.php?news_id=<?php echo $res->id; ?>" target="_blank"
                                class=" chu"> <?php echo $res->title; ?></a></li>
                <?php } ?>
            </ul>
            <div class="h_page">
                <div id="pages_bg" class="pages"> <span class="number9"> <span title="第 1页"
                                                                               class="pagelist_cur">1</span> 到第
          <input id="jumppage" type="text" value="1" size="2" name="page">
          页
          <input type="button" id="bt_go" value="确认" name="TopSkyLib_GoPage_Bnt">
          </span></div>
            </div>
        </div>
    </div>
    <span class="blank10"></span>
</div>
<!-- }信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>