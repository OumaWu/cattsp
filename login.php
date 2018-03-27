<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0021)http://www.vtitt.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="pragma"   content="no-cache" />   
<meta http-equiv="Cache-Control" content="no-cache,must-revalidate" />   
<meta http-equiv="expires" content="Wed,26 Feb 1997 08:21:57 GMT" />
<title>中国-东盟太阳能技术转移中心</title>
<!-- 导入新闻展示模块css{ -->
<link rel="stylesheet" type="text/css" href="./css/index_news.css?v=1234">
<!-- }导入新闻展示模块css文件 -->

<!-- 导入版头css文件{ -->
<link rel="stylesheet" type="text/css" href="./css/header.css">
<!-- }导入版头css文件 -->

<!-- 导入中国-东盟技术转移中心css和js文件{ -->
<link rel="stylesheet" type="text/css" href="./中国-东盟技术转移中心CATTC官方网站_files/jquery-ui.css">
<link href="./中国-东盟技术转移中心CATTC官方网站_files/base.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./中国-东盟技术转移中心CATTC官方网站_files/global.css" type="text/css">
<link href="./中国-东盟技术转移中心CATTC官方网站_files/index.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="./中国-东盟技术转移中心CATTC官方网站_files/recet.css">
<link rel="stylesheet" type="text/css" href="./中国-东盟技术转移中心CATTC官方网站_files/common.css">
<!-- }导入中国-东盟技术转移中心css和js文件 -->

<!-- 导入钒钛通css和js文件{ -->
<link rel="stylesheet" type="text/css" href="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/common.css" id="theme1">
<link rel="stylesheet" type="text/css" href="./钒钛通_四川钒钛产业技术交易平台_攀枝花钒钛_files/this.css" id="theme2">
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
        <li class="nLi noclass on" id="nav0">
          <h3 style="width: 200px; text-align: center;"><a href="home.php" target="_blank">首页</a></h3>
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

<!--  信息板块{  -->
<div class="background">
  <div class="main">
    <div class="wys_loginwrap">
      <div class="wys_layout bg">
        <div class="wys_loginbox">
          <p class="tit">欢迎登录网上技术平台</p>
          <form id="gform" name="gform" action="sql/signin.php" method="post">
            <div class="cont">
              <ul>
                <li>
                  <input class="inp" name="accountname" id="accountname" type="text" placeholder="用户名">
                </li>
                <li>
                  <input class="inp" name="password" id="password" type="password" placeholder="密码">
                </li>
              </ul>
              <div class=""><a class="wys_orgbtn" href="javascript:void(0);" id="loginBt" onClick="Submit();" style="cursor: pointer;">登 录</a></div>
              <div class="pt20 clearfix"> <span class="fl fs14">还没有账号？<a class="cf08833" href="register.php" style="color: #f08833;font-size: 14px;">立即注册</a></span> <a class="fr c999 fs14" href="#">忘记密码？</a> </div>
              <p class="fs14 error"></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
	function Submit(){
		document.getElementById("gform").submit();
	}
</script>
<!-- }信息板块  -->

<?php require_once('common/footer.php'); ?>
</body>
</html>