<?php
  session_start();

  $conn = mysqli_connect('localhost', 'root', '', 'web_proj');
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }
  $id = $_SESSION['id'];
  $message_id = $_POST['id'];
  $entry= $_POST['entry'];

  if($entry == "false"){
    $sql = "INSERT INTO message_read (message_id,reader_id)
      VALUES ('$message_id','$id')";

    $conn->query($sql);
  }
  $sql2 = "SELECT * FROM message WHERE id = '$message_id'";

  $result = $conn->query($sql2);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
      $body = $row['body'];
      $header = $row['subject'];
      echo "<h3 id='title'>Message: $header</h3>";
      echo "<div id='body'>$body</div>";
    }
  }else{
    echo "Error Loading Message";
  }

  $conn->close();
?>
