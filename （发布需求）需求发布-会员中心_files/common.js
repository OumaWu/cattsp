function setframe(){var b=window.parent.document.getElementById("contentframe");if(b!=null){var a=parseInt($("body").css("height"));b.height=a}}$(function(){setframe();setInterval("setframe()",300)});$(function(){changeHeight()});function changeHeight(){var a=$(window).height();var d=$(".iktk").height();var c=$(".ikfoot").height();var b=20;$(".ikbr").height(a-d-c-b-6);$(".ikbl").height(a-d-c-b-6)}$(window).resize(function(){var a=$(window).height();if(a<1500){changeHeight()}});