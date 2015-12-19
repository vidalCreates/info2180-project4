<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../styles/form.css"/>
    <link rel="stylesheet" href="../styles/main.css"/>
    <script type="text/javascript" src="../scripts/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="../scripts/signup.js"></script>
    <script type="text/javascript" src="../scripts/manageuser.js"></script>
</head>
<body>
<form onsubmit="return(onSubmit());">
    <div><button type="button" id="exit">&#10006;</button></div>
    <h3 id="title">Create User</h3>
    <fieldset>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" class="field"/>
        <label for="fname">First Name:</label>
        <input type="text" name="firstname" id="fname" class="field">
        <label for="lname">Last Name:</label>
        <input type="text" name="lastname" id="lname" class="field">
    </fieldset>
    <fieldset>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="field">
        <label for="confirm">Password Confirmation:</label>
        <input type="password" name="confirm" id="confirm" class="field">
    </fieldset>
    <fieldset>
        <input type="submit" value="Submit" id="submit">
    </fieldset>
    <div id="errors" class="hidden error">
        <h3>Please fix the following errors then try again:</h3>
        <h4 id="empty" class="hidden error">No Field can be left empty.</h4>

        <h4 id="mismatched" class="hidden error">Passwords don't match.</h4>

        <h4 id="invalid" class="hidden error">Password format invalid.</h4>

        <h4 id="illegal" class="hidden error">Illegal Character's found.</h4>

        <h4 id="critical" class="hidden error">Critical Error. Possible Hacker found.</h4>
    </div>
</form>


</body>
</html>
