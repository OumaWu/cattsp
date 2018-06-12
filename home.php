<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="cache-control" content="no-cache"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>中国-东盟太阳能技术转移中心</title>

    <!-- 导入新闻展示模块css{ -->
    <link rel="stylesheet" type="text/css" href="./css/index_news.css?v=1">
    <script src="中国浙江网上技术市场_files/jquery-1.8.3.min.js.下载"></script>
    <script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
    <!-- }导入新闻展示模块css文件 -->

    <!-- 导入版头css文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/header.css?v=1">
    <!-- }导入版头css文件 -->

    <!-- 导入中国-东盟技术转移中心css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./中国-东盟技术转移中心CATTC官方网站_files/jquery-ui.css">
    <link href="./中国-东盟技术转移中心CATTC官方网站_files/base.css?v=1" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./中国-东盟技术转移中心CATTC官方网站_files/global.css?v=1" type="text/css">
    <link href="./中国-东盟技术转移中心CATTC官方网站_files/index.css?v=1" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./中国-东盟技术转移中心CATTC官方网站_files/recet.css?v=1">
    <link rel="stylesheet" type="text/css" href="./中国-东盟技术转移中心CATTC官方网站_files/common.css?v=1">
    <!-- }导入中国-东盟技术转移中心css和js文件 -->

    <!-- 导入钒钛通css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/common.css?v=1" id="theme1">
    <link rel="stylesheet" type="text/css" href="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/this.css?v=1" id="theme2">
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
<div class="main">

    <!--  新闻板块{  -->
    <div class="wys_layout">
        <div class="wysn_banner fl mt10">
            <div id="slides">
                                <div class="tempWrap" style="overflow:hidden; position:relative; width:640px">
                <div class="tempWrap" style="overflow:hidden; position:relative; width:640px">
                    <ul style="width: 1280px; left: -640px; position: relative; overflow: hidden; padding: 0px; margin: 0px;">
                        <li style="float: left; width: 640px;"><a
                                    href="#" title=""
                                    target="_blank"><img src="images/solar-energy1.jpg" title=""
                                                         alt="" width="640" height="382"></a></li>
                        <li style="float: left; width: 640px;"><a
                                    href="#"
                                    title="" target="_blank"><img
                                        src="images/solar-energy1.jpg" title="" alt="" width="640"
                                        height="382"></a></li>
                    </ul>
                </div>
                                </div>
            </div>
            <div class="flip">
                <ul>
                    <li class="">1</li>
                    <li class="on">2</li>
                </ul>
            </div>
        </div>
        <div class="wysn_news fr mt10">
            <iframe width="540" height="382" frameborder="0" src="scrolling-news-titles.php" scrolling="no"
                    marginheight="0" marginwidth="0" style="display: block;"></iframe>
        </div>
        <div style="clear:both;"></div>
        <div class="floormc"></div>
        <div style="clear:both;"></div>
        <div class="wysn_pro mt10"></div>
    </div>
    <!--  }新闻板块-->

    <!-- 图片滑动脚本{ -->
    <script>
        $(".wysn_banner").slide({
            titCell: ".flip ul",
            mainCell: "#slides ul",
            autoPage: true,
            effect: "left",
            autoPlay: true
        });
    </script>
    <!-- }图片滑动脚本 -->

    <!--  专利技术{  -->
    <div class="n_site_h2 n_site_h2a"><a href="solartech.php" target="_blank">更多&gt;</a>
        <h2>太阳能技术</h2>
    </div>
    <div class="n_site_f">
        <ul class="n_site_f_ul" style="position: relative; width: 1180px; height: 166px;">
            <li class="n_site_f_li1"
                style="position: absolute; width: 1180px; left: 0px; top: 0px; display: list-item;">
                <?php
                include_once("sql/solarTechList.php");
                for ($i = 0; $i < 4; $i++) {
                    $res = $result->fetch(PDO::FETCH_OBJ);
                    ?>
                    <div class="card">
                        <p class="hur1"><a href="solartech_detailpage.php?id=<?= $res->id; ?>" target="_blank"
                                           class="c333"
                                           title="<?= $res->title; ?>"><?= $res->title; ?></a></p>
                        <p class="hur2">企业：<?= $res->entreprise; ?></p>
                        <p class="hur3">地点：<?= $res->location; ?></p>
                        <p class="hur4">技术简介：<?= mb_substr($res->description, 0, 37, "utf-8"); ?>...</p>
                    </div>
                <?php } ?>
            </li>
        </ul>
    </div>
    <!--  }专利技术  -->

    <!--  技术需求{  -->
    <div class="n_site_h2 n_site_h2c"><a href="demands.php" target="_blank">更多&gt;</a>
        <h2>技术需求</h2>
    </div>
    <div class="n_site_f">
        <ul class="n_site_f_ul" style="position: relative; width: 1180px; height: 166px;">
            <li class="n_site_f_li1"
                style="position: absolute; width: 1180px; left: 0px; top: 0px; display: list-item;">
                <?php
                include_once("sql/demandList.php");
                for ($i = 0; $i < 4; $i++) {
                    $res = $result->fetch(PDO::FETCH_OBJ);
                    ?>
                    <div class="card">
                        <p class="hur1"><a href="demands_detailpage.php?id=<?= $res->id; ?>" target="_blank"
                                           class="c333"
                                           title="<?= $res->title; ?>">太阳能高效热利用技术</a></p>
                        <p class="hur2">需求方：<?= $res->entreprise; ?></p>
                        <p class="hur4">需求简介：<?= mb_substr($res->description, 0, 50, "utf-8"); ?>...</p>
                    </div>
                <?php } ?>
            </li>
        </ul>
    </div>
    <!--  }技术需求  -->

    <div class="n_site_g">
        <!--  技术专家{  -->
        <div class="n_site_h2 n_site_h2b"><a href="specialists.php" target="_blank">更多&gt;</a>
            <h2>技术专家</h2>
        </div>
        <div class="n_site_gla">
            <ul>
                <?php
                include_once("sql/specialists.php");
                for ($i = 0; $i < 5; $i++) {
                    $res = $result->fetch(PDO::FETCH_OBJ);
                    ?>
                    <li><a href="specialists_detailpage.php?id=<?= $res->id; ?>" target="_blank" class="hur1"
                           rel="nofollow"
                           title="<?= $res->name; ?>"> <img src="images/<?= $res->photo; ?>" alt="<?= $res->name; ?>"
                                                            onerror="this.src = <?= $res->photo; ?>">
                        </a>
                        <div class="hur2">
                            <p class="hur2a"><a href="specialists_detailpage.php?id=<?= $res->id; ?>" target="_blank"
                                                title="<?= $res->name; ?>">
                                    <?= $res->name; ?> </a></p>
                            <p class="hur2b">从事领域：<?= $res->domain; ?></p>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <!--  }技术专家  -->

        <!--  企业单位{  -->
        <div class="n_site_h2" style="background: #4cafea"><a href="#" target="_blank">更多&gt;</a>
            <h2>企业单位</h2>
        </div>
        <div class="n_site_glb">
            <ul>
                <?php
                include_once("sql/companyList.php");
                for ($i = 0; $i < 4; $i++) {
                    $res = $result->fetch(PDO::FETCH_OBJ);
                    ?>
                    <li>
                        <p class="hur1"><a href="#" target="_blank"
                                           title="<?= $res->name; ?>"><?= $res->name; ?></a></p>
                        <div class="hur2"><a href="#" target="_blank" class="hur2l"
                                             rel="nofollow" title="<?= $res->name; ?>"> <img
                                        src="images/<?= $res->image; ?>" alt="<?= $res->name; ?>"
                                        onerror="this.src = images/<?= $res->image; ?>;">
                            </a>
                            <p class="hur2r">简介：<?= mb_substr($res->description, 0, 50, "utf-8"); ?>…</p>
                        </div>
                        <div class="hur3">
                            <span class="hur3a" style="float: right; width: auto">联系人：<?= $res->realname; ?></span>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <!--  }企业单位  -->
    </div>

    <!--  友情链接{  -->
    <div class="mod">
        <div class="headline pr">
            <h2><a href="http://www.cattc.org.cn/frindlinklist.aspx">友情链接</a></h2>
            <span class="pa divide"></span></div>
        <ul class="f_links">
            <li><a href="http://www.most.gov.cn/index.htm" target="_blank"><img alt=""
                                                                                src="./中国-东盟技术转移中心CATTC官方网站_files/2015060209074428.png">中华人民共和国科技部</a>
            </li>
            <li><a href="http://www.most.go.th/main/th/" target="_blank"><img alt=""
                                                                              src="./中国-东盟技术转移中心CATTC官方网站_files/2015060209351878.png">泰国科技部</a>
            </li>
            <li><a href="http://www.itb-china.org/" target="_blank"><img alt=""
                                                                         src="./中国-东盟技术转移中心CATTC官方网站_files/20161008160912784.png">泰国国际贸易商会</a>
            </li>
            <li><a href="http://www.a-star.edu.sg/" target="_blank"><img alt=""
                                                                         src="./中国-东盟技术转移中心CATTC官方网站_files/2015042416241440.png">新加坡科技研究局</a>
            </li>
            <li><a href="http://www.asean.org/asean/asean-secretariat" target="_blank"><img alt=""
                                                                                            src="./中国-东盟技术转移中心CATTC官方网站_files/2015060209391443.png">东盟秘书处</a>
            </li>
            <li><a href="http://www.mofcom.gov.cn/" target="_blank"><img alt=""
                                                                         src="./中国-东盟技术转移中心CATTC官方网站_files/20161008160943891.jpg">中华人民共和国商务部</a>
            </li>
            <li><a href="http://www.tysp.org/" target="_blank"><img alt=""
                                                                    src="./中国-东盟技术转移中心CATTC官方网站_files/2015060211272176.png">杰出青年科学家来华工作计划</a>
            </li>
            <li><a href="http://www.china-asean-step.com/" target="_blank"><img alt=""
                                                                                src="./中国-东盟技术转移中心CATTC官方网站_files/2015060209263602.png">中国—东盟科技伙伴计划</a>
            </li>
            <li><a href="http://www.caexpo.org/" target="_blank"><img alt=""
                                                                      src="./中国-东盟技术转移中心CATTC官方网站_files/2015032714175691.png">中国-东盟博览会官方网站</a>
            </li>
            <li><a href="http://www.cime.org.cn/" target="_blank"><img alt=""
                                                                       src="./中国-东盟技术转移中心CATTC官方网站_files/20151231115845323.png">CIME国际海洋科技展</a>
            </li>
            <li><a href="http://www.gei.com.cn/" target="_blank"><img alt=""
                                                                      src="./中国-东盟技术转移中心CATTC官方网站_files/20161008161224384.png">长城战略咨询</a>
            </li>
            <li><a href="http://www.imindsoft.com/zh/Default.aspx" target="_blank"><img alt=""
                                                                                        src="./中国-东盟技术转移中心CATTC官方网站_files/20161008164224143.png">一铭软件</a>
            </li>
            <li><a href="http://www.caexpo.com/" target="_blank"><img alt=""
                                                                      src="./中国-东盟技术转移中心CATTC官方网站_files/20161008161628774.png">南博网</a>
            </li>
            <li><a href="http://www.cgfh.com.cn/" target="_blank"><img alt=""
                                                                       src="./中国-东盟技术转移中心CATTC官方网站_files/2015042417313713.png">国家科技成果转化（南宁）综合信息服务平台</a>
            </li>
            <li><a href="http://www.gxst.gov.cn/" target="_blank"><img alt=""
                                                                       src="./中国-东盟技术转移中心CATTC官方网站_files/2015032615335993.png">广西科技信息网</a>
            </li>
            <li><a href="http://www.cattc.org.cn/www.gxpc.org.cn" target="_blank"><img alt=""
                                                                                       src="./中国-东盟技术转移中心CATTC官方网站_files/2015042417292040.png">广西科技情报研究所</a>
            </li>
        </ul>
    </div>
    <!--  }友情链接  -->

</div>
<!-- }首页信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>