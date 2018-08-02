<?php
/**
 * Created by PhpStorm.
 * User: Derek
 * Date: 2018/8/3
 * Time: 3:22
 */
include "VisitorInfo.class.php";

$url_info = parse_url($_SERVER["REQUEST_URI"]);

$name = end(explode("/", $url_info["path"]));

if ($name == "solartech_detailpage.php") {
    $object_type = 1;
}
else if ($name == "demands_detailpage.php") {
    $object_type = 0;
}
else {
    exit();
}

$city = VisitorInfo::findCurrentCity();

include "connection.php";

$sql = "INSERT INTO `visit_statistic` (`id`, `v_object_type`, `v_location`, `v_time`)"
    ." VALUES (NULL, '{$object_type}', '{$city}', now())";

try {
    $pdo->beginTransaction();
    $result = $pdo->prepare($sql);
    if ($result->execute()) {
        $pdo->commit();
    } else {
        $pdo->rollBack();
    }
} catch (PDOException $e) {
    die("错误!!: " . $e->getMessage() . "<br>");
}