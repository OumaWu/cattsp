$(function(){
	//TO 查询推荐
	queryRecom();
	//TO 查询最新技术成果信息 和 最新需求
	queryNewsTech();
	//TO 查询行业资讯
	queryMessage();
	//TO 查询成功案例
	queryCase();
	//图片轮播;
	autoPlay();
	//楼层指引;
	 floor();
	
})
//TO 查询平台动态
function queryMessage() {
	
	var param = {
		rows: 5,
		articleSite: 0
	}
	$.ajax({
        type: 'POST',
        url: $("#base").attr("href")+'/news/static/newsArticle',
        data: param,
        dataType: 'json',
        success: function(result){
        	bindHtml("message","templetMessage",result.body);
        }
    });
}

//TO 查询媒体报道
function queryCase() {
	
	var param = {
		rows: 5,
		articleSite: 1
	}
	$.ajax({
        type: 'POST',
        url: $("#base").attr("href")+'/news/static/newsArticle',
        data: param,
        dataType: 'json',
        success: function(result){
        	bindHtml("case","templetCase",result.body);
        }
    });
}

//TO 查询最新技术成果信息
function queryNewsTech() {
	var param = {
		rows: 10
	}
	$.ajax({
        type: 'POST',
        url: $("#base").attr("href")+'/techInfoCtr/static/newsTech',
        data: param,
        dataType: 'json',
        success: function(result){
        	bindHtml("new_tech","templetNewTech",result.body);
        	//文字无缝滚动
        	//scrollTxt("#new_tech ul li b");
        	wordlimit($(".list_contain"),30);
        }
    });
	$.ajax({
        type: 'POST',
        url: $("#base").attr("href")+'/requireInfoCtr/static/newsRequ',
        data: param,
        dataType: 'json',
        success: function(result){
        	bindHtml("new_requ","templetNewRequ",result.body)
        	//文字无缝滚动
        	scrollTxt("#new_requ ul");
        	wordlimit($(".list_contain"),30);
        }
    });
}

//TO 查询高校技术成果信息
function queryUnTech() {
	var param = {
		rows: 10
	}
	$.ajax({
        type: 'POST',
        url: $("#base").attr("href")+'/techInfoCtr/static/unTech',
        data: param,
        dataType: 'json',
        success: function(result){
        	bindHtml("new_untech","templetUnTech",result.body);
        	//文字无缝滚动
        	//scrollTxt("#new_tech ul li b");
        	wordlimit($(".list_contain"),30);
        }
    });
}

/**
 * 查询技术成果列表
 */
function queryListTech(svTypeId) {
	var svLevel=1;
	var type=1;
	queryList(svTypeId,svLevel,type); 
}

/**
 * 查询需求列表
 */
function queryListReq(svTypeId) {
	var svLevel=1;
	var type=2;
	queryList(svTypeId,svLevel,type); 
}


//TO 查询推荐
function queryRecom() {
	$.ajax({
        type: 'POST',
        url: $("#base").attr("href")+'/recommend/static/allRecom',
        dataType: 'json',
        success: function(data){
        	bindHtml("hot","templetHot",data.body.hot);
        	//bindHtml("need","templetNeed",data.body.need);
        	bindHtml("spec","templetSpec",data.body.spec);
        	bindHtml("org","templetOrg",data.body.org);
        	changeBig();
        	new ZoomPic("spec");
        }
    });
}
//文字无缝滚动;
function scrollTxt(obj){
	tim1();
	var timer;
	function tim1(){
		timer=setInterval(function(){
			$(obj).stop().animate({"top":-26},function(){
				$(obj+" li:first").appendTo($(obj));
				$(obj).css({'top':0});
			});
		},2000);
	}
	
	try{
		$(obj).hover(function(){
			clearInterval(timer);
		},function(){
			setInterval(tim1());
		})
	}catch(error){}
	
}

//图片滑过放大;
function changeBig(){
	$('.logoList ul li img').mouseenter(function(){ 
		var w=1.5*202; 
		var h=1.5*74; 
		$(this).stop().animate({
			width:w, 
			height: h, 
			left:("-"+(0.5*$(this).width())/2), 
			top:("-"+(0.5*$(this).height())/2)},500); 
			}).mouseleave(function(){ 
				$(this).stop().animate({width:"202", 
					height:"74", 
					left:"0px", 
					top:"0px"},500); 
			}); 
}
//首页图片轮播;
function autoPlay(){
	var left = $('#banner .left');
	var right = $('#banner .right');
	var ols = $('#banner ol li');
	var uls = $('#banner ul li');
	var k = 0;
	// 左点击  
	left.click(function(){
	   k--;
	   if(k<0){
	   	  k=uls.length-1;
	   }
	   move1();
	});
	// 右点击
	right.click(function(){
	   k++;
	   if(k>uls.length-1){
	      k=0;
	   }
	   move1();
	});
	//鼠标滑过ol li切换
	ols.mouseover(function(){
		var n = $(this).index();
		k = n;
	    move1();
     });
  	// 封装函数
 	function move1(){
      	uls.eq(k).siblings().hide();
        uls.eq(k).show();
        ols.eq(k).addClass('bg').siblings().removeClass('bg');
 	}
	//定时器的初始值
	function run2(){ 
      k++;
       if(k>uls.length-1){
           k=0;
       }
       move1();  
	}
	timer = setInterval(run2,3000);
	//当鼠标划入，停止轮播图切换
	 $("#banner").hover(function(){
	    clearInterval(timer);
	    left.show();
	    right.show();
	 },function(){
	    timer = setInterval(run2,3000);
	    left.hide();
	    right.hide();
	 })
}
//楼层指引;
function floor(){
	//显示楼层导航;
	$(window).scroll(function(){
		var tops=$(document).scrollTop();
		if(tops>600){
		 	$(".left_floor").stop().fadeIn();
		}
		if(tops<600 || tops>4600){
			$(".left_floor").stop().fadeOut();
			$(".left_floor li:not(:first,:last)").css("background","#666");
		}
		for(var i=0;i<$(".per_list").length;i++){
			var tt=$(".per_list").eq(i).offset().top;
			if(0<tt-tops && tt-tops<300){
				var co=$(".word").eq(i).attr("data-color");
				$(".word").eq(i).css("background",co).siblings().not(":first,:last").css("background","#666");
			}
		}
		/*顶部导航条*/
		common._topBar();
	})
	var id,colors;
	//点击显示相应的内容;
	$(".word").click(function () {
         id = $(this).attr("data-id");
         var h = $("#item-" + id).offset().top;
         colors=$(this).attr("data-color");
         $(this).css("background",colors).siblings().not(":first,:last").css("background","#666");
         $('body,html').animate({ scrollTop: h-40 }, 200);
     });
     //滑过显示相应的颜色;
     $(".word").hover(function(){
     	$(this).stop().animate({width:226},200);
     	$(this).find(".s_title").show();
     	var color=$(this).attr("data-color");
		$(this).css("background",color).siblings().not(":first,:last").css("background","#666");
     },function(){
     	$(this).stop().animate({width:40},200);
     	$(this).find(".s_title").hide();
     	$(this).css("background","#666");
     	$(".left_floor li.word").eq(id-1).css("background",colors).siblings().not(":first,:last").css("background","#666");
     })
	//返回顶部
	$(".back_top").click(function(){
        var $win=$(window);
        var target=$win.scrollTop();
        var duration=300;
        var interval=30;
        var step=target/duration*interval;
        var timer=setInterval(function(){
            target-=step;
            if(target<=-40){
                clearInterval(timer);
                return;
            }
            $win.scrollTop(target);
            $(".left_floor").stop().fadeOut();
        },interval);
    })
}



