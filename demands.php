<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <title>中国-东盟光电子信息技术转移服务平台</title>

    <!-- 导入版头css文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <!-- }导入版头css文件 -->

    <!-- 导入新闻展示模块css{ -->
    <link rel="stylesheet" type="text/css" href="./css/index_news.css">
    <!-- }导入新闻展示模块css文件 -->

    <!-- 导入其他css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css?v" id="theme1">
    <link rel="stylesheet" type="text/css" href="./css/list.css" id="theme2">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
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
    <div class="xa_bread">当前位置：<a href="home.php">首页</a>&nbsp;&gt;&nbsp;企业需求</div>
    <div class="yun_xuqiu_list yun_list_div">
        <ul class="clearfix">
            <?php
            include('sql/demandList.php');
            while ($res = $result->fetch(PDO::FETCH_OBJ)) {
                ?>
                <li>
                    <p class="hur1"><a href="demands_detailpage.php?id=<?= $res->id; ?>"
                                       target="_blank"> <?= $res->title; ?> </a></p>
                    <p class="hur2"><span>地点：<?= $res->location; ?> </span><span>发布时间：<?= $res->date; ?> </span>
                        <span>需求企业：<?= $res->entreprise; ?> </span>
                        <span>联系邮箱：<?= $res->email; ?></span></p>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="clear"></div>
    <div class="h_page">
        <!-- 分页链接 -->
        <?= $page->displayPages(); ?>
    </div>
</div>
<!-- }信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>