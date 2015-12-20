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
      $sender = $row['user_id'];
      $sql3 = "SELECT * FROM user WHERE id = '$sender'";
      $result2 = $conn->query($sql3);
      while ($row2 = $result2->fetch_assoc()) {
          $sendername = $row2['firstname']." ".$row2['lastname'];
          echo "<div class=\"popup\">";
          echo "<div><button type=\"button\" id=\"exit\">&#10006;</button></div>";
          echo "<h3 id='messagetitle'>Title: $header</h3>";
          echo "<h3>From: $sendername</h3>";
          echo "<div id='messagebody'>$body</div>";
          echo "</div>";
      }
    }
  }else{
    echo "Error Loading Message";
  }

  $conn->close();
?>

<script type="text/javascript">
  $("#exit").on("click", function(){
    $("#popup").html("");
  });
</script>
