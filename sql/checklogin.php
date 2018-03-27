<?php
    require_once('connection.php');
	
	if(isset($_GET['login'])){
		
		$login = $_GET['login'];
		$sql = "SELECT * FROM users where accountname = '$login'";
		
		try{
			$result = $pdo->prepare($sql);
			$result->execute();
				$rows = $result->rowCount(); 
				echo $rows;
				
		} catch(PDOException $e) {
			die("错误!!: ".$e->getMessage()."<br>");
		}
	}
	else echo "没有接收到用户名！！！";
	return false;
?>