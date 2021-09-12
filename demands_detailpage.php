<?php
// 获取语言包
require_once(__DIR__ . '/languages/init_lang.php');
session_start();
$HTTP_HEADER = $_SESSION["LANG"]["http_header"];
$LABEL = $_SESSION["LANG"]["common"];
$DEMAND = $_SESSION["LANG"]["demand"];
// 获取企业需求id
$id = $_GET['id'];
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
    <link rel="stylesheet" type="text/css" href="./css/index_news.css">
    <!-- }导入新闻展示模块css文件 -->

    <!-- 导入其他css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css" id="theme1">
    <link rel="stylesheet" type="text/css" href="./css/home.css" id="theme2">
    <link rel="stylesheet" type="text/css" href="./css/list.css" id="theme1">
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
<div class="main">
    <div class="xa_bread"> <?= $LABEL["current_pos"] ?> <a href="home.php"><?= $LABEL["home_label"] ?></a>&nbsp;&gt;&nbsp; <a href="demands.php"><?= $LABEL["demand_label"] ?></a> &nbsp;&gt;&nbsp;<?= $LABEL["detail_page_label"] ?>
    </div>
    <?php
    include("sql/demandContent.php");
    if (!empty($result)) {
    $res = $result->fetch(PDO::FETCH_OBJ);
    ?>
    <div class="yun_xuqiu_det_a">
        <h1><?= $res->title; ?></h1>
        <div class="yun_xuqiu_det_aa">
            <div class="yun_xuqiu_det_aal"><span><?= $DEMAND["publish_time"] ?><?= $res->date; ?></span> <span><?= $DEMAND["demand_location"] ?><?= $res->location; ?></span>
                <br/>
                <span> <?= $DEMAND["demand_company"] ?><?= $res->entreprise; ?> </span> <span><?= $DEMAND["contact_email"] ?><?= $res->email; ?></span>
            </div>
        </div>
    </div>
    <div class="yun_xuqiu_det_b">
        <h2><?= $DEMAND["brief_intro"] ?></h2>
        <div class="hur1" style="word-break:break-all;word-wrap:break-word;"> <?= $res->description; ?></div>
        <?php } ?>
        <p class="hur2"><?= $DEMAND["related_demand"] ?></p>
        <div class="hur3">
            <?php
            include("sql/homeDemandList.php");
            if (!empty($result)) {
                for ($i = 0; $i < 3; $i++) {
                    $res = $result->fetch(PDO::FETCH_OBJ); ?>
                    <p><a href="demands_detailpage.php?id=<?= $res->id; ?>" target="_blank"><?= $res->title; ?></a> <span><?= $DEMAND["publish_time"] ?><?= $res->date; ?></span></p>
                <?php }
            } ?>
        </div>
    </div>
</div>
<!-- }信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>