<html>
	<head>
		<title>TestStudent</title>
	</head>
	<body>
		<?php
			include("connect.php");
			
			$sql = "SELECT * FROM students";
			if($stmt = $db->query($sql))
			{
				while($result = mysqli_fetch_object($stmt))
				{
					echo '<p>名字： '.$result->name.'，學號：'.$result->number.'</p>';
				}
			}
		?>
	</body>
</html>