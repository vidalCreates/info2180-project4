<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../styles/main.css"/>
    <link rel="stylesheet" href="../styles/form.css"/>
    <script type="text/javascript" src="../scripts/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="../scripts/manageuser.js"></script>
</head>
<body>
	<div class="background"></div>
	<?php
		session_start();
		$username = $_SESSION['username'];
		$firstname = $_SESSION['firstname'];
		$lastname = $_SESSION['lastname'];

		echo "";
	?>
	<div id="header"><h1> <?php echo "Hello $firstname $lastname"; ?> </h1></div>

  <div id="toggle">
      <button type="button" class="btnToggle" id="all">All</button>
      <button type="button" class="btnToggle" id="recent">Recent</button>
    </div>
	<div id="buttons">
		<button id="compose" class="btn">Compose</button>
    <?php
      if (strpos($username, 'admin') !== FALSE){
        echo "<button id='add' class='btn'>Add User</button>";
      }
    ?>
		<button id="logout" class="btn">LogOut</button>
	</div>

	<div id="popup"></div>
  <div id="readmessage"></div>

	<div class="contactarea">
		<h3>Contacts</h3>
		<div id="contacts">
		</div>
	</div>

	<div class="messagearea">
		<h3>Messages</h3>
		<div id="messages">
		</div>
	</div>

</body>
</html>
