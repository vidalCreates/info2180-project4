<html>
<head>
	<title>Results</title>
	<link rel="stylesheet" href="#"/>
</head>
<body>
	<?php 
		$fname = $_POST["firstname"];
		$lname = $_POST["lastname"];
		$uname = $_POST["username"];
		$password =  $_POST["password"];
	
		$db_conn = mysqli_connect('localhost','root','','web_proj');
		if($db_conn->connect_error){
			die("Failed to establish connection: " . $db_conn->connect_error);
		}

		$insert = "INSERT INTO user (firstname,lastname,password,username)
			VALUES ('$fname','$lname','$password','$uname')";

		if($db_conn->query($insert)===TRUE){							
			echo '<script language="javascript"> alert("Succesful Entry") </script>';
		}else{
			echo " ".$db_conn->error;
		}
		$db_conn->close();
	?>
</body>
</html>