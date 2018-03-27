<?php
	include("connection.php");
	$url = "../mydemands.php";
	$url2 = "../publishdemands.php";
	
	if (!empty($_POST["title"])&&!empty($_POST["description"])&&!empty($_POST["location"])&&!empty($_POST["entreprise"]))
	{		
		$title = $_POST["title"];
		$description = $_POST["description"];
		$email = isset($_POST["email"]) ? $_POST["email"] : NULL;
		$location = $_POST["location"];
		$entreprise = $_POST["entreprise"];
		$userid = $_GET["userid"];
		
		$sql = "INSERT INTO `demands` (`id`, `title`, `entreprise`, `location`, `email`, `description`, `date`, `userid`) VALUES (NULL, '$title', '$entreprise', '$location', '$email', '$description', now(), '$userid')";
		
		try{
			$pdo->beginTransaction();
			$result = $pdo->prepare($sql);
			if($result->execute()){
				echo "<script> alert('发布需求成功！！');</script>";
				echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
			}
			else{
				echo "<script> alert('发布需求失败！！');</script>";
				echo $pdo->errorInfo();
				echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
			}	
			$pdo->commit();
		} catch(PDOException $e) {
			die("错误!!: ".$e->getMessage()."<br>");
			$pdo->rollBack();
		}
		echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
	}
	else{
		echo "<script> alert('请填必填信息！！');</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url2\">";
	}

?>