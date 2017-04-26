<?php
	session_start();
	include("connect.php");
	
	$user_id = $_POST['user_id'];
	$user_pw = $_POST['user_pw'];
	
	$sql = "SELECT * FROM user WHERE ID = '$user_id'";
	if($stmt = $db->query($sql))
	{
		if($result = mysqli_fetch_object($stmt))
		{
			if(strcmp($result->PW,$user_pw) == 0)
			{
				$_SESSION['ID'] = $user_id;
				echo "登入成功";
				echo '<meta http-equiv="refresh" content="2;url=trueindex.php" />';
			}
			else
			{
				echo "密碼錯誤";
				echo '<meta http-equiv="refresh" content="2;url=index.php" />';
			}
		}
		else
		{
			echo "查無此帳號";
			echo '<meta http-equiv="refresh" content="2;url=index.php" />';
		}
	}	
?>