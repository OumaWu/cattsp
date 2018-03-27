/**
 * 
 */
$(function(){
	var myHref = window.location.href; 
	var index2 = myHref.indexOf("/techInfoCtr/static/");
	var index3 = myHref.indexOf("/requireInfoCtr/static/");
	var index4 = myHref.indexOf("/expertCtr/static/");
	var index5 = myHref.indexOf("/investOrgCtr/static/");
	var index6 = myHref.indexOf("/news/static/");
	var index7 = myHref.indexOf("/common/static/")
	
	if(index2 > -1){
		$(".nav_list a[href *= '/techInfoCtr/static/']").addClass("hover");
	}else if(index3 > -1){
		$(".nav_list a[href *= '/requireInfoCtr/static/']").addClass("hover");
	}else if(index4 > -1){
		$(".nav_list a[href *= '/expertCtr/static/']").addClass("hover");
	}else if(index5 > -1){
		$(".nav_list a[href *= '/investOrgCtr/static/']").addClass("hover");
	}else if(index6 > -1){
		$(".nav_list a[href *= '/news/static/']").addClass("hover");
	} else if (index7 > -1){
		$(".nav_list a[href *= '/common/static/']").addClass("hover");
	}else {
		$(".nav_list a[href *= '"+$("#base").attr("href")+"']").addClass("hover");
	}
	changePage();
}) 

/*判断进入的是哪个页*/
function changePage(){
	var hrefs=window.location.href;
	var paths=window.location.pathname;
	var bases=$("#base").attr("href")+"/";
	var logins=$("#base").attr("href")+"/login.html";
	var totech="/techInfoCtr/static/totech.html";
	var torequire="/requireInfoCtr/static/toreq.html";
	var toexpert="/expertCtr/static/toexpert.html";
	var toorg="/investOrgCtr/static/toorg.html";
	var getTech="/techInfoCtr/static/getTech.html";
	var getRequire="/requireInfoCtr/static/getReq.html";
	var getExpert="/expertCtr/static/getExpert.html";
	var getOrg="/investOrgCtr/static/getOrg.html";
	if(hrefs==bases || hrefs==logins || paths==totech || paths==getTech || paths==torequire || paths==getRequire){
		$(".goods_List").text("国际专利分类");
		navList();
	}else if(paths==toexpert || paths==getExpert){
		/*$(".nav_you").hide();*/
		$(".goods_List").text("研究领域");
		expertType();
	}else if(paths==toorg || paths==getOrg){
		$(".nav_zuo").hide();
		$(".goods_List").text("机构领域");
		orgType();
	}
}
/*技术分类*/
function navList(){
	$.getJSON($("#base").attr("href")+"/js/serviceTypeJson.json",function(data){
		$.each(data,function(index,obj){
			var svTypeName=obj.svTypeName;
			var svTypeId=obj.svTypeId;
			var svLevel=obj.svLevel;
			var path=window.location.pathname;
			var type=1;
			if(path=="/techInfoCtr/static/totech.html"){
				type=1;
			}
			if(path=="/requireInfoCtr/static/toreq.html" || path=="/requireInfoCtr/static/getReq.html"){
				type=2;
			}
			if(path=="/expertCtr/static/toexpert.html" || path=="/expertCtr/static/getExpert.html"){
				type=3;
			}
			if(path=="/investOrgCtr/static/toorg.html" || path=="/investOrgCtr/static/getOrg.html"){
				type=4;
			}
			var str='<li><a id="'+svTypeId+'" href="javascript:queryList('+svTypeId+','+svLevel+','+type+')">'+svTypeName+'</a></li>';
			$(".nav_zuo").append(str);
			
		});
		$(".nav_zuo li").hover(function(){
			$(".nav_zhong").empty();
			$(this).addClass("hover").siblings().removeClass("hover");
			var index=$(this).index();
			navList1(index);
		},function(){
			$(".nav_you").empty();
		});
		subnav();
	});
}
function navList1(index){
	$.getJSON($("#base").attr("href")+"/js/serviceTypeJson.json",function(data){
		$(".nav_zhong").empty();
		for(var i=0;i<data[index].typesList.length;i++){
			var seTypeName=data[index].typesList[i].svTypeName;
			var seTypeId=data[index].typesList[i].svTypeId;
			var seLevel=data[index].typesList[i].svLevel;
			var path=window.location.pathname;
			var type=1;
			if(path=="/techInfoCtr/static/totech.html"){
				type=1;
			}
			if(path=="/requireInfoCtr/static/toreq.html" || path=="/requireInfoCtr/static/getReq.html" ){
				type=2;
			}
			if(path=="/expertCtr/static/toexpert.html" || path=="/expertCtr/static/getExpert.html"){
				type=3;
			}
			if(path=="/investOrgCtr/static/toorg.html" || path=="/investOrgCtr/static/getOrg.html"){
				type=4;
			}
			var str='<li><a title="'+seTypeName+'" id="'+seTypeId+'" href="javascript:queryList('+seTypeId+','+seLevel+','+type+')"  class="two_list">'+seTypeName+'</a><span style="position:relative;top:3px;">|</span></li>';
			$(".nav_zhong").append(str);
			wordlimit($(".two_list"),28);
		}
		$(".nav_zhong li:last").find("span").remove();
		$(".nav_zhong li").hover(function(){
			$(".nav_you").empty();
			$(this).addClass("hover").siblings().removeClass("hover");
			var index2=$(this).index();//二级的索引
			navList3(index,index2);
		})
	});
	
}
function navList3(index,index2){
	$.getJSON($("#base").attr("href")+"/js/serviceTypeJson.json",function(data){ 
		$(".nav_you").empty();
		for(var i=0;i<data[index].typesList[index2].typesList.length;i++){
			var thTypeName=data[index].typesList[index2].typesList[i].svTypeName;
			var thTypeId=data[index].typesList[index2].typesList[i].svTypeId;
			var thLevel=data[index].typesList[index2].typesList[i].svLevel;
			var path=window.location.pathname;
			var type=1;
			if(path=="/techInfoCtr/static/totech.html"){
				type=1;
			}
			if(path=="/requireInfoCtr/static/toreq.html" || path=="/requireInfoCtr/static/getReq.html"){
				type=2;
			}
			if(path=="/expertCtr/static/toexpert.html" || path=="/expertCtr/static/getExpert.html"){
				type=3;
			}
			if(path=="/investOrgCtr/static/toorg.html" || path=="/investOrgCtr/static/getOrg.html"){
				type=4;
			}
			var str='<li><a title="'+thTypeName+'" id="'+thTypeId+'" href="javascript:queryList('+thTypeId+','+thLevel+','+type+')">'+thTypeName+'</a></li>';
			$(".nav_you").append(str);
		}
	});
}
function subnav(){
	var index=window.location.href;
	var base=$("#base").attr("href")+"/";
	var login=$("#base").attr("href")+"/login.html";
	if(index==base || index==login){
		$(".nav_zuo").show();
		$(".nav_left").hover(function(){
			$(".navLeft_nav").show();
		},function(){
			$(".navLeft_nav").hide();
			$(".nav_zuo li").removeClass("hover");
		})
	}else{
		$(".goods_wrap").hover(function(){
			$(".nav_zuo").show();
		},function(){
			$(".nav_zuo").hide();
			$(".nav_zhong,.nav_you").empty();
		});
		$(".nav_left").hover(function(){
			$(".navLeft_nav").show();
		},function(){
			$(".navLeft_nav").hide();
		})
	}
	$(".nav_zuo li:nth-child(6) a").addClass("hover");
	$(".nav_zuo li:last a").css("border","none");
}
/*专家分类*/

/*专家分类数据展示(一级)*/
function expertType(){
	$.getJSON($("#base").attr("href")+"/js/expertTypeJson.json",function(data){
		$.each(data,function(i,v){
			var svTypeName=v.svTypeName;
			var svTypeId=v.svTypeId;
			var svLevel=v.svLevel;
			var type=3;
			var str='<li><a id="'+svTypeId+'" href="javascript:queryList('+svTypeId+','+svLevel+','+type+')">'+svTypeName+'</a></li>';
			$(".nav_zuo").append(str);
		});
		$(".nav_zuo li").hover(function(){
		    $(".nav_zhong").empty();
			$(this).addClass("hover").siblings().removeClass("hover");
			var idx=$(this).index();
			if(idx==0 || idx==1 || idx==2){
				$(".nav_zhong").show();
				$(".nav_zhong").css("marginTop","0px");
			}else if(idx==3 || idx==4 || idx==11){
				$(".nav_zhong").show();
				$(".nav_zhong").css("marginTop",idx*34-15+"px");
			}else if(idx==7 ||idx==8||idx==9||idx==10){
				$(".nav_zhong").show();
				$(".nav_zhong").css("marginTop",(idx-1)*34+"px");
			}else if(idx==12){
				$(".nav_zhong").hide();
			}
			expertType1(idx);
		},function(){
			$(".nav_you").empty();
		});
		$(".goods_wrap").hover(function(){
			$(".nav_zuo").show();
		},function(){
			$(".nav_zuo").hide();
			$(".nav_zhong,.nav_you").empty();
		});
		$(".nav_left").hover(function(){
			$(".navLeft_nav").show();
		},function(){
			$(".navLeft_nav").hide();
		})
	})
}
/*专家分类数据展示(二级)*/
function expertType1(index){
	$.getJSON($("#base").attr("href")+"/js/expertTypeJson.json",function(data){
		$(".nav_zhong").empty();
		for(i=0;i<data[index].typesList.length;i++){
			var svTypeName=data[index].typesList[i].svTypeName;
			var svTypeId=data[index].typesList[i].svTypeId;
			var svLevel=data[index].typesList[i].svLevel;
			var type=3;
			var str='<li><a title="'+svTypeName+'" id="'+svTypeId+'" href="javascript:queryList('+svTypeId+','+svLevel+','+type+')">'+svTypeName+'</a></li>';
			$(".nav_zhong").append(str);
		}
		$(".nav_zhong li").hover(function(){
			$(".nav_you").empty();
			$(this).addClass("hover").siblings().removeClass("hover");
		})
	})
}
/*机构分类数据展示*/
function orgType(){
	$.getJSON($("#base").attr("href")+"/js/orgTypeJson.json",function(data){
		$.each(data,function(i,v){
			var svTypeName=v.svTypeName;
			var svTypeId=v.svTypeId;
			var svLevel=v.svLevel;
			var type=4;
			var str='<li><a id="'+svTypeId+'" href="javascript:queryList('+svTypeId+','+svLevel+','+type+')">'+svTypeName+'</a></li>';
			$(".nav_zuo").append(str);
		});
		$(".goods_wrap").hover(function(){
			$(".nav_zuo").show();
		},function(){
			$(".nav_zuo").hide();
			$(".nav_zhong").empty();
		});
	})
}
