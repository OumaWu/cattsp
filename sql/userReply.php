<?php
include("connection.php");
$url = $_SERVER["HTTP_REFERER"];

if (!empty($_POST["q_id"]) && !empty($_POST["content"])
    && !empty($_POST["u_id"]) && !empty($_POST["spe_id"])) {
    $q_id = $_POST["q_id"];
    $content = $_POST["content"];
    $u_id = $_POST["u_id"];
    $spe_id = $_POST["spe_id"];

    $sql = "INSERT INTO `reply` (`id`, `content`, `u_id`, `spe_id`, `s_type`, `time`, `q_id`) "
        ."VALUES (NULL, '{$content}', '{$u_id}', '{$spe_id}', '0', CURRENT_TIMESTAMP, '{$q_id}')";

    try {
        $pdo->beginTransaction();
        $result = $pdo->prepare($sql);
        if ($result->execute()) {
            $pdo->commit();
            echo "<script> alert('回复成功！！');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
        } else {
            $pdo->rollBack();
            echo "<script> alert('回复失败！！\\n{$pdo->errorInfo()}');</script>";
            echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
        }
    } catch (PDOException $e) {
        die("错误!!: " . $e->getMessage() . "<br>");
    }
} else {
    echo "<script> alert('回复内容不能为空！！');</script>";
    echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
}
?>