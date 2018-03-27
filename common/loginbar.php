<?php session_start(); ?>
<div class="top clearfix sim">
  <div class="w1220">
    <div class="top-left fl"> Hi，欢迎来到中国-东盟太阳能技术转移平台！
    </div>
    <div class="top-right fr">
    <?php 
		if(!isset($_SESSION['user'])||$_SESSION['user']==""){
	?>
    <span id="header_header_top_noLogin"> <a href="login.php" class="clr mr15">登录</a> <a href="register.php" class="mr5">免费注册</a></span>
    <?php 
			;
		}
		else{
	?>
    <span id="header_header_top_Login"> 欢迎，<?php echo $_SESSION['user']; ?>&nbsp;&nbsp;</span> 
    <span id="header_header_top_Login">
    	<a href="personalpage.php?id=<?php echo $_SESSION['userid']; ?>" class="clr mr15">个人页面</a>
   		<a href="./sql/logout.php" class="clr mr15">注销</a>
    </span>
    <?php 
		;}
	?>
    </div>
  </div>
</div>
