$(function (){
	var myHref = window.location.href; 
	var index2 = myHref.indexOf("techInfoCtr/static/tech");
	var index3 = myHref.indexOf("requireInfoCtr/static/require");
	var index4 = myHref.indexOf("expertCtr/static/expert");
	var index5 = myHref.indexOf("investOrgCtr/static/investOrg");
	if(index2 > -1){
		$(".detail_nav a").eq(0).addClass("hover");
	}else if(index3 > -1){
		$(".detail_nav a").eq(1).addClass("hover");
	}else if(index4 > -1){
		$(".detail_nav a").eq(2).addClass("hover");
	}else if(index5 > -1){
		$(".detail_nav a").eq(3).addClass("hover");
	}
	/*截取字符串中的加号*/
	jiaCheck($(".lis_file"),".field");
	jiaCheck($(".lis_file"),".field_inves");
})
/**
 * 跳转专家个人主页 方法
 */
function queryExpert(usr) {
	var url = $("#base").attr("href")+"/expertCtr/static/expert-"+usr+".html";
	window.open(url);
}
/**
 * 跳转机构个人主页 方法
 */
function queryOrg(usr) {
	var url = $("#base").attr("href")+"/investOrgCtr/static/investOrg-"+usr+".html";
	window.open(url);
}

/**
 * 查询需求详细信息
 * @param techId
 */
function queryReq(reqId) {
	var url = $("#base").attr("href")+"/requireInfoCtr/static/requireInfo-"+ reqId + ".html";
	window.open(url);
}

/**
 * 查询技术成果详细信息
 * @param techId
 */
function queryTech(techId) {
	var url = $("#base").attr("href")+"/techInfoCtr/static/techInfo-"+ techId + ".html";
	window.open(url);
}

/**
 * 查询咨询的详情
 * @param articleId
 */
function queryNews(articleId) {
	var url = $("#base").attr("href")+"/news/static/article-"+ articleId + ".html";
	window.open(url);
}

/**
 * 跳转需求个人主页 方法
 */
function queryReqHome(usr) {
	window.open($("#base").attr("href")+"/requireInfoCtr/static/require-"+usr+".html");
}
/**
 * 跳转技术成果个人主页 方法
 */
function queryTechHome(usr) {
	window.open($("#base").attr("href")+"/techInfoCtr/static/techusrinfo-"+usr+".html");
}
/*截取内容中的加号*/
function jiaCheck(cname,names){
	for(var i=0;i<cname.length-1;i++){
		var str=cname.eq(i).find(names).text();
		var str1=str.replace(/\+/g,"");
		cname.eq(i).find(names).text(str1);
	}
}