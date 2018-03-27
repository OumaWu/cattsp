$(function(){
	document.domain = 'jszyfw.com';
	/*账号管理页面*/
	tab($(".Rcon_ul li"),$(".Rcon_ulWrap>dd"));
	/*验证登录信息*/
	var boo = login_check();
	if(boo.success) {
		$(".header_nav .login_after").show();
		$(".header_nav .login_after dd").hide();
		$(".header_nav .lg_before").hide();
		$(".usrName").text(boo.body.usrName);
		$(".currency").text(boo.body.currencyAmount);
		$(".tech_per").attr("val",boo.body.usrId);
		if(boo.body.usrLogo!=null && boo.body.usrLogo!=""){
			$(".tech_per img").attr({"src":$("#IMG_Path").attr("href")+boo.body.usrLogo});
			 /*var myAccount = "";
			 var myToken = "" ;
			 $.ajax({
				 type: 'POST',
			        data: 'usrId='+boo.body.usrId,  
			        url: '/common/getYunXinAccountByUsrId', 
			        dataType:'json',
			        async:false,
			        success:function(result){
			        	myAccount = result.body.account;
			        	myToken = result.body.token;
			        } 
			 })
			 if(myAccount != undefined && myAccount != "" && myToken != undefined && myToken != ""){
				 rongyun.rong(myAccount,myToken);
			 }*/
		}else{
			$(".tech_per img").attr({"src":$("#IMG_Path").attr("href")+"/imgs/per_h.png"});
		}
		/*订单消息*/
		$.ajax({
			type: 'POST',
			url:"/userCtr/orderRemind",
			dataType : 'json',
			success:function(result){
				if(result.body!=0){
					$(".order_msg b").show().text(result.body);
				}
			}
		});
	} else {
		$(".header_nav .pr").hide();
		$(".header_nav .lg_before").show();
	}
	/*初始化*/
	common.init();
});
var common={
		init: function(){
			/*消息提醒框*/
			$(".Noti_close").click(function (){
				$(".Notifications,.Notifications_wrap").hide();
			})
			/**
			 * 头部菜单
			 */
			$(".header_nav dl").hover(function(){
				h_header();
				$(this).find("dd").show();
				$(this).find("dt").addClass("hover");
			},function(){
				h_header();
			});
			/**
			 * 找需求
			 */
			var find_xu="";
			$(".logo_right dl").click(function(){
				$(this).find("dd").stop().slideToggle();
			});
			$(".logo_right ul li").click(function(){
				var find_xu=$(".logo_right dl dt").text();
				var find_url=$(".logo_right dl dt").attr("url");
				var val=$(".logo_right dl dt").attr("val");
				$(".logo_right dl dt").text($(this).text());
				$(".logo_right dl dt").attr("url",$(this).attr("url"));
				$(".logo_right dl dt").attr("val",$(this).attr("val"));
				$(this).text(find_xu);
				$(this).attr("url",find_url);
				$(this).attr("val",val);
				$(".logo_right dl dd").stop().slideUp();
			});
			var hrefs=window.location.href;
			var totech=hrefs.indexOf("/techInfoCtr/static/");
			var torequire=hrefs.indexOf("/requireInfoCtr/static/");
			var toexpert=hrefs.indexOf("/expertCtr/static/");
			var toorg=hrefs.indexOf("/investOrgCtr/static/");
			var teches="/techInfoCtr/static/getTech.html";
			var reuqires="/requireInfoCtr/static/getReq.html";
			var experts="/expertCtr/static/getExpert.html";
			var orges="/investOrgCtr/static/getOrg.html";
			if(totech>-1){
				$(".logo_right dl dt").text("找技术");
				$(".logo_right dl dt").attr("url",teches);
				$(".logo_right dl dt").attr("val","1");
			}else if(torequire>-1){
				$(".logo_right dl dt").text("找需求");
				$(".logo_right dl dt").attr("url",reuqires);
				$(".logo_right dl dt").attr("val","2");
				$(".logo_right dl dd ul li:nth-child(1)").text("找技术");
				$(".logo_right dl dd ul li:nth-child(1)").attr("url",teches);
				$(".logo_right dl dd ul li:nth-child(1)").attr("val","1");
			}else if(toexpert>-1){
				$(".logo_right dl dt").text("找专家");
				$(".logo_right dl dt").attr("url",experts);
				$(".logo_right dl dt").attr("val","3");
				$(".logo_right dl dd ul li:nth-child(2)").text("找技术");
				$(".logo_right dl dd ul li:nth-child(2)").attr("url",teches);
				$(".logo_right dl dd ul li:nth-child(2)").attr("val","1");
			}else if(toorg>-1){
				$(".logo_right dl dt").text("找资本");
				$(".logo_right dl dt").attr("url",orges);
				$(".logo_right dl dt").attr("val","4");
				$(".logo_right dl dd ul li:nth-child(3)").text("找技术");
				$(".logo_right dl dd ul li:nth-child(3)").attr("url",teches);
				$(".logo_right dl dd ul li:nth-child(3)").attr("val","1");
			}
			
			
			/**
			 * 猜你喜欢
			 */
			/*$(".guess_like").hover(function(event){
				$(".guess_like").stop().animate({right:"0"});
				$(".guess_like b").css({borderRight:"10px solid white",borderLeft:"none"});
			},function(){
				$(".guess_like").stop().animate({right:"-140"});
				$(".guess_like b").css({borderLeft:"10px solid white",borderRight:"none"});
			});*/
			
			$(".nav-bar li").hover(function(){
				$(this).find("b").stop().slideToggle();
			});
			/**
			 * 登录框
			 */
			$(".login").click(function(){
				show_login();
			});
			/*忘记密码页面里的（去登陆）*/
			lay($(".goLogin"),$(".loglay"),$(".backpas"));
			$(".goLogin").click(function(){
				$(".login_load iframe",window.parent.document).attr("src","/login.html");
				$(".login_load",window.parent.document).show();
				
				$(".register_load",window.parent.document).hide();
				$(".register_load iframe",window.parent.document).attr("src","");
				$(".reback_load",window.parent.document).hide();
				$(".reback_load iframe",window.parent.document).attr("src","");
			});
			/*忘记密码页面里的（注册）*/
			$(".goreg").click(function(){
				$(".login_load",window.parent.document).hide();
				$(".login_load iframe",window.parent.document).attr("src","");
				
				$(".register_load iframe",window.parent.document).attr("src","/register.html");
				$(".register_load",window.parent.document).show();
				
				$(".reback_load",window.parent.document).hide();
				$(".reback_load iframe",window.parent.document).attr("src","");
			});
			/*忘记密码关闭*/
			$(".backpasHide").click(function(){
				$(".reback_load",window.parent.document).hide();
				$(".reback_load iframe",window.parent.document).attr("src","");
			});
			/**
			 * 注册框
			 */
			$(".register").click(function(){
				$(".register_load").show();
				$(".register_load iframe").attr("src","/register.html");
			});
			/*注册页面里的（登录）*/
			$(".login_zc").click(function(){
				$(".register_load",window.parent.document).hide();
				$(".register_load iframe",window.parent.document).attr("src","");
				
				$(".login_load iframe",window.parent.document).attr("src","/login.html");
				$(".login_load",window.parent.document).show();
				
			});
			/*注册关闭*/
			$(".regerHide").click(function(){
				$(".register_load",window.parent.document).hide();
				$(".register_load iframe",window.parent.document).attr("src","");
			});
			/*注册（用户注册协议框）*/
			lay($(".agent"),$(".layout,.agreement")); 
			/* 用户注册协议框*/
			//lay($(".agentHide"),'',$(".agreement"));
			$(".agentHide").click(function(){
				$(".agreement").hide();
				$(".reger_p input").attr("checked","checked");
			})
			
			/*判断登录注册按钮*/
			var Request = new Object();
			Request = GetRequest();
			var Retype="";
			Retype=Request["type"];
			/*找回密码*/
			if(Retype==1){
				$(".login_load").hide();
				$(".login_load iframe").attr("src","");
				
				$(".reback_load iframe").attr("src","/reback.html");
				$(".reback_load").show();
				
				$(".register_load").hide();
				$(".register_load iframe").attr("src","");
			}else if(Retype==2){
				/*注册*/
				$(".login_load").hide();
				$(".login_load iframe").attr("src","");
				
				$(".register_load iframe").attr("src","/register.html");
				$(".register_load").show();
				
				$(".reback_load").hide();
				$(".reback_load iframe").attr("src","");
			};
			var x = document.cookie;
			if(x==""){
				document.cookie="_IsShow=true";
				x = document.cookie;
			}
			if(x=="_IsShow=true"){
				this._IsShow();
			}
			
			
			//返回顶部
			$(".back_tops").click(function(){
		        $('body,html').animate({scrollTop:0},"fast");
		    })
		},
		/*订单消息*/
		setReadFlag : function(orderId){
			$.ajax({
				type: 'POST',
				url : '/order/setReadFlag',
				dataType : 'json',
				success:function(result){
					if(result.success==true){
						location.href="/order/income.html";
					}
				}
			});
		},
		/*页面是否显示商务通*/
		_IsShow : function(){
			setTimeout(function(){
				$(".refer-layOut").show();
			},2000);
			$(".refer-close,.refer-button div.btn2").click(function(){
				
				$(".refer-lay").css({animation:"translate .5s"});
				setTimeout(function(){
					$(".refer-layOut").hide();
				},500);
				document.cookie="_IsShow=false";
			});
			$(".refer-button div.btn1").click(function(){
				$(".refer-layOut").hide();
				 online_advice();
			})
		},
		/* 顶部导航条 */
		_topBar : function(){
			var issTop=$(".issue").offset().top;
			var scrollTop=$(window).scrollTop();
			if(issTop<scrollTop){
				$(".tech_barwrap").stop().fadeIn();
			}else{
				$(".tech_barwrap").stop().fadeOut();
			}
		}
}
/*商务通*/
function online_advice(){
	var o=(window.screen.availWidth-796)/2;
	var x=(window.screen.availHeight-562)/2;
	var v="left="+o+",top="+x+",resizable=yes,width=795,height=561";
	//DCT66745840  PCT76957278
	var k=window.open("http://pct.zoosnet.net/LR/Chatpre.aspx?id=PCT76957278&lng=cn","newwindow",v);
	k.focus()
}
/*获取url中"?"符后的字串   */
function GetRequest() {   
   var url = location.search; //获取url中"?"符后的字串   
   var theRequest = new Object();   
   if (url.indexOf("?") != -1) {   
      var str = url.substr(1); 
      strs = str.split("&");  
      for(var i = 0; i < strs.length; i ++) {   
         theRequest[strs[i].split("=")[0]]=unescape(strs[i].split("=")[1]);   
      }   
   }
   return theRequest;   
}  

function h_header(){
	$(".header_nav dl dd").hide();
	$(".header_nav dl dt").removeClass("hover");
}
/**
 * 弹层
 * obj触发元素 obj1 显示元素 obj2 隐藏元素
 */
function lay(obj,obj1,obj2){
	obj.click(function(){
		if(obj1)obj1.show();
		if(obj2)obj2.hide();
	})
}
/**
 * tab切换
 * obj触发元素 obj1 显示元素
 */
function tab(obj,obj1){
	obj.click(function(){
		var index=$(this).index();
		$(this).addClass("hover").siblings().removeClass("hover");
		obj1.eq(index).show().siblings().hide();
	})
}
/*
 * 超出多少字变省略号
 * obj 被限制的元素 len 限制字数
 */
function overEliplis(obj,len){
	if(obj.text().length>len){
		var str=obj.text();
		var str1=str.substr(0,len);
		var str2=str1.replace(str1,"...");
		obj.text(str1+str2);
	}
}
function wordlimit(cname,wordlength){
	for(var i=0;i<cname.length;i++){

		var nowLength=cname.eq(i).text().length;

		if(nowLength>wordlength){

			var txt=cname.eq(i).text().substr(0,wordlength)+'...';
			cname.eq(i).text(txt);
		}
	}

}
/**
 * ejs 模版调用
 * @param divID 生成位置divID
 * @param templetId 模版id
 * @param data 数据
 */
function bindHtml(divID,templetId,data){
	//console.debug(data);
    var $div=$("#"+divID);
    var res=ejs.render($("#"+templetId).html(),{data:data});
    $div.html(res);
}
/**
 * @description 验证字符串v是否符合手机格式
 * @author xuezhongqiu
 * @param {string}
 *            v 需要被验证的字符串
 * @return {boolean} true 符合手机格式，false 不符合手机格式
 *         @example
 *         $.isPhone(v) //需要被验证的字符串
 */
jQuery.isPhone = function(v) {
	var reg = /^(12[0-9]|13[0-9]|14[0-9]|15[0-9]|16[0-9]|17[0-9]|18[0-9]|19[0-9])\d{8}$/;
	return reg.test(v);
};
/*判断是否为空*/
jQuery.isEmpty = function(v) {
	if (v == null || $.trim(v) == "") {
		return true;
	} else {
		return false;
	}
};

/*时间戳与日期转换*/
(function($) {
    $.extend({
        myTime: {
            /**
             * 当前时间戳
             * @return <int>        unix时间戳(秒)  
             */
            CurTime: function(){
                return Date.parse(new Date())/1000;
            },
            /**              
             * 日期 转换为 Unix时间戳
             * @param <string> 2014-01-01 20:20:20  日期格式              
             * @return <int>        unix时间戳(秒)              
             */
            DateToUnix: function(string) {
                var f = string.split(' ', 2);
                var d = (f[0] ? f[0] : '').split('-', 3);
                var t = (f[1] ? f[1] : '').split(':', 3);
                return (new Date(
                        parseInt(d[0], 10) || null,
                        (parseInt(d[1], 10) || 1) - 1,
                        parseInt(d[2], 10) || null,
                        parseInt(t[0], 10) || null,
                        parseInt(t[1], 10) || null,
                        parseInt(t[2], 10) || null
                        )).getTime() / 1000;
            },
            /**              
             * 时间戳转换日期              
             * @param <int> unixTime    待时间戳(秒)              
             * @param <bool> isFull    返回完整时间(Y-m-d 或者 Y-m-d H:i:s)              
             * @param <int>  timeZone   时区              
             */
            UnixToDate: function(unixTime, isFull, timeZone) {
                if (typeof (timeZone) == 'number')
                {
                    unixTime = parseInt(unixTime) + parseInt(timeZone) * 60 * 60;
                }
                var time = new Date(unixTime * 1000);
                var ymdhis = "";
                ymdhis += time.getUTCFullYear() + "-";
                ymdhis += (time.getUTCMonth()+1) + "-";
                ymdhis += time.getUTCDate();
                if (isFull === true)
                {
                    ymdhis += " " + time.getUTCHours() + ":";
                    ymdhis += time.getUTCMinutes() + ":";
                    ymdhis += time.getUTCSeconds();
                }
                return ymdhis;
            }
        }
    });
})(jQuery);