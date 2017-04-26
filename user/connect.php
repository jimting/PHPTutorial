<?php
	$adr = "localhost";
	$username = "root";
	$userpw = "";
	$table = "user";
	
	$db = mysqli_connect($adr,$username,$userpw,$table);
	
	if(mysqli_connect_errno($db))
		echo "無法對資料庫連線！" . mysqli_connect_error();
	
	mysqli_set_charset($db,'utf8');

	if(!@mysqli_select_db($db,$table))
        die("無法使用資料庫");
?>