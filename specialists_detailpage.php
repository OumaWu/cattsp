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

<!--  登录模块{  -->
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
<div style="width: 1180px; margin: 0 auto;">
    <div class="xa_bread">当前位置： <a href="home.php">首页</a>&nbsp;&gt;&nbsp; <a
                href="#">技术专家</a></div>
</div>
<?php
$id = $_GET['id'];
include("sql/specialistProfile.php");
$res = $result->fetch(PDO::FETCH_OBJ);
?>
<div class="space_top space_top_1">
    <div class="space_top_photo"><img src="./user_files/expert/<?= $res->photo; ?>" alt="<?= $res->photo; ?>"
                                      onerror="this.src='images/profile-default-male.png'"></div>
    <h1 class="name"><?= $res->name; ?></h1>
    <p class="hur1"> <?= $res->title; ?> </p>
    <?php if (!isset($_SESSION["mode"]) || $_SESSION["mode"] != "expert") { ?>
        <p class="hur2">
        <span class="gz1">
                <a href="askQuestion.php?spe_id=<?= $res->id; ?>&expert=<?= $res->name; ?>"
                   style="color: white;">向TA咨询</a>
        </span>
        </p>
    <?php } ?>
</div>
<div class="main">
    <div class="space_h2 space_h2_1"><h1>基本信息</h1></div>
    <div class="space_con">
        <p class="space_con_b"><span class="hur1"> 所在地</span><?= $res->location; ?></p>
        <p class="space_con_b"><span class="hur1"> 学历</span> <?= $res->degree; ?></p>
        <p class="space_con_b"><span class="hur1"> 从业时长</span><?= $res->career_age; ?> 年</p>
        <p class="space_con_b"><span class="hur1"> 毕业院校</span><?= $res->institute; ?></p>
    </div>
    <div class="space_h2 space_h2_2"><h1>技术能力</h1></div>
    <div class="space_con">
        <p class="space_con_b"><span class="hur1">从事领域</span><?= $res->domain; ?></p>
        <p class="space_con_b"><span class="hur2">擅长能力</span><?= $res->speciality; ?></p>
    </div>
    <div class="space_h2 space_h2_3"><h1>个人简介</h1></div>
    <div class="space_con">
        <div class="space_con_p">
            <?php
            $intro = preg_split("/[ ]+/", $res->introduction);
            foreach ($intro as $paragraph) {
                ?>
                <p>&emsp;&emsp;<?= $paragraph; ?></p>
            <?php } ?>
            <!--<p></p>-->
        </div>
        <span class="blank20"></span>
    </div>
</div>
<!-- }首页信息板块  -->


<?php require_once('common/footer.php'); ?>
</body>
</html>