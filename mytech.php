<!DOCTYPE html>
<html lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>中国-东盟太阳能技术转移中心</title>

    <!-- 导入新闻展示模块css{ -->
    <link rel="stylesheet" type="text/css" href="./css/index_news.css">
    <!-- }导入新闻展示模块css文件 -->

    <!-- 导入版头css文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <!-- }导入版头css文件 -->

    <!-- 导入个人页面css文件{ -->
    <link rel="stylesheet" type="text/css"
          href="./css/member.css">
    <link rel="stylesheet" type="text/css"
          href="./css/mystyle.css">
    <!-- }导入个人页面css文件 -->

    <!-- 导入我的需求css文件{ -->
    <link rel="stylesheet" type="text/css" href="css/mydemands.css">
    <!-- }导入我的需求css文件 -->

    <!-- 导入钒钛通css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css" id="theme1">
    <link rel="stylesheet" type="text/css" href="./css/list.css" id="theme2">
    <!-- }导入钒钛通css和js文件 -->

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
<div class="main"><span class="blank10"></span>
    <div class="content pt30 pb60 clearfix">
        <div class="w1220">
            <div class="member-sidebar fl">
                <div class="item">
                    <div class="m-title">会员中心</div>
                    <ul>
                        <li><a href="personalpage.php" class="">基本信息</a></li>
                    </ul>
                </div>
                <div class="item">
                    <div class="m-title">太阳能技术管理</div>
                    <ul>
                        <li><a href="publishtech.php" class="">发布技术</a> <a href="mytech.php" class="on">我的技术</a></li>
                    </ul>
                </div>
                <div class="item">
                    <div class="m-title">需求管理</div>
                    <ul>
                        <li><a href="publishdemands.php" class="">发布需求</a> <a href="mydemands.php" class="">我的需求</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="member-main fr">
                <div class="m-box m-info-detial mb30">
                    <div class="member-title mb30">我的技术</div>
                </div>
                <span class="blank15"></span>
                <div class="clearfix account-list">
                    <div class="tab-content" id="tab0">
                        <table width="990" border="1" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr class="th-yellowbg">
                                <th>技术需求项目名称</th>
                                <th>发布日期</th>
                                <th>企业名称</th>
                                <th>审核状态</th>
                                <th>操作</th>
                            </tr>
                            <?php
                            include('sql/userSolarTechList.php');
                            while ($res = $result->fetch(PDO::FETCH_OBJ)) {
                                ?>
                                <tr>
                                    <td><a href="solartech_detailpage.php?id=<?php echo $res->id; ?>"
                                           target="_blank"><?php echo $res->title; ?></a></td>
                                    <td><?php echo $res->date; ?></td>
                                    <td><?php echo $res->entreprise; ?></td>
                                    <td>审核中</td>
                                    <td><a style="color: rgb(0, 148, 255);" href="#">编辑</a>&nbsp;|&nbsp;<a
                                                id="rpList_ctl00_lbtnDel" style="color: rgb(0, 148, 255);"
                                                href="sql/deleteTech.php?id=<?php echo $res->id; ?>">删 除</a></td>
                                </tr>
                            <?php } ?>
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