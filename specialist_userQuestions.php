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
    <link rel="stylesheet" type="text/css" href="./css/member.css">
    <link rel="stylesheet" type="text/css" href="./css/mystyle.css">
    <!-- }导入个人页面css文件 -->


    <!-- 导入其他css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css" id="theme1">
    <!-- }导入其他css和js文件 -->

    <link rel="stylesheet" type="text/css" href="css/chat.css?v=8"/>

    <!--[if lt IE 7]>
    <script src="js/IE7.js" type="text/javascript"></script>
    <![endif]-->
    <!--[if IE 6]>
    <script src="js/iepng.js" type="text/javascript"></script>
    <script type="text/javascript">
        EvPNG.fix('body, div, ul, img, li, input, a, span ,label');
    </script>
    <![endif]-->
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
                        <li><a href="#" class="on">基本信息</a></li>
                    </ul>
                </div>
                <div class="item">
                    <div class="m-title">答疑中心</div>
                    <ul>
                        <li><a href="#" class="">用户提问</a></li>
                    </ul>
                </div>
            </div>
            <div class="member-main fr">
                <div class="m-box m-info-detial mb30">
                    <div class="member-title mb30">用户问题答疑</div>


                    <div class="kePublic">
                        <!--效果html开始-->
                        <div class="content">
                            <div class="chatBox">
                                <div class="chatLeft">
                                    <div class="chat03">
                                        <div class="chat03_title">
                                            <label class="chat03_title_t">
                                                企业用户提问列表</label>
                                        </div>
                                        <div class="chat03_content">
                                            <!-- 企业提问列表 -->
                                            <ul>
                                                <li>
                                                    <label class="online">
                                                    </label>
                                                    <a href="javascript:;">
                                                        <img src="img/head/2013.jpg"></a><a href="javascript:;"
                                                                                            class="chat03_name">刘秀</a>
                                                </li>
                                                <li>
                                                    <label class="offline">
                                                    </label>
                                                    <a href="javascript:;">
                                                        <img src="img/head/2014.jpg"></a><a href="javascript:;"
                                                                                            class="chat03_name">陈诚</a>
                                                </li>
                                                <li class="choosed">
                                                    <label class="offline">
                                                    </label>
                                                    <a href="javascript:;">
                                                        <img src="img/head/2015.jpg"></a><a href="javascript:;"
                                                                                            class="chat03_name">王旭</a>
                                                </li>
                                            </ul>
                                            <!-- 企业提问列表 -->
                                        </div>
                                    </div>
                                </div>
                                <div class="chatRight">
                                    <div class="chat01">
                                        <div class="chat01_title">
                                            <ul class="talkTo">
                                                <li><a href="javascript:;">王旭</a></li>
                                            </ul>
                                            <!--                                            <a class="close_btn" href="javascript:;"></a>-->
                                        </div>
                                        <div class="chat01_content">
                                            <!-- 不同的聊天框 -->
                                            <div class="message_box mes1">
                                            </div>
                                            <div class="message_box mes2">
                                            </div>
                                            <div class="message_box mes3" style="display: block;">
                                            </div>
                                            <div class="message_box mes4">
                                            </div>
                                            <div class="message_box mes5">
                                            </div>
                                            <div class="message_box mes6">
                                            </div>
                                            <div class="message_box mes7">
                                            </div>
                                            <div class="message_box mes8">
                                            </div>
                                            <div class="message_box mes9">
                                            </div>
                                            <div class="message_box mes10">
                                            </div>
                                            <!-- 不同的聊天框 -->
                                        </div>
                                    </div>
                                    <div class="chat02">
                                        <div class="chat02_title">
                                            <a class="chat02_title_btn ctb01" href="javascript:;"></a><a
                                                    class="chat02_title_btn ctb02"
                                                    href="javascript:;" title="选择文件">
                                                <embed width="15" height="16"
                                                       flashvars="swfid=2556975203&amp;maxSumSize=50&amp;maxFileSize=50&amp;maxFileNum=1&amp;multiSelect=0&amp;uploadAPI=http%3A%2F%2Fupload.api.weibo.com%2F2%2Fmss%2Fupload.json%3Fsource%3D209678993%26tuid%3D1887188824&amp;initFun=STK.webim.ui.chatWindow.msgToolBar.upload.initFun&amp;sucFun=STK.webim.ui.chatWindow.msgToolBar.upload.sucFun&amp;errFun=STK.webim.ui.chatWindow.msgToolBar.upload.errFun&amp;beginFun=STK.webim.ui.chatWindow.msgToolBar.upload.beginFun&amp;showTipFun=STK.webim.ui.chatWindow.msgToolBar.upload.showTipFun&amp;hiddenTipFun=STK.webim.ui.chatWindow.msgToolBar.upload.hiddenTipFun&amp;areaInfo=0-16|12-16&amp;fExt=*.jpg;*.gif;*.jpeg;*.png|*&amp;fExtDec=选择图片|选择文件"
                                                       data="upload.swf" wmode="transparent" bgcolor=""
                                                       allowscriptaccess="always" allowfullscreen="true"
                                                       scale="noScale" menu="false" type="application/x-shockwave-flash"
                                                       src="http://service.weibo.com/staticjs/tools/upload.swf?v=36c9997f1313d1c4"
                                                       id="swf_3140">
                                            </a><a class="chat02_title_btn ctb03" href="javascript:;" title="选择附件">
                                                <embed width="15" height="16"
                                                       flashvars="swfid=2556975203&amp;maxSumSize=50&amp;maxFileSize=50&amp;maxFileNum=1&amp;multiSelect=0&amp;uploadAPI=http%3A%2F%2Fupload.api.weibo.com%2F2%2Fmss%2Fupload.json%3Fsource%3D209678993%26tuid%3D1887188824&amp;initFun=STK.webim.ui.chatWindow.msgToolBar.upload.initFun&amp;sucFun=STK.webim.ui.chatWindow.msgToolBar.upload.sucFun&amp;errFun=STK.webim.ui.chatWindow.msgToolBar.upload.errFun&amp;beginFun=STK.webim.ui.chatWindow.msgToolBar.upload.beginFun&amp;showTipFun=STK.webim.ui.chatWindow.msgToolBar.upload.showTipFun&amp;hiddenTipFun=STK.webim.ui.chatWindow.msgToolBar.upload.hiddenTipFun&amp;areaInfo=0-16|12-16&amp;fExt=*.jpg;*.gif;*.jpeg;*.png|*&amp;fExtDec=选择图片|选择文件"
                                                       data="upload.swf" wmode="transparent" bgcolor=""
                                                       allowscriptaccess="always" allowfullscreen="true"
                                                       scale="noScale" menu="false" type="application/x-shockwave-flash"
                                                       src="http://service.weibo.com/staticjs/tools/upload.swf?v=36c9997f1313d1c4"
                                                       id="swf_3140">
                                            </a>

                                            <div class="wl_faces_box">
                                                <div class="wl_faces_content">
                                                    <div class="title">
                                                        <ul>
                                                            <li class="title_name">常用表情</li>
                                                            <li class="wl_faces_close"><span>&nbsp;</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="wl_faces_main">
                                                        <ul>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_01.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_02.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_03.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_04.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_05.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_06.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_07.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_08.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_09.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_10.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_11.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_12.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_13.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_14.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_15.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_16.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_17.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_18.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_19.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_20.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_21.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_22.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_23.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_24.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_25.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_26.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_27.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_28.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_29.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_30.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_31.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_32.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_33.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_34.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_35.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_36.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_37.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_38.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_39.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_40.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_41.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_42.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_43.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_44.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_45.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_46.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_47.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_48.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_49.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_50.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_51.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_52.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_53.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_54.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_55.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_56.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_57.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_58.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_59.gif"/></a></li>
                                                            <li><a href="javascript:;">
                                                                    <img src="img/emo_60.gif"/></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="wlf_icon">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat02_content">
                                            <textarea id="textarea"></textarea>
                                        </div>
                                        <div class="chat02_bar">
                                            <ul>
                                                <li style="right: 5px; top: 5px;"><a href="javascript:;">
                                                        <img src="img/send_btn.jpg"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div style="clear: both;">
                                </div>
                            </div>
                        </div>
                        <!--效果html结束-->
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- }首页信息板块  -->

<?php require_once('common/footer.php'); ?>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/chat.js"></script>
</body>
</html>