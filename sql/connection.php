<?php
@header("Content-Type:text/html;charset=utf-8");
/* localhost db */
$dbms = 'mysql';
$db = 'sttp';
$username = 'root';
$pwd = '111';
$host = 'localhost';
$dsn = "$dbms:host=$host;dbname=$db";

/* Amazon RDS db */
/*$dbms = 'mysql';
$db = 'casttp';
$username = 'sttpadmin';
$pwd = 'sttpadmin';
$host = 'casttpdb.cvpg8sczyk4i.eu-central-1.rds.amazonaws.com';
$dsn = "$dbms:host=$host;dbname=$db";*/

$sql = "SET NAMES utf8";
global $pdo;
try{
	$pdo = new PDO($dsn,$username,$pwd);
	$result = $pdo->prepare($sql);
	$result->execute();
	//echo "pdo连接mysql成功!";
}
catch (PDOException $e){
	echo "ERROR !!";
	print_r( $e );
}
?>