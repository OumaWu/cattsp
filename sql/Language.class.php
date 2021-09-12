<?php
require_once("Page.class.php");

class Language
{
    public static function getListByLang($lang_code, $table, $id_name, $pageSize, $currentPage, $where = [])
    {

        /** 准备sql语句 */
        $sql = "SELECT * FROM `{$table}`";
        // 语言条件语句
        $lang_cond = "`{$table}`.`lang_id` = (SELECT `id` FROM `language` WHERE `language`.`code` = '{$lang_code}')";
        // 将语言条件语句插入条件语句数组
        array_unshift($where, $lang_cond);
        // 将where列表里的条件依次拼接进语句
        $sql .= " WHERE ";
        foreach ($where as $cond) {
            $sql .= ($cond . " AND ");
        }
        // 最后加上1中和最后一个AND
        $sql .= '1';

        /** 初始化page对象 */
        $page = new Page($table, $id_name, $pageSize, $currentPage, $where);

        $page->connect();

        try {
            $result = $page->getPDO()->prepare($page->getOffsetAdded($sql));
            if ($result->execute()) {
            } else {
                echo "<script> alert('提取{$table}列表失败！！\\n{$page->getPDO()->errorInfo()}');</script>";
            }
        } catch (PDOException $e) {
            die("错误!!: " . $e->getMessage() . "<br>");
        } finally {
            $page->disconnect();
        }

        return array("result" => $result, "page" => $page);
    }
}