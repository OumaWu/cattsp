<?php
// 获取语言包
require_once(__DIR__ . '/languages/init_lang.php');
session_start();
$HTTP_HEADER = $_SESSION["LANG"]["http_header"];
$LABEL = $_SESSION["LANG"]["common"];
$ARTICLE = $_SESSION["LANG"]["article"];
$category_type = "news";
$category_id = $_GET["category_id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?= $HTTP_HEADER["title"] ?></title>
    <!-- 导入新闻展示模块css{ -->
    <link rel="stylesheet" type="text/css" href="./css/index_news.css">
    <!-- }导入新闻展示模块css文件 -->

    <!-- 导入版头css文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <!-- }导入版头css文件 -->

    <!-- 导入其他css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css" id="theme1">
    <link rel="stylesheet" type="text/css" href="./css/list.css" id="theme2">
    <!-- }导入其他css和js文件 -->

</head>
<body>

<!--  版头{  -->
<div class="header clearfix" id="header">

    <!--  登录模块{  -->
    <?php require_once(__DIR__ . '/common/loginbar.php'); ?>
    <!--  }登录模块  -->

    <!--  网站横幅{  -->
    <?php require_once(__DIR__ . '/common/banner.php'); ?>
    <!--  }网站横幅  -->

    <!--  导航栏{  -->
    <?php require_once(__DIR__ . '/common/navbar.php'); ?>
    <!--  }导航栏  -->
</div>
<!--  }版头  -->

<!--  信息板块{  -->
<div class="main">
    <div class="xa_bread"> <?= $LABEL["current_pos"] ?>
        <a href="home.php"><?= $LABEL["home_label"] ?></a>&nbsp;&gt;&nbsp;
        <a href="information.php"><?= $LABEL["news_label"] ?></a>&nbsp;&gt;&nbsp;
        <span><?= $LABEL["detail_page_label"] ?></span>
    </div>
    <div class="xb_l clearfix">
        <?php
        require_once(__DIR__ . '/common/sidebar.php');
        include_once(__DIR__ . '/sql/newsContent.php');
        if (!empty($result)) {
            $res = $result->fetch(PDO::FETCH_OBJ); ?>
            <div class="xb_lb">
                <h1 class="xb_ka"><?= $res->title; ?></h1>
                <p class="xb_kb">
                    <?= $ARTICLE["publish_time"] ?><?= $res->date; ?>&nbsp;&nbsp;&nbsp;
                </p>
                <div class="xb_kc">
                    <?= $res->content; ?>
                </div>
            </div>
        <?php } ?>
    </div>
    <span class="blank10"></span></div>
<!-- }信息板块  -->

<?php require_once(__DIR__ . '/common/footer.php'); ?>
</body>
</html>