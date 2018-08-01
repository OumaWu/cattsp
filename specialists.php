<!DOCTYPE html>
<html lang="en">
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

<!--  首页信息板块{  -->
<div class="main">
    <div class="xa_bread">当前位置： <a href="home.php">首页</a>&nbsp;&gt;&nbsp; <a href="#">技术专家</a></div>
    <div class="xb_ba">
        <h1>技术专家</h1>
    </div>
    <div class="xc_b yun_list_div">
        <ul class="clearfix">
            <?php
            include('sql/specialists.php');
            while ($res = $result->fetch(PDO::FETCH_OBJ)) {
                ?>
                <li>
                    <div class="xc_ba"><a target="_blank" href="specialists_detailpage.php?id=<?= $res->id; ?>"> <img
                                    src="./user_files/expert/<?= $res->photo; ?>" alt="<?= $res->name; ?>"
                                    onerror="this.src='images/profile-default-male.png'"> </a>
                    </div>
                    <div class="xc_bb">
                        <p class="hur2"><span><?= $res->location; ?></span> <a
                                    href="specialists_detailpage.php?id=<?= $res->id; ?>" target="_blank"
                                    title="<?= $res->name; ?>"> <?= $res->name; ?> </a></p>
                        <p class="hur1"> 从事领域：<?= $res->domain; ?> </p>
                        <p class="hur1"> 擅长能力：<?= $res->speciality; ?></p>
                    </div>
                    <a href="specialists_detailpage.php?id=<?= $res->id; ?>" target="_blank" rel="nofollow"
                       class="xc_b_f"
                       style="display: block;"></a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="h_page">
        <!-- 分页链接 -->
        <?= $page->displayPages(); ?>
    </div>
    <span class="blank10"></span>
</div>
<!-- }首页信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>