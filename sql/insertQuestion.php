<?php
include("connection.php");
$url = "../myquestions.php";
$url2 = $_SERVER["HTTP_REFERER"];

if (!empty($_POST["title"]) && !empty($_POST["content"])
    && !empty($_POST["u_id"]) && !empty($_POST["spe_id"])) {
    $title = $_POST["title"];
    $content = $_POST["content"];
    $u_id = $_POST["u_id"];
    $spe_id = $_POST["spe_id"];

    $sql = "INSERT INTO `question` (`id`, `title`, `content`, `u_id`, `spe_id`, `time`) "
        ."VALUES (NULL, '{$title}','{$content}', '{$u_id}', '{$spe_id}', CURRENT_TIMESTAMP)";

    try {
        $pdo->beginTransaction();
        $result = $pdo->prepare($sql);
        if ($result->execute()) {
            $pdo->commit();
            echo "<script> alert('提问成功！！');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
        } else {
            $pdo->rollBack();
            echo "<script> alert('提问失败！！\\n{$pdo->errorInfo()}');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url2\">";
        }
    } catch (PDOException $e) {
        die("错误!!: " . $e->getMessage() . "<br>");
    }
} else {
    echo "<script> alert('请填必填信息！！');</script>";
    echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url2\">";
}
?>