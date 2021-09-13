<?php
// 获取语言包
require_once(__DIR__ . '/languages/init_lang.php');
session_start();
$HTTP_HEADER = $_SESSION["LANG"]["http_header"];
$LABEL = $_SESSION["LANG"]["common"];
$DEMAND = $_SESSION["LANG"]["demand"];
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
    <link rel="stylesheet" type="text/css" href="./css/common.css?v" id="theme1">
    <link rel="stylesheet" type="text/css" href="./css/list.css" id="theme2">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css?v">
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
    <div class="xa_bread">
        <?= $LABEL["current_pos"] ?>
        <a href="home.php"><?= $LABEL["home_label"] ?></a>&nbsp;&gt;&nbsp;
        <?= $LABEL["demand_label"] ?>
    </div>
    <div class="yun_xuqiu_list yun_list_div">
        <ul class="clearfix">
            <?php
            include('sql/demandList.php');
            if (!empty($resultSet["result"])) {
                while ($res = $resultSet["result"]->fetch(PDO::FETCH_OBJ)) { ?>
                    <li>
                        <p class="hur1"><a href="demands_detailpage.php?id=<?= $res->id; ?>"
                                           target="_blank"> <?= $res->title; ?> </a></p>
                        <p class="hur2">
                            <span><?= $DEMAND["demand_location"] ?><?= $res->location; ?> </span><span><?= $DEMAND["publish_time"] ?><?= $res->date; ?> </span>
                            <span><?= $DEMAND["demand_company"] ?><?= $res->entreprise; ?> </span>
                            <span><?= $DEMAND["contact_email"] ?><?= $res->email; ?></span></p>
                    </li>
                <?php }
            } ?>
        </ul>
    </div>
    <div class="clear"></div>
    <div class="h_page">
        <!-- 分页链接 -->
        <?php
        if (!empty($resultSet["page"])) {
            $resultSet["page"]->displayPages();
        } ?>
    </div>
</div>
<!-- }信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>