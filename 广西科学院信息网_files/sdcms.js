function setTab(e,t,n){for(i=1;i<=n;i++){var r=$("#"+e+i),s=$("#con_"+e+"_"+i);r[0].className=i==t?"hover":"",s[0].style.display=i==t?"block":"none"}}function checksearch(e){if(e.key.value=="")return alert("\u8bf7\u8f93\u5165\u5173\u952e\u5b57"),e.key.focus(),!1}function checkvote(e,t){var n="";for(i=0;i<e.voteitem.length;i++)e.voteitem[i].checked&&(n+=","+e.voteitem[i].value);if(n=="")return $.message({type:"warn",content:"\u8bf7\u9009\u62e9\u60a8\u8981\u6295\u7968\u7684\u9879\u76ee"}),!1;var r,s;return r=webroot+"plug/vote.asp?act=vote",s="id="+t,s+="&t1="+encodeURIComponent(n.substring(1)),$.ajax({type:"post",cache:!1,url:r,data:s,timeout:1e4,error:function(){alert("fail")},success:function(e){var n=e.substring(0,1),r=e.substring(1);switch(n){case"0":$.message({type:"warn",content:r,time:3e3});break;case"1":$.message({type:"ok",content:r,time:2e3}),setTimeout(function(){location.href=webroot+"plug/vote.asp?id="+t},1500);break;default:$.message({type:"error",content:e,time:1e4})}}}),!1}function addfavorite(e){var t,n;return t=webroot+"user/ajax.asp",n="act=favorite",n+="&t0="+encodeURIComponent(e),$.ajax({type:"post",cache:!1,url:t,data:n,timeout:1e4,error:function(){alert("fail")},success:function(e){var t=e.substring(0,1),n=e.substring(1);switch(t){case"0":$.message({type:"error",content:n,time:3e3});break;case"1":$.message({type:"error",content:n,time:3e3});break;case"2":$.message({type:"ok",content:n,time:3e3});break;default:$.message({type:"error",content:e,time:1e4})}}}),!1}function avatar_success(){$.message({type:"ok",content:"\u5934\u50cf\u4fdd\u5b58\u6210\u529f"}),setTimeout(function(){location.href="?"},2500)}function addNum(e){var t=$("#"+e);t.parent().css("position","relative").append($("<span>+1</span>").css({position:"absolute",left:"0px",top:"-15px",color:"#f00"}).animate({fontSize:80,opacity:0},800,function(){$(this).remove()}))}$(function(){$("#userpanel").length>0&&$.ajax({type:"post",cache:!1,url:webroot+"user/ajax.asp",data:"act=userpanel&url="+location.href,timeout:1e4,error:function(){},success:function(e){$("#userpanel").html(e)}}),$(".menu li").hover(function(){$("dl",this).css("display","block"),$(this).addClass("hover")},function(){$("dl",this).css("display","none"),$(this).removeClass("hover")})})

//将两个div高度设置一致
function sameheight( object1name,object2name)
{
    var object1=document.getElementById(object1name);
    var object2 =document.getElementById(object2name);
    if(object2==null)
        return;
    if(object1.scrollHeight <object2.scrollHeight-0)
        object1.style.height=object2.scrollHeight+0+"px";
    else
    {
        var object3 =document.getElementById("rightmenu");
        object3.style.height=object1.scrollHeight-35+"px";
    }
}