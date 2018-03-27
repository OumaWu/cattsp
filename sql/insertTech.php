<?php
	include("connection.php");
	$url = "../mytech.php";
	$url2 = "../publishtech.php";
	
	if (!empty($_POST["title"])&&!empty($_POST["description"])&&!empty($_POST["location"])&&!empty($_POST["entreprise"]))
	{		
		$title = $_POST["title"];
		$description = $_POST["description"];
		$email = isset($_POST["email"]) ? $_POST["email"] : NULL;
		$location = $_POST["location"];
		$entreprise = $_POST["entreprise"];
		$userid = $_GET["userid"];
		
		$sql = "INSERT INTO `solar_technologies` (`id`, `title`, `entreprise`, `location`, `email`, `description`, `date`, `image`, `userid`) VALUES (NULL, '$title', '$entreprise', '$location', '$email', '$description', now(), NULL, '$userid')";
		
		try{
			$pdo->beginTransaction();
			$result = $pdo->prepare($sql);
			if($result->execute()){
				echo "<script> alert('发布太阳能技术成功！！');</script>";
				echo "<meta http-equiv=\"refresh\" content=\"0.5;url=$url\">";
			}
			else{
				echo "<script> alert('发布太阳能技术失败！！');</script>";
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