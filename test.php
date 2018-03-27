<?php
    require_once('sql/connection.php');
	
		$login = "test";
		$sql = "SELECT * FROM `users` WHERE `accountname` LIKE '$login'";
		
		try{
			$result = $pdo->prepare($sql);
			$result->execute();
				$rows = $result->fetchColumn(); 
				if($rows!=0)
					echo "$login : 此用户名已有人使用！！！<br>";
				else 
					echo "此用户名可以使用！！！<br>";
					echo "login : $login<br>";
					echo "rows : $rows<br>";
			
		} catch(PDOException $e) {
			die("错误!!: ".$e->getMessage()."<br>");
		}

?>