<!DOCTYPE html>
<?php require_once("sql/scrolling-title.php"); ?>
<link rel="stylesheet" href="./css/news.css?v=<?=rand(1,10);?>">
<script src="./js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="./js/jquery.SuperSlide.2.1.1.js"></script>

<!-- 新闻标题 -->
<div class="wysn_news fr">
    <div class="slideTxtBox">
        <div class="hd">
            <ul id="tz">
                <li class="on" id="tzgg"><a href="information.php?category_id=2" target="_blank">科技资讯</a></li>
                <li id="dtxx"><a href="information.php?category_id=1" target="_blank">通知公告</a></li>
            </ul>
            <a class="fr" href="information.php" target="_blank">更多<b class="song">&gt;</b></a></div>
        <div class="bd">
            <ul class="list" id="list">
                <?php
                while ($res = $result->fetch(PDO::FETCH_OBJ)) {
                    ?>
                    <li><a href="information_detailpage.php?news_id=<?= $res->id; ?>" target="_blank">
                            <p class="fl"><?= $res->title; ?></p>
                            <em class="fr c999"><?= date('m-d', strtotime($res->date)); ?></em></a>
                    </li>
                <?php } ?>
            </ul>
            <ul class="list" id="list2" style="display: none;">
                <?php
                while ($res2 = $result2->fetch(PDO::FETCH_OBJ)) {
                    ?>
                    <li><a href="policies_detailpage.php?policy_id=<?= $res2->id; ?>" target="_blank">
                            <p class="fl"><?= $res2->title; ?></p>
                            <em class="fr c999"><?= date('m-d', strtotime($res2->date)); ?></em></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<!-- 新闻标题 -->


<!-- 滚动条代码 -->
<script type="text/javascript">

    /* 滚动函数处理 */
    function animator(currentItem) {
        var distance = currentItem.height();
        // var duration = (distance + parseInt(currentItem.css("marginTop"))) / 0.025;
        currentItem.animate({marginTop: -distance}, 1500, "linear", function () {
            currentItem.appendTo(currentItem.parent()).css("margin-top", 0);
            animator(currentItem.parent().children(":first"));
        });
    };

    /* 科技资讯滚动 */
    /* 超过14条标题才滚动 */
    if ($("#list li").length < 14) {

        $("#list").css("display", "block").ready(function (e) {

            var ticker = $("#list");
            var div_height = $("div.slideTxtBox").height();
            var title_height = $("div.hd").height();
            var list_height = $("#list").height();
            var distance = div_height - title_height - list_height;
            var item_number = $("#list li").length;
            var margin_top = distance / item_number;
            /* 设置标题之间的距离 */
            ticker.children().css("margin-top", margin_top);
            ticker.css("padding", 0);
        });
    } else {

        var ticker = $("#list");
        ticker.children().filter("li").each(function () {
            var li = $(this),
                container = $("<div>");

            li.next().appendTo(container);
            li.prependTo(container);
            container.appendTo(ticker);
        });
        ticker.css("overflow", "hidden");

        animator(ticker.children(":first"));
        ticker.mouseenter(function () {
            ticker.children().stop();
        });
        ticker.mouseleave(function () {
            animator(ticker.children(":first"));
        });
    }


    /* 通知公告滚动滚动 */
    /* 超过14条标题才滚动 */
    if ($("#list2 li").length < 14) {
        $("#list2").css("display", "block").ready(function (e) {

            var ticker = $("#list2");
            var div_height = $("div.slideTxtBox").height();
            var title_height = $("div.hd").height();
            var list_height = $("#list2").height();
            var distance = div_height - title_height - list_height;
            var item_number = $("#list2 li").length;
            var margin_top = distance / item_number;
            /* 设置标题之间的距离 */
            ticker.children().css("margin-top", margin_top);
            ticker.css("padding", 0);
        });
    } else {

        var ticker = $("#list2");
        ticker.children().filter("li").each(function () {
            var li = $(this),
                container = $("<div>");
            li.next().appendTo(container);
            li.prependTo(container);
            container.appendTo(ticker);
        });
        ticker.css("overflow", "hidden");

        animator(ticker.children(":first"));
        ticker.mouseenter(function () {
            ticker.children().stop();
        });
        ticker.mouseleave(function () {
            animator(ticker.children(":first"));
        });
    }
    $(".slideTxtBox").slide({trigger: "mouseover"});
    $(".wysn_banner").slide({
        titCell: ".flip ul",
        mainCell: "#slides ul",
        autoPage: true,
        effect: "left",
        autoPlay: true
    });
</script>
<!-- end 滚动条代码 -->