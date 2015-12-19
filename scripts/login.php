<?php
    session_start();

    $conn = mysqli_connect('localhost', 'root', '', 'web_proj');
    if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			if($row["password"]==$password){
				$_SESSION['username'] = $row["username"];
				$_SESSION['firstname'] = $row["firstname"];
				$_SESSION['lastname'] = $row["lastname"];
				$_SESSION['id'] = $row["id"];
				echo 1;
			}
		}
	}else{
		echo 0;
	}

  $conn->close();
?>
