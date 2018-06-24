<script type="text/javascript" src="js/jquery-1.7.min.js.下载"></script>
<div class="nav-wrap clearfix">
    <div class="w1220">
        <ul id="nav" class="nav clearfix">
            <li class="nLi cur on" id="home">
                <h3 style="width: 200px; text-align: center;"><a href="home.php" target="_self">首页</a></h3>
            </li>
            <li class="nLi" id="solartech">
                <h3><a href="solartech.php" target="_blank">太阳能技术</a></h3>
            </li>
            <li class="nLi" id="demands">
                <h3><a href="demands.php" target="_blank">企业需求</a></h3>
            </li>
            <li class="nLi" id="specialists">
                <h3><a href="specialists.php" target="_blank">专家咨询</a></h3>
            </li>
            <li class="nLi" id="information">
                <h3><a href="information.php?category_id=2" target="_blank">资讯大厅</a></h3>
            </li>
            <li class="nLi" id="notification">
                <h3><a href="information.php?category_id=1" target="_blank">通知公告</a></h3>
            </li>
            <li class="nLi" id="aboutus">
                <h3><a href="aboutus.php" target="_blank">关于我们</a></h3>
            </li>
        </ul>
    </div>
</div>

<script>
    var href = window.location.href;
    var pageName = href.substring(href.lastIndexOf("/") + 1);
    switch (pageName) {
        case "solartech.php" :
            changeClass("solartech");
            break;
        case "demands.php" :
            changeClass("demands");
            break;
        case "solartech.php" :
            changeClass("solartech");
            break;
        case "specialists.php" :
            changeClass("specialists");
            break;
        case "information.php?category_id=2" :
            changeClass("information");
            break;
        case "information.php?category_id=1" :
            changeClass("notification");
            break;
        case "aboutus.php" :
            changeClass("aboutus");
            break;
    }

    function changeClass(id) {
        $("#home").removeClass("cur");

        $("#" + id).addClass("cur").addClass("on");
    }
</script>