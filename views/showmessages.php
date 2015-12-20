    <?php
        session_start();

        $conn = mysqli_connect('localhost', 'root', '', 'web_proj');
        if($conn->connect_error){
    		die("Connection failed: " . $conn->connect_error);
    	  }
        $id = $_SESSION['id'];

        $sql = "SELECT * FROM message WHERE recipient_ids = '$id' ORDER BY id DESC LIMIT 10";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
    		while($row = $result->fetch_assoc()) {
          $sender = $row['user_id'];
    			$subject = $row['subject'];
    			$body = $row['body'];
          $message_id = $row['id'];
          $sql2 = "SELECT * FROM user WHERE id = '$sender'";
          $result2 = $conn->query($sql2);
          $sql3 = "SELECT * FROM message_read WHERE message_id = '$message_id'";
          $result3 = $conn->query($sql3);
          while ($row2 = $result2->fetch_assoc()) {
              $sendername = $row2['firstname']." ".$row2['lastname'];
              if($result3->num_rows > 0){
                  echo "<div class='message' id='$message_id' onclick=\"read(".$message_id.")\">$sendername - $subject</div><hr/>";
              }else{
                echo "<div class='newmessage' id='$message_id' onclick=\"read(".$message_id.")\">$sendername - $subject</div><hr/>";
              }
          }
    		}
    	}
    ?>
