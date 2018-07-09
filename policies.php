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
    <div class="xa_bread"> 当前位置： <a href="home.php">首页</a>&nbsp;&gt;&nbsp; <a href="#">相关政策法规</a></div>
    <div class="xb_l clearfix">
        <?php
        $type = "policy";
        require_once('common/sidebar.php');
        ?>
        <div class="xb_lb">
            <ul>
                <?php
                $column_id = 1;
                include("sql/selectPolicyList.php");
                while ($res = $result->fetch(PDO::FETCH_OBJ)) {
                    ?>
                    <li><span><?php echo $res->date; ?></span> <a
                                href="policies_detailpage.php?policy_id=<?php echo $res->id; ?>" target="_blank"
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