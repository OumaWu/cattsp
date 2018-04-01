<?php require_once("sql/scrolling-title.php"); ?>
<link rel="stylesheet" href="中国浙江网上技术市场_files/news.css">
<script src="中国浙江网上技术市场_files/jquery-1.8.3.min.js.下载"></script>
<script type="text/javascript" src="中国浙江网上技术市场_files/jquery.SuperSlide.2.1.1.js.下载"></script>
<div class="wysn_news fr">
    <div class="slideTxtBox">
        <div class="hd">
            <ul id="tz">
                <li class="on" id="tzgg"><a href="information.php" target="_blank">科技资讯</a></li>
                <li id="dtxx"><a href="policies.php" target="_blank">政策法规</a></li>
            </ul>
            <a class="fr" href="information.php" target="_blank">更多<b class="song">&gt;</b></a></div>
        <div class="bd">
            <ul class="list" id="list">
                <?php
                while($res = $result->fetch(PDO::FETCH_OBJ)){
                ?>
                    <li><a href="information_detailpage.php?news_id=<?=$res->id;?>" target="_blank">
                        <p class="fl"><?=$res->title;?></p>
                        <em class="fr c999"><?=date('m-d',strtotime($res->date));?></em></a>
                    </li>
                <?php } ?>

            </ul>
            <ul class="list" id="list2" style="display: none;">
                <?php
                while($res2 = $result2->fetch(PDO::FETCH_OBJ)){
                ?>
                    <li><a href="policies_detailpage.php?policy_id=<?=$res2->id;?>" target="_blank">
                        <p class="fl"><?=$res2->title;?></p>
                        <em class="fr c999"><?=date('m-d',strtotime($res2->date));?></em></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<!-- 滚动条代码 -->
<script type="text/javascript">
    /* 科技资讯滚动 */
    $("#list2").css("display", "none").ready(function (e) {
        var ticker = $("#list");
        ticker.children().filter("li").each(function () {
            var li = $(this),
                container = $("<div>");
            li.next().appendTo(container);
            li.prependTo(container);
            container.appendTo(ticker);
        });
        ticker.css("overflow", "hidden");

        function animator(currentItem) {
            var distance = currentItem.height();
            //duration = (distance + parseInt(currentItem.css("marginTop"))) / 0.025;
            currentItem.animate({marginTop: -distance}, 2000, "linear", function () {
                currentItem.appendTo(currentItem.parent()).css("marginTop", 0);
                animator(currentItem.parent().children(":first"));
            });
        };
        animator(ticker.children(":first"));
        ticker.mouseenter(function () {
            ticker.children().stop();
        });
        ticker.mouseleave(function () {
            animator(ticker.children(":first"));
        });
    });

    /* 政策法规滚动滚动 */
    $("#list").css("display", "none").ready(function (e) {
        var ticker = $("#list2");
        ticker.children().filter("li").each(function () {
            var li = $(this),
                container = $("<div>");
            li.next().appendTo(container);
            li.prependTo(container);
            container.appendTo(ticker);
        });
        ticker.css("overflow", "hidden");

        function animator(currentItem) {
            var distance = currentItem.height();
            //duration = (distance + parseInt(currentItem.css("marginTop"))) / 0.025;
            currentItem.animate({marginTop: -distance}, 2000, "linear", function () {
                currentItem.appendTo(currentItem.parent()).css("marginTop", 0);
                animator(currentItem.parent().children(":first"));
            });
        };
        animator(ticker.children(":first"));
        ticker.mouseenter(function () {
            ticker.children().stop();
        });
        ticker.mouseleave(function () {
            animator(ticker.children(":first"));
        });
    });
    $(".slideTxtBox").slide({trigger: "mouseover"});
</script>
<!-- end 滚动条代码 -->