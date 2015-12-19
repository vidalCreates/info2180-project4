<?php 
		session_start();

		$recipients = $_POST["recipients"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];
		$user_id = $_SESSION["id"];

		$usernames = explode(',', $recipients);

		$db_conn = mysqli_connect('localhost','root','','web_proj');
		if($db_conn->connect_error){
			die("Failed to establish connection: " . $db_conn->connect_error);
		}

		for($x = 0; $x <= count($usernames); $x++){
			$sql = "SELECT id FROM user WHERE username = '$usernames[$x]'";
			$query1 = $db_conn->query($sql);
			
			if($query1->num_rows > 0){
				while($row = $query1->fetch_assoc()) {
					$recipient_id = $row['id'];
					
					$insert = "INSERT INTO message (body,subject,user_id,recipient_ids)
					VALUES ('$message','$subject','$user_id','$recipient_id')";
					
					if($db_conn->query($insert)===TRUE){							
						echo '<script language="javascript"> alert("Succesful Entry") </script>';
					}else{
						echo " ".$db_conn->error;
					}
				}
			}
		}

		
		$db_conn->close();
	?>