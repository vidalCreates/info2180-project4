<?php
    session_start();

    $conn = mysqli_connect('localhost', 'root', '', 'web_proj');
    if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
    $id = $_SESSION['id'];

    $sql = "SELECT * FROM message WHERE recipient_ids = '$id'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			$subject = $row['subject'];
			$body = $row['body'];
			echo "<div class='message'>$subject - $body</div><hr/>";
		}
	}
?>