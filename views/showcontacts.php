<?php
    session_start();

    $blank = "";

    $conn = mysqli_connect('localhost', 'root', '', 'web_proj');
    if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}

    $sql = "SELECT * FROM user WHERE username != '$blank'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			$username = $row['username'];
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];
			echo "<div class='username'>$username - $firstname $lastname</div><hr/>";
		}
	}
?>