<?php
if ($type == "news") {
    require_once('./sql/newsColumns.php');
    $page = "./information.php";
} else {
    require_once('./sql/policyColumns.php');
    $page = "./policies.php";
}
?>

<div class="xb_la">
    <?php
    while ($res = $result->fetch(PDO::FETCH_OBJ)) {
        ?>

        <h2 class=""><a href="<?php echo $page . "?category_id=" . $res->id; ?>"><?php echo $res->title; ?></a></h2>

    <?php } ?>
</div>
