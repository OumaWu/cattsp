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

    <!-- 导入其他css和js文件{ -->
    <link rel="stylesheet" type="text/css" href="./css/common.css" id="theme1">
    <link rel="stylesheet" type="text/css" href="./css/list.css" id="theme2">
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
<div class="main">
    <div class="xa_bread">当前位置： <a href="home.php">首页</a>&nbsp;&gt;&nbsp; <a href="#">技术专家</a></div>
    <div class="xb_ba">
        <h1>技术专家</h1>
    </div>
    <form method="get" action="http://www.vtitt.com/search/expert/" class="form-search" id="search-form">
        <input type="hidden" name="clsid" id="clsid" value="">
        <div class="listsearch">
            <div class="listsearch_a clearfix" id="suozaidi"><span class="listsearch_aa">所在地：</span>
                <div class="listsearch_ac">
                    <select id="province" name="province"
                            onchange="ChangeCityByPName(&#39;city&#39;, this.value, &#39;area&#39;); fsubmit();">
                        <option value="">请 选 择</option>
                        <option value="北京">北京</option>
                        <option value="上海">上海</option>
                        <option value="天津">天津</option>
                        <option value="重庆">重庆</option>
                        <option value="辽宁">辽宁</option>
                        <option value="吉林">吉林</option>
                        <option value="黑龙江">黑龙江</option>
                        <option value="河北">河北</option>
                        <option value="山西">山西</option>
                        <option value="河南">河南</option>
                        <option value="山东">山东</option>
                        <option value="江苏">江苏</option>
                        <option value="安徽">安徽</option>
                        <option value="江西">江西</option>
                        <option value="浙江">浙江</option>
                        <option value="福建">福建</option>
                        <option value="广东">广东</option>
                        <option value="海南">海南</option>
                        <option value="贵州">贵州</option>
                        <option value="云南">云南</option>
                        <option value="四川">四川</option>
                        <option value="湖南">湖南</option>
                        <option value="湖北">湖北</option>
                        <option value="陕西">陕西</option>
                        <option value="甘肃">甘肃</option>
                        <option value="青海">青海</option>
                        <option value="内蒙古自治区">内蒙古自治区</option>
                        <option value="西藏自治区">西藏自治区</option>
                        <option value="新疆维吾尔自治区">新疆维吾尔自治区</option>
                        <option value="广西壮族自治区">广西壮族自治区</option>
                        <option value="宁夏回族自治区">宁夏回族自治区</option>
                        <option value="香港">香港</option>
                        <option value="澳门">澳门</option>
                        <option value="台湾">台湾</option>
                        <option value="海外地区">海外地区</option>
                    </select>
                    <select id="city" name="city" onchange="fsubmit();">
                        <option value="">请 选 择</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="xb_bac"> <span class="dx_Ba_1">
      <input value="" name="q" id="s_key" class="hur1" type="text" focucmsg="请输入搜索内容"
             onfocus="if(this.value==&#39;请输入搜索内容&#39;){this.value=&#39;&#39;;}"
             onblur="if(this.value==&#39;&#39;){this.value=&#39;请输入搜索内容&#39;;}">
      <input type="button" value="搜索" class="hur2" id="btnsubmit"
             onclick="if ($(&#39;#s_key&#39;).val() == &#39;请输入搜索内容&#39; || $(&#39;#s_key&#39;).val() == &#39;&#39;) { alert(&#39;请输入搜索内容&#39;); } else { fsubmit(); }">
      </span></div>
    </form>
    <div class="search_error" style="display:none;">
        <p class="hur1">抱歉！没有找到符合条件的 "" 相关内容</p>
        <p class="hur2">您可以简化、缩短关键词或减少筛选范围再进行搜索</p>
    </div>
    <div class="xc_b yun_list_div">
        <ul class="clearfix">
            <?php
            include('sql/specialists.php');
            while ($res = $result->fetch(PDO::FETCH_OBJ)) {
            ?>
            <li>
                <div class="xc_ba"><a target="_blank" href="specialists_detailpage.php?id=<?=$res->id;?>"> <img
                                src="images/<?=$res->photo;?>" alt="<?=$res->name;?>"
                                onerror="this.src=images/<?=$res->photo;?>"> </a></div>
                <div class="xc_bb">
                    <p class="hur2"><span><?=$res->location;?></span> <a href="specialists_detailpage.php?id=<?=$res->id;?>" target="_blank"
                                                            title="<?=$res->name;?>"> <?=$res->name;?> </a></p>
                    <p class="hur1"> 从事领域：<?=$res->domain;?> </p>
                    <p class="hur1"> 擅长能力：<?=$res->speciality;?></p>
                </div>
                <a href="specialists_detailpage.php?id=<?=$res->id;?>" target="_blank" rel="nofollow" class="xc_b_f"
                   style="display: block;"></a>
            </li>
            <?php } ?>
        </ul>
        <div class="h_page">
            <div id="pages_bg" class="pages"> <span class="number9"> <span title="上一页">上一页</span><span title="第 1页"
                                                                                                       class="pagelist_cur">1</span> <a
                            href="#">2</a> <a
                            href="#">3</a> <a
                            href="#">4</a> <a
                            href="#">5</a> <a
                            href="#">6</a> <a
                            href="#">7</a> <a
                            href="#">8</a> <a
                            href="#">9</a> <a
                            href="#">下一页</a> 到第
        <input id="jumppage" type="text" value="1" size="2" name="page">
        页
        <input type="button" id="bt_go"
               onclick="javascript:var page=document.getElementById(&#39;jumppage&#39;);var p=page.value;var reg = new RegExp(&#39;^[0-9]*$&#39;);if(!reg.test(p)){alert(&#39;请输入数字!&#39;);p=&#39;1&#39;;return false;}if (p==&#39;&#39;){alert(&#39;请输入页码!&#39;);page.focus();p=&#39;1&#39;;return false;}if(p&lt;1){p=&#39;1&#39;;}if(p&gt;9){p=&#39;9&#39;;}var test=&#39;/search/expert/?p=[$$page]&#39;;test=test.replace(&#39;[$$page]&#39;,p);window.location.href=test;"
               value="确认" name="TopSkyLib_GoPage_Bnt">
        </span></div>
        </div>
    </div>
    <span class="blank10"></span></div>
<!-- }首页信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>