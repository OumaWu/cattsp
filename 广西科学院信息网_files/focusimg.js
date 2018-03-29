$(function () {
    //焦点图
    $("#focusimg").append($('<ol class="num"></ol>'));
    $(".slider>li").each(function (i) {
        $(".num").append($("<li>" + (i + 1) + "</li>"));
    });
    var index = 0;
    var timer;
    var lis = $(".slider>li").length;
    $(".num li").mouseover(function () {
        index = $(".num li").index(this);
        showImg(index);
        index += 1;
        if (index == lis) {
            index = 0;
        }
    }).eq(0).mouseover();
    $('#focusimg').hover(function () {
        clearInterval(timer);
    }, function () {
        timer = setInterval(function () {
            showImg(index)
            index++;
            if (index == lis) {
                index = 0;
            }
        }, 3000);
    }).trigger("mouseout");

    function showImg(index) {
        $(".slider li").hide().stop(true, true).eq(index).fadeIn();
        $(".num li").removeClass("focus")
            .eq(index).addClass("focus");
    }
})