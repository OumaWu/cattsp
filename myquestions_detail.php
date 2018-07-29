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

    <!-- 导入个人页面css文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/member.css">
    <!-- }导入个人页面css文件 -->

    <!-- 导入需求发布页面css文件{ -->
    <link href="./css/frame.css?v" rel="stylesheet" type="text/css">
    <!-- }导入需求发布页面css文件 -->

    <!-- 导入其他css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css" id="theme1">
    <!--    <link rel="stylesheet" type="text/css" href="./css/list.css" id="theme2">-->
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
                    <div class="m-title">会员中心</div>
                    <ul>
                        <li><a href="personalpage.php" class="">基本信息</a></li>
                    </ul>
                </div>
                <div class="item">
                    <div class="m-title">太阳能技术管理</div>
                    <ul>
                        <li><a href="publishtech.php" class="">发布技术</a> <a href="mytech.php" class="">我的技术</a></li>
                    </ul>
                </div>
                <div class="item">
                    <div class="m-title">需求管理</div>
                    <ul>
                        <li><a href="publishdemands.php" class="">发布需求</a> <a href="mydemands.php" class="">我的需求</a>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <div class="m-title">专家咨询</div>
                    <ul>
                        <li><a href="myquestions.php" class="on">我的提问</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="member-main fr">
                <div class="m-box m-info-detial mb30">
                    <div class="member-title mb30">问题详情
                        <a href="myquestions.php" style="float: right;">返回</a>
                    </div>
                </div>
                <div class="content">
                    <div style="height: 10px;"></div>
                    <form id="question" action="sql/userReply.php"
                          method="post">
                        <input type="hidden" name="q_id" id="q_id" value="<?=$_GET['q_id'];?>">
                        <div class="wrap1 d6_xqc">
                            <table class="d6xq_tb" width="100%" border="0" cellspacing="0" cellpadding="0">
                                <?php
                                require_once('./sql/selectQuestion.php');
                                $ques = $result->fetch(PDO::FETCH_OBJ);
                                ?>
                                <tbody>
                                <input type="hidden" name="u_id" id="u_id" value="<?=$ques->u_id;?>">
                                <input type="hidden" name="spe_id" id="spe_id" value="<?=$ques->spe_id;?>">
                                <tr>
                                    <th><i></i>问题名称：</th>
                                    <td>
                                        <h1><?= $ques->title; ?></h1>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i></i>详细描述：</th>
                                    <td>
                                        <h2><?= $ques->content; ?></h2>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i></i>提问时间：</th>
                                    <td>
                                        <p><?= $ques->time; ?></p>
                                    </td>
                                </tr>
                                <?php
                                require_once('./sql/selectReply.php');
                                while ($res = $result->fetch(PDO::FETCH_OBJ)) { ?>

                                    <tr>
                                        <th><h2><?= $res->sender ? $res->expert : $res->user; ?>：</h2></th>
                                        <td>
                                            <?= $res->time; ?>
                                            <p><?= $res->content; ?></p>

                                        </td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <th><i></i>填写回复：</th>
                                    <td><textarea class="d6_tarea" id="content" name="content" warning="请填写回复"
                                                  placeholder="请填写回复"></textarea></td>
                                </tr>

                                </tbody>
                            </table>
                            <div class="d6_xqbm">
                                <input type="submit" class="d6_xqbta" id="btnSave" value="提交">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<script>-->
<!--    function Submit() {-->
<!--        document.getElementById("question").submit();-->
<!--    }-->
<!--</script>-->
<!-- }首页信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>