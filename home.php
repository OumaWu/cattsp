<?php
// 获取语言包
require_once('./languages/init_lang.php');
$HTTP_HEADER = $_SESSION["LANG"]["http_header"];
$HOME = $_SESSION["LANG"]["home"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <title><?=$HTTP_HEADER["title"]?></title>

    <!-- 导入版头css文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <!-- }导入版头css文件 -->

    <!-- 导入新闻展示模块css{ -->
    <link rel="stylesheet" type="text/css" href="./css/index_news.css">
    <!-- }导入新闻展示模块css文件 -->

    <!-- 导入其他模块css文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css"
          id="theme1">
    <link rel="stylesheet" type="text/css" href="./css/home.css?v=1"
          id="theme2">
    <link rel="stylesheet" type="text/css" href="css/wy.css?v=2">
    <!-- }导入其他模块css文件 -->

</head>
<body>
<!--  版头{  -->
<div class="header clearfix" id="header">

    <!--  导入框架  -->
    <?php
    // 登录模块
    require_once('common/loginbar.php');
    // 网站横幅
    require_once('common/banner.php');
    // 导航栏
    require_once('common/navbar.php');
    ?>
</div>
<!--  }版头  -->

<!-- 导入js文件{ -->
<script src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
<!-- }导入js文件 -->

<!--  首页信息板块{  -->
<div class="main">
    <div></div>


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
                                            src="images/solar-energy2.jpg" title="" alt="" width="640"
                                            height="382"></a></li>
                            <li style="float: left; width: 640px;"><a
                                        href="#"
                                        title="" target="_blank"><img
                                            src="images/solar-energy3.jpg" title="" alt="" width="640"
                                            height="382"></a></li>
                            <li style="float: left; width: 640px;"><a
                                        href="#"
                                        title="" target="_blank"><img
                                            src="images/solar-energy4.jpg" title="" alt="" width="640"
                                            height="382"></a></li>
                            <li style="float: left; width: 640px;"><a
                                        href="#"
                                        title="" target="_blank"><img
                                            src="images/solar-energy5.jpg" title="" alt="" width="640"
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

    <!-- 网站板块接口{ -->
    <div class="content2">
        <div class="dd">
            <div class="part1">
                <img src="images/icons/service0.png" height="40px"><br><?= $HOME["tech_title"]; ?>
            </div>
            <div class="part2">
                <div><a href="solartech.php"><?= $HOME["tech_product"]; ?></a></div>
                <div><a href="publishtech.php"><?= $HOME["publish_tech"]; ?></a></div>
                <div><a href="demands.php"><?= $HOME["demand"]; ?></a></div>
                <div><a href="publishdemands.php"><?= $HOME["publish_demand"]; ?></a></div>
            </div>
        </div>
        <div class="dd m-l-5">
            <div class="part1">
                <img src="images/icons/service2.png" height="40px"><br><?= $HOME["trade_title"]; ?>
            </div>
            <div class="part2">
                <div><a href="#"><?= $HOME["hall"]; ?></a></div>
                <div><a href="#"><?= $HOME["bid"]; ?></a></div>
                <div><a href="#"><?= $HOME["mall"]; ?></a></div>
                <div><a href="#"><?= $HOME["register"]; ?></a></div>
            </div>
        </div>
        <div class="dd m-l-5">
            <div class="part1">
                <img src="images/icons/service4.png" height="40px"><br><?= $HOME["service_title"]; ?>
            </div>
            <div class="part2">
                <div><a href="#"><?= $HOME["company_service"]; ?></a></div>
                <div><a href="#"><?= $HOME["in_register"]; ?></a></div>
                <div><a href="#"><?= $HOME["institute"]; ?></a></div>
                <div><a href="#"><?= $HOME["ask_service"]; ?></a></div>
            </div>
        </div>

        <div class="dd m-l-5">
            <div class="part1">
                <img src="images/icons/service1.png" height="40px"><br><?= $HOME["corp_service"]; ?>
            </div>
            <div class="part2">
                <div><a href="specialists.php"><?= $NAVBAR["expert_url"]; ?></a></div>
                <div><a href="#"><?= $HOME["register"]; ?></a></div>
                <div><a href="#"><?= $HOME["tech_eval"]; ?></a></div>
                <div>
                    <a href="#"><?= $HOME["i_eval"]; ?></a>
                </div>
            </div>
        </div>
        <div class="dd m-l-5">
            <div class="part1">
                <img src="images/icons/service3.png" height="40px"><br><?= $HOME["college_service"]; ?>
            </div>
            <div class="part2">
                <div><a href="#"><?= $HOME["publicity"]; ?></a></div>
                <div><a href="#"><?= $HOME["i_publish"]; ?></a></div>
                <div><a href="#"><?= $HOME["college"]; ?></a></div>
                <div><a href="#"><?= $HOME["register"]; ?></a></div>
            </div>
        </div>
    </div>
    <!-- }网站板块接口 -->

    <div class="content3">
        <!--  太阳能技术成果与专利{  -->
        <div class="title left">
            <ul class="tt technology">
                <li><h2><?= $HOME["solar_tech_title"]; ?></h2></li>
                <li class="link"><a href="solartech.php" target="_blank"><?= $HOME["more_url"]; ?>&gt;</a></li>
            </ul>
            <ul class="cc m-t-10">
                <?php
                include_once("sql/homeSolarTechList.php");
                while ($res = $result->fetch(PDO::FETCH_OBJ)) {
                    ?>
                    <li>
                        <div class="left ellipsis" title="<?= $res->title; ?>"><a
                                    href="solartech_detailpage.php?id=<?= $res->id; ?>"
                                    target="_blank"><?= $res->title; ?></a></div>

                        <div class="right">
                            <div class="r1 ellipsis fl" title="企业"><?= $res->entreprise; ?></div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <!--  }太阳能技术成果与专利  -->

        <!--  技术需求{  -->
        <div class="title right">
            <ul class="tt demand">
                <li><h2><?= $HOME["home_demand_title"]; ?></h2></li>
                <li class="link"><a href="demands.php" target="_blank"><?= $HOME["more_url"]; ?>&gt;</a></li>
            </ul>
            <ul class="cc m-t-10">
                <?php
                include_once("sql/homeDemandList.php");
                while ($res = $result->fetch(PDO::FETCH_OBJ)) {
                    ?>
                    <li>
                        <div class="left ellipsis" title="<?= $res->title; ?>"><a
                                    href="demands_detailpage.php?id=<?= $res->id; ?>"
                                    target="_blank"><?= $res->title; ?></a></div>

                        <div class="right">
                            <div class="r1 ellipsis fl" title="企业"><?= $res->entreprise; ?></div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <!--  }技术需求  -->
    </div>

    <div class="content3" style="margin-top: 10px; margin-bottom: 50px;">
        <!--  技术专家{  -->
        <div class="title left">
            <ul class="tt specialist">
                <li><h2><?= $HOME["home_expert_title"]; ?></h2></li>
                <li class="link"><a href="specialists.php" target="_blank"><?= $HOME["more_url"]; ?>&gt;</a></li>
            </ul>
            <div class="spe">
                <ul>
                    <?php
                    include_once("sql/specialists.php");
                    for ($i = 0; $i < 9; $i++) {
                        $res = $result->fetch(PDO::FETCH_OBJ);
                        ?>
                        <li>
                            <a href="specialists_detailpage.php?id=<?= $res->id; ?>" target="_blank" class="photo"
                               title="<?= $res->name; ?>"> <img src="./user_files/expert/<?= $res->photo; ?>"
                                                                alt="<?= $res->name; ?>"
                                                                onerror="this.src = 'images/profile-default-male.png'">
                            </a>

                            <div class="info">
                                <p class="name"><a href="specialists_detailpage.php?id=<?= $res->id; ?>"
                                                   target="_blank"
                                                   title="<?= $res->name; ?>">
                                        <?= $res->name; ?> </a></p>
                                <p class="domain"><?= $HOME["home_domain_title"]; ?><?= $res->domain; ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <!--  }技术专家  -->


        <!--  科技商城{  -->
        <div class="title right">
            <ul class="tt mall">
                <li><h2><?= $HOME["home_mall_title"]; ?></h2></li>
                <li class="link"><a href="#" target="_blank"><?= $HOME["more_url"]; ?>&gt;</a></li>
            </ul>
            <ul class="pv">
                <li>
                    <div class="left">
                        <a href="#" target="_blank">
                            <img src="images/pvequipement1.jpg">
                        </a>
                    </div>
                    <div class="legend"><?= $HOME["mall_item"]; ?></div>
                </li>
                <li>
                    <div class="right">
                        <a href="#" target="_blank">
                            <img src="images/pvequipement2.png">
                        </a>
                    </div>
                    <div class="legend"><?= $HOME["mall_item"]; ?></div>
                </li>
                <li>
                    <div class="left">
                        <a href="#" target="_blank">
                            <img src="images/pvequipement3.jpg">
                        </a>
                    </div>
                    <div class="legend"><?= $HOME["mall_item"]; ?></div>
                </li>
                <li>
                    <div class="right">
                        <a href="#" target="_blank">
                            <img src="images/pvequipement4.jpg">
                        </a>
                    </div>
                    <div class="legend"><?= $HOME["mall_item"]; ?></div>
                </li>
            </ul>
        </div>
        <!--  }科技商城  -->
    </div>

    <!--  广告栏{  -->
    <div class="wysn_ad">
        <div id="slides3">
            <div class="tempWrap" style="overflow:hidden; position:relative; width:1180px">
                <ul style="width: 3540px; left: -2360px; position: relative; overflow: hidden; padding: 0px; margin: 0px;">
                    <li style="float: left; width: 1180px;"><a href="#"
                                                               target="_blank" title="">
                            <img src="./images/main_adv/ad_1.jpg?n=4356" width="1180" height="150" alt=""></a></li>
                    <li style="float: left; width: 1180px;"><a href="#" title=""><img
                                    src="./images/main_adv/ad_2.png?n=4356" width="1180" height="150" alt=""></a></li>
                    <li style="float: left; width: 1180px;"><a href="#" title=""><img
                                    src="./images/main_adv/ad_3.jpg?n=4356" width="1180" height="150" alt=""></a></li>
                </ul>
            </div>
        </div>
        <div class="flip">
            <ul>
                <li class="">1</li>
                <li class="">2</li>
                <li class="on">3</li>
            </ul>
        </div>
    </div>

    <!-- 图片滑动脚本{ -->
    <script>
        $(".wysn_ad").slide({
            titCell: ".flip ul",
            mainCell: "#slides3 ul",
            autoPage: true,
            effect: "left",
            autoPlay: true
        });
    </script>
    <!-- }图片滑动脚本 -->
    <!--  }广告栏  -->


    <div class="n_site_g">
        <div class="n_site_gl">

            <!--  企业单位{  -->
            <div class="n_site_h2 n_site_h2d"><a href="#" target="_blank"><?= $HOME["more_url"]; ?>&gt;</a>
                <h2><?= $HOME["company"]; ?></h2>
            </div>
            <div class="n_site_glb">
                <ul>
                    <?php
                    include_once("sql/companyList.php");
                    while ($res = $result->fetch(PDO::FETCH_OBJ)) {
                        ?>
                        <li>
                            <p class="hur1">
                                <a href="#" target="_blank" title="<?= $res->name; ?>"><?= $res->name; ?>
                                </a>
                            </p>
                            <div class="hur2">

                                <a href="#" target="_blank" class="hur2l"
                                   rel="nofollow" title="<?= $res->name; ?>"> <img
                                            src="images/<?= $res->image; ?>" alt="<?= $res->name; ?>"
                                            onerror="this.src = images/<?= $res->image; ?>;">
                                </a>
                                <p class="hur2r"><?= mb_substr($res->description, 0, 160, "utf-8"); ?>…</p>
                            </div>

                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!--  }企业单位  -->

            <!--  研发单位{  -->
            <div class="n_site_h2 n_site_h2d"><a href="#" target="_blank"><?= $HOME["more_url"]; ?>&gt;</a>
                <h2><?= $HOME["research_in"]; ?></h2>
            </div>
            <div class="n_site_glc">
                <ul>
                    <li>
                        <div class="hur2">
                            <a href="#" target="_self" class="hur1"
                               title="<?= $HOME["gxu"]; ?>"> <img src="./images/GXU.png" alt="">
                            </a>
                            <p><a href="#" target="_blank"
                                  title="<?= $HOME["gxu"]; ?>"><?= $HOME["gxu"]; ?></a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="hur2">
                            <a href="#" target="_self" class="hur1"
                               title="<?= $HOME["gxmzu"]; ?>"> <img src="./images/GXUN.png" alt="">
                            </a>
                            <p><a href="#" target="_blank"
                                  title="<?= $HOME["gxmzu"]; ?>"><?= $HOME["gxmzu"]; ?></a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="hur2">
                            <a href="#" target="_self" class="hur1"
                               title="<?= $HOME["gldz"]; ?>"> <img src="./images/GUET.jpg" alt="">
                            </a>
                            <p><a href="#" target="_blank"
                                  title="<?= $HOME["gldz"]; ?>"><?= $HOME["gldz"]; ?></a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="hur2">
                            <a href="#" target="_self" class="hur1"
                               title="<?= $HOME["gllg"]; ?>"> <img src="./images/GUT.jpg" alt="">
                            </a>
                            <p><a href="#" target="_blank"
                                  title="<?= $HOME["gllg"]; ?>"><?= $HOME["gllg"]; ?></a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="hur2">
                            <a href="#" target="_self" class="hur1"
                               title="<?= $HOME["gxkxu"]; ?>"> <img src="./images/GXUST.jpg" alt="">
                            </a>
                            <p><a href="#" target="_blank"
                                  title="<?= $HOME["gxkxu"]; ?>"><?= $HOME["gxkxu"]; ?></a>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <!--  }研发单位  -->

        </div>

        <?php require_once("./sql/homePolicyList.php"); ?>
        <!--  相关政策法规{  -->
        <div class="n_site_gra">
            <h2><a href="policies.php" target="_blank"><?= $HOME["more_url"]; ?>&gt;</a><?= $HOME["policy"]; ?></h2>
            <ul>
                <?php
                while ($res = $result->fetch(PDO::FETCH_OBJ)) {
                    ?>
                    <li>
                        <a href="policies_detailpage.php?policy_id=<?= $res->id; ?>" target="_blank">
                            <?= $res->title; ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <!--  }相关政策法规  -->
    </div>

    <!--  合作单位{  -->
    <div class="n_site_h">
        <div class="n_site_h1 n_site_h2b">
            <a href="#" target="_blank" class="c333"><?= $HOME["more_url"]; ?>></a>
            <h2><?= $HOME["corp_assoc"]; ?></h2>
        </div>
        <div class="n_site_hb">
            <a href="#" target="_blank" class="application"></a>
            <ul>
                <li>
                    <p class="hur1">
                        <a href="#" target="_blank" title=""><?= $HOME["gxaos"]; ?></a>
                    </p>
                    <a href="#" target="_blank" rel="nofollow" class="hur2" title="">

                        <img src="images/kxylogo.jpg"
                             alt=""
                             onerror="this.src = 'images/entreprise-default.png'">

                    </a>
                    <p class="hur3" style="overflow:hidden;"><?= $HOME["gxaos_desc"]; ?></p>
                </li>
                <li>
                    <p class="hur1">
                        <a href="#" target="_blank" title=""><?= $HOME["gxkjt"]; ?></a>
                    </p>
                    <a href="#" target="_blank" rel="nofollow" class="hur2" title="">

                        <img src="images/kjtlogo.png"
                             alt=""
                             onerror="this.src = 'images/entreprise-default.png'">

                    </a>
                    <p class="hur3"><?= $HOME["gxkjt_desc"]; ?></p>
                </li>
                <li>
                    <p class="hur1">
                        <a href="#" target="_blank" title=""><?= $HOME["nnxed"]; ?></a>
                    </p>
                    <a href="#" target="_blank" rel="nofollow" class="hur2" title="">

                        <img src="images/xunerdi.png"
                             alt=""
                             onerror="this.src = 'images/entreprise-default.png'">

                    </a>
                    <p class="hur3"><?= $HOME["nnxed_desc"]; ?></p>
                </li>
                <li>
                    <p class="hur1">
                        <a href="#" target="_blank" title=""><?= $HOME["gxdm"]; ?></a>
                    </p>
                    <a href="#" target="_blank" rel="nofollow" class="hur2" title="">

                        <img src="images/dameineng.png"
                             alt=""
                             onerror="this.src = 'images/entreprise-default.png'">

                    </a>
                    <p class="hur3"><?= $HOME["gxdm_desc"]; ?></p>
                </li>
            </ul>
        </div>
    </div>
    <!--  }合作单位  -->


    <!--  友情链接{  -->
    <div class="mod">
        <div class="headline pr">
            <h2><a href="http://www.cattc.org.cn/frindlinklist.aspx"><?= $HOME["relative_url"]; ?></a></h2>
            <span class="pa divide"></span></div>
        <ul class="f_links">
            <li><a href="http://www.most.gov.cn/index.htm" target="_blank"><img alt=""
                                                                                src="./images/relative_links/2015060209074428.png"><?= $HOME["most_cn"]; ?></a>
            </li>
            <li><a href="http://www.most.go.th/main/th/" target="_blank"><img alt=""
                                                                              src="./images/relative_links/2015060209351878.png"><?= $HOME["most_th"]; ?></a>
            </li>
            <li><a href="http://www.itb-china.org/" target="_blank"><img alt=""
                                                                         src="./images/relative_links/20161008160912784.png"><?= $HOME["itb_china"]; ?></a>
            </li>
            <li><a href="http://www.a-star.edu.sg/" target="_blank"><img alt=""
                                                                         src="./images/relative_links/2015042416241440.png"><?= $HOME["a_star"]; ?></a>
            </li>
            <li><a href="http://www.asean.org/asean/asean-secretariat" target="_blank"><img alt=""
                                                                                            src="./images/relative_links/2015060209391443.png"><?= $HOME["asean_scrt"]; ?></a>
            </li>
            <li><a href="http://www.mofcom.gov.cn/" target="_blank"><img alt=""
                                                                         src="./images/relative_links/20161008160943891.jpg"><?= $HOME["mofcom"]; ?></a>
            </li>
            <li><a href="http://www.tysp.org/" target="_blank"><img alt=""
                                                                    src="./images/relative_links/2015060211272176.png"><?= $HOME["tysp"]; ?></a>
            </li>
            <li><a href="http://www.china-asean-step.com/" target="_blank"><img alt=""
                                                                                src="./images/relative_links/2015060209263602.png"><?= $HOME["cn_asean_step"]; ?></a>
            </li>
            <li><a href="http://www.caexpo.org/" target="_blank"><img alt=""
                                                                      src="./images/relative_links/2015032714175691.png"><?= $HOME["caexpo"]; ?></a>
            </li>
            <li><a href="http://www.cime.org.cn/" target="_blank"><img alt=""
                                                                       src="./images/relative_links/20151231115845323.png"><?= $HOME["cime"]; ?></a>
            </li>
            <li><a href="http://www.gei.com.cn/" target="_blank"><img alt=""
                                                                      src="./images/relative_links/20161008161224384.png"><?= $HOME["gei"]; ?></a>
            </li>
            <li><a href="http://www.imindsoft.com/zh/Default.aspx" target="_blank"><img alt=""
                                                                                        src="./images/relative_links/20161008164224143.png"><?= $HOME["imindsoft"]; ?></a>
            </li>
            <li><a href="http://www.caexpo.com/" target="_blank"><img alt=""
                                                                      src="./images/relative_links/20161008161628774.png"><?= $HOME["nbw"]; ?></a>
            </li>
            <li><a href="http://www.cgfh.com.cn/" target="_blank"><img alt=""
                                                                       src="./images/relative_links/2015042417313713.png"><?= $HOME["cgfh"]; ?></a>
            </li>
            <li><a href="http://www.gxst.gov.cn/" target="_blank"><img alt=""
                                                                       src="./images/relative_links/2015032615335993.png"><?= $HOME["gxst"]; ?></a>
            </li>
            <li><a href="http://www.cattc.org.cn/www.gxpc.org.cn" target="_blank"><img alt=""
                                                                                       src="./images/relative_links/2015042417292040.png"><?= $HOME["cattc"]; ?></a>
            </li>
        </ul>
    </div>
    <!--  }友情链接  -->

</div>
<!-- }首页信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>