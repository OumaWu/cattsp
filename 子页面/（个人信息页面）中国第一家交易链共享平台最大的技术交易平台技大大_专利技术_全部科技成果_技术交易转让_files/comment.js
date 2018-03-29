/**
 *
 * @authors Your Name (you@example.org)
 * @date    2016-09-12 16:15:07
 * @version $Id$
 */
$(function () {
    var _IsIndex = $("#IsIndex").val();
    if (_IsIndex == "0") {
        jQuery("#nav").slide({
            type: "menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
            titCell: ".nLi", //鼠标触发对象
            targetCell: ".sub", //titCell里面包含的要显示/消失的对象
            effect: "slideDown", //targetCell下拉效果
            delayTime: 300, //效果时间
            triggerTime: 0, //鼠标延迟触发时间（默认150）
            returnDefault: true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
        });
    } else {
        var cssname = ".sub1";
        if (_IsIndex == "2") {
            cssname = ".sub";
        }
        jQuery("#nav").slide({
            type: "menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
            titCell: ".nLi", //鼠标触发对象
            targetCell: cssname, //titCell里面包含的要显示/消失的对象
            effect: "slideDown", //targetCell下拉效果
            delayTime: 300, //效果时间
            triggerTime: 0, //鼠标延迟触发时间（默认150）
            returnDefault: true //鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
        });
    }

    //返回顶部
    //$(window).scroll(function(){$(this).scrollTop()>100?$(".backtop").css("display","block"):$(".backtop").hide()})
    //$(".goback").click(function () {
    //  $('body,html').animate({scrollTop:0},500);
    //  return false;
    //});

    // 图片轮播
    jQuery("#slideBox").slide({mainCell: ".bd ul", effect: "left", autoPlay: true});
    // 图片滚动
    jQuery("#picScroll-left01").slide({
        titCell: ".hd ul",
        mainCell: ".bd ul",
        autoPage: true,
        effect: "left",
        autoPlay: true,
        vis: 4,
        trigger: "click"
    });

})

$(document).ready(function ($) {

    $(".cla-price ul li").click(function () {
        var pid = $("#hdPid").val();
        $(this).addClass("on");
        $(this).nextAll().removeClass("on");
        $(this).prevAll().removeClass("on");
        $.ajax({
            url: '/data/getdata.ashx?op=10&code=' + this.id + '&pid=' + pid,
            type: 'POST',
            dataType: "json",
            timeout: 1000,
            async: false,
            error: function () {
                //alert("调用后台数据失败!");
            },
            success: function (data) {
                if (data.msg == 1) {
                    if (data.pricelist.toString() != "") {
                        $(".ser-price ul").html("");
                        $(".ser-price ul").html(data.pricelist.toString());
                        $(".ser-price ul li").click(function () {
                            var price = $(this).attr("title");
                            $(this).addClass("on");
                            $(this).nextAll().removeClass("on");
                            $(this).prevAll().removeClass("on");
                            $("#hdPrice").val(price);
                            $("#hdPriceID").val(this.id);//价格ID
                            $("#font_litPrice").html("￥" + price);
                        })
                    }
                } else {
                    $(".ser-price ul").html("暂无服务项目！");
                }
            }
        });
    })
    $(".ser-price ul li").click(function () {
        var price = $(this).attr("title");
        $(this).addClass("on");
        $(this).nextAll().removeClass("on");
        $(this).prevAll().removeClass("on");
        $("#hdPrice").val(price);
        $("#hdPriceID").val(this.id);//价格ID
        if (price > 0) {
            $("#font_litPrice").html("￥" + price);
        } else {
            $("#font_litPrice").html("面议");
        }
    })
})