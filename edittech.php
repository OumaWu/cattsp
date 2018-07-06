<!DOCTYPE html>
<html lang="en">
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

    <!-- 导入技术发布页面css文件{ -->
    <link href="./css/frame.css" rel="stylesheet" type="text/css">
    <!-- }导入技术发布页面css文件 -->

    <!-- 导入其他css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css" id="theme1">
    <link rel="stylesheet" type="text/css" href="./css/list.css" id="theme2">
    <!-- }导入其他css和js文件 -->

    <link rel="stylesheet" type="text/css" href="./css/edit-tech.css">
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
                        <li><a href="publishtech.php" class="on">发布技术成果</a> <a href="mytech.php" class="">我的技术</a></li>
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
                    <div class="member-title mb30">发布技术</div>
                </div>
                <div class="content">
                    <div style="height: 10px;"></div>

                    <?php
                    $id = $_GET['id'];
                    include("sql/solarTechContent.php");
                    $res = $result->fetch(PDO::FETCH_OBJ);
                    ?>
                    <form id="tech" action="sql/updateTech.php?id=<?= $id; ?>" method="post"
                          enctype="multipart/form-data">
                        <div class="wrap1 d6_xqc">
                            <table class="d6xq_tb" width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                <tr>
                                    <th><i></i>技术名称：</th>
                                    <td><label>
                                            <input type="text" class="d6_idtxt" name="title" id="title" maxlength="50"
                                                   warning="请填写技术名称" value="<?= $res->title; ?>">
                                        </label></td>
                                </tr>
                                <tr>
                                    <th><i></i>技术介绍：</th>
                                    <td><textarea class="d6_tarea" id="description" name="description" warning="请填写技术简介"
                                                  placeholder="填写技术详细介绍"><?= $res->description; ?></textarea></td>
                                </tr>
                                <th><i></i>技术图片：</th>
                                <td>
                                    <!-- 原来已有的图 -->
                                    <input type="hidden" name="o_img1" value="<?= $res->image1; ?>"/>
                                    <input type="hidden" name="o_img2" value="<?= $res->image2; ?>"/>
                                    <input type="hidden" name="o_img3" value="<?= $res->image3; ?>"/>
                                    <input type="hidden" name="o_img4" value="<?= $res->image4; ?>"/>
                                    <input type="hidden" name="o_img5" value="<?= $res->image5; ?>"/>

                                    <ul class="img-upload">
                                        <li>
                                            <img  id="preview1" src="./user_files/<?= $res->image1; ?>" alt="预览"
                                                 onerror="this.onerror=null;this.src='./images/default.jpg';"/>
                                            <input type="file" name="img1" id="img1"/>
                                        </li>
                                        <li>
                                            <img id="preview2" src="./user_files/<?= $res->image2; ?>" alt="预览"
                                                 onerror="this.onerror=null;this.src='./images/default.jpg';"/>
                                            <input type="file" name="img2" id="img2"/>
                                        </li>
                                        <li>
                                            <img id="preview3" src="./user_files/<?= $res->image3; ?>" alt="预览"
                                                 onerror="this.onerror=null;this.src='./images/default.jpg';"/>
                                            <input type="file" name="img3" id="img3"/>
                                        </li>
                                        <li>
                                            <img id="preview4" src="./user_files/<?= $res->image4; ?>" alt="预览"
                                                 onerror="this.onerror=null;this.src='./images/default.jpg';"/>
                                            <input type="file" name="img4" id="img4"/>
                                        </li>
                                        <li>
                                            <img id="preview5" src="./user_files/<?= $res->image5; ?>" alt="预览"
                                                 onerror="this.onerror=null;this.src='./images/default.jpg';"/>
                                            <input type="file" name="img5" id="img5"/>
                                        </li>
                                    </ul>
                                    <br/>
                                    <label>(最多可选5张图片)</label></td>
                                </tr>
                                <tr>
                                    <th><i></i>发布人：</th>
                                    <td><label>
                                            <input type="text" class="d6_idtxt2" name="publisher"
                                                   value="<?= $res->publisher ?>">
                                        </label></td>
                                </tr>
                                <tr>
                                    <th><i></i>电子邮箱：</th>
                                    <td><label>
                                            <input type="text" class="d6_idtxt2" name="email" id="email"
                                                   value="<?= $res->email; ?>">
                                        </label></td>
                                </tr>
                                <tr>
                                    <th><i></i>单位名称：</th>
                                    <td><label>
                                            <input type="text" class="d6_idtxt2" name="entreprise" maxlength="50"
                                                   value="<?= $res->entreprise; ?>">
                                        </label></td>
                                </tr>
                                <tr>
                                    <th><i></i>所在地：</th>
                                    <td><label>
                                            <select name="location" class="d6_idtxt2" id="location">
                                                <option value="">-请选择-</option>
                                                <option value="北京市">北京市</option>
                                                <option value="天津市">天津市</option>
                                                <option value="河北省">河北省</option>
                                                <option value="山西省">山西省</option>
                                                <option value="内蒙古">内蒙古</option>
                                                <option value="辽宁省">辽宁省</option>
                                                <option value="吉林省">吉林省</option>
                                                <option value="黑龙江">黑龙江</option>
                                                <option value="上海市">上海市</option>
                                                <option value="江苏省">江苏省</option>
                                                <option value="浙江省">浙江省</option>
                                                <option value="安徽省">安徽省</option>
                                                <option value="福建省">福建省</option>
                                                <option value="江西省">江西省</option>
                                                <option value="山东省">山东省</option>
                                                <option value="河南省">河南省</option>
                                                <option value="湖北省">湖北省</option>
                                                <option value="湖南省">湖南省</option>
                                                <option value="广东省">广东省</option>
                                                <option value="广西省">广 西</option>
                                                <option value="海南省">海南省</option>
                                                <option value="重庆市">重庆市</option>
                                                <option value="四川省">四川省</option>
                                                <option value="贵州省">贵州省</option>
                                                <option value="云南省">云南省</option>
                                                <option value="西藏">西 藏</option>
                                                <option value="陕西省">陕西省</option>
                                                <option value="甘肃省">甘肃省</option>
                                                <option value="青海省">青海省</option>
                                                <option value="宁夏省">宁 夏</option>
                                                <option value="新疆">新 疆</option>
                                                <option value="台湾省">台湾省</option>
                                                <option value="香港">香港</option>
                                                <option value="澳门">澳门</option>
                                                <option value="国外">国外</option>
                                            </select>
                                        </label></td>
                                </tr>
                                </tbody>

                            </table>
                            <div class="d6_xqbm">
                                <input type="button" class="d6_xqbta" id="btnSave" value="提交" onclick="Submit();"
                                       onkeydown="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/edit-tech.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- }首页信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>