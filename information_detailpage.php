<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>中国-东盟光电子信息技术转移服务平台</title>
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
    <div class="xa_bread"> 当前位置： <a href="home.php">首页</a>&nbsp;&gt;&nbsp; <a href="information.php">咨询大厅</a>&nbsp;&gt;&nbsp;
        <span>详细页</span>
    </div>
    <div class="xb_l clearfix">
        <?php
        $type = "news";
        require_once('common/sidebar.php');
        ?>

        <?php
        $news_id = $_GET['news_id'];
        include("sql/newsContent.php");
        $res = $result->fetch(PDO::FETCH_OBJ);
        ?>
        <div class="xb_lb">
            <h1 class="xb_ka"><?php echo $res->title; ?></h1>
            <p class="xb_kb">
                发布日期：<?php echo $res->date; ?>&nbsp;&nbsp;&nbsp;
            </p>
            <div class="xb_kc">
                <?= $res->content; ?>
            </div>
        </div>
    </div>
    <span class="blank10"></span></div>
<!-- }信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>