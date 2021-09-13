<?php
// 获取语言包
require_once(__DIR__ . '/languages/init_lang.php');
session_start();
$HTTP_HEADER = $_SESSION["LANG"]["http_header"];
$LABEL = $_SESSION["LANG"]["common"];
$category_type = "news";
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
    <!-- 导入新闻展示模块css{ -->
    <link rel="stylesheet" type="text/css" href="./css/index_news.css">
    <!-- }导入新闻展示模块css文件 -->

    <!-- 导入版头css文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <!-- }导入版头css文件 -->

    <!-- 导入其他css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css?v=123" id="theme1">
    <link rel="stylesheet" type="text/css" href="./css/list.css" id="theme2">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
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
    <div class="xa_bread">
        <?= $LABEL["current_pos"] ?>
        <a href="home.php"><?= $LABEL["home_label"] ?></a>&nbsp;&gt;&nbsp;
        <?= $LABEL["news_label"] ?>
    </div>
    <div class="xb_l clearfix">
        <?php require_once('common/sidebar.php'); ?>
        <div class="xb_lb">
            <ul>
                <?php
                include(__DIR__ . "/sql/get_article_list.php");
                if (!empty($resultSet)) {
                    while ($res = $resultSet["result"]->fetch(PDO::FETCH_OBJ)) {
                        ?>
                        <li><span><?= $res->date; ?></span>
                            <a href="information_detailpage.php?news_id=<?= $res->id; ?>&category_id=<?= $res->category; ?>"
                               target="_blank"
                               class="chu">
                                <?= $res->title; ?>
                            </a>
                        </li>
                    <?php }
                } ?>
            </ul>
            <div class="h_page">
                <!-- 分页链接 -->
                <ul class="pagination">
                    <?php if (!empty($resultSet)) {
                        if ($resultSet["page"]->currentPage != 1) { ?>
                            <li><a href="<?= "{$_SERVER["PHP_SELF"]}?category_id={$resultSet["category_id"]}&p=1"; ?>">&laquo;</a>
                            </li>
                        <?php } ?>

                        <?php for ($i = $resultSet["page"]->startPage; $i <= $resultSet["page"]->endPage; $i++) { ?>
                            <li <?php if ($i == $resultSet["page"]->currentPage) { ?>class="active"<?php } ?>>
                                <a href="<?= "{$_SERVER["PHP_SELF"]}?category_id={$resultSet["category_id"]}&p={$i}"; ?>"><?= $i; ?>
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                        <?php } ?>

                        <?php if ($resultSet["page"]->currentPage != $resultSet["page"]->pageCount && $resultSet["page"]->pageCount > 1) { ?>
                            <li>
                                <a href="<?= "{$_SERVER["PHP_SELF"]}?category_id={$resultSet["category_id"]}&p={$resultSet["page"]->pageCount}"; ?>">&raquo;</a>
                            </li>
                        <?php }
                    } ?>
                </ul>
            </div>
        </div>
    </div>
    <span class="blank10"></span>
</div>
<!-- }信息板块  -->

<?php require_once(__DIR__ . '/common/footer.php'); ?>
</body>
</html>