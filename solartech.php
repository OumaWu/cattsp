<!DOCTYPE html PUBLIC>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <title>中国-东盟太阳能技术转移中心</title>

    <!-- 导入版头css文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/header.css?v">
    <!-- }导入版头css文件 -->

    <!-- 导入新闻展示模块css{ -->
    <link rel="stylesheet" type="text/css" href="./css/index_news.css">
    <!-- }导入新闻展示模块css文件 -->

    <!-- 导入其他模块css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css" id="theme1">
    <link rel="stylesheet" type="text/css" href="./css/list.css" id="theme2">
    <!-- }导入其他模块css和js文件 -->

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
    <div class="xa_bread">当前位置：<a href="home.php">首页</a>&nbsp;&gt;&nbsp;科技成果</div>
    <div class="xb_bb yun_list_div">
        <ul>
            <?php
            include('sql/solarTechList.php');
            while ($res = $result->fetch(PDO::FETCH_OBJ)) {
                ?>
                <li>
                    <div class="xb_bba">
                        <p class="title"><b> <a href="solartech_detailpage.php?id=<?php echo $res->id; ?>"
                                                target="_blank"> <?php echo $res->title; ?> </a> </b></p>
                        <span class="name">专利持有人：<em><?= $res->publisher; ?></em> </span> <br/>
                        <span class="jishuleixing_str"> 专利所属地：<em><?php echo $res->location; ?></em> </span><br/>
                        <span> 企业名称：<em><?php echo $res->entreprise; ?></em> </span></div>
                    <p class="hur2"><b>技术简介：</b> <em> <?php echo mb_substr($res->description, 0, 62, "utf-8"); ?>
                            ... </em> <a rel="nofollow" href="solartech_detailpage.php?id=<?php echo $res->id; ?>"
                                         _blank">查看详细 &gt;</a> </p>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="clear"></div>
    <div class="h_page">
        <div id="pages_bg" class="pages"> <span class="number9"> <span title="上一页">上一页</span><span title="第 1页"
                                                                                                   class="pagelist_cur">1</span> <a
                        href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">6</a> <a
                        href="#">7</a> <span class="more">...</span> <a
                        href="http://www.vtitt.com/tec/list_2.html">下一页</a> 到第
      <input id="jumppage" type="text" value="1" size="2" name="page">
      页
      <input type="button" id="bt_go" value="确认" name="TopSkyLib_GoPage_Bnt">
      </span></div>
    </div>
    <span class="blank10"></span></div>
</div>
<!-- }信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>