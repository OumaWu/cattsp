<?php $FOOTER = $_SESSION["LANG"]["footer"]; ?>
<link rel="stylesheet" type="text/css" href="./css/base.css">
<link rel="stylesheet" type="text/css" href="./css/index.css">
<link rel="stylesheet" type="text/css" href="./css/global.css?v=2">
<div id="footer" class="bottomwrapper">
    <div class="contact">
        <div class="contact_info">
            <dl>
                <dt><?= $FOOTER["adress_title"]; ?></dt>
                <dd><?= $FOOTER["adress"]; ?></dd>
                <dt><?= $FOOTER["postcode_title"]; ?></dt>
                <dd>530022</dd>
                <dt><?= $FOOTER["phone_title"]; ?></dt>
                <dd>（86）771 2799300/2799388</dd>
                <dt><?= $FOOTER["fax_title"]; ?></dt>
                <dd>+86 771 2799 300</dd>
                <dt><?= $FOOTER["email_title"]; ?></dt>
                <dd><a href="mailto:iap@gxas.cn">iap@gxas.cn</a></dd>
                <dt><?= $FOOTER["website_title"]; ?></dt>
                <dd><a href="http://www.gxas.cn/zjjg/jags/ysdw/201911/t20191101_2036.html">http://www.gxas.cn/zjjg/jags/ysdw/201911/t20191101_2036.html</a></dd>
            </dl>
        </div>
        <div class="follow">
            <dl>
                <dt><?= $FOOTER["follow"]; ?></dt>
                <dd><a class="ic_follow_tweibo" title="腾讯微博" href="#" target="_blank"></a></dd>
                <dd><a class="ic_follow_sweibo" title="新浪微博" href="#" target="_blank"></a></dd>
            </dl>
            <ul class="">
                <li><a href="aboutus.php" target="_blank"><?= $FOOTER["site_map"]; ?></a></li>
                <li><a href="aboutus.php" target="_blank"><?= $NAVBAR["about_url"]; ?></a></li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <ul class="container">
            <li class="fl"><?= $FOOTER["copyright"]; ?></li>
            <li class="fl" style="margin-left:20px"></li>
            <li class="fr"><a target="_blank"
                              href="#"><img
                            src="./images/police_logo.png" style="margin:0px 5px 0 0"><?= $FOOTER["police_record"]; ?></a>
                | <a href="http://www.miitbeian.gov.cn/" target="_blank"><?= $FOOTER["icp_num"]; ?></a></li>
        </ul>
    </div>
</div>