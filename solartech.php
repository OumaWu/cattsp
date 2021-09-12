<?php
// 获取语言包
require_once(__DIR__ . '/languages/init_lang.php');
session_start();
$HTTP_HEADER = $_SESSION["LANG"]["http_header"];
$LABEL = $_SESSION["LANG"]["common"];
$SOLAR_TECH = $_SESSION["LANG"]["solar_tech"];
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
    <link rel="stylesheet" type="text/css" href="./css/header.css?v">
    <!-- }导入版头css文件 -->

    <!-- 导入新闻展示模块css{ -->
    <link rel="stylesheet" type="text/css" href="./css/index_news.css">
    <!-- }导入新闻展示模块css文件 -->

    <!-- 导入其他模块css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css" id="theme1">
    <link rel="stylesheet" type="text/css" href="./css/list.css" id="theme2">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <!-- }导入其他模块css和js文件 -->

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
    <div class="xa_bread">
        <?= $LABEL["current_pos"] ?><a
                href="home.php"><?= $LABEL["home_label"] ?></a>&nbsp;&gt;&nbsp;<?= $LABEL["tech_label"] ?>
    </div>
    <div class="xb_bb yun_list_div">
        <ul>
            <?php
            include('sql/solarTechList.php');
            if (!empty($resultSet)) {
            while ($res = $resultSet["result"]->fetch(PDO::FETCH_OBJ)) { ?>
                <li>
                    <div class="xb_bba">
                        <p class="title"><b> <a href="solartech_detailpage.php?id=<?= $res->id; ?>"
                                                target="_blank"> <?= $res->title; ?> </a> </b></p>
                        <span class="name"><?= $SOLAR_TECH["tech_publisher"] ?><em><?= $res->publisher; ?></em> </span>
                        <br/>
                        <span class="jishuleixing_str"><?= $SOLAR_TECH["tech_location"] ?><em><?= $res->location; ?></em> </span><br/>
                        <span><?= $SOLAR_TECH["company_title"] ?><em><?= $res->entreprise; ?></em> </span></div>
                    <p class="hur2"><strong><?= $SOLAR_TECH["brief_intro"] ?></strong>
                        <em> <?= mb_substr($res->description, 0, 62, "utf-8"); ?>
                            ... </em> <a rel="nofollow" href="solartech_detailpage.php?id=<?= $res->id; ?>"
                                         _blank"><?= $SOLAR_TECH["view_detail"] ?> &gt;</a> </p>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="clear"></div>

    <div class="h_page">
        <!-- 分页链接 -->
        <?= $resultSet["page"]->displayPages();
        } ?>
    </div>
    <span class="blank10"></span></div>
</div>
<!-- }信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>