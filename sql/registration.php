<?php
	include("connection.php");
	
	if (isset($_POST["accountname"])&&isset($_POST["password"])&&isset($_POST["pswconfirm"]))
	{		
		$accountname = $_POST["accountname"];
		$password = $_POST["password"];
		$email = isset($_POST["email"]) ? $_POST["email"] : NULL;
		
		$sql = "INSERT INTO `users` (`id`, `accountname`, `realname`, `password`, `sex`, `type`, `email`, `location`) VALUES (NULL, '$accountname', NULL, '$password', NULL, NULL, '$email', NULL)";
		
		try{
			$pdo->beginTransaction();
			$result = $pdo->prepare($sql);
			if($result->execute()){
				echo "<script> alert('注册成功！！');</script>";
				header("location:../login.php");
			}
			else{
				echo "<script> alert('注册失败！！');</script>";
				echo $pdo->errorInfo();
				header("location:../register.php");
			}	
			$pdo->commit();
		} catch(PDOException $e) {
			die("错误!!: ".$e->getMessage()."<br>");
			$pdo->rollBack();
		}
	}
	else{
		echo "注册信息不完全！！！";	
	}

?>