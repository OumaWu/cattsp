<!DOCTYPE html>
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
    <link rel="stylesheet" type="text/css" href="./css/member.css">
    <link rel="stylesheet" type="text/css" href="./css/mystyle.css">
    <!-- }导入个人页面css文件 -->


    <!-- 导入其他css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css" id="theme1">
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
                        <li><a href="#" class="on">基本信息</a></li>
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
            </div>
            <div class="member-main fr">
                <div class="m-box m-info-detial mb30">
                    <div class="member-title mb30">个人信息</div>
                    <div class="info-state fz14 mb100"> 您的资料完整度：
                        <div class="s-bar" style="width: 700px; margin-top: -2px"><span style="width: 30%;"></span>
                        </div>
                        <span style="color: #fa9800;">&nbsp;&nbsp;&nbsp;&nbsp;30%</span></div>
                    <div class="clearfix">
                        <?php
                        include("sql/userPage.php");
                        $res = $result->fetch(PDO::FETCH_OBJ);
                        ?>
                        <form action="sql/updateUser.php" method="post" enctype="multipart/form-data">
                        <div class="post-pic txc fl"><a class="m_img"> <img
                                        src="./user_files/avatar/<?=$res->photo;?>"
                                        id="headimg" alt=""
                                        onerror="this.src = 'images/default.png'"> </a>
                            <div class="m100">
                                <div id="upload-box1" class="upload-box upload-img">
                                    <div class="upload-btn webuploader-container">
                                        <div class="webuploader-pick">上传头像</div>
                                        <div id="rt_rt_1bhetsb50ubhbb9mk61n3v1lv71"
                                             style="position: absolute; top: 0px; left: 0px; width: 108px; height: 34px; overflow: hidden; bottom: auto; right: auto;">
                                            <input type="file" id="photo" name="photo" class="webuploader-element-invisible"
                                                   accept="image/*">
                                            <label for="photo" style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="o_photo" id="o_photo" value="./user_files/avatar/<?=$res->photo;?>">
                            </div>
                            <p class="mb10">支持JPG,JPEG,GIF,PNG,BMP,且小于2M</p>
                        </div>

                        <div class="fl user-form">
                            <div class="p-item clearfix">
                                <h2 align="center" style="margin-bottom: 15px;"><font color="red"><b>*</b></font>为必填选项</h2>
                                <div class="p-item clearfix">
                                    <div class="p-label fl">真实姓名<font color="red"><b>*</b></font></div>
                                    <div class="p-input fl">
                                        <input name="realname" type="text" id="realname"
                                               value="<?php echo $res->realname; ?>" class="i-input"
                                               style="width: 350px;">
                                    </div>
                                </div>
                                <div class="p-item clearfix">
                                    <div class="p-label fl">性别<font color="red"><b>*</b></font></div>
                                    <div class="p-input fl">
                                        <span id="rblSex">
                                            <input id="male" type="radio" name="sex"
                                                value="1" <?php echo $res->sex ? 'checked="checked"' : ""; ?>
                                            <label for="male">先生</label>
                                            <input id="female" type="radio" name="sex"
                                                value="0" <?php echo !$res->sex ? 'checked="checked"' : ""; ?>
                                            <label for="female">女士</label>
                                        </span>
                                    </div>
                                </div>
                                <div class="p-item clearfix">
                                    <div class="p-label fl">手机号码<font color="red"><b>*</b></font></div>
                                    <div class="p-input fl">
                                        <input name="tel" type="text" id="tel"
                                               value="<?php echo $res->tel; ?>" class="i-input"
                                               style="width: 350px;">
                                    </div>
                                </div>
                                <div class="p-item clearfix">
                                    <div class="p-label fl">邮箱<font color="red"><b>*</b></font></div>
                                    <div class="p-input fl">
                                        <input name="email" type="text" id="email" class="i-input"
                                               value="<?php echo $res->email; ?>"
                                               style="width: 350px;">
                                    </div>
                                </div>
                                <div class="p-item clearfix">
                                    <div class="p-label fl">所在地<font color="red"><b>*</b></font></div>
                                    <div class="p-input fl">
                                        <input type="text" name="location" id="location" class="i-input"
                                               value="<?php echo $res->location; ?>"
                                               style="width: 350px;">
                                    </div>
                                </div>
                                <div class="p-item mb40 clearfix">
                                    <div class="p-label fl">联系地址<font color="red"><b>*</b></font></div>
                                    <div class="p-input fl">
                                        <input name="address" type="text" id="address" class="i-input"
                                               value="<?php echo $res->address; ?>"
                                               style="width: 350px;">
                                    </div>
                                </div>
                                <div class="p-item mb40 clearfix">
                                    <div class="p-label fl"></div>
                                        <span class="p-input fl">
                                            <input type="submit" name="btSave" value="保  存" id="btSave" class="btn"
                                                style="width: 250px; background-color: #0b47a7; color: white"/>
                                        </span>
                                </div>
                            </div>
                        </div>
                            <input type="hidden" name="userid" id="userid" value="<?=$_SESSION['userid'];?>"/>
                            <input type="hidden" name="user" id="user" value="<?=$_SESSION['user'];?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- }首页信息板块  -->

<?php require_once('common/footer.php'); ?>
<script>
    // 获取图片上传对象
    var photo = document.getElementById("photo");

    // 获取图片对象
    var headImg = document.getElementById("headimg");

    // 绑定预览上传事件和预览功能
    photo.onchange = function(){

        // 获取input上传的图片数据，得到bolb对象路径，可当成普通的文件路径一样使用，赋值给src;
        headImg.src = window.URL.createObjectURL(this.files[0]) ;
    }
</script>
</body>
</html>