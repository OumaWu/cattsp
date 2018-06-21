// JavaScript Document

//select
$(function () {
    $(".wysn_topsearch .choose .slidkey").click(function () {
        $(".slidkey_hide").slideToggle(200);
        return false;
    });
    $(".slidkey_hide li").click(function () {
        var stxt = $(this).text();
        $(".slidkey_hide").slideUp(200);
        $(".wysn_topsearch .choose .slidkey em").html(stxt);
    });
    $(document).bind("click", function (e) {
        var target = $(e.target);
        if (target.closest(".slidkey_hide").length == 0) {
            $(".slidkey_hide").slideUp(200);
        }
    });
});


//nav
$(function () {
    $(".wysn_nav li").hover(function () {
        $(this).find(".navsed").fadeIn();
    }, function () {
        $(this).find(".navsed").fadeOut();
    });
});

/*20160613新增*/
$(function () {
    $(".wys_tabrow em").click(function () {
        $(this).addClass("on").siblings().removeClass("on");
        $(this).parent().siblings(".wys_tabrow").find("em").removeClass("on");
        var aa = $(this).attr("id").substring(1);    //分类大类
        $(this).parent().parent().find("#b" + aa).css("display", "block").siblings(".wys_sortbox").css("display", "none");  //分类小类显示
    });
    $(".wys_sortbox span").click(function () {
        $(this).find("a").addClass("hover");
        $(this).siblings().find("a").removeClass("hover");   //分类小类点击颜色变化
    });
});
/*end*/


//tab
$(function () {
    function tabs(tabTit, on, tabCon) {
        $(tabTit).children().click(function () {
            $(this).addClass(on).siblings().removeClass(on);
            var index = $(tabTit).children().index(this);
            $(tabCon).children().eq(index).fadeIn().siblings().hide();
        });
    };
    tabs(".tab-hd", "cur", ".tab-bd");
});


//floor
$(function () {
    $(window).scroll(function () {
        //定义变量，获取滚动条的高度
        var top = $(document).scrollTop();
        //定义变量，抓取#menu
        var menu = $("#floor");
        //定义变量，查找.item
        var items = $("#floormc").find(".item");
        //定义变量，当前所在的楼层item #id
        var curId = "";
        items.each(function () {
            //定义变量，获取当前类
            var m = $(this);
            //定义变量，获取当前类的top偏移量
            var itemsTop = m.offset().top;
            if (top > itemsTop - 100) {
                curId = "#" + m.attr("id");
            } else {
                return false;
            }
        });
        var curLink = menu.find(".cur");
        if (curId && curLink.attr("href") != curId) {
            curLink.removeClass("cur");
            menu.find("[href=" + curId + "]").addClass("cur");
        }
    });
});


//fixed
$(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            $(".wys_floatl").fadeIn();
            $(".wys_floatr li.retop").fadeIn();
        }
        else {
            $(".wys_floatl").hide();
            $(".wys_floatr li.retop").fadeOut();
        }
    });

    $(".wys_floatr li").hover(function () {
        $(this).addClass("cur");
        $(this).find(".frmc").fadeIn();
    }, function () {
        $(this).removeClass("cur");
        $(this).find(".frmc").fadeOut();
    });

    $(".wys_floatr .retop").click(function () {
        $("html,body").animate({scrollTop: "0"}, 800);
    });
});


//scrollpic
$(function () {
    var sWidth = $(".scl01").width(); //获取焦点图的宽度（显示面积）
    var len = $(".scl01 ul li").length; //获取焦点图个数
    var index = 0;
    var picTimer;

    //以下代码添加数字按钮和按钮后的半透明条
    var btn = "<div class='btn'>";
    for (var i = 0; i < len; i++) {
        btn += "<span></span>";
    }
    btn += "</div>";
    $(".scl01").append(btn);

    //为小按钮添加鼠标滑入事件，以显示相应的内容
    $(".scl01 .btn span").css("opacity", 1).mouseenter(function () {
        index = $(".scl01 .btn span").index(this);
        showPics(index);
    }).eq(0).trigger("mouseenter");

    //本例为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度
    $(".scl01 ul").css("width", sWidth * (len));

    //鼠标滑上焦点图时停止自动播放，滑出时开始自动播放
    $(".scl01").hover(function () {
        clearInterval(picTimer);
    }, function () {
        picTimer = setInterval(function () {
            showPics(index);
            index++;
            if (index == len) {
                index = 0;
            }
        }, 4000); //此4000代表自动播放的间隔，单位：毫秒
    }).trigger("mouseleave");

    //显示图片函数，根据接收的index值显示相应的内容
    function showPics(index) { //普通切换
        var nowLeft = -index * sWidth; //根据index值计算ul元素的left值
        $(".scl01 ul").stop(true, false).animate({"left": nowLeft}, 300); //通过animate()调整ul元素滚动到计算出的position
        $(".scl01 .btn span").removeClass("cur").eq(index).addClass("cur"); //为当前的按钮切换到选中的效果
    }
});

$(function () {
    var sWidth = $(".scl02").width(); //获取焦点图的宽度（显示面积）
    var len = $(".scl02 ul li").length; //获取焦点图个数
    var index = 0;
    var picTimer;

    //以下代码添加数字按钮和按钮后的半透明条
    var btn = "<div class='btn'>";
    for (var i = 0; i < len; i++) {
        btn += "<span></span>";
    }
    btn += "</div>";
    $(".scl02").append(btn);

    //为小按钮添加鼠标滑入事件，以显示相应的内容
    $(".scl02 .btn span").css("opacity", 1).mouseenter(function () {
        index = $(".scl02 .btn span").index(this);
        showPics(index);
    }).eq(0).trigger("mouseenter");

    //本例为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度
    $(".scl02 ul").css("width", sWidth * (len));

    //鼠标滑上焦点图时停止自动播放，滑出时开始自动播放
    $(".scl02").hover(function () {
        clearInterval(picTimer);
    }, function () {
        picTimer = setInterval(function () {
            showPics(index);
            index++;
            if (index == len) {
                index = 0;
            }
        }, 4000); //此4000代表自动播放的间隔，单位：毫秒
    }).trigger("mouseleave");

    //显示图片函数，根据接收的index值显示相应的内容
    function showPics(index) { //普通切换
        var nowLeft = -index * sWidth; //根据index值计算ul元素的left值
        $(".scl02 ul").stop(true, false).animate({"left": nowLeft}, 300); //通过animate()调整ul元素滚动到计算出的position
        $(".scl02 .btn span").removeClass("cur").eq(index).addClass("cur"); //为当前的按钮切换到选中的效果
    }
});


//pop
$(function () {
    //取BODY区域宽度、高度
    var clientWidth = document.body.clientWidth;
    var clientHeight = document.body.clientHeight;
    //取可见区域宽度、高度
    var documentWidth = document.documentElement.clientWidth;
    var documentHeight = document.documentElement.clientHeight;
    clientWidth = Math.max(clientWidth, documentWidth);
    clientHeight = Math.max(clientHeight, documentHeight);
    $(".wys_pop").css("display", "none");
    $(".wys_popbtn").click(function () {
        $("body").append("<div class='coverbg'></div>");
        $(".coverbg").css({"width": clientWidth, "height": clientHeight});
        $(".coverbg").css("display", "block");
        $(".wys_pop").css("display", "block");
    });
    $(".wys_pop .info .close").click(function () {
        $(".wys_pop").css("display", "none");
        $(".coverbg").css("display", "none");
        $(".coverbg").remove();
    });
});


//star
$(function () {
    $(".wys_starline a").hover(function () {
        $(this).addClass("cur");
        $(this).prevAll().removeClass("cur");
        $(this).nextAll().removeClass("cur");
    });
});


//more
$(function () {
    $(".wys_xssortbd li").hover(function () {
        $(this).addClass("cur");
    }, function () {
        $(this).removeClass("cur");
    });
});


//second-classify
$(function () {
    $(".wys_jsfruitslist li").hover(function () {
        $(this).find("em a").addClass("hover");
        $(this).find("em i").html("&#xe640;");
        $(this).find(".sedmc").fadeIn();
    }, function () {
        $(this).find("em a").removeClass("hover");
        $(this).find("em i").html("&#xe63e;");
        $(this).find(".sedmc").fadeOut();

    });
});


$(function () {
    $(".wys_tabrow em").click(function () {
        $(this).addClass("on").siblings().removeClass("on");
        $(this).parent().siblings(".wys_tabrow").find("em").removeClass("on");
        var aa = $(this).attr("id").substring(1);
        $(this).parent().parent().find("#b" + aa).css("display", "block").siblings(".wys_sortbox").css("display", "none");
    });
    $(".wys_sortbox span").click(function () {
        $(this).find("a").addClass("hover");
        $(this).siblings().find("a").removeClass("hover");
    });
});
