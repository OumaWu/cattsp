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
    <link rel="stylesheet" type="text/css" href="./css/common.css?v=123" id="theme1">
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
    <div class="xa_bread"> 当前位置： <a href="home.php">首页</a>&nbsp;&gt;&nbsp; <a href="#">咨询大厅</a></div>
    <div class="xb_l clearfix">
        <?php
        $category_id = 2;
        $type = "news";
        require_once('common/sidebar.php');
        ?>
        <div class="xb_lb">
            <ul>
                <?php
                include("sql/selectNewsList.php");
                while ($res = $result->fetch(PDO::FETCH_OBJ)) {
                    ?>
                    <li><span><?php echo $res->date; ?></span>
                        <a href="information_detailpage.php?news_id=<?php echo $res->id; ?>" target="_blank"
                                class="chu">
                            <?php echo $res->title; ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <div class="h_page">
                <!-- 分页链接 -->
                <ul class="pagination">

                    <?php if ($page->currentPage != 1) { ?>
                        <li><a href="<?="{$_SERVER["PHP_SELF"]}?category_id={$category_id}&p=1";?>">&laquo;</a></li>
                    <?php } ?>

                    <?php for ($i = $page->startPage; $i <= $page->endPage; $i++) { ?>
                        <li <?php if ($i == $page->currentPage) { ?>class="active"<?php } ?>>
                            <a href="<?="{$_SERVER["PHP_SELF"]}?category_id={$category_id}&p={$i}";?>"><?=$i;?><span class="sr-only">(current)</span></a>
                        </li>
                    <?php } ?>

                    <?php if ($page->currentPage != $page->pageCount && $page->pageCount > 1) { ?>
                        <li><a href="<?="{$_SERVER["PHP_SELF"]}?category_id={$category_id}&p={$page->pageCount}";?>">&raquo;</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <span class="blank10"></span>
</div>
<!-- }信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>