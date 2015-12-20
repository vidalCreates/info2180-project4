<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="../styles/main.css"/>
    <link rel="stylesheet" href="../styles/form.css"/>
    <script type="text/javascript" src="../scripts/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="../scripts/signup.js"></script>
    <script type="text/javascript" src="../scripts/login.js"></script>
</head>
<body>
    <div id="content">
        <div class="background"></div>

        <div id="header">
            <h1>CheapoMail</h1>
        </div>

        <form onsubmit="return check()">
            <h4 id="wrong" class="hidden error">Username/Password invalid.</h4>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="field"/>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="field"/>
            <input type="submit" value="Login" id="login"/>
        </form>
    </div>
</body>
</html>
