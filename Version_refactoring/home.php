<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0021)http://www.vtitt.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="cache-control" content="no-cache" />
<title>中国-东盟太阳能技术转移中心</title>

<!-- 导入新闻展示模块css{ -->
<script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
<script src="./中国浙江网上技术市场_files/hm.js.下载"></script>
<script src="./中国浙江网上技术市场_files/jquery-1.7.min.js.下载" type="text/javascript"></script>
<script src="./中国浙江网上技术市场_files/WdatePicker.js.下载" type="text/javascript"></script>
<!-- }导入新闻展示模块css文件 -->

<!-- 公用css文件{ -->
<link rel="stylesheet" type="text/css" href="./css/common.css">
<!-- }公用css文件 -->

<!-- 本页css文件{ -->
<link rel="stylesheet" type="text/css" href="./css/home.css">
<!-- }本页css文件 -->

<!-- 导入js -->
<script type="text/javascript" src="./js/hm.js"></script>
<script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="./js/registrationcheck.js"></script>
<!-- 导入js -->

<!-- 导入钒钛通css和js文件{ -->
<script type="text/javascript" src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/jquery-1.8.3.min.js"></script>
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
  <div class="nav-wrap clearfix">
    <div class="w1220">
      <ul id="nav" class="nav clearfix">
        <li class="nLi cur on" id="nav0">
          <h3 style="width: 200px; text-align: center;"><a href="home.php" target="_self">首页</a></h3>
        </li>
        <li class="nLi noclass">
          <h3><a href="solartech.php" target="_blank">太阳能技术</a></h3>
        </li>
        <li class="nLi noclass">
          <h3><a href="demands.php" target="_blank">企业需求</a></h3>
        </li>
        <li class="nLi noclass">
          <h3><a href="specialists.php" target="_blank">专家咨询</a></h3>
        </li>
        <li class="nLi noclass">
          <h3><a href="information.php" target="_blank">资讯大厅</a></h3>
        </li>
        <li class="nLi noclass">
          <h3><a href="policies.php" target="_blank">相关政策法规</a></h3>
        </li>
        <li class="nLi noclass">
          <h3><a href="aboutus.php" target="_blank">关于我们</a></h3>
        </li>
      </ul>
    </div>
  </div>
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
              <li style="float: left; width: 640px;"> <a href="#" title="新闻1" target="_self"><img src="./images/news1.jpg" title="" alt="" width="640" height="382"></a> </li>
              <li style="float: left; width: 640px;"> <a href="#" title="新闻2" target="_self"><img src="./images/news2.jpg" title="" alt="" width="640" height="382"></a> </li>
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
      <iframe width="540" height="382" frameborder="0" src="rolling_titles.html" scrolling="no" marginheight="0" marginwidth="0" style="display: block;"></iframe>
    </div>
    <div style="clear:both;"></div>
    <div class="floormc"> </div>
    <div style="clear:both;"></div>
    <div class="wysn_pro mt10"> </div>
  </div>
  <!-- 图片滑动脚本{ --> 
  <script>
function iFrameHeight() {   
	var ifm= document.getElementById("hzhb_page");   
	var subWeb = document.frames ? document.frames["hzhb_page"].document : ifm.contentDocument;
	if(ifm != null && subWeb != null) {
	   ifm.height = subWeb.body.clientHeight;//内容可视区域的高度 兼容各种浏览器 scrollHeight 在火狐和IE下取得的高度可能不一样
	   ifm.width = subWeb.body.scrollWidth;
	}   
} 

$(".slideTxtBox").slide({trigger:"click"});
$(".wysn_banner").slide({titCell:".flip ul",mainCell:"#slides ul",autoPage:true,effect:"left",autoPlay:true});
$(".altimg1").slide({titCell:".flip ul",mainCell:"#slides1 ul",autoPage:true,effect:"left",autoPlay:true});
$(".altimg2").slide({titCell:".flip ul",mainCell:"#slides2 ul",autoPage:true,effect:"left",autoPlay:true});
$(".wysn_ad").slide({titCell:".flip ul",mainCell:"#slides3 ul",autoPage:true,effect:"left",autoPlay:true});
$(".wysn_mallmc").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",autoPlay:true,vis:5});
</script> 
  <!-- }图片滑动脚本 --> 
  <!--  }新闻板块  --> 
  
  <!--  专利技术{  -->
  <div class="n_site_h2 n_site_h2a"> <a href="http://www.vtitt.com/strong_tec/" target="_blank">更多&gt;</a>
    <h2>太阳能技术</h2>
  </div>
  <div class="n_site_f">
    <ul class="n_site_f_ul" style="position: relative; width: 1180px; height: 166px;">
      <li class="n_site_f_li1" style="position: absolute; width: 1180px; left: 0px; top: 0px; display: list-item;">
        <div class="card">
          <p class="hur1"><a href="http://www.vtitt.com/xuqiu/19/19607.html" target="_blank" class="c333" title="富钛料制备技术的研发需求">太阳能空调热泵三合一技术</a></p>
          <p class="hur2">行业分类：太阳能发电</p>
          <p class="hur3">广西南宁</p>
          <p class="hur4">需求简介：富钛料制备技术的研发需求</p>
        </div>
        <div class="card cardon">
          <p class="hur1"><a href="http://www.vtitt.com/xuqiu/19/19266.html" target="_blank" class="c333" title="含氨废水处理工艺研究">太阳能空调热泵三合一技术</a></p>
          <p class="hur2">行业分类：太阳能发电</p>
          <p class="hur3">广西桂林</p>
          <p class="hur4">需求简介：含氨废水处理工艺研究</p>
        </div>
        <div class="card">
          <p class="hur1"><a href="http://www.vtitt.com/xuqiu/19/19264.html" target="_blank" class="c333" title="降低钒钛矿高炉冶炼过程铁损的技术研究">太阳能空调热泵三合一技术</a></p>
          <p class="hur2">行业分类：太阳能发电</p>
          <p class="hur3">广西崇左</p>
          <p class="hur4">需求简介：降低钒钛矿高炉冶炼过程铁损的技术研究</p>
        </div>
        <div class="card cardon">
          <p class="hur1"><a href="http://www.vtitt.com/xuqiu/19/19261.html" target="_blank" class="c333" title="硫酸法钛白副产废酸的综合利用技术">太阳能空调热泵三合一技术</a></p>
          <p class="hur2">行业分类：太阳能发电</p>
          <p class="hur3">广西柳州</p>
          <p class="hur4">需求简介：硫酸法钛白副产废酸的综合利用技术</p>
        </div>
      </li>
    </ul>
  </div>
  <!--  }专利技术  --> 
  
  <!--  技术需求{  -->
  <div class="n_site_h2 n_site_h2c"> <a href="http://www.vtitt.com/xuqiu/" target="_blank">更多&gt;</a>
    <h2>技术需求</h2>
  </div>
  <div class="n_site_f">
    <ul class="n_site_f_ul" style="position: relative; width: 1180px; height: 166px;">
      <li class="n_site_f_li1" style="position: absolute; width: 1180px; left: 0px; top: 0px; display: list-item;">
        <div class="card">
          <p class="hur1"><a href="http://www.vtitt.com/xuqiu/19/19607.html" target="_blank" class="c333" title="富钛料制备技术的研发需求">太阳能高效热利用技术</a></p>
          <p class="hur2">行业分类：太阳能发电</p>
          <p class="hur3">广西南宁</p>
          <p class="hur4">需求简介：富钛料制备技术的研发需求</p>
        </div>
        <div class="card cardon">
          <p class="hur1"><a href="http://www.vtitt.com/xuqiu/19/19266.html" target="_blank" class="c333" title="含氨废水处理工艺研究">太阳能高效热利用技术</a></p>
          <p class="hur2">行业分类：太阳能发电</p>
          <p class="hur3">广西南宁</p>
          <p class="hur4">需求简介：含氨废水处理工艺研究</p>
        </div>
        <div class="card">
          <p class="hur1"><a href="http://www.vtitt.com/xuqiu/19/19264.html" target="_blank" class="c333" title="降低钒钛矿高炉冶炼过程铁损的技术研究">太阳能高效热利用技术</a></p>
          <p class="hur2">行业分类：太阳能发电</p>
          <p class="hur3">广西北海</p>
          <p class="hur4">需求简介：降低钒钛矿高炉冶炼过程铁损的技术研究</p>
        </div>
        <div class="card cardon">
          <p class="hur1"><a href="http://www.vtitt.com/xuqiu/19/19261.html" target="_blank" class="c333" title="硫酸法钛白副产废酸的综合利用技术">太阳能高效热利用技术</a></p>
          <p class="hur2">行业分类：太阳能发电</p>
          <p class="hur3">广西百色</p>
          <p class="hur4">需求简介：硫酸法钛白副产废酸的综合利用技术</p>
        </div>
      </li>
    </ul>
  </div>
  <!--  }技术需求  --> 
  
  <!--  技术专家{  -->
  <div class="n_site_g">
    <div class="n_site_h2 n_site_h2b"> <a href="http://www.vtitt.com/expert/" target="_blank">更多&gt;</a>
      <h2>技术专家</h2>
    </div>
    <div class="n_site_gla">
      <ul>
        <li> <a href="http://www.vtitt.com/space/8587078/" target="_blank" class="hur1" rel="nofollow" title="赖奇"> <img src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/20160426152745069456.jpg-c100" alt="赖奇" onerror="this.src = &#39;http://image.1633.com/images/common/face60.png&#39;"> </a>
          <div class="hur2">
            <p class="hur2a"> <a href="http://www.vtitt.com/space/8587078/" target="_blank" title="赖奇"> 赖奇 </a> </p>
            <p class="hur2b">从事领域：粉末冶金制备钛、钛合金及钛基复合材料</p>
          </div>
        </li>
        <li> <a href="http://www.vtitt.com/space/8587079/" target="_blank" class="hur1" rel="nofollow" title="方民宪"> <img src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/20160426152849028318.jpg-c100" alt="方民宪" onerror="this.src = &#39;http://image.1633.com/images/common/face60.png&#39;"> </a>
          <div class="hur2">
            <p class="hur2a"> <a href="http://www.vtitt.com/space/8587079/" target="_blank" title="方民宪"> 方民宪 </a> </p>
            <p class="hur2b">从事领域：材料</p>
          </div>
        </li>
        <li> <a href="http://www.vtitt.com/space/8587078/" target="_blank" class="hur1" rel="nofollow" title="赖奇"> <img src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/20160426152745069456.jpg-c100" alt="赖奇" onerror="this.src = &#39;http://image.1633.com/images/common/face60.png&#39;"> </a>
          <div class="hur2">
            <p class="hur2a"> <a href="http://www.vtitt.com/space/8587078/" target="_blank" title="赖奇"> 赖奇 </a> </p>
            <p class="hur2b">从事领域：粉末冶金制备钛、钛合金及钛基复合材料</p>
          </div>
        </li>
        <li> <a href="http://www.vtitt.com/space/8580611/" target="_blank" class="hur1" rel="nofollow" title="张伟"> <img src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/20160426151537935229.jpg-c100" alt="张伟" onerror="this.src = &#39;http://image.1633.com/images/common/face60.png&#39;"> </a>
          <div class="hur2">
            <p class="hur2a"> <a href="http://www.vtitt.com/space/8580611/" target="_blank" title="张伟"> 张伟 </a> </p>
            <p class="hur2b">从事领域：钒钛钢</p>
          </div>
        </li>
        <li> <a href="http://www.vtitt.com/space/8573754/" target="_blank" class="hur1" rel="nofollow" title="王黎"> <img src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/20160322144439833521.jpg-c100" alt="王黎" onerror="this.src = &#39;http://image.1633.com/images/common/face60.png&#39;"> </a>
          <div class="hur2">
            <p class="hur2a"> <a href="http://www.vtitt.com/space/8573754/" target="_blank" title="王黎"> 王黎 </a> </p>
            <p class="hur2b">从事领域：钒钛资源</p>
          </div>
        </li>
      </ul>
    </div>
    <div class="n_site_h2 n_site_h2b"> <a href="http://www.vtitt.com/company/" target="_blank">更多&gt;</a>
      <h2>企业单位</h2>
    </div>
    <div class="n_site_glb">
      <ul>
        <li>
          <p class="hur1"> <a href="http://www.vtitt.com/space/8586562/" target="_blank" title="攀枝花市三圣机械制造有限责任公司">南宁市三圣机械制造有限责任公司</a> </p>
          <div class="hur2"> <a href="http://www.vtitt.com/space/8586562/" target="_blank" class="hur2l" rel="nofollow" title="攀枝花市三圣机械制造有限责任公司"> <img src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/20160908161802726892.jpg-c100" alt="" onerror="this.src = &#39;http://image.1633.com/market/images/yun/agency_0.jpg&#39;"> </a>
            <p class="hur2r">简介：企业简介：南宁市三圣机械制造有限责任公司是一家…</p>
          </div>
          <div class="hur3"> <span class="hur3a">联系人：蒲荷梅</span> <span class="zk_followlist " name="follow_8586562"><span class="gz1" onclick="FollowObject.AddFollow(this)">+关注</span></span> </div>
        </li>
        <li>
          <p class="hur1"> <a href="http://www.vtitt.com/space/8581897/" target="_blank" title="攀钢集团钒业有限公司">柳钢集团钒业有限公司</a> </p>
          <div class="hur2"> <a href="http://www.vtitt.com/space/8581897/" target="_blank" class="hur2l" rel="nofollow" title="攀钢集团钒业有限公司"> <img src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/20160426152932660303.jpg-c100" alt="" onerror="this.src = &#39;http://image.1633.com/market/images/yun/agency_0.jpg&#39;"> </a>
            <p class="hur2r">简介：柳钢集团钒业有限公司坐落于攀枝花市马鹿箐，占地面…</p>
          </div>
          <div class="hur3"> <span class="hur3a">联系人：王英</span> <span class="zk_followlist " name="follow_8581897"><span class="gz1" onclick="FollowObject.AddFollow(this)">+关注</span></span> </div>
        </li>
        <li>
          <p class="hur1"> <a href="http://www.vtitt.com/space/8574129/" target="_blank" title="攀钢集团江油长城特殊钢有限公司">柳钢集团江油长城特殊钢有限公司</a> </p>
          <div class="hur2"> <a href="http://www.vtitt.com/space/8574129/" target="_blank" class="hur2l" rel="nofollow" title="攀钢集团江油长城特殊钢有限公司"> <img src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/20160324165252661859.jpg-c100" alt="" onerror="this.src = &#39;http://image.1633.com/market/images/yun/agency_0.jpg&#39;"> </a>
            <p class="hur2r">简介：柳钢集团江油长城特殊钢有限公司（简称：长城特钢）…</p>
          </div>
          <div class="hur3"> <span class="hur3a">联系人：王怀柳</span> <span class="zk_followlist " name="follow_8574129"><span class="gz1" onclick="FollowObject.AddFollow(this)">+关注</span></span> </div>
        </li>
        <li>
          <p class="hur1"> <a href="http://www.vtitt.com/space/8581897/" target="_blank" title="攀钢集团钒业有限公司">柳钢集团钒业有限公司</a> </p>
          <div class="hur2"> <a href="http://www.vtitt.com/space/8581897/" target="_blank" class="hur2l" rel="nofollow" title="攀钢集团钒业有限公司"> <img src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/20160426152932660303.jpg-c100" alt="" onerror="this.src = &#39;http://image.1633.com/market/images/yun/agency_0.jpg&#39;"> </a>
            <p class="hur2r">简介：柳钢集团钒业有限公司坐落于攀枝花市马鹿箐，占地面…</p>
          </div>
          <div class="hur3"> <span class="hur3a">联系人：王英</span> <span class="zk_followlist " name="follow_8581897"><span class="gz1" onclick="FollowObject.AddFollow(this)">+关注</span></span> </div>
        </li>
      </ul>
    </div>
    <div class="n_site_h2 n_site_h2b"> <a href="http://www.vtitt.com/daxue/institude/" target="_blank">更多&gt;</a>
      <h2>研发单位</h2>
      <a href="http://www.vtitt.com/daxue/application.html" class="hur1">我要入驻</a> </div>
    <div class="n_site_glc">
      <ul>
	    <li> <a href="http://www.vtitt.com/daxue/institude/81/8156280.html" target="_blank" class="hur1" title="四川大学"> <img src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/20140422095902406.jpg-c200" alt=""> </a>
          <div class="hur2">
            <p><a href="http://www.vtitt.com/daxue/institude/81/8156280.html" target="_blank" title="四川大学">广西大学</a></p>
            <span class="zk_followlist " name="follow_8156280"><span class="gz1" onclick="FollowObject.AddFollow(this)">+关注</span></span> </div>
        </li>
        <li> <a href="http://www.vtitt.com/daxue/institude/85/8580720.html" target="_blank" class="hur1" title="攀枝花学院"> <img src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/20160617151500531831.jpg-c200" alt=""> </a>
          <div class="hur2">
            <p><a href="http://www.vtitt.com/daxue/institude/85/8580720.html" target="_blank" title="攀枝花学院">攀枝花学院</a></p>
            <span class="zk_followlist " name="follow_8580720"><span class="gz1" onclick="FollowObject.AddFollow(this)">+关注</span></span> </div>
        </li>
        <li> <a href="http://www.vtitt.com/daxue/institude/85/8574388.html" target="_blank" class="hur1" title="攀钢集团研究院有限公司"> <img src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/20160328111406027201.jpg-c200" alt=""> </a>
          <div class="hur2">
            <p><a href="http://www.vtitt.com/daxue/institude/85/8574388.html" target="_blank" title="攀钢集团研究院有限公司">攀钢集团研究院有限公司</a></p>
            <span class="zk_followlist " name="follow_8574388"><span class="gz1" onclick="FollowObject.AddFollow(this)">+关注</span></span> </div>
        </li>
        <li> <a href="http://www.vtitt.com/daxue/institude/81/8134233.html" target="_blank" class="hur1" title="西南民族大学"> <img src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/20160226113402975378.jpg-c200" alt=""> </a>
          <div class="hur2">
            <p><a href="http://www.vtitt.com/daxue/institude/81/8134233.html" target="_blank" title="西南民族大学">西南民族大学</a></p>
            <span class="zk_followlist " name="follow_8134233"><span class="gz1" onclick="FollowObject.AddFollow(this)">+关注</span></span> </div>
        </li>
        <li> <a href="http://www.vtitt.com/daxue/institude/81/8156280.html" target="_blank" class="hur1" title="四川大学"> <img src="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/20140422095902406.jpg-c200" alt=""> </a>
          <div class="hur2">
            <p><a href="http://www.vtitt.com/daxue/institude/81/8156280.html" target="_blank" title="四川大学">四川大学</a></p>
            <span class="zk_followlist " name="follow_8156280"><span class="gz1" onclick="FollowObject.AddFollow(this)">+关注</span></span> </div>
        </li>
      </ul>
    </div>
  </div>
  <!--  }技术专家  --> 
  
  <!--  友情链接{  -->
  <div class="mod">
    <div class="headline pr">
      <h2><a href="http://www.cattc.org.cn/frindlinklist.aspx">友情链接</a></h2>
      <span class="pa divide"></span> </div>
    <ul class="f_links">
      <li><a href="http://www.most.gov.cn/index.htm" target="_blank"><img alt="" src="./中国-东盟技术转移中心CATTC官方网站_files/2015060209074428.png">中华人民共和国科技部</a></li>
      <li><a href="http://www.most.go.th/main/th/" target="_blank"><img alt="" src="./中国-东盟技术转移中心CATTC官方网站_files/2015060209351878.png">泰国科技部</a></li>
      <li><a href="http://www.itb-china.org/" target="_blank"><img alt="" src="./中国-东盟技术转移中心CATTC官方网站_files/20161008160912784.png">泰国国际贸易商会</a></li>
      <li><a href="http://www.a-star.edu.sg/" target="_blank"><img alt="" src="./中国-东盟技术转移中心CATTC官方网站_files/2015042416241440.png">新加坡科技研究局</a></li>
      <li><a href="http://www.asean.org/asean/asean-secretariat" target="_blank"><img alt="" src="./中国-东盟技术转移中心CATTC官方网站_files/2015060209391443.png">东盟秘书处</a></li>
      <li><a href="http://www.mofcom.gov.cn/" target="_blank"><img alt="" src="./中国-东盟技术转移中心CATTC官方网站_files/20161008160943891.jpg">中华人民共和国商务部</a></li>
      <li><a href="http://www.tysp.org/" target="_blank"><img alt="" src="./中国-东盟技术转移中心CATTC官方网站_files/2015060211272176.png">杰出青年科学家来华工作计划</a></li>
      <li><a href="http://www.china-asean-step.com/" target="_blank"><img alt="" src="./中国-东盟技术转移中心CATTC官方网站_files/2015060209263602.png">中国—东盟科技伙伴计划</a></li>
      <li><a href="http://www.caexpo.org/" target="_blank"><img alt="" src="./中国-东盟技术转移中心CATTC官方网站_files/2015032714175691.png">中国-东盟博览会官方网站</a></li>
      <li><a href="http://www.cime.org.cn/" target="_blank"><img alt="" src="./中国-东盟技术转移中心CATTC官方网站_files/20151231115845323.png">CIME国际海洋科技展</a></li>
      <li><a href="http://www.gei.com.cn/" target="_blank"><img alt="" src="./中国-东盟技术转移中心CATTC官方网站_files/20161008161224384.png">长城战略咨询</a></li>
      <li><a href="http://www.imindsoft.com/zh/Default.aspx" target="_blank"><img alt="" src="./中国-东盟技术转移中心CATTC官方网站_files/20161008164224143.png">一铭软件</a></li>
      <li><a href="http://www.caexpo.com/" target="_blank"><img alt="" src="./中国-东盟技术转移中心CATTC官方网站_files/20161008161628774.png">南博网</a></li>
      <li><a href="http://www.cgfh.com.cn/" target="_blank"><img alt="" src="./中国-东盟技术转移中心CATTC官方网站_files/2015042417313713.png">国家科技成果转化（南宁）综合信息服务平台</a></li>
      <li><a href="http://www.gxst.gov.cn/" target="_blank"><img alt="" src="./中国-东盟技术转移中心CATTC官方网站_files/2015032615335993.png">广西科技信息网</a></li>
      <li><a href="http://www.cattc.org.cn/www.gxpc.org.cn" target="_blank"><img alt="" src="./中国-东盟技术转移中心CATTC官方网站_files/2015042417292040.png">广西科技情报研究所</a></li>
    </ul>
  </div>
  <!--  }友情链接  --> 
  
</div>
<!-- }首页信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>