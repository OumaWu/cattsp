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
         <a href="<?php echo $page . "?category_id=" . $res->id; ?>"
             <?php
             if ($_GET["category_id"]!= null) {
                 if ($res->id == $_GET["category_id"]) {
                     echo "class=\"on\"";
                 }
             }
             else if ($res->id == $category_id) {
                 echo "class=\"on\"";
             }
             ?>><?php echo $res->title; ?>
         </a>
    <?php } ?>
</div>
