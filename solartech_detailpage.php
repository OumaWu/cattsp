<?php
// 获取语言包
require_once(__DIR__ . '/languages/init_lang.php');
session_start();
$HTTP_HEADER = $_SESSION["LANG"]["http_header"];
$LABEL = $_SESSION["LANG"]["common"];
$SOLAR_TECH = $_SESSION["LANG"]["solar_tech"];
// 获取技术成果id
$id = $_GET['id'];
//如果技术成果的id未存入cookie则引入统计脚本
if (!isset($_COOKIE["tech"][$id])) {
    include_once "./sql/countVisit.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <title><?= $HTTP_HEADER["title"] ?></title>

    <!-- 导入版头css文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <!-- }导入版头css文件 -->

    <!-- 导入新闻展示模块css{ -->
    <link rel="stylesheet" type="text/css" href="./css/index_news.css">
    <!-- }导入新闻展示模块css文件 -->

    <!-- 导入其他css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css?v=1" id="theme1">
    <link rel="stylesheet" type="text/css" href="./css/list.css" id="theme2">
    <link rel="stylesheet" type="text/css" href="./css/solartech.css">
    <!-- }导入其他css和js文件 -->

    <!-- 导入bootstrap -->
    <!--    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-combined.min.css">

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
    <div class="xa_bread"> <?= $LABEL["current_pos"] ?> <a href="home.php"><?= $LABEL["home_label"] ?></a>&nbsp;&gt;&nbsp; <a href="solartech.php"><?= $LABEL["tech_label"] ?></a> &nbsp;&gt;&nbsp;<?= $LABEL["detail_page_label"] ?>
    </div>
    <?php
    include("sql/solarTechContent.php");
    $res = $result->fetch(PDO::FETCH_OBJ);
    ?>
    <div class="xb_ga clearfix">

        <div id="preview">
            <div class="carousel slide" id="carousel-14768">
                <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#carousel-14768"></li>
                    <li data-slide-to="1" data-target="#carousel-14768" class=""></li>
                    <li data-slide-to="2" data-target="#carousel-14768" class=""></li>
                    <li data-slide-to="3" data-target="#carousel-14768" class=""></li>
                    <li data-slide-to="4" data-target="#carousel-14768" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active"><img class="solartech-img" alt="" src="user_files/<?= $res->image1; ?>"
                                                  onmouseover="this.style.cursor='pointer';this.style.cursor='hand'"
                                                  onmouseout="this.style.cursor='default'" onclick="showimage(this);"
                                                  onerror="this.src = 'images/default.jpg'">
                    </div>
                    <div class="item"><img class="solartech-img" alt="" src="user_files/<?= $res->image2; ?>"
                                           onmouseover="this.style.cursor='pointer';this.style.cursor='hand'"
                                           onmouseout="this.style.cursor='default'" onclick="showimage(this);"
                                           onerror="this.src = 'images/default.jpg'">
                    </div>
                    <div class="item"><img class="solartech-img" alt="" src="user_files/<?= $res->image3; ?>"
                                           onmouseover="this.style.cursor='pointer';this.style.cursor='hand'"
                                           onmouseout="this.style.cursor='default'" onclick="showimage(this);"
                                           onerror="this.src = 'images/default.jpg'">
                    </div>
                    <div class="item"><img class="solartech-img" alt="" src="user_files/<?= $res->image4; ?>"
                                           onmouseover="this.style.cursor='pointer';this.style.cursor='hand'"
                                           onmouseout="this.style.cursor='default'" onclick="showimage(this);"
                                           onerror="this.src = 'images/default.jpg'">
                    </div>
                    <div class="item"><img class="solartech-img" alt="" src="user_files/<?= $res->image5; ?>"
                                           onmouseover="this.style.cursor='pointer';this.style.cursor='hand'"
                                           onmouseout="this.style.cursor='default'" onclick="showimage(this);"
                                           onerror="this.src = 'images/default.jpg'">
                    </div>
                </div>
                <a data-slide="prev" href="#carousel-14768" class="left carousel-control">‹</a> <a data-slide="next"
                                                                                                   href="#carousel-14768"
                                                                                                   class="right carousel-control">›</a>
            </div>

            <!-- 模态框（Modal） -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                ×
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="img_show">
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal -->
            </div>
        </div>

    </div>

    <div class="xb_gb clearfix">
        <div class="xb_gaa">
            <h1 class="dx_Dla"><span>[<?= $res->id; ?>]</span><?= $res->title; ?></h1>
            <div class="dx_DlbR">
                <p><b><?= $SOLAR_TECH["company_title"] ?></b> <?= $res->entreprise; ?> </p>
                <p><b><?= $SOLAR_TECH["tech_location"] ?></b><?= $res->location; ?></p>
                <p><b><?= $SOLAR_TECH["tech_publisher"] ?></b><?= $res->publisher; ?></p>
                <p><b><?= $SOLAR_TECH["contact_email"] ?></b><?= $res->email; ?></p>
            </div>
        </div>
    </div>
    <span class="blank10"></span>
    <div class="dx_Dlak">
        <div class="xb_ae">
            <h2><?= $SOLAR_TECH["detailed_intro"] ?></h2>
        </div>
        <div class="dx_Dlc" style="word-break:break-all;word-wrap:break-word;">
            <p><?= $res->description; ?></p>
        </div>
    </div>
</div>
</div>
<!-- }信息板块  -->

<?php require_once('common/footer.php'); ?>

<!-- 导入js文件 -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- 图片放大脚本 -->
<script>
    function showimage(source) {
        var img = $(source).attr("src");
        $("#myModal").find("#img_show").html("<image src='" + img + "' class='carousel-inner img-responsive img-rounded' />");
        $("#myModal").modal('show');
    }
</script>
</body>
</html>