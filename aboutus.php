<?php
// 获取语言包
require_once (__DIR__.'/languages/init_lang.php');
session_start();
$HTTP_HEADER = $_SESSION["LANG"]["http_header"];
$ABOUT_US = $_SESSION["LANG"]["about_us"];
$LABEL = $_SESSION["LANG"]["common"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?=$HTTP_HEADER["title"]?></title>

    <!-- 导入版头css文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <link rel="stylesheet" type="text/css" href="./css/aboutus.css">
    <!-- }导入版头css文件 -->

    <!-- 导入新闻展示模块css{ -->
    <link rel="stylesheet" type="text/css" href="./css/index_news.css">
    <!-- }导入新闻展示模块css文件 -->

    <!-- 导入其他css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css" id="theme1">
    <link rel="stylesheet" type="text/css" href="./css/list.css?v" id="theme2">
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
    <div class="this_about">
        <div class="xa_bread">
            <?=$LABEL["current_pos"]?><a href="home.php"><?=$LABEL["home_label"]?></a>&nbsp;&gt;&nbsp;<?=$LABEL["about_us_label"]?>
        </div>
        <div class="this_about_c"><a href="#" class="on"><?=$LABEL["about_us_label"]?></a></div>
        <div class="this_about_b">
            <div class="this_about_ba">
                <div class="main_head">
                    <div><strong><?=$ABOUT_US["desc_title"]?></strong></div>
                </div>
                <div class="main_body">
                    <div class="lh18 px13 pd10"><?=$ABOUT_US["desc_content"]?></div>
                </div>
                <div class="main_head">
                    <div><strong><?=$ABOUT_US["contact_title"]?></strong></div>
                </div>
                <div class="main_body">
                    <div class="px13 lh18">
                        <table width="100%" cellpadding="3" cellspacing="3" align="center">
                            <tbody>
                            <tr>
                                <td width="90"><?=$ABOUT_US["president"]?></td>
                                <td><?=$ABOUT_US["president_name"]?></td>
                            </tr>
                            <tr>
                                <td><?=$ABOUT_US["secretary"]?></td>
                                <td><?=$ABOUT_US["secretary_name"]?></td>
                            </tr>
                            <tr>
                                <td><?=$ABOUT_US["address_title"]?></td>
                                <td><?=$ABOUT_US["address"]?></td>
                            </tr>
                            <tr>
                                <td><?=$ABOUT_US["post_code_title"]?></td>
                                <td>530007</td>
                            </tr>
                            <tr>
                                <td><?=$ABOUT_US["office_phone"]?></td>
                                <td>0771-3220990，2503801</td>
                            </tr>
                            <tr>
                                <td><?=$ABOUT_US["recruit_phone"]?></td>
                                <td>0771-3218607，2503855</td>
                            </tr>
                            <tr>
                                <td><?=$ABOUT_US["office_email"]?></td>
                                <td>iap@gxas.cn</td>
                            </tr>
                            <tr>
                                <td><?=$ABOUT_US["recruit_email"]?></td>
                                <td>iap-hr@gxas.cn</td>
                            </tr>
                            <tr>
                                <td><?=$ABOUT_US["website"]?></td>
                                <td><a href="http://www.gxas.cn/Gxas/unit.aspx?id=16" target="_blank">http://www.gxas.cn/Gxas/unit.aspx?id=16</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- }首页信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>