<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Message</title>
    <link rel="stylesheet" href="../styles/main.css"/>
    <link rel="stylesheet" href="../styles/form.css"/>
    <script type="text/javascript" src="../scripts/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="../scripts/manageuser.js"></script>
</head>
<body>
    <form onsubmit="return savemessage();">
        <div><button type="button" id="exit">&#10006;</button></div>
        <h3 id="title">Compose Message</h3>
        <label for="recipients">Recipients:</label>
        <input type="text" name="recipients" id="recipients" class="field"/>
        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" class="field"/>
        <label for="message">Message:</label>
        <textarea name="message" id="message" cols="30" rows="10" class="field"></textarea>
        <input type="submit" value="Send" id="submit"/>
    </form>

</body>
</html>
