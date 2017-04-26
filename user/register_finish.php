<?php
	//連結資料庫
	include("connect.php");
	
	//拿到傳值
	$user_id = $_POST['user_id'];
	$user_pw = $_POST['user_pw'];
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	
	$sql = "INSERT INTO user (ID,PW,name,email) VALUES ($user_id,$user_pw,$user_name,$user_email)";
	if(mysqli_query($db,$sql))
	{
		echo "成功";
	}
	else
	{
		echo "失敗";		
	}
	echo '<meta http-equiv="refresh" content="2;url=index.php" />';
?>