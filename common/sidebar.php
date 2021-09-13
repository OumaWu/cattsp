<?php
global $url;
if (!empty($category_type)) {
    if ($category_type == "news") {
        $url = "./information.php";
    } else {
        $url = "./policies.php";
    }
    require_once(dirname(__FILE__, 2) . '/sql/article_category.php');
    ?>

    <div class="xb_la">
        <?php
        if (!empty($result)) {
            while ($res = $result->fetch(PDO::FETCH_OBJ)) {
                if (empty($category_id)) {
                    $category_id = empty($_GET["category_id"]) ? $res->id : $_GET["category_id"];
                }
                ?>
                <a href="<?= $url . "?category_id=" . $res->id; ?>"
                    <?php
                    if ($res->id == $category_id) {
                        echo "class=\"on\"";
                    }
                    ?>><?= $res->title; ?>
                </a>
            <?php }
        } ?>
    </div>
<?php } ?>