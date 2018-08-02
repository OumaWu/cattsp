<?php require_once('./sql/checksession.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <title>中国-东盟太阳能技术转移中心</title>

    <!-- 导入版头css文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <!-- }导入版头css文件 -->

    <!-- 导入新闻展示模块css{ -->
    <link rel="stylesheet" type="text/css" href="./css/index_news.css">
    <!-- }导入新闻展示模块css文件 -->

    <!-- 导入个人页面css文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/member.css?v">
    <link rel="stylesheet" type="text/css" href="./css/mystyle.css">
    <!-- }导入个人页面css文件 -->

    <!-- 导入其他css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css" id="theme1">
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
<div class="main"><span class="blank10"></span>
    <div class="content pt30 pb60 clearfix">
        <div class="w1220">
            <div class="member-sidebar fl">
                <div class="item">
                    <div class="m-title">专家用户中心</div>
                    <ul>
                        <li><a href="specialist_profile.php" class="">基本信息</a></li>
                    </ul>
                </div>
                <div class="item">
                    <div class="m-title">答疑中心</div>
                    <ul>
                        <li><a href="#" class="on">用户提问</a></li>
                    </ul>
                </div>
            </div>
            <div class="member-main fr">
                <div class="m-box m-info-detial mb30">
                    <div class="member-title mb30">用户问题答疑</div>

                    <div class="info-state fz14 mb100" style="border: 1px solid #ddd;">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>编号</th>
                                    <th>问题名称</th>
                                    <th>提问者</th>
                                    <th>发布日期</th>
                                    <th>查看</th>
                                    <th>删除</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                require_once('./sql/selectQuestions.php');
                                while ($res = $result->fetch(PDO::FETCH_OBJ)) { ?>
                                    <tr>
                                        <td><?= $res->q_id; ?></td>
                                        <td><?= $res->title; ?></td>
                                        <td><?= $res->user; ?></td>
                                        <td><?= $res->time; ?></td>
                                        <td><a href="specialist_questionDetail.php?q_id=<?= $res->q_id; ?>"
                                               class="btn btn-default">查看</a>
                                        </td>
                                        <td><a href="" class="btn btn-primary"
                                               onclick="if(!confirm('确定要删除吗？')) return false;">删除</a></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                            <div class="h_page">
                                <!-- 分页链接 -->
                                <?= $page->displayPages(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- }首页信息板块  -->

<?php require_once('common/footer.php'); ?>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/templatemo_script.js"></script>
</body>
</html>