<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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

    <!-- 导入其他css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css" id="theme1">
    <link rel="stylesheet" type="text/css" href="./css/list.css" id="theme2">
    <!-- }导入其他css和js文件 -->

</head>
<body>
<!--<div class="ie7_ts"><em onclick="$(&#39;.ie7_ts&#39;).hide();">X</em>为了获得更好的用户体验，请使用火狐、谷歌、360浏览器极速模式或IE8及以上版本的浏览器</div>-->
<!--<script type="text/javascript">-->
<!--    if (navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.split(";")[1].replace(/[ ]/g, "") == "MSIE6.0") {-->
<!--        $('.ie7_ts').show();-->
<!--    }-->
<!--    else if (navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.split(";")[1].replace(/[ ]/g, "") == "MSIE7.0") {-->
<!--        $('.ie7_ts').show();-->
<!--    }-->
<!--</script>-->

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
    <div class="xa_bread">当前位置：<a href="home.php">首页</a>&nbsp;&gt;&nbsp;企业需求</div>
    <div class="yun_xuqiu_list yun_list_div">
        <ul class="clearfix">
            <?php
            include('sql/demandList.php');
            while ($res = $result->fetch(PDO::FETCH_OBJ)) {
                ?>
                <li>
                    <p class="hur1"><a href="demands_detailpage.php?id=<?php echo $res->id; ?>"
                                       target="_blank"> <?php echo $res->title; ?> </a></p>
                    <p class="hur2"><span>联系人：XXX经理</span> <span>发布时间：<?php echo $res->date; ?> </span>
                        <span>需求企业：<?php echo $res->entreprise; ?> </span>
                        <span>地点：<?php echo $res->location; ?> </span></p>
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